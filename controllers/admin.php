<?php

class admin extends Controller {


    function __construct()
    {
        parent::__construct();
        Model::doUser();
        //Model::doAdmin();
    }


    function index(){
        $user=$this->model->getUserInfo();
        $ques=$this->model->getquesInfo();
        $cat=$this->model->getcat();
        $avatar=$this->model->avatar();
        $admin=$this->model->getadminInfo();
        $data=['user'=>$user,'ques'=>$ques,'cat'=>$cat,'avatar'=>$avatar,'admin'=>$admin];
        $this->view('admin/index',$data);
    }

    function pager($check){
        $checker='';
        if (isset($check)){
            if ($check==''){
                $checker=2;
            }
            if ($check==2){
                $checker='modirit_karbarha';
            }
            if ($check==3){
                $checker='modirit_soalat';
            }
            if ($check==4){
                $checker='modirit_adminha';
            }
            if ($check==5){
                $checker='modirit_avatarha';
            }
        }


        echo json_encode($checker);
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
    function editQues($title,$dorost,$ans,$id,$mozo,$coin,$vaziat){
        $g=$this->model->editQues($title,$dorost,$ans,$id,$mozo,$coin,$vaziat);
        echo json_encode($g);
    }
    function afzodan($title,$dorost,$ans,$id,$emtiaz){
        $g=$this->model->afzodan($title,$dorost,$ans,$id,$emtiaz);
        echo json_encode($g);
    }
    function getQues(){
        $g=$this->model->getquesInfo();
        echo json_encode($g);
    }
    function dofilter($filter,$select){
        $g=$this->model->dofilter($filter,$select);
        echo json_encode($g);
    }
    function addavatar(){
        $g=$this->model->addavatar($_FILES);
        echo json_encode($g);
    }


}



?>