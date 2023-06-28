<?php


class Online extends Controller {

    function __construct()
    {
        parent::__construct();
        Model::doUser();
    }

    function index()
    {
        //$user=$this->model->getuserInfo();
        $online=$this->model->getOnline();
        $about=$this->model->getAbout();
        $data=['about'=>$about,'online'=>$online];
        $this->view('online/index',$data);

    }

    function docharge($id){
        $g=$this->model->docharge($id);
        echo json_encode($g);
    }
    function doOnline($id){
        $g=$this->model->doOnline($id);
        echo json_encode($g);
    }
    function delGame(){
        $g=$this->model->delGame();
        echo json_encode($g);
    }
    function doAbout(){
        $g=$this->model->doAbout();
        echo json_encode($g);
    }
    function docancel(){
        $this->model->docancel();
    }
    function doGozine($id){
        $g=$this->model->doGozine($id);
        echo json_encode($g);
    }
    function doonques($game,$ti){
        $g=$this->model->doonques($game,$ti);
        echo json_encode($g);
    }
    function getgame(){
        $g=$this->model->getgame();
        echo json_encode($g);
    }
    function next(){
        $g=$this->model->next();
        echo json_encode($g);
    }
    function bale(){
        $g=$this->model->bale();
        echo json_encode($g);
    }
    function end(){
        $g=$this->model->end();
        echo json_encode($g);
    }


}

?>