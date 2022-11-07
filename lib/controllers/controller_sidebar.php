<?php
include 'lib/models/model_sidebar.php';    
class Controllersidebar{
    public $model;
    public function __construct()
    {
        $this->model = new ModelSidebar();
    }

    public function populate(){
        
       

    }
    public function render(){
        $this->model->render();

    }
}