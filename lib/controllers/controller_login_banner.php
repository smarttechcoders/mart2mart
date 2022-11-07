<?php
include 'lib/models/model_login_banner.php';
class CollatorLoginBanner{
    public $model;
    public function __construct()
    {
        
    }

    public function populate()
    {
        $this->model = new ModelLoginBanner();
      

    }

    public function render(){
        $this->model->render();
        
    }
}