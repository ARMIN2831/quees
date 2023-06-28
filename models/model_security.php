<?php

class model_security extends Model
{

    function __construct()
    {
        parent::__construct();
    }
    function safe(){
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
}

?>