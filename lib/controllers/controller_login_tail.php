<?php 
include 'lib/models/model_login_tail.php';
class ControllerLoginTail{
    public $model;
    public function __construct()
    {
        
    }

    public function populate(){
            $this->model= new ModelLoginTail();
            $this->model->populate();
    }
    public function render(){
        $this->model->render();
    }
}