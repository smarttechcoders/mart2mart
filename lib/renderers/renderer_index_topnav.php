<?php
include 'lib/components/component_index_topnav.php';
class RendererIndexTopNav{
    
    public function __construct()
    {
        
    }

    public function render(){
       $component =  topnav();
       echo $component;

    }
}