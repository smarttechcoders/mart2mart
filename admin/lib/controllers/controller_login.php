<?php
include 'lib/helpers/session_helper.php';
include 'lib/models/model_login.php';


class CollatorLogin{
    public $model;
    public function __construct()
    {
        $this->model = new ModelLogin();
    }

    public function populate(){
       
       
    }
    public function render(){
        
        
            $this->model->render();
    }
    public function login(){
        //Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        //Init data
        $data=[
            'name/email' => trim($_POST['name/email']),
            'usersPwd' => trim($_POST['usersPwd'])
        ];

        if(empty($data['name/email']) || empty($data['usersPwd'])){
            flash("login", "Please fill out all inputs");
            header("location: ../login.php");
            exit();
        }
                //Check for user/email
                
        if($this->model->findUserByEmailOrUsername($data['name/email'], $data['name/email'])){
            //User Found
            $loggedInUser = $this->model->login($data['name/email'], $data['usersPwd']);
            if($loggedInUser){
                //Create session
                $this->createUserSession($loggedInUser);
            }else{
                flash("login", "Password Incorrect");
                redirect("../login.php");
            }
        }else{
            flash("login", "No user found");
            redirect("../login.php");
        }
    }
    public function createUserSession($user){

        $_SESSION['usersId'] = $user->usersId;
        $_SESSION['usersName'] = $user->usersName;
        $_SESSION['usersEmail'] = $user->usersEmail;
      
        redirect("../dashboard.php");

    }
    public function logout(){
        
        
        unset($_SESSION['usersId']);
        unset($_SESSION['usersName']);
        unset($_SESSION['usersEmail']);
        session_destroy();
        redirect("../login.php");
    }
}

$init = new CollatorLogin;

if(isset($_SESSION['usersName'])){
    
    header('location:../dashboard.php');
}


// on all screens requiring login, redirect if NOT logged in
// if(!isset($_SESSION['usersName']) ? $_SESSION['usersName'] : ""){
//     header('location:../login.php');
// }

//Ensure that user is sending a post request
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    switch($_POST['type']){
        case 'register':
            // $init->register();
            break;
        case 'login':
            $init->login();
          
            break;
        default:
        redirect("../login.php");
    }
    
}else{
    switch(isset($_REQUEST['q']) ? $_REQUEST['q'] : '' ){
        case 'logout':
            $init->logout();
            break;
        default:
        // redirect("../login.php");
    }
}