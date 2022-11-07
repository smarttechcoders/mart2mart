<?php
include 'lib/components/component_login_banner.php';
class RendererLoginBanner{
    
    public function __construct()
    {
        
    }

    public function render(){
       $component =  LoginBanner();
       echo $component;

    }
}