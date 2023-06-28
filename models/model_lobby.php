<?php

class model_lobby extends Model
{

    function __construct()
    {
        parent::__construct();
        Model::sessionInit();
    }
    function avatar(){
        $sql='select * from tbl_avatar';
        $result=$this->doSelect($sql);
        return $result;
    }
    function charge(){
        $csrf=Model::findUser();
        $sql='select * from tbl_user where csrf=?';
        $result=$this->doSelect($sql,[$csrf],1);
        $old=$result['time'];
        $now=time();
        if ($now-$old > 24*60*60){
            $sql = 'update tbl_user set charge=?,time=? where csrf=?';
            $this->doQuary($sql, [100,$now, $csrf]);
        }
        //date_default_timezone_set('Asia/Tehran');
        //$today_date = self::jaliliDate('Y-m-d H:i:s');
    }
    function getUserInfo(){
        $csrf=Model::findUser();
        $sql='select * from tbl_user where csrf=?';
        $result=$this->doSelect($sql,[$csrf],1);
        if ($result['charge'] >100){
            $sql = 'update tbl_user set charge=? where csrf=?';
            $this->doQuary($sql, [100, $csrf]);
            $result['charge']=100;
        }

        if ($result['avatar']==''){
            $result['avatar']='false';
        }else{
            $sql4='select * from tbl_avatar where id=?';
            $result4=$this->doSelect($sql4,[$result['avatar']],1);
            $result['avatar']=$result4['img'];
        }



        $sql2='select * from tbl_ques where csrf=?';
        $result2=$this->doSelect($sql2,[$csrf]);
        $num=count($result2);
        $result['ques']=$num;
        $sql3='select * from tbl_user ORDER BY coin DESC';
        $result3=$this->doSelect($sql3);

        $i=1;
        foreach ($result3 as $row){
            if ($row['csrf']==$result['csrf']){
                $result['rank']=$i;
            }
            $i++;
        }
        return $result;
    }
    function getRank(){
        $sql='select * from tbl_user ORDER BY coin DESC';
        $result=$this->doSelect($sql);
        $csrf=Model::findUser();
        $sql2='select * from tbl_user where csrf=?';
        $result2=$this->doSelect($sql2,[$csrf],1);
        $rank=[];
        foreach ($result as $key=>$row){
            if ($row['id']==$result2['id']){
                $ok='ok';
            }else{
                $ok='no';
            }
            if (count($rank)==10){

            }else{
                $array=['coin'=>$row['coin'],'name'=>$row['name'],'ok'=>$ok];
                array_push($rank,$array);
            }
        }
        return $rank;
    }

    function logOut()
    {
        $user = Model::findUser();
        if (isset($_SESSION['userId'])) {
            unset($_SESSION['userId']);
            unset($_SESSION['pass']);
            unset($_SESSION['CD']);
            unset($_SESSION['GLD']);
            header('location:' . URL . 'index');
        } else if (isset($_COOKIE['userId'])) {
            $time = time() - (8 * 24 * 60 * 60);
            setcookie('userId', '', $time,'/');
            setcookie('pass', '', $time,'/');
            setcookie('CD', '', $time,'/');
            setcookie('GLD', '', $time,'/');
            header('location:' . URL . 'index');
        }

    }






