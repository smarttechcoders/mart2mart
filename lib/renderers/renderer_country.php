<?php 
include 'lib/components/component_country.php';
class RenderersCountry{
    public $component='';
    public function __construct()
    {
        
    }

    public function render($arr){
        $msg = flash("insert");
        $msg = isset($msg ) ? $msg  : '';
        $component=  HeaderCountry();
        $component = str_replace("[MESSDATA]",$msg  , $component);
        echo $component;
    }
   
   
    
}