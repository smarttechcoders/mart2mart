<?php
include 'lib/renderers/renderer_login_banner.php';
class ModelLoginBanner{
    public $arr;

    public function __construct()
    {
        
    }

    public function render()
    {
        $renderer=new RendererLoginBanner();
        $renderer->render($this->arr);

    }
}