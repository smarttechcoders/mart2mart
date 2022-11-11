<?php
// include 'lib/globals/Database.php';
include 'lib/renderers/renderer_country_list.php';

class ModelCountryList{

    public $arr;
    public $renderer;
    public function __construct()
    {
        $this->renderer = new RenderersCountryList();
        $this->db = new Database;
    }

    public function populate(){

        $this->db->query('SELECT * from country');

       $row = $this->db-> resultSet();
       $this->arr= array();

       array_push($this->arr, $row);
       $this->arr = call_user_func_array('array_merge', $this->arr);
      
        

    }
    public function Countrydelete($id){
        $this->db->query('DELETE FROM country WHERE country_id= :country_id ');
        $this->db->bind(':country_id', $id);
      
        if($this->db->single()){
            return false;
        }else{
            return true;
        }
    }
    public function render()
    {
        $this->renderer->render($this->arr);
        

    }
 


}