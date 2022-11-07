<?php 
include 'lib/models/model_dashboard_head.php';
class ControllerDashboardHead{

    public $model;
    public function __construct()
    {
    }
    public function populate(){
        $this->model= new ModelDashboardHead();
        $this->model->populate();
    }
    public function render()
    {
        $this->model->render();
    }
}