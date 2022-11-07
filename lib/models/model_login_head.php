<?php
include 'lib/globals/constants_login_head.php';
include 'lib/data/data_index_head.php';
include 'lib/renderers/renderer_index_head.php';

class ModelLoginHead
{
    public $arr;
    public function __construct()
    {
    }

    public function populate()
    {
        $data = new DataIndexHead();
        $data->title =  LOGIN_HEAD_TITLE;
        $data->description = LOGIN_HEAD_DESCRIPTION;
        $data->filename = LOGIN_HEAD_FILENAME;
        $data->src = LOGIN_HEAD_SRC;
        
        $this->arr = array();
        array_push($this->arr,$data);
    }
    public function render()
    {
        $renderer = new RendererIndexHead();
        $renderer->render($this->arr);
    }
}
