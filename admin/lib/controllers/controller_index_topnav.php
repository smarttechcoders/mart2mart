<?php
include 'lib/models/model_index_topnav.php';    
class ControllerIndexTopNav{
    public $model;
    public function __construct()
    {
        $this->model = new ModelIndexTopNav();
    }

    public function populate(){
        
       

    }
    public function render(){
        $this->model->render();

    }
}