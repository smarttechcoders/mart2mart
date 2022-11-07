<?php
include 'lib/renderers/renderer_dashboard_card.php';
class ModelDashboardCard{

    public $arr;
    public $renderer;
    public function __construct()
    {
        $this->renderer = new RenderersDashboardCard();
    }

    public function populate(){

    }
    public function render()
    {
        $this->renderer->render($this->arr);

    }
}