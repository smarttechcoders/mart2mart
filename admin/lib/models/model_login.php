<?php
include 'lib/globals/Database.php';
include 'lib/renderers/renderer_login.php';
class ModelLogin {
    public $arr;

    function __construct()
    {
        $this->db = new Database;
    }
    
    public function findUserByEmailOrUsername($email, $username){
         $this->db->query('SELECT * FROM users WHERE usersUid = :username OR usersEmail = :email');
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        //Check row
        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }

    public function login($nameOrEmail, $password){
        $row = $this->findUserByEmailOrUsername($nameOrEmail, $nameOrEmail);

        if($row == false) return false;

        $hashedPassword = $row->usersPwd;
        if(password_verify($password, $hashedPassword)){
            return $row;
        }else{
            return false;
        }
    }

    public function render()
    {
        $renderer = new RendererLogin();
        $renderer->render($this->arr);

    }
}