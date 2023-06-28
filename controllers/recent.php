<?php

class Recent extends Controller {
    function __construct(){
        parent::__construct();
        Model::doUser();
    }
    function index()
    {
        $user=$this->model->getUserInfo();
        $data=['user'=>$user];
        $this->view('recent/index',$data);
    }
    function doshow($id){
        $g=$this->model->doshow($id);
        echo json_encode($g);
    }


}





?>