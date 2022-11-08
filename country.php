<?php

include 'lib/globals/constants.php';
include 'lib/controllers/controller_dashboard_head.php';
include 'lib/controllers/controller_dashboard_tail.php';
include 'lib/controllers/controller_index_topnav.php';
include 'lib/controllers/controller_sidebar.php';
include 'lib/controllers/controller_country.php';
include 'lib/controllers/controller_dashboard_card.php';
include 'lib/controllers/controller_check_session.php';
include 'lib/controllers/controller_country_list.php';

$controllerCheckSession = new ControllerCheckSession();
$controllerCheckSession->populate();

$controllerDashboardHead = new ControllerDashboardHead();
$controllerDashboardHead->populate();
$controllerIndextopNav = new ControllerIndexTopNav();
$controllerIndextopNav->populate();
$controllersidebar = new Controllersidebar();
$controllersidebar->populate();

$Controllercountry = new ControllerCountry();
$Controllercountry->populate();
$Controllercountrylist = new ControllerCountryList();
$Controllercountrylist->populate();


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
       $Controllercountry->render();
    //    echo $_REQUEST['action'];
    $Controllercountrylist->render();
       $controllerDashboardtail->render();
    ?>
    <button type="button" title ="Delete" onclick="return confirm('Are you sure you want to Remove?');" class="btn btn-danger btn-sm waves-effect waves-light"><i class="mdi mdi-trash-can d-block font-size-16"></i></button>
</div>