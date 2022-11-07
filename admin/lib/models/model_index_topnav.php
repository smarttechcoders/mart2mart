<?php
include 'lib/renderers/renderer_index_topnav.php';
class ModelIndexTopNav{
    public $arr;

    public function __construct()
    {
        
    }

    public function render()
    {
        $renderer=new RendererIndexTopNav();
        $renderer->render($this->arr);

    }
}