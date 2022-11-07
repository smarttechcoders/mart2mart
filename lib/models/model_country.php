<?php
include 'lib/globals/Database.php';
include 'lib/renderers/renderer_country.php';

class ModelCountry{

    public $arr;
    public $renderer;
    public function __construct()
    {
        $this->renderer = new RenderersCountry();
        $this->db = new Database;
    }

    public function populate(){

    }
    public function render()
    {
        $this->renderer->render($this->arr);
        

    }
    public function CountryAdd($data){
        $this->db->query('INSERT INTO country (country, status) 
        VALUES (:country, :status)');
        $this->db->bind(':country', $data['country']);
        $this->db->bind(':status', $data['status']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
        
    }


}