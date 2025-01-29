<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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

  <!-- Sidebar -->
  <div class="sidebar bg-success">
    <h3 class="text-center text-white">Tan Pedia</h3>
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
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Username Anda</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Notifications</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Dashboard Content -->
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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

  <!-- Sidebar -->
  <div class="sidebar bg-success">
    <h3 class="text-center text-white">Tan Pedia</h3>
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
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Username Anda</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Notifications</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Dashboard Content -->
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
