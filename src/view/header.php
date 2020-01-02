<!DOCTYPE html>
<html>
<head>
<!--
+======================={PROJECT - PRESENTATION}======================+
|                                                                     |
|Project Name    : THE DTS BANK                                       |
|Categorie       : Dynamic Website                                    |
|FrameWorks      : MDBootstrap                                        |
|Author          : OrbitTurner                                        |
|Official Name   : Mohamed GUEYE                                      |
|Version         : v.1.2                                              |
|Created         : 03-Mars-2019                                       |
|Last update     : 25-Juin-2019                                       |
|Partie          : HEADER                                             | 
|LANGAGE UTILISE : ANGLAIS - FRANCAIS                                 |
+=====================================================================+
 -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GESTION VILLE | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
    <link rel="icon" type="image/x-icon" href="<?=getProjectRoot();?>favicon.ico"/>
    <link rel="shortcut icon" href="<?=getProjectRoot();?>favicon.ico" type="image/x-icon">
    <!--===============================================================================================-->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= getProjectTemplate();?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?= getProjectTemplate();?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= getProjectTemplate();?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Pace-Progress Loading -->
    <link rel="stylesheet" href="<?= getProjectTemplate();?>plugins/pace-progress/themes/black/pace-theme-flat-top.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= getProjectTemplate();?>plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= getProjectTemplate();?>dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= getProjectTemplate();?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= getProjectTemplate();?>plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= getProjectTemplate();?>plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
       /* Set the size of the div element that contains the map */
      #cityMap {
        height: 600px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
</head>
<body class="hold-transition sidebar-mini pace-danger layout-fixed layout-navbar-fixed layout-footer-fixed">
<!-- 🔳 GLOBAL WRAPPER 🔳 -->
<div class="wrapper">