<?php 
include 'lib/components/component_login.php';
class RendererLogin{
    public function __construct()
    {
        
    }

    public function render($arr){
        $msg = flash("login");
        $msg = isset($msg ) ? $msg  : '';
        $component = login_page();
        $component = str_replace('[ACTION_MESSAGE]',$msg,$component) ;
        $component = str_replace('[MART_LOGO]',MART_LOGO,$component) ;
        $component = str_replace('[TITLE_APP]',TITLE_APP,$component) ;
        
        echo $component;
    }
}