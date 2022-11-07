<?php
define("DASHBOARD_HEAD_TITLE",'Dashboard');
define("DASHBOARD_HEAD_DESCRIPTION",'Discription for head place it here.');
define("DASHBOARD_HEAD_SRC",'M2M lgo.png');
$link = $_SERVER['REQUEST_URI'];
$link_data = explode('/',$link);
$url = $link_data[sizeof($link_data) - 1];
define("DASHBOARD_HEAD_FILENAME",$url);
// define('APLICATION_NAME', 'MART 2 MART');

?>