<?php

class Question extends Controller {
    function __construct(){
       parent::__construct();
        Model::doUser();
    }
    function index()
    {
        $user=$this->model->getUserInfo();
        $cat=$this->model->getCat();
        $data=['user'=>$user,'cat'=>$cat];
        $this->view('question/index',$data);
    }
    function delQues($id){
        $g=$this->model->delQues($id);
        echo json_encode($g);
    }
    function show($id){
        $g=$this->model->show($id);
        echo json_encode($g);
    }
    function edit($id){
        $g=$this->model->edit($id);
        echo json_encode($g);
    }
    function editQues($title,$dorost,$ans,$id){
        $g=$this->model->editQues($title,$dorost,$ans,$id);
        echo json_encode($g);
    }
    function afzodan($title,$dorost,$ans,$id){
        $g=$this->model->afzodan($title,$dorost,$ans,$id);
        echo json_encode($g);
    }
    function getQues(){
        $g=$this->model->getUserInfo();
        echo json_encode($g);
    }


}





?>