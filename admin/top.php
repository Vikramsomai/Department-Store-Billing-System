<?php
session_start();
include('database.inc.php');
if(!isset($_SESSION['users'])){
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Department Store  Admin</title>

 <link rel="stylesheet" href="assets/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<style>
*{
  text-transform: capitalize;
}
</style>
<body class="sidebar-light">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
        <ul class="navbar-nav mr-lg-2 d-none d-lg-flex">
          <li class="nav-item nav-toggler-item">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
          </li>
          
        </ul>
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.php"><h1>Department Store</h1></a>
          <a class="navbar-brand brand-logo-mini" href="index.php" style="text-align:center;margin-left:200px;">Department store</a>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <span class="nav-profile-name"><i class="fas fa-user"></i>admin</span><i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
              <a class="dropdown-item" href="admin_change_password.php">
                
                change password
              </a>
            </div>
          </li>
          
          <li class="nav-item nav-toggler-item-right d-lg-none">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </li>
        </ul>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link bg-primary text-white" href="index.php">
              <i class="mdi mdi-view-quilt menu-icon text-white"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category.php">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Category</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="product.php">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Product</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="customer.php">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Customar</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="employees.php">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Employees</span>
            </a>
          </li>
                     <li class="nav-item">
            <a class="nav-link" href="sellreport.php">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Sell Report</span>
            </a>
          </li>
          
		  
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        