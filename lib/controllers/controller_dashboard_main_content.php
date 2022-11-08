<?php
include 'lib/helpers/session_helper.php';
include 'lib/models/model_dashboard_main_content.php';
class ControllerDashboardMainContent{
    public $model;
    public function __construct()
    {
        
    }
    public function populate(){
        $this->model = new ModelDashboardMainContent();
        $this->model->populate();

    }
    public function render(){
        $this->model->render();
        $this->model->ProductCount();
        $this->model->ServicesCount();
        $this->model->CustomersCount();

    }
}