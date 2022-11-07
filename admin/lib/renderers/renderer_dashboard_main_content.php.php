<?php 
include 'lib/components/component_dashboard_main_content.php';
class RenderersDashboardMainContent{
    public $component='';
    public function __construct()
    {
        
    }

    public function render($arr){


        $component=  DashboardMailContent();
     
        echo $component;
    }
    public function ProductCount($count){
        $component = ComponentDashboardCard();
        $component = str_replace('[PRODUCT_COUNT]',$count,$component);
        echo $component;
        
    }
    public function ServicesCount($count)
    {
        $component = ComponentServiecCount();
        $component = str_replace('[SERVICE_COUNT]',$count,$component);
         echo $component;
    }

    public function CustomersCount($count){
        $component = ComponentCustomersCount();
        $component = str_replace('[CUSTOMER_COUNT]',$count,$component);
         echo $component;
    }
}