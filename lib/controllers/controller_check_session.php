<?php

include 'lib/models/model_check_session.php';
class ControllerCheckSession{
    public $model;
    function __construct()
    {
        $this->model = new ModelCheckSession();
        
    }
    function populate(){
        if(!$this->model->populate()){

            flash("login", "Session Expried",0);
            redirect("../login.php");
        }

    }
}