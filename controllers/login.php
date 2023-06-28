<?php

class Login extends Controller {

    function __construct()
    {
        parent::__construct();

    }

    function index(){

        if (isset($_POST['password'])) {
            $error = $this->model->doregister($_POST);
            $data=['error'=>$error[0],'name'=>$error[1],'email'=>$error[2]];
        }else{
            if (isset($_POST['password1'])) {
                $error2 = $this->model->dologin($_POST);
                $data=['error2'=>$error2[0],'email2'=>$error2[1]];
            }else{
                $data=[];
            }
        }




        $this->view('login/index',$data);

    }

}



?>