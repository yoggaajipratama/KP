<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sticker Management | Dashboard</title>
  <link rel="shortcut icon" href="img/logo.png">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" type="text/css" href="css/kertas.css">
  <link rel="stylesheet" type="text/css" href="css/js/caret.js">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="components/font-awesome/css/font-awesome.min.css">
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
  <link rel="stylesheet" href="components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="components/morris.js/morris.css">
  <link rel="stylesheet" href="components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="index2.html" class="logo">
      <span class="logo-mini"><b>STM</b></span>
      <span class="logo-lg">
        <b>Sti-Man</b>
        <img src="img/logo.png" width="32px" height="32px">
      </span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> <span>Beranda</span></a></li>
         <li class="active treeview">
          <a href="#subjb" aria-expanded="false">
            <i class="fa fa-dashboard"></i> <span>Jenis Barang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul id="subjb" class="treeview-menu">
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
  </aside>
  <div class="content-wrapper">