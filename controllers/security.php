<?php

class Security extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view('security/index');
    }
    function safe(){
        $g=$this->model->safe();
        echo json_encode($g);
    }


}


?>