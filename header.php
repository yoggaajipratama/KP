<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>StikerMania | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" type="text/css" href="kertas.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/images/icons/favicon.ico">
  <link rel="stylesheet" href="text/css" href="css/fonts/iconic/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="text/css" href="css/vendor/animate/animate.css">
  <link rel="stylesheet" href="text/css" href="css/vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" href="text/css" href="css/vendor/animsition/css/animsition.min.css">
  <link rel="stylesheet" href="text/css" href="css/vendor/select2/select2.min.css">
  <link rel="stylesheet" href="text/css" href="css/vendor/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="text/css" href="css/util.css">
  <link rel="stylesheet" href="text/css" href="css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>STM</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>StikerMania</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> <span>Beranda</span></a></li>
         <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Jenis Barang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="kertas.php"><i class="fa fa-square"></i> Kertas</a></li>
            <li class="active"><a href="tinta.php"><i class="fa fa-tint"></i> Tinta</a></li>
          </ul>
        </li>
        <li class="active treeview">

          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="tbs.php"><i class="fa fa-circle-o"></i> Transaksi belum selesai</a></li>
            <li class="active"><a href="ts.php"><i class="fa fa-circle-o"></i> Transaksi selesai</a></li>
          </ul>
        </li>
        <li class="active"><a href="riwayat.php"><i class="fa fa-history" aria-hidden="true"></i> <span>Riwayat</span></a></li>
        <li class="active"><a href="tentang.php"><i class="fa fa-info-circle" aria-hidden="true"></i> <span>Tentang</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->