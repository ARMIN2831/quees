<?php

class model_adminlogin extends Model
{

    function __construct()
    {
        parent::__construct();
    }
    function login($email,$password,$secret,$csrf){

        if ($email and $password and $secret and $csrf){
            if ($email==EMAIL and $password==PASS and $secret==SECRET and $csrf==CSRF) {
                $error='مدیر به سایت خود خوش امدید!';
                header('location:' . URL . 'admin');
                setcookie('aejsve',md5($email.$password.$secret.$csrf), time() + 1 * 24 * 60 * 60,'/');
            }else{
                $security = md5($email . 'supersecurity' . md5($password) . 'onfo@rwqhqf' . $secret . $csrf );
                $sql = 'select * from tbl_admin where email=? and csrf=? and secret=? and security_=?';
                $result = $this->doSelect($sql, [$email, $csrf, $secret, $security]);
                if ($result) {
                    $secret=md5($secret.$email.'asjner2r@E3c');
                    $security=md5($security.md5(md5($password).'efgb3@$').'fefewmt@$'.$secret.'#@!@$feqofe');

                    setcookie('admin', $csrf, time() + 1 * 24 * 60 * 60,'/');
                    setcookie('secret', $secret, time() + 1 * 24 * 60 * 60,'/');
                    setcookie('security', $security, time() + 1 * 24 * 60 * 60,'/');
                    setcookie('password', md5($password), time() + 1 * 24 * 60 * 60,'/');
                    header('location:' . URL . 'admin');
                    $error='ادمین به سایت خوش آمدید!';
                } else {
                    $error = 'اطلاعات وارد شده درست نمیباشد!';
                }
            }
        }else{
            $error='لطفا تمام فیلد هارا پر کنید.';
        }
//  secret making=>  md5('F$FEwGR'.time().'ee2lmri3R#@%');
//  csrf making=>  md5('F#t#zxd$t!'.$secret.'efewwefe#');
//  security making=>  md5($email . 'supersecurity' . md5($password) . 'onfo@rwqhqf' . $secret . $csrf );
 //$error=md5($email . 'supersecurity' . md5($password) . 'onfo@rwqhqf' . $secret . $csrf );
        return $error;
    }
    function docsrf($secret){
        $csrf=md5('F#t#zxd$t!'.$secret.'efewwefe#');
        return $csrf;
    }
}

?>