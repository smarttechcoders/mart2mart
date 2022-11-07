<?php
include 'lib/renderers/renderer_sidebar.php';
class ModelSidebar{
    public $arr;

    public function __construct()
    {
        
    }

    public function render()
    {
        $renderer=new RendererSidebar();
        $renderer->render($this->arr);

    }
}