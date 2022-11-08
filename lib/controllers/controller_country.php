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
  
        if(empty($data['country']) ){
            flash("insert", "Please fill out Country Name inputs");
            // echo " No Data Fount";  
            redirect("../country.php");
            
            exit();
        }
        //  Add Country
        if($this->model->CountryAdd($data))
        {
            flash("insert", "Successfully inserted.....",1);
            redirect("../country.php");
            exit();
        }else{
            flash("insert", "Failed.....");
            redirect("../country.php");
            exit();
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