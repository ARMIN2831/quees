<?php

class Model
{

    public static $conn = '';

    function __construct()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'quees_mvc';
        $attr = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        self::$conn = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname, $username, $password, $attr);
        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if (function_exists('jdate') == false) {
            require('public/jdf/jdf.php');
        }
        $user = $this->superSecurity();
        $admin = $this->METAsecurity();
        $url = $_SERVER['REQUEST_URI'];
        //echo $user.'/'.$admin;
        if ($admin > 0 or $user > 0) {
            if ($url == '/security/index' or $url == '/security') {
                /////
            } else {
                header('location:' . URL . 'security');
            }
        } else {
            if ($url == '/security/index' or $url == '/security') {
                header('location:' . URL . 'index');
            }
        }
    }

    public static function jaliliDate($format = 'Y/n/j')
    {

        $date = jdate($format);
        return $date;
    }

    function doSelect($sql, $values = [], $fetch = '', $fetchstyle = PDO::FETCH_ASSOC)
    {
        $stmt = self::$conn->prepare($sql);
        foreach ($values as $key => $value) {
            $stmt->bindValue($key + 1, $value);
        }
        $stmt->execute();
        if ($fetch == '') {
            $result = $stmt->fetchAll($fetchstyle);
        } else {
            $result = $stmt->fetch($fetchstyle);
        }
        return $result;
    }

    function doQuary($sql, $values = [])
    {
        $stmt = self::$conn->prepare($sql);

        foreach ($values as $key => $value) {
            $stmt->bindValue($key + 1, $value);
        }
        $stmt->execute();

    }

    public static function sessionInit()
    {

        @session_start();
    }

    public static function sessionSet($name, $value)
    {

        $_SESSION[$name] = $value;

    }

    public static function sessionGet($name)
    {

        if (isset($_SESSION[$name])) {

            return $_SESSION[$name];
        } else {
            return false;
        }
    }

    public static function doUser()
    {

        session_start();

        if (isset($_COOKIE['userId']) && $_COOKIE['userId'] != '') {


        } else if (isset($_SESSION['userId']) && $_SESSION['userId'] != '') {


        } else {
            header('location:' . URL . 'login');
        }
    }

    function superSecurity()
    {

        $csrf = self::findUser();
        if ($csrf=='') {
            $error = 0;
        } else {

            $sql = 'select * from tbl_security where csrf=?';
            $result = $this->doSelect($sql, [$csrf], 1);
            if (!$result) {
                $error=3;
            }else{
                $CD = '';
                if (isset($_SESSION['CD'])) {
                    $CD = $_SESSION['CD'];
                } else if (isset($_COOKIE['CD'])) {
                    $CD = $_COOKIE['CD'];
                }

                $gd = '';
                if (isset($_SESSION['GLD'])) {
                    $gd = $_SESSION['GLD'];
                } else if (isset($_COOKIE['GLD'])) {
                    $gd = $_COOKIE['GLD'];
                }
                $pass = '';
                if (isset($_SESSION['pass'])) {
                    $pass = $_SESSION['pass'];
                } else if (isset($_COOKIE['pass'])) {
                    $pass = $_COOKIE['pass'];
                }

                $GLD = md5($CD . $csrf . $pass);

                $code = 'abc13579@ZF' . $result['code'] . 'GGECN2985!@nceon';
                $code = md5($code);
                if ($GLD == $gd) {
                    if ($code == $CD) {
                        $error = 0;
                    } else {
                        $error = 2;
                    }

                } else {
                    $error = 1;
                }
            }

        }
        return $error;
    }

    public static function findUser()
    {
        $csrf = '';
        if (isset($_SESSION['userId'])) {
            $csrf = $_SESSION['userId'];
        } else if (isset($_COOKIE['userId'])) {
            $csrf = $_COOKIE['userId'];
        }
        return $csrf;
    }

    public static function doAdmin()
    {

        session_start();

        if (isset($_COOKIE['aejsve']) && $_COOKIE['aejsve'] != '') {

        } else if (isset($_SESSION['aejsve']) && $_SESSION['aejsve'] != '') {


        } else if (isset($_SESSION['admin']) && $_SESSION['admin'] != '') {


        }else if (isset($_COOKIE['admin']) && $_COOKIE['admin'] != '') {


        } else {
            header('location:' . URL . 'adminlogin');
        }
    }

    function METAsecurity()
    {
        $admin = self::findAdmin();
        $securityA = '';
        if (isset($_SESSION['security'])) {
            $securityA = $_SESSION['security'];
        } else if (isset($_COOKIE['security'])) {
            $securityA = $_COOKIE['security'];
        }

        $password = '';
        if (isset($_SESSION['password'])) {
            $password = $_SESSION['password'];
        } else if (isset($_COOKIE['password'])) {
            $password = $_COOKIE['password'];
        }

        $secretA = '';
        if (isset($_SESSION['secret'])) {
            $secretA = $_SESSION['secret'];
        } else if (isset($_COOKIE['secret'])) {
            $secretA = $_COOKIE['secret'];
        }

        $aejsve = '';
        if (isset($_SESSION['aejsve'])) {
            $aejsve = $_SESSION['aejsve'];
        } else if (isset($_COOKIE['aejsve'])) {
            $aejsve = $_COOKIE['aejsve'];
        }

        if ($aejsve==''){
            if ($admin=='') {
                $error = 0;
            } else {
                $sql = 'select * from tbl_admin where csrf=?';
                $result = $this->doSelect($sql, [$admin], 1);
                if (!$result) {
                    $error = 1;
                } else {
                    $email = $result['email'];
                    $secret = $result['secret'];
                    $csrf = $result['csrf'];
                    $security = md5($email . 'supersecurity' . $password . 'onfo@rwqhqf' . $secret . $csrf);
                    $newSECRET = md5($secret . $email . 'asjner2r@E3c');

                    $newSECURITY = md5($security . md5($password . 'efgb3@$') . 'fefewmt@$' . $secretA . '#@!@$feqofe');


                    if ($csrf == $admin) {
                        if ($secretA == $newSECRET) {
                            if (isset($password)) {
                                if ($security == $result['security_']) {
                                    if ($newSECURITY == $securityA) {
                                        $error = 0;
                                    } else {
                                        $error = 6;
                                    }
                                } else {
                                    $error = 2;
                                }
                            } else {
                                $error = 3;
                            }
                        } else {
                            $error = 4;
                        }
                    } else {
                        $error = 5;
                    }
                }
            }
        }else{
            $newAD=md5(EMAIL.PASS.SECRET.CSRF);
            if ($newAD==$aejsve){
                $error=0;
            }else{
                $error=7;
            }
        }

        return $error;
    }


    public static function findAdmin()
    {
        $csrf = '';
        if (isset($_SESSION['admin'])) {
            $csrf = $_SESSION['admin'];
        } else if (isset($_COOKIE['admin'])) {
            $csrf = $_COOKIE['admin'];
        }
        return $csrf;
    }

}

?>