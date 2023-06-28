<?php

class model_login extends Model
{
    function __construct()
    {
        parent::__construct();
        Model::sessionInit();
        if (isset($_SESSION['userId'])) {
            header('location:' . URL . 'lobby');
        }else if (isset($_COOKIE['userId'])) {
            header('location:' . URL . 'lobby');
        }
    }

    function doregister($data)
    {

        $name = @$data['name'];
        $email = @$data['email'];
        $password = @$data['password'];
        $repassword = @$data['repassword'];
        $remember = @$data['remember'];
        $error = '';
        $sql = "select * from tbl_user where email=?";
        $result = $this->doSelect($sql, [$email]);

        if (empty($name) or empty($password) or empty($repassword) or empty($email)) {
            $error = 'لطفا تمام فیلد ها را پر کنید.';
        } else {
            if (sizeof($result) > 0) {
                $error = 'این ایمیل قبلا انتخاب شده است.';
            } else {

                $length = strlen($password);
                if ($length >= 8) {
                    if (!preg_match('/[ا-ی]/', $password) and !preg_match('/[ ]/', $password)) {
                        if (preg_match('/[0-9]+/', $password) and preg_match('/[a-z]+/', $password) and preg_match('/[^da-z]/', $password) and preg_match('/\d/', $password)) {

                            if ($password == $repassword) {
                                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                                    $salt = 'SUPER_CODE';
                                    $code = $password . $salt.$email;
                                    $hash = md5($code);
                                    $code=rand(100000000,999999999);
                                    $code=$code+time();
                                    $CD=md5('abc13579@ZF' . $code . 'GGECN2985!@nceon');
                                    $en=base64_encode($password);
                                    $GLD=md5($CD.$hash.$en);

                                    $sql = "insert into tbl_user (name,email,csrf,status,coin,charge,time,ques_id,avatar) VALUES (?,?,?,?,?,?,?,?,?)";
                                    $this->doQuary($sql, [$name, $email,$hash,0,0,100,time(),'',0]);
                                    $sql = "insert into tbl_security (code,csrf) VALUES (?,?)";
                                    $this->doQuary($sql, [$code,$hash]);

                                    if ($remember == 1) {
                                        setcookie('userId', $hash, time() + 7 * 24 * 60 * 60,'quees2831.freehost.io');
                                        setcookie('CD', $CD, time() + 7 * 24 * 60 * 60,'quees2831.freehost.io');
                                        setcookie('GLD', $GLD, time() + 7 * 24 * 60 * 60,'quees2831.freehost.io');
                                        setcookie('pass', $en, time() + 7 * 24 * 60 * 60,'quees2831.freehost.io');
                                    } else {
                                        Model::sessionInit();
                                        Model::sessionSet('userId',$hash);
                                        Model::sessionSet('CD',$CD);
                                        Model::sessionSet('GLD',$GLD);
                                        Model::sessionSet('pass',$en);
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
            }

        }

        if (!empty($error)) {
            return [$error, $name, $email];
        } else {
            header('location:' . URL . 'lobby');
        }
    }


    function dologin($data)
    {
        $email = @$data['email1'];
        $password = @$data['password1'].'SUPER_CODE'.$email;
        $pass_set=md5($password);
        $remember = @$data['remember1'];
        $error = '';

        $sql = "select * from tbl_user where email=? and csrf=?";
        $params = array($email, $pass_set);
        $result = $this->doSelect($sql, $params);
        if (empty($password) or empty($email)) {
            $error = 'لطفا تمام فیلد ها را پر کنید.';
        } else {
            if (sizeof($result) > 0 and !empty($email) and !empty($password)) {


                $sql1 = "select * from tbl_security where csrf=?";
                $result1=$this->doSelect($sql1,[$pass_set],1);
                $CD=md5('abc13579@ZF' . $result1['code'] . 'GGECN2985!@nceon');
                $en=base64_encode($data['password1']);
                $GLD=md5($CD.$pass_set.$en);

                if ($remember == 1) {
                    setcookie('userId', $pass_set, time() + 7 * 24 * 60 * 60,'quees2831.freehost.io');
                    setcookie('CD', $CD, time() + 7 * 24 * 60 * 60,'quees2831.freehost.io');
                    setcookie('GLD', $GLD, time() + 7 * 24 * 60 * 60,'quees2831.freehost.io');
                    setcookie('pass', $en, time() + 7 * 24 * 60 * 60,'quees2831.freehost.io');
                } else {

                    Model::sessionInit();
                    Model::sessionSet('userId',$pass_set);
                    Model::sessionSet('CD',$CD);
                    Model::sessionSet('GLD',$GLD);
                    Model::sessionSet('pass',$en);
                }

            } else {
                $error = 'ایمیل یا رمز عبور وارد شده معتبر نمیباشد.';
            }
        }

        if (!empty($error)) {
            return [$error, $email];
        } else {
            header('location:' . URL . 'lobby');
        }
    }


}

?>