    function updateuser($data)
    {
        $img=$data['img'];

        $name = $data['name'];
        $email = $data['email'];
        $oldEmail=$data['oldEmail'];
        $oldpass = $data['oldpass'];
        $pass_set=md5($oldpass.'SUPER_CODE'.$oldEmail);
        $newpass = $data['newpass'];
        $renewpass = $data['renewpass'];

        if (isset($_SESSION['pass'])){
            $de=base64_decode($_SESSION['pass']);
            $ff=$_SESSION['pass'];
        }else if (isset($_COOKIE['pass'])){
            $de=base64_decode($_COOKIE['pass']);
            $ff=$_COOKIE['pass'];
        }else{
            header('location:' . URL . 'login');
        }

        $userInfo = $this->getUserInfo();
        $error = '';
        $sql = "select * from tbl_user where email=? AND email!=?";
        $result = $this->doSelect($sql, [$email, $userInfo['email']]);

        $code=Model::findUser();
        $sql3 = "select * from tbl_security where csrf=?";
        $result3 = $this->doSelect($sql3, [$code],1);
        $CD='abc13579@ZF' . $result3['code'] . 'GGECN2985!@nceon';
        $CD=md5($CD);
        if (empty($email)) {
            $error = 'لطفا فیلد ایمیل را پر کنید.';
        } else {
            if (sizeof($result) > 0) {
                $error = 'این ایمیل قبلا انتخاب شده است.';
            } else {
                if (empty($oldpass) and empty($newpass) and empty($renewpass)) {

                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                        $sql6='select * from tbl_avatar where id=?';
                        $result6=$this->doSelect($sql6,[$img]);
                        if ($result6){
                            $csrf=md5($de.'SUPER_CODE'.$email);
                            $sql = "update tbl_user set name=?,email=?,csrf=?,avatar=? where id=?";
                            $this->doQuary($sql, [$name, $email,$csrf,$img, $userInfo['id']]);
                            $sql="update tbl_ques set csrf=? where csrf=?";
                            $this->doQuary($sql,[$csrf,$code]);
                            $sql="update tbl_security set csrf=? where csrf=?";
                            $this->doQuary($sql,[$csrf,$code]);

                            $GLD=md5($CD.$csrf.$ff);

                            if (isset($_SESSION['userId'])) {
                                unset($_SESSION['userId']);
                                unset($_SESSION['GLD']);
                                Model::sessionInit();
                                Model::sessionSet('userId',$csrf);
                                Model::sessionSet('GLD',$GLD);
                                header('location:' . URL . 'index');
                            }
                            if (isset($_COOKIE['userId'])) {
                                $time = time() - (8 * 24 * 60 * 60);
                                setcookie('userId', '', $time,'/');
                                setcookie('GLD', '', $time,'/');
                                setcookie('userId', $csrf, time() + 7 * 24 * 60 * 60,'/');
                                setcookie('GLD', $GLD, time() + 7 * 24 * 60 * 60,'/');
                                header('location:' . URL . 'index');
                            }
                        }else{
                            $error='لطفا اواتار مورد نظر خود را انتخاب کنید.';
                        }
                    } else {
                        $error = 'ایمیل وارد شده معتبر نمیباشد.';
                    }
                } else {
                    if ($pass_set == $userInfo['csrf']) {
                        $length = strlen($newpass);
                        if ($length >= 8) {
                            if (!preg_match('/[ا-ی]/', $newpass) and !preg_match('/[ ]/', $newpass)) {
                                if (preg_match('/[0-9]+/', $newpass) and preg_match('/[a-z]+/', $newpass) and preg_match('/[^da-z]/', $newpass) and preg_match('/\d/', $newpass)) {
                                    if ($newpass == $renewpass) {
                                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                            $sql6='select * from tbl_avatar where id=?';
                                            $result6=$this->doSelect($sql6,[$img]);
                                            if ($result6) {
                                                $pass_set1 = md5($newpass . 'SUPER_CODE' . $email);
                                                $en = base64_encode($newpass);
                                                $GLD=md5($CD.$pass_set1.$en);
                                                if (isset($_SESSION['userId'])) {
                                                    unset($_SESSION['userId']);
                                                    unset($_SESSION['pass']);
                                                    unset($_SESSION['GLD']);
                                                    Model::sessionInit();
                                                    Model::sessionSet('userId', $pass_set1);
                                                    Model::sessionSet('pass', $en);
                                                    Model::sessionSet('GLD', $GLD);
                                                    header('location:' . URL . 'index');
                                                } else if (isset($_COOKIE['userId'])) {
                                                    $time = time() - (8 * 24 * 60 * 60);
                                                    setcookie('userId', '', $time, '/');
                                                    setcookie('pass', '', $time, '/');
                                                    setcookie('GLD', '', $time, '/');
                                                    setcookie('userId', $pass_set1, time() + 7 * 24 * 60 * 60, '/');
                                                    setcookie('pass', $en, time() + 7 * 24 * 60 * 60, '/');
                                                    setcookie('GLD', $GLD, time() + 7 * 24 * 60 * 60, '/');
                                                    header('location:' . URL . 'index');
                                                }


                                                //$sql5 = 'update tbl_user set csrf=? where id=?';
                                                //$this->doQuary($sql5, [$pass_set1, $userInfo['id']]);

                                                $sql = "update tbl_user set name=?,email=?,csrf=?,avatar=? where id=?";
                                                $this->doQuary($sql, [$name, $email, $pass_set1,$img, $userInfo['id']]);
                                                $sql="update tbl_ques set csrf=? where csrf=?";
                                                $this->doQuary($sql,[$pass_set1,$code]);
                                                $sql="update tbl_security set csrf=? where csrf=?";
                                                $this->doQuary($sql,[$pass_set1,$code]);
                                            }else{
                                                $error='لطفا اواتار مورد نظر خود را انتخاب کنید.';
                                            }
                                        } else {
                                            $error = 'ایمیل وارد شده معتبر نمیباشد.';
                                        }
                                    } else {
                                        $error = 'رمز عبور با تایید رمز عبور یکسان نیست.';
                                    }
                                } else {
                                    $error = 'لطفا پسورد خود را قوی تر کنید (a-z,0-9).';
                                }
                            } else {
                                $error = 'فقط حروف اینگلیسی و اعداد مجاز است.';
                            }
                        } else {
                            $error = 'برای رمز عبور حداقل باید 8 نویسه داشته باشید.';
                        }
                    } else {
                        $error = 'پسورد قبلی وارد شده درست نمیباشد.';
                    }
                }
            }

        }

        if (!empty($error)) {
            header('location:' . URL . 'lobby?error=' . $error);
        } else {


            header('location:' . URL . 'lobby');
        }
    }



}
?>