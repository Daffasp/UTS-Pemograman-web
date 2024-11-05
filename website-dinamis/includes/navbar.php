<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Keindahan Sunrise</title>
  
  <!-- Font Awesome untuk ikon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
  
  <!-- jQuery dan DataTables JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

  <style>
    /* Custom navbar styling */
    .navbar-custom {
      background-color: #333;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
      border-radius: 10px;
    }

    .navbar-custom .navbar-brand {
      color: #FFCC33 !important;
      font-weight: bold;
    }

    .navbar-custom .nav-link {
      color: #ffffff !important;
      transition: color 0.3s ease;
    }

    .navbar-custom .nav-link:hover {
      color: #FFB347 !important;
    }

    /* Custom dropdown styling */
    .navbar-custom .dropdown-menu {
      background-color: #444;
      border-radius: 8px;
    }

    .navbar-custom .dropdown-item {
      color: #fff !important;
    }

    .navbar-custom .dropdown-item:hover {
      background-color: #FFB347;
      color: #333 !important;
    }

    /* Custom button styling */
    .btn-custom-search {
      background-color: #FF5722;
      color: white;
      border-radius: 50px;
      transition: background 0.3s ease;
      padding: 8px 20px;
    }

    .btn-custom-search:hover {
      background-color: #FF8A65;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-dark navbar-custom">
    <div class="container-fluid">
      <!-- Navbar Brand -->
      <a class="navbar-brand" href="?page=home">
        <i class="fas fa-laptop-code"></i> klik
      </a>

      <!-- Toggler for mobile view -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar content -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <!-- Home link -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?page=home">
              <i class="fas fa-house-user"></i> Home
            </a>
          </li>
          <!-- About link -->
          <li class="nav-item">
            <a class="nav-link" href="?page=about">
              <i class="fas fa-info-circle"></i> About
            </a>
          </li>
          <!-- Contact link -->
          <li class="nav-item">
            <a class="nav-link" href="?page=contact">
              <i class="fas fa-envelope"></i> Contact
            </a>
          </li>
          <!-- Dropdown for "Belajar" -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="belajarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-book-open"></i> Belajar
            </a>
            <ul class="dropdown-menu" aria-labelledby="belajarDropdown">
              <li><a class="dropdown-item" href="?page=datatables">Datatables</a></li>
              <li><a class="dropdown-item" href="?page=form">Form</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="?page=404">More</a></li>
            </ul>
          </li>
        </ul>
        
        <!-- Search Form -->
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-custom-search" type="submit">
            <i class="fas fa-search"></i> Search
          </button>
        </form>
      </div>
    </div>
  </nav>

  <!-- JavaScript tambahan untuk Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
