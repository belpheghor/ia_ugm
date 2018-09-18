<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Innovative Academy</title>
  <link rel="icon" type="text/css" href="<?php echo base_url("assets/img/partner-logo/logo_ia.png") ?>">
  
  <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url("assets/font-awesome-4.7.0/css/font-awesome.css"); ?>">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet"  href="<?php echo base_url("assets/css/style.css"); ?>">
  <link rel="stylesheet"  href="<?php echo base_url('assets/css/dashboard.css')?> ">

</head>
<body>

 <div class="wrapper">

  <nav class="navbar navbar-default">
   <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
    data-target=".sidebar-collapse" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="#">Innovative Academy</a>
</div>

</nav>
<nav class="navbar-default navbar-side">
 <div class="sidebar-collapse">
  <div class="user">
    <img class="img-circle" src="<?php echo base_url("assets/img/$login[user_image]"); ?>">
    <h3><?php echo $_SESSION['admin']['user_name']; ?></h3>
  </div>
  <ul class="nav" id="main-menu">
    <li><a href="<?php echo base_url("admin/dashboard"); ?>"> 
      <i class="fa fa-tachometer"></i>  Dashboard</a>
    </li>
    <li><a href="<?php echo base_url("admin/background"); ?>"> 
      <i class="fa fa-picture-o"></i>   Background</a>
    </li>
    <li><a href="<?php echo base_url("admin/timeline"); ?>"> 
      <i class="fa fa-calendar"></i>  Timeline</a>
    </li>
    <li><a href="<?php echo base_url("admin/program"); ?>"> 
      <i class="fa fa-tasks"></i>   Program</a>
    </li>
    <li class="ia-tree"><a href=""> 
      <i class="fa fa-rocket"></i>  Startup Data <i class="pull-right fa fa-angle-right"></i></a>
      <ul class="ia-tree-menu">
       <li><a href="<?php echo base_url("admin/startup") ?>"> Startup</a></li>
       <li><a href="<?php echo base_url("admin/startup_founder") ?>"> Startup Founder</a></li>
       <li><a href="<?php echo base_url("admin/faculty") ?>"> Faculty Data</a></li>
       <li><a href="<?php echo base_url("admin/major") ?>"> Major Data</a></li>
       
     </ul>
   </li>
   <li><a href="<?php echo base_url("admin/user"); ?>"> 
    <i class="fa fa-tasks"></i>   User</a>
  </li>
  <li class="ia-tree">
    <a href=""> <i class="fa fa-newspaper-o"></i>   News Data <i class="pull-right fa fa-angle-right"></i></a>
    <ul class="ia-tree-menu">
     <li><a href="<?php echo base_url("admin/news") ?>"> News</a></li>
     <li><a href="<?php echo base_url("admin/category") ?>"> News Category</a></li>
     <li><a href="<?php echo base_url("admin/tag") ?>"> Tag</a></li> 
     
   </ul>
 </li>
 <li><a href="<?php echo base_url("admin/mentor") ?>"> <i class="fa fa-user"></i> Mentor</a></li>
 <li><a href="<?php echo base_url("admin/staff") ?>"> <i class="fa fa-users"></i> Staff</a></li>
 <li><a href="<?php echo base_url("admin/partner") ?>"> <i class="fa fa-handshake-o"></i> Partner</a></li>
 <li><a href="<?php echo base_url("admin/logout") ?>"> <i class="fa fa-sign-out"></i> Logout</a></li>
</ul>
</div>
</nav>
<div class="page-wrapper">
 <div class="page-inner">
