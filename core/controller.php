<?php

class Controller{
    function __construct(){

    }

    function view($viewUrl,$data=[], $noIncludeheader= '', $noIncludefooter= '')
    {
        if($noIncludeheader=='') {
            require('header.php');
        }

        require('views/' . $viewUrl . '.php');

        if($noIncludefooter=='') {
            require('footer.php');
        }
    }

    function model($modelUrl)
    {
        require ('models/model_'.$modelUrl.'.php');
        $classname='model_'.$modelUrl;
        $this->model=new $classname;
    }

}

?>