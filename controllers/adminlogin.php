<?php

class Adminlogin extends Controller
{
    function __construct()
    {
        parent::__construct();

        if (isset($_COOKIE['aejsve']) && $_COOKIE['aejsve'] != '') {
            header('location:' . URL . 'admin');
        } else if (isset($_SESSION['aejsve']) && $_SESSION['aejsve'] != '') {
            header('location:' . URL . 'admin');
        } else if (isset($_SESSION['admin']) && $_SESSION['admin'] != '') {
            header('location:' . URL . 'admin');
        }else if (isset($_COOKIE['admin']) && $_COOKIE['admin'] != '') {
            header('location:' . URL . 'admin');
        }

    }

    function index()
    {

        $this->view('adminlogin/index');
    }
    function login($email,$password,$secret,$csrf){
        $g=$this->model->login($email,$password,$secret,$csrf);
        echo json_encode($g);
    }
    function docsrf($secret){
        $g=$this->model->docsrf($secret);
        echo json_encode($g);
    }


}


?>