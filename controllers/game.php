<?php

class Game extends Controller {
    function __construct(){
        parent::__construct();
        Model::doUser();
    }
    function index()
    {
        if (isset($_SESSION['ques'])) {
            unset($_SESSION['ques']);
            unset($_SESSION['five']);
        }
        if (isset($_SESSION['end'])) {
            unset($_SESSION['end']);
        }
        if (isset($_SESSION['i'])) {
            unset($_SESSION['i']);
        }
        if (isset($_SESSION['ii'])) {
            unset($_SESSION['ii']);
        }
        $about=$this->model->getAbout();
        $data=['about'=>$about];
        $this->view('game/index',$data);
    }
    function doAbout($id){
        $test=$this->model->doAbout($id);
        echo json_encode($test);
    }
    function getQues(){
        if (isset($_SESSION['ques'])) {
            $ques = $this->model->getQues();
            echo json_encode($ques);
        }
    }
    function next(){
        if (isset($_SESSION['ques'])) {
            $next=$this->model->next();
            echo json_encode($next);
        }
    }
    function doGozine($id){
        $g=$this->model->doGozine($id);
        echo json_encode($g);
    }
    function find(){
        $g=$this->model->find();
        echo json_encode($g);
    }
    function end(){
        $g=$this->model->end();
        echo json_encode($g);
    }
    function doCharge($id){
        $g=$this->model->doCharge($id);
        echo json_encode($g);
    }


}

?>