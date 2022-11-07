<?php
include 'lib/models/model_login_head.php';
class ControllerLogindHead{
    public $model;
    public function __construct()
    {
        
    }

    public function populate(){
        $this->model = new  ModelLoginHead();
        $this->model->populate();
    }
    public function render(){
        $this->model->render();

    }
}