<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Keindahan Sunrise</title>

  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- DataTables CSS -->
  <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
  
  <style>
    /* Sunrise theme styling */
    body {
      background: linear-gradient(135deg, #FFB347, #FFCC33); /* Gradient colors for sunrise effect */
      color: #333;
    }

    header {
      background: rgba(255, 99, 71, 0.8); /* Soft sunrise color for header background */
      padding: 20px;
    }

    .landing-page {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 80vh;
      text-align: center;
      color: white;
      background: linear-gradient(to bottom, #FFCC33, #FFB347);
      padding: 20px;
    }

    .landing-page h1 {
      font-size: 3em;
      margin-bottom: 0.5em;
      color: #FF5722; /* Bold sunrise color for title */
    }

    .landing-page p {
      font-size: 1.2em;
    }

    /* Button styling */
    .btn-sunrise {
      background-color: #FF5722;
      color: white;
      padding: 10px 20px;
      font-size: 1.1em;
      border: none;
      border-radius: 50px;
      transition: background 0.3s ease;
    }

    .btn-sunrise:hover {
      background-color: #FF8A65;
    }

    /* Portfolio styling */
    .portfolio-section {
      background-color: #FFCC33;
      padding: 60px 20px;
      color: #333;
      text-align: center;
    }

    .portfolio-section h2 {
      color: #FF5722;
      margin-bottom: 30px;
    }

    .portfolio-card {
      background-color: #fff;
      border: none;
      border-radius: 8px;
      overflow: hidden;
      transition: transform 0.3s ease;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .portfolio-card:hover {
      transform: translateY(-5px);
    }

    .portfolio-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .portfolio-card .card-body {
      padding: 20px;
    }

    footer {
      background-color: #333;
    }
  </style>
</head>

<body>
  <!-- Header with Navbar -->
  <header>
  <h1 class="text-center p-3" style="font-family: 'Pacifico', cursive;">keindahan sunrise yang tiada tara</h1>

    <?php include "includes/navbar.php"; ?>
  </header>

  <!-- Portfolio Section -->
  <section class="portfolio-section">
    <div class="container">
      <div class="row justify-content-center">
        <!-- Portfolio Item 1 -->
        <div class="col-md-4 mb-4">
          <div class="card portfolio-card">
            <img src="sunrise-above-the-clouds.jpg" alt="Project 1" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Bromo </h5>
              <p class="card-text">Keindahan bromo</p>
              <a href="https://awalinfo.blogspot.com/2014/08/indahnya-sunrise-di-puncak-gunung-bromo.html" class="btn btn-sunrise">Lihat Selengkapnya</a>
            </div>
          </div>
        </div>
        
        <!-- Portfolio Item 2 -->
        <div class="col-md-4 mb-4">
          <div class="card portfolio-card">
            <img src="sunrise-morning-cornfield-bright.jpg" alt="Project 2" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Persawahan</h5>
              <p class="card-text">Keindahan sunrise di pedesaan</p>
              <a href="link_to_project2" class="btn btn-sunrise">Lihat Selengkapnya</a>
            </div>
          </div>
        </div>
        
        <!-- Anda bisa menambahkan lebih banyak item portofolio di sini -->
      </div>
    </div>
  </section>

  <!-- Main Container -->
  <div class="container" id="pageContent">
    <?php
      if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
          case 'home':
            include "home.php";
            break;
          case 'about':
            include "about.php";
            break;
          case 'contact':
            include "contact.php";
            break;
          case 'form':
            include "form.php";
            break;
          case 'datatables':
            include "datatables.php";
            break;  
          case '404':
            include "404.php";
            break;  
          default:
            include "home.php";
        }
      } else {
        include "home.php";
      }
    ?>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          
    </div>
  </footer> 

  <!-- JavaScript -->
  <script src="assets/jquery-3.7.
