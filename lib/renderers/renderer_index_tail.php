<?php
include 'lib/components/component_index_tail.php';
class RendererIndexTail{
    public function __construct()
    {
        
    }
    
    public function render($arr) {
        
        $component = component_index_tail();
        $component = str_replace("[VERSION]", VARION , $component);
        $component = str_replace("[FILENAMEWITHOUTEXTENSION]", $arr[0]->filenameWithoutExtension , $component);
        
        echo $component;
        
    }
    
}
