<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Dash</title>
    <style>
    .sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      width: 250px;
      background-color: #343a40;
      padding-top: 20px;
      color: #fff;
    }
    .sidebar .nav-link {
      color: #fff;
    }
    .sidebar .nav-link:hover {
      background-color: #495057;
    }
    .main-content {
      margin-left: 250px;
      padding: 20px;
    }
    .card-header {
      background-color: #007bff;
      color: white;
    }
  </style>
</head>
<body>
    <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.html" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Help
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
        <a class="dropdown-item" href="#">FAQ</a>
        <a class="dropdown-item" href="#">Support</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Contact</a>
      </div>
    </li>
  </ul>

  <!-- SEARCH FORM -->
  <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-comments"></i>
        <span class="badge badge-danger navbar-badge">3</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
        
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
        
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
      </div>
    </li>
    <!-- Notifications Dropdown Menu -->
    
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
          class="fas fa-th-large"></i></a>
    </li>
  </ul>
</nav>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?= out(base_url('res/img/admin.ico')) ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Tan. Admin</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <!-- <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div> -->
      <div class="info">
        <a href="#" class="d-block">Username here</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <!-- </ul> -->
      <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="#">
          <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-users"></i> Followers
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-cogs"></i> Settings
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-heart"></i> Deposit
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-pencil-alt"></i> Transaksi
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </li>
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<!-- Dashboard Content -->
<div class="main-content">
<div class="container-fluid mt-4">
      <div class="row">
        <!-- Stats Cards -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-success">
              Total Deposit
            </div>
            <div class="card-body">
              <h5 class="card-title">Rp. 1.500.000</h5>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-warning">
              Active Orders
            </div>
            <div class="card-body">
              <h5 class="card-title">23</h5>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-danger">
              Pending Orders
            </div>
            <div class="card-body">
              <h5 class="card-title">5</h5>
            </div>
          </div>
        </div>
      </div>

      <!-- Table Section -->
      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-dark">
              Ranking Pengguna
            </div>
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">User</th>
                    <th scope="col">Transaksi</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>John Doe</td>
                    <td>2000</td>
                    <td>2024-12-18</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jane Smith</td>
                    <td>1500</td>
                    <td>2024-12-18</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Mike Johnson</td>
                    <td>1455</td>
                    <td>2024-12-17</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Dash</title>
    <style>
    .sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      width: 250px;
      background-color: #343a40;
      padding-top: 20px;
      color: #fff;
    }
    .sidebar .nav-link {
      color: #fff;
    }
    .sidebar .nav-link:hover {
      background-color: #495057;
    }
    .main-content {
      margin-left: 250px;
      padding: 20px;
    }
    .card-header {
      background-color: #007bff;
      color: white;
    }
  </style>
</head>
<body>
    <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.html" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Help
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
        <a class="dropdown-item" href="#">FAQ</a>
        <a class="dropdown-item" href="#">Support</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Contact</a>
      </div>
    </li>
  </ul>

  <!-- SEARCH FORM -->
  <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-comments"></i>
        <span class="badge badge-danger navbar-badge">3</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
        
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
        
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
      </div>
    </li>
    <!-- Notifications Dropdown Menu -->
    
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
          class="fas fa-th-large"></i></a>
    </li>
  </ul>
</nav>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?= out(base_url('res/img/admin.ico')) ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Tan. Admin</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <!-- <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div> -->
      <div class="info">
        <a href="#" class="d-block">Username here</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <!-- </ul> -->
      <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="#">
          <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-users"></i> Followers
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-cogs"></i> Settings
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-heart"></i> Deposit
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-pencil-alt"></i> Transaksi
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </li>
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<!-- Dashboard Content -->
<div class="main-content">
<div class="container-fluid mt-4">
      <div class="row">
        <!-- Stats Cards -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-success">
              Total Deposit
            </div>
            <div class="card-body">
              <h5 class="card-title">Rp. 1.500.000</h5>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-warning">
              Active Orders
            </div>
            <div class="card-body">
              <h5 class="card-title">23</h5>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-danger">
              Pending Orders
            </div>
            <div class="card-body">
              <h5 class="card-title">5</h5>
            </div>
          </div>
        </div>
      </div>

      <!-- Table Section -->
      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-dark">
              Ranking Pengguna
            </div>
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">User</th>
                    <th scope="col">Transaksi</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>John Doe</td>
                    <td>2000</td>
                    <td>2024-12-18</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jane Smith</td>
                    <td>1500</td>
                    <td>2024-12-18</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Mike Johnson</td>
                    <td>1455</td>
                    <td>2024-12-17</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</body>
</html>