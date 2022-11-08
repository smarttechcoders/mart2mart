<?php
// include 'lib/helpers/session_helper.php';
include 'lib/models/model_country_list.php';
class ControllerCountryList{

    public $model;
    public function __construct()
    {
        $this->model = new ModelCountryList();
    }

    public function populate()
    {
        $this->model->populate();
    }
    public function render(){
        $this->model->render();
        $action=isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
        $id=isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
        if($action == 'edit'){
            // $this->model->Countrydelete($id);
            if($this->model->Countrydelete($id))
            {
                flash("insert", "Successfully Deleted.....");
                // redirect("../country.php");
                
                header("location:../country.php");
                
            }else{
                flash("insert", "Failed.....");
                redirect("../country.php");
                exit();
            }
        }
    }
}

?>