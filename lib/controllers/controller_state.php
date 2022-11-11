<?php

include 'lib/models/model_state.php';
class ControllerStates{
    public $model;
    public $data;
    public function __construct()
    { $this->model = new Modelstates();
        $this->model->stateList();
        
    }
    public function populate(){
       
        $this->model->populate();

    }
    public function render(){
        $this->model->render();
        

    }
    public function StateAdd(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
         $data=[
            'country_id' => trim($_POST['country_id']),
            'state' => trim($_POST['state']),
            'status' => trim($_POST['status'])
        ];
  
        if(empty($data['country_id']) || empty($data['state']) ){
            flash("insert", "Please fill out States Name inputs");
            // echo " No Data Fount";  
            redirect("../state.php");
            
            exit();
        }
        //  Add Country
        if($this->model->StateAdd($data))
        {
            flash("insert", "Successfully inserted.....",1);
            redirect("../state.php");
            exit();
        }else{
            flash("insert", "Failed.....");
            redirect("../country.php");
            exit();
        }
     

         
       
    }
}

$init = new ControllerStates;



if($_SERVER['REQUEST_METHOD'] == 'POST'){

    switch($_POST['action']){
        case 'add':
            $init->StateAdd();
            break;
        
        default:
        redirect("../country.php");
    }
    
}