<?php 
include 'lib/models/model_dashboard_tail.php';
class ControllerDashboardTail{

    public $model;
    public function __construct()
    {
    }
    public function populate(){
        $this->model= new ModelDashboardTail();
        $this->model->populate();
    }
    public function render()
    {
        $this->model->render();
    }
}