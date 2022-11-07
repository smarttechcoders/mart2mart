<?php
include 'lib/globals/constants_login_tail.php';
include 'lib/data/data_index_tail.php';
include 'lib/renderers/renderer_index_tail.php';
class ModelLoginTail{
    public function __construct()
    {
        
    }
    public function populate(){
        $data = new DataIndexTail();
        $data->filenameWithoutExtension = LOGIN_TAIL_FILENAMEWITHOUTEXTENSION;
        
        $this->arr = array();
        array_push($this->arr, $data);

    }
    public function render()
    {
        $renderer = new RendererIndexTail();
        $renderer->render($this->arr);
        
    }
}