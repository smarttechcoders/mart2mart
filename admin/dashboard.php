<?php

include 'lib/globals/constants.php';
include 'lib/controllers/controller_dashboard_head.php';
include 'lib/controllers/controller_dashboard_tail.php';
include 'lib/controllers/controller_index_topnav.php';
include 'lib/controllers/controller_sidebar.php';
include 'lib/controllers/controller_dashboard_main_content.php';
include 'lib/controllers/controller_dashboard_card.php';


$controllerDashboardHead = new ControllerDashboardHead();
$controllerDashboardHead->populate();
$controllerIndextopNav = new ControllerIndexTopNav();
$controllerIndextopNav->populate();
$controllersidebar = new Controllersidebar();
$controllersidebar->populate();

$controllerDashboardMainContent = new ControllerDashboardMainContent();
$controllerDashboardMainContent->populate();

$controllerDashboardCard = new ControllerDashboardCard();
$controllerDashboardCard->populate();

$controllerDashboardtail = new ControllerDashboardTail();
$controllerDashboardtail->populate();


?>
   <!doctype html>
<html lang="en">

    <head>
    <?php
    $controllerDashboardHead->render();
   

    ?>
</head>

    
<body data-sidebar="dark">
<div id="layout-wrapper">
    <?php 
     $controllerIndextopNav->render();
   
       $controllersidebar->render();
       $controllerDashboardMainContent->render();
    //    $controllerDashboardCard->render();
       $controllerDashboardtail->render();
    ?>
</div>