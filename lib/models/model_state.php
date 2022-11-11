<?php
include 'lib/globals/Database.php';
include 'lib/renderers/renderer_state.php';

class Modelstates{

    public $arr;
    public $arr_state;
    public $renderer;
    public function __construct()
    {
        $this->renderer = new Renderersstate();
        $this->db = new Database;
    }

    public function populate(){
        $this->db->query('SELECT * from country');

        $row = $this->db-> resultSet();
        $this->arr= array();
 
        array_push($this->arr, $row);
        $this->arr = call_user_func_array('array_merge', $this->arr);
       

    }
 
    public function StateAdd($data){
        $this->db->query('INSERT INTO state (country_id,state, status) 
        VALUES (:country_id, :state,:status)');
        $this->db->bind(':country_id', $data['country_id']);
        $this->db->bind(':state', $data['state']);
        $this->db->bind(':status', $data['status']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
        
    }

    public function stateList(){
        $this->db->query('SELECT * from state s join country c on s.country_id=c.country_id');
        

        $row = $this->db-> resultSet();
        $this->arr_state= array();
 
        array_push($this->arr_state, $row);
        $this->arr_state = call_user_func_array('array_merge', $this->arr_state);
       
    }
    public function render()
    {
        $this->renderer->render($this->arr);
        $this->renderer->stateList($this->arr_state);

        
        

    }

}