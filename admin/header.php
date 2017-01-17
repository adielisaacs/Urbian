<?php 
if(!isset($_SESSION)) {
	session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link rel="shortcut icon" href="../images/favicon.jpg"  />

<title>Talking Toilet - Admin</title>

<!--<link rel="stylesheet" type="text/css" href="css/style.css" title="style" />-->

<link href="../css/bootstrap.css"  rel="stylesheet" >
<link href="../css/theme.css" rel="stylesheet">
<link href="../css/font-awesome.min.css" rel="stylesheet">
 
<style>
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans'), local('OpenSans'), url(../font/OpenSans.woff) format('woff');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(../font/OpenSans-Bold.woff) format('woff');
}
</style>
<link href="../css/alertify.css" rel="stylesheet">
    
<link rel="stylesheet"  href="../css/jquery-ui-1.10.4.custom.min.css"  />
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../js/html5.js"></script>
    <![endif]-->
    <link href="../css/select2.css" rel="stylesheet">
    <link href="../css/colorpicker.css" rel="stylesheet">
    <link href="../css/datepicker.css" rel="stylesheet">
    <link href="../css/timepicker.css" rel="stylesheet">
    <!--<link href="css/tinyeditor.css" rel="stylesheet">-->
    <link href="../css/facybox.css" rel="stylesheet"> 



<script type="text/javascript" src='../js/raphael-min.js'></script>
 
<script src="../js/jquery-1.10.2.min.js"></script>
<script src="../js/jquery-ui-1.10.3.js"></script>



<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src='../js/morris.min.js'></script>
<script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>   
<script type="text/javascript" src="../js/jquery.masonry.min.js"></script>   
<script type="text/javascript" src="../js/jquery.imagesloaded.min.js"></script>   
<script type="text/javascript" src="../js/jquery.facybox.js"></script>   
<script type="text/javascript" src="../js/jquery.alertify.min.js"></script> 
<script type="text/javascript" src="../js/jquery.knob.js"></script>
<script type='text/javascript' src='../js/fullcalendar.min.js'></script>
<script type='text/javascript' src='../js/jquery.gritter.min.js'></script>

<script type="text/javascript" src="../js/select2.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap-colorpicker.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="../js/bootstrap-timepicker.js"></script>
    <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="../js/jquery.bootstrap.wizard.min.js"></script>    
    <script type="text/javascript" src="../js/tiny.editor.packed.js"></script>  
    

<script type="text/javascript" src="../js/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="../js/realm.js"></script>

</head>

<body>

<div id="wrap">
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <div class="logo"> 
               <h4 style="color: white;">Urbian</h4>
          </div>
            <a class="btn btn-navbar visible-phone" table-toggle="collapse" table-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
           <a class="btn btn-navbar slide_menu_left visible-tablet">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
 
          <div class="top-menu visible-desktop">
             <ul class="pull-left">
             <li></li>
              
            </ul>
            <ul class="pull-right">  
              <li><a href="login.php?logout=yes"><i class="icon-off"></i> Logout</a></li>
            </ul>
          </div>

          <div class="top-menu visible-phone visible-tablet">
            <ul class="pull-right">  
              <!--<li><a title="link to View all Messages page, no popover in phone view or tablet" href="#"><i class="icon-envelope"></i></a></li>
              <li><a title="link to View all Notifications page, no popover in phone view or tablet" href="#"><i class="icon-globe"></i></a></li>-->
              <li><a href="login.php?logout=yes"><i class="icon-off"></i></a></li>
            </ul>
          </div>
          
        </div>
      </div>
    </div>

    <div class="container-fluid">
    
         <!-- Side menu -->  
      <div class="sidebar-nav nav-collapse collapse">
      
        <div class="accordion" id="accordion2">
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_F79999" href="index.php?page=dashboard"  ><i class="icon-dashboard"></i> <span>Dashboard</span></a>
            </div>
          </div>
          
          </div>
         
      
<div class="main_container">
 