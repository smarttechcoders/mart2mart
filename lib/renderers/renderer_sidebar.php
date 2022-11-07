<?php
include 'lib/components/component_sidebar.php';
class RendererSidebar{
    
    public function __construct()
    {
        
    }

    public function render($arr){
       $component =  sidebar();
       $component = str_replace('[MART_LOGO]',MART_LOGO,$component) ;
       echo $component;

    }
}