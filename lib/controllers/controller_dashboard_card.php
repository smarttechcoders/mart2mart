<?php
include 'lib/models/model_dashboard_card.php';
class ControllerDashboardCard{
    public $model;
    public function __construct()
    {
        
    }
    public function populate(){
        $this->model = new ModelDashboardCard();
        $this->model->populate();

    }
    public function render(){
        $this->model->render();

    }
}