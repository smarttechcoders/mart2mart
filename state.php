<?php

include 'lib/globals/constants.php';
include 'lib/controllers/controller_dashboard_head.php';
include 'lib/controllers/controller_dashboard_tail.php';
include 'lib/controllers/controller_index_topnav.php';
include 'lib/controllers/controller_sidebar.php';
include 'lib/controllers/controller_check_session.php';
include 'lib/controllers/controller_state.php';
// include 'lib/controllers/controller_stateList.php';

/*-------------start page header ----------------*/
$controllerCheckSession = new ControllerCheckSession();
$controllerCheckSession->populate();
$controllerDashboardHead = new ControllerDashboardHead();
$controllerDashboardHead->populate();
$controllerIndextopNav = new ControllerIndexTopNav();
$controllerIndextopNav->populate();
$controllersidebar = new Controllersidebar();
$controllersidebar->populate();
/*-------------end page header----------------*/


/*-------------Start Main Content ----------------*/

$ControllerStates = new ControllerStates();
$ControllerStates->populate();
// $ControllerStatesList = new ControllerStatesList();
// $ControllerStatesList->populate();
/*-------------end Main Content  ----------------*/


/*-------------start footer ----------------*/
$controllerDashboardtail = new ControllerDashboardTail();
$controllerDashboardtail->populate();
/*-------------end footer ----------------*/

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
       $ControllerStates->render();
// $ControllerStatesList->render();
       $controllerDashboardtail->render();
    ?>
</div>