<?php 
include 'lib/components/component_country.php';
class RenderersCountry{
    public $component='';
    public function __construct()
    {
        
    }

    
    
    public function action_msg($val)
    {
        $component = actionmsg();
        if($val){
            $component = str_replace('[CLSSMSG]','alert-success',$component);
            $component = str_replace('[ACTIONMSG]','Record Added Success',$component);

        }else{
            $component = str_replace('[CLSSMSG]','alert-danger',$component);
            $component = str_replace('[ACTIONMSG]','FAil to added',$component);

        }
        echo  $component;
    }
    public function render($arr){


        $component=  HeaderCountry();
     
        echo $component;
    }
   
    
}