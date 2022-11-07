<?php
include 'lib/globals/Database.php';
include 'lib/renderers/renderer_dashboard_main_content.php.php';

class ModelDashboardMainContent{

    public $arr;
    public $renderer;
    public function __construct()
    {
        $this->renderer = new RenderersDashboardMainContent();
        $this->db = new Database;
    }

    public function populate(){

    }
    public function render()
    {
        $this->renderer->render($this->arr);
        

    }

    public function ProductCount(){
        $this->db->query('SELECT count(productID) as productID   FROM product');
        $row = $this->db->resultSet();
        $row = json_decode(json_encode($row), true);
        $count = $row[0]['productID'];
        $this->renderer->ProductCount($count);
        
    }

    public function ServicesCount()
    {
        $this->db->query('SELECT count(services_id) as services_id   FROM 	services');
        $row = $this->db->resultSet();
        $row = json_decode(json_encode($row), true);
        $count = $row[0]['services_id'];
        $this->renderer->ServicesCount($count);
    }
    public function CustomersCount(){
        $this->db->query('SELECT count(usersID) as usersID   FROM 	users_new');
        $row = $this->db->resultSet();
        $row = json_decode(json_encode($row), true);
        $count = $row[0]['usersID'];
        $this->renderer->CustomersCount($count);
    }

}