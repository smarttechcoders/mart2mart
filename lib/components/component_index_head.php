<?php

     function component_index_head(){
        $str='';
        $str.='        <meta charset="utf-8" />
        <title>[TITLE] | [APLICATION_NAME]</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
       
        <meta name="description" content="[DESCRIPTION]">
        <meta property="og:title" content="[TITLE]" />
        <meta property="og:url" content="admin.mart2mart.loc/[FILENAME]" />
        <meta property="og:description" content="[DESCRIPTION]" />
        <meta property="og:image" content="[SRC]" />
        <meta property="twitter:title" content="[TITLE]" />
        <meta property="twitter:url" content="admin.mart2mart.loc" />
        <meta property="twitter:description" content="[DESCRIPTION]" />
        <meta property="twitter:image" content="[SRC]" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="[APP_META_ICON]">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css?var=[VERSION]" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css?var=[VERSION]" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css?var=[VERSION]" id="app-style" rel="stylesheet" type="text/css" />
        ';
        return $str;
    }