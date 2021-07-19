

<!DOCTYPE html>
<html>
<head>
	<title></title>
 
  <link rel="stylesheet" href="assets/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <script type="text/javascript"src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
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
          <a class="navbar-brand brand-logo" href="index.php"><h1>department store</h1></a>
          <a class="navbar-brand brand-logo-mini" href="index.php" style="text-align:center;margin-left:200px;">Department store</a>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <span class="nav-profile-name">admin</span>
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
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-view-quilt menu-icon"></i>
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
              <span class="menu-title">product</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="customer.php">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">customer</span>
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
              <span class="menu-title">sell report</span>
            </a>
          </li>
          
      
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

        <div class="card">
            <div class="card-body">
              <h1 class="grid_title">Product master</h1>
        <a href="addproduct.php" class="add_link">Add Product</a>
              <div class="row grid_box">
        
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width="10%"> no</th>
                           <th width="20%"> name</th>
                            <th width="10%">Category</th>
                            <th width="20%">description</th>
                            <th width="20%">rate</th>
                            <th width="20%">qty</th>
                            <th width="20%">edit</th>
                            <th width="20%">delete</th>
                            
                        </tr>
                       
                      </thead>
                      <tbody>
                      <?php
                        include"database.inc.php";
                        $query="select * from product";
                        $data=mysqli_query($con,$query);
                        while($res=mysqli_fetch_assoc($data))
                        { $i=0;
                          $i++;
                          $name=$res["product_name"];
                          $id=$res["p_id"];
                          $cat=$res["category"];
                          $rate=$res["rate"];
                          $desc=$res["description"];
                          $qty=$res["qty"];
                          echo"
                            <tr>
                            <td>$i</td>
                            <td>$name</td>
                            <td>$cat</td>
                            <td>$desc</td>
                            <td> &#8377; $rate </td>
                            <td>$qty</td>
                            <td><a href='editproduct.php?id=$id'class='btn btn-primary'>edit</a></td>
                            
                          <td><a href='deleteproduct.php?id=$id'class='btn btn-danger'>delete</a></td>
                            </tr>
                          ";
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
        </div>
              </div>
            </div>
          </div>
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <script src="assets/js/vendor.bundle.base.js"></script>
  <script src="assets/js/jquery.dataTables.js"></script>
  <script src="assets/js/dataTables.bootstrap4.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/js/Chart.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/js/data-table.js"></script>
  <!-- End custom js for this page-->
</body>
</html>