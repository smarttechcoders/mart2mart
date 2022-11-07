<?php
include 'lib/helpers/session_helper.php';
include 'lib/models/model_country.php';
class ControllerCountry{
    public $model;
    public $data;
    public function __construct()
    { $this->model = new ModelCountry();
        
    }
    public function populate(){
       
        $this->model->populate();

    }
    public function render(){
        $this->model->render();
        

    }

    public function CountryAdd(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
         $data=[
            'country' => trim($_POST['country']),
            'status' => trim($_POST['status'])
        ];
  
        if(empty($data['country']) || empty($data['status'])){
            flash("login", "Please fill out all inputs");
            echo " No Data Fount";  
            
            exit();
        }
        //  Add Country
        if($this->model->CountryAdd($data))
        {
            flash('insert', "Successfully inserted.....");
            redirect("../country.php");
        }else{
            flash('insert', "Failed.....");
            redirect("../country.php");
        }
     

         
       
    }
}

$init = new ControllerCountry;



if($_SERVER['REQUEST_METHOD'] == 'POST'){

    switch($_POST['action']){
        case 'add':
            $init->CountryAdd();
            break;
        default:
        redirect("../country.php");
    }
    
}