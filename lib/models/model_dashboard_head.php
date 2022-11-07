<?php
include 'lib/globals/constants_dashboard_head.php';
include 'lib/data/data_index_head.php';
include 'lib/renderers/renderer_index_head.php';

class ModelDashboardHead
{
    public $arr;
    public function __construct()
    {
    }

    public function populate()
    {
        $data = new DataIndexHead();
        $data->title =  DASHBOARD_HEAD_TITLE;
        $data->description = DASHBOARD_HEAD_DESCRIPTION;
        $data->filename = DASHBOARD_HEAD_FILENAME;
        $data->src = DASHBOARD_HEAD_SRC;
        
        $this->arr = array();
        array_push($this->arr,$data);
    }
    public function render()
    {
        $renderer = new RendererIndexHead();
        $renderer->render($this->arr);
    }
}
