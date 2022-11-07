<?php 
include 'lib/components/component_dashboard_card.php';
class RenderersDashboardCard{
    public function __construct()
    {
        
    }

    public function render($arr){


        $component=  DashboardCard();
     
        echo $component;
    }
}