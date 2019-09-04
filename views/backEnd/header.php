<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?= (isset($this->title)) ? $this->title : 'Admin' ?></title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="<?php echo URL;?>public/admin/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo URL;?>public/admin/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo URL;?>public/admin/css/AdminLTE.css">
<link rel="stylesheet" href="<?php echo URL;?>public/admin/css/_all-skins.min.css">
<link rel="stylesheet" href="<?php echo URL;?>public/admin/css/style.css" />
</head>
<header class="main-header">
<!-- Logo -->
<a href="<?php echo URL;?>admin" class="logo">
<!-- mini logo for sidebar mini 50x50 pixels -->
<span class="logo-mini"><b>A</b>LT</span>
<!-- logo for regular state and mobile devices -->
<span class="logo-lg"><b>Admin</b>LTE</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
<!-- Sidebar toggle button-->
<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
  <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
</a>

<ul class="nav navbar-nav navbar-right" style="margin-right: 10px">
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
    <ul class="dropdown-menu">
      <li><a href="profile.php">Thông tin</a></li>
      <li><a href="<?php echo URL;?>admin/logout">Thoát tài khoản</a></li>
    </ul>
  </li>
</ul>

</nav>
</header>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
<!-- =============================================== -->
<aside class="main-sidebar" style="padding-top: 0px">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="treeview">
        <a href="#">
          <i class="fa fa-home"></i> <span> Sản phẩm</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo URL;?>product/add"><i class="fa fa-circle-o"></i> Thêm mới</a></li>
          <li><a href="<?php echo URL;?>product/list"><i class="fa fa-circle-o"></i> Danh sách</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="glyphicon glyphicon-tags"></i> <span> Thuộc tính</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo URL; ?>attribute/add"><i class="fa fa-circle-o"></i> Thêm mới</a></li>
          <li><a href="<?php echo URL; ?>attribute/list"><i class="fa fa-circle-o"></i> Danh sách</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="glyphicon glyphicon-folder-open"></i> <span> Danh mục</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo URL; ?>category/add"><i class="fa fa-circle-o"></i>Thêm mới </a></li>
          <li><a href="<?php echo URL; ?>category/list"><i class="fa fa-circle-o"></i> Danh mục </a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="glyphicon glyphicon-picture"></i> <span> Banner</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo URL; ?>banner/add"><i class="fa fa-circle-o"></i>Thêm mới</a></li>
          <li><a href="<?php echo URL; ?>banner/list"><i class="fa fa-circle-o"></i>Danh sách</a></li>
        </ul>
      </li>
      <li class="">
        <a href="order.php">
          <i class="fa fa-calendar-check-o"></i> <span> Đơn hàng</span>
        </a>
      </li>
      <li class="">
        <a href="DS_Account.php">
          <i class="fa fa-user-circle"></i> <span> Khách hàng</span>
        </a>
      </li>
<!--             <li>
        <a href="">
          <i class="fa fa-th"></i> <span>Tin tức</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green">Hot</small>
          </span>
        </a>
      </li> -->
       <li class="treeview">
        <a href="#">
          <i class="fa fa-address-card-o"></i> <span> Admin</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo URL ?>admin/add"><i class="fa fa-circle-o"></i>Thêm mới</a></li>
          <li><a href="<?php echo URL ?>admin/list"><i class="fa fa-circle-o"></i>Danh sách</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-address-card-o"></i> <span> Group Admin</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo URL?>groupadmin/add"><i class="fa fa-circle-o"></i>Thêm mới</a></li>
          <li><a href="<?php echo URL?>groupadmin/list"><i class="fa fa-circle-o"></i>Danh sách</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-address-card-o"></i> <span> Cấu Hình</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="add_config.php"><i class="fa fa-circle-o"></i>Cửa hàng</a></li>
        </ul>
      </li>
     <!--  <li class="">
        <a href="#">
          <i class="fa fa-address-card-o"></i> <span>QL Admin</span>
        </a>
      </li> -->

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
