<?php
include_once 'Db.php';
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Required meta tags -->

     <title>Our Portfolio</title>

     <!-- scrollreveal -->
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

     <!-- Google fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
     <!-- Google fonts -->

     <!-- Fonts Awesome -->
     <script src="https://kit.fontawesome.com/9aa0371bbe.js" crossorigin="anonymous"></script>
     <!-- Fonts Awesome -->

     <!-- Bootstrap and Custom css -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" href="styles.css">
     <!-- Bootstrap css -->

     <!-- lightbox -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
     <!-- lightbox -->
   </head>
   <body>

     <!-- Navigation Bar -->
     <!-- navbar -->
     <nav class="navbar navbar-expand-lg navbar-custom sticky-top navbar-light">
     <div class="container-fluid">

       <a class="navbar-brand smooth-scroll" href="index.php">
       <img src="images/raylogo.png" alt="gemray" width="90" height="90">
         </a>

         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="Portfolio.php">Our Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="case-studies.php">Case Studies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="service.php">Our Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hire-us.php" id="cartLink">Hire Us</a>
                </li>
              </ul>
            </div>
        </div>
      </nav>
      <!-- Navbar -->

      <div class="photo-gallery">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Our portfolios</h2>
                <p class="text-center1">We have developed a Sales Program suitable for you and your sales team to train them on Series of Sales Mastery Skills required to  increase your sales exponentially. </p>
          </div>
          </div>
      </div>

      
    

      <div class="photo-gallery1">
        <div class="container-fluid">
          <h1 class="graphics">Branding And Graphic Design</h1>
        <div class="row photos">

        <?php
          include_once 'admin/includes/Db.php'; //  path

          $sql = "SELECT * FROM portfolio_images ORDER BY upload_date DESC";
          $result = $link->query($sql);

          if ($result && $result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  $webPath = 'admin/' . $row['filepath'];
                  echo '<div class="col-sm-6 col-md-4 col-lg-3 item">';
                  echo '<a href="' . htmlspecialchars($webPath) . '" data-lightbox="photos">';
                  echo '<img class="img-fluid" src="' . htmlspecialchars($webPath) . '">';
                  echo '</a>';
                 
                  echo '</div>';
              }
          } else {
              echo "<p>No images found in the portfolio.</p>";
          }
          ?>
          
          <!-- <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="pictures/harmonius-p.jpg" data-lightbox="photos"><img class="img-fluid" src="pictures/harmonius-p.jpg"></a></div> -->

          
        </div>
      </div>
    </div>


    <?php
    include_once 'service_footer.php';

     ?>
