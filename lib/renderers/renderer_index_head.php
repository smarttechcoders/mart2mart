<?php 
include 'lib/components/component_index_head.php';
class RendererIndexHead{
    public function __construct()
    {
        
    }

    public function render($arr){
        $title = str_replace("\"", "", $arr[0]->title);
        $description = strip_tags(str_replace("\"", "", $arr[0]->description));
        $src = strip_tags(str_replace("\"", "", $arr[0]->src));
        $filename = strip_tags(str_replace("\"", "", $arr[0]->filename));

        $component=  component_index_head();
        $component = str_replace("[TITLE]", $title , $component);
        $component = str_replace("[DESCRIPTION]", $description , $component);
        $component = str_replace("[SRC]", $src , $component);
        $component = str_replace("[FILENAME]", $filename , $component);

        $component = str_replace('[APLICATION_NAME]',APLICATION_NAME,$component);
        $component = str_replace('[APP_META_ICON]',APP_META_ICON,$component);
        $component = str_replace('[VERSION]',VARION,$component);
        echo $component;
    }
}