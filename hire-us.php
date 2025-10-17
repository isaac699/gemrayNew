<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Required meta tags -->

    <title>Hire us</title>

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

    <style>
    #cont {
        background-image: url('images/head.jpg');
        background-size: cover;
        background-position: center;
        position: relative;
        padding: 100px 0;
    }

    #cont::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(90deg, rgba(29,78,137,0.9) 0%, rgba(29,78,137,0.7) 100%);
    }

    .main {
        position: relative;
        z-index: 2;
        color: white;
        text-align: center;
        padding: 50px 20px;
    }

    .hire-h1 {
        font-family: "Montserrat", sans-serif;
        font-size: 3.5rem;
        font-weight: bold;
        margin-bottom: 20px;
        color: white;
    }

    #hire-p {
        font-size: 1.5rem;
        max-width: 800px;
        margin: 0 auto;
        color: rgba(255, 255, 255, 0.9);
        font-weight: 500;
    }

    /* CONTACT US */
    .contact-us {
        text-align: center;
        padding: 5% 4%;
    }

    .cont-main {
        background-color: #EEEEEE;
        padding: 8% 5% 7%;
    }

      .card{
        margin: 3%;
        background-color: #ffffff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .card:hover {
        transform: translateY(-5px);
        box-shadow: rgba(0, 0, 0, 0.2) 0px 10px 20px 0px;
      }

      .contact{
        font-family: "Montserrat", sans-serif;
        font-size: 2.5rem;
        color: #413F42;
        font-weight: bold;
      }

      .cont-p{
        font-family: "Montserrat", sans-serif;
        font-size: 1.1rem;
        color: #686D76;
        padding-bottom: 3%;
        font-weight: 500;
      }

      .fa-solid, .fab {
        font-size: 2rem;
        font-weight: bold;
        padding-bottom: 15px;
        color: #76885B;
        display: block;
        margin: 0 auto;
      }

      .card-body{
        margin: 5% 6%;
        font-family: "Montserrat", sans-serif;
        padding: 20px;
      }

      .head .card{
        box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
        background-color: #ffffff;
        border: none;
        border-radius: 10px;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .card-main{
        padding-bottom: 5%;
      }

      .email{
        font-size: 1rem;
        font-weight: normal;
        color: #76885B;
        font-weight: bold;
      }
      .gemray{
        font-size: 1.2rem;
        font-weight: 400;
        color: #76885B;
      }

      .complete-p{
        font-family: "Montserrat", sans-serif;
        font-size: 1.2rem;
        font-weight: 500;
      }
      /* CONTAC US */
    </style>

  </head>
  <body>

    <!-- Navigation Bar -->
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top navbar-light">
    <div class="container-fluid">

      <a class="navbar-brand smooth-scroll" href="#">
          <img src="images/raylogo.png" alt="gemray" width="90" height="90">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Portfolio.php">Our Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="case-studies.php">Case Studies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.php">Our Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="hire-us.php" id="cartLink">Hire Us</a>
                </li>
              </ul>
            </div>
        </div>
      </nav>
      <!-- Navbar -->

      <!-- PHP SCRIPT -->
      <?php
      $fName = "";
      $email = "";
      $phone = "";
      $address = "";
      $interests = "";

      include_once 'DB.php';
      $errors = [];
      $message = [];

      // Sanitize input function (essential for security! Removing, to prevent web based attacks)
      function sanitizeInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

        $errors = []; // Array to store error messages

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $fName = sanitizeInput($_POST["fName"]);
          $email = sanitizeInput($_POST["email"]);
          $phone = sanitizeInput($_POST["phone"]);
          $address = sanitizeInput($_POST["address"]);
          $interests = isset($_POST["interests"]) ? $_POST["interests"] : []; // Handle case where no checkboxes are selected

          // Empty placeholder Validation
          if (empty($fName)) {
              $errors['fn_err'] = "*Full Name is required";
          }
          if (empty($email)) {
              $errors['mail_err'] = "*Email Address is required";
          }
          if (empty($phone)) {
              $errors['phon_err'] = "*Please enter your phone number";
          }
          if (empty($address)) {
              $errors['add_err'] = "*Your address is required";
          }

          // Add Name validation
          if (!ctype_alpha(str_replace(' ', '', $fName))) {
             $errors['fn_err'] = "*Name should contain only letters";
            }

          // Add Email validation
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               $errors['mail_err'] = "*Please enter a valid email address";
           }

          // Add phone number validation (adjust regex as needed for your phone number format)
          if (!preg_match('/^[0-9]{10}$/', $phone)) { //Example: 10 digit number
              $errors['phon_err'] = "Invalid phone number format.(e.g, 1234567890)";
              echo "<center>
              <div class='alert alert-danger py-3'>
               <h4>Please kindly check your credentials</h4>
               </center>";
          }

           // Check if email already exists
           $stmt = $link->prepare("SELECT COUNT(*) FROM register WHERE email = ?");
           $stmt->bind_param("s", $email);
           $stmt->execute();
           $stmt->bind_result($count);
           $stmt->fetch();
           $stmt->close();

           if ($count > 0) {
           $errors['mail_err'] = "Email already exists.";
           }

           // If no errors, insert data
           if (empty($errors)) {
               $interestsJson = json_encode($interests); // Convert array to JSON string
               $stmt = $link->prepare("INSERT INTO register (fName, email, phone, address, interests, registration_datetime)
               VALUES ( ?, ?, ?, ?, ?, NOW())");
               $stmt->bind_param("sssss",$fName, $email, $phone, $address, $interestsJson);

               if ($stmt->execute()) {
                 echo "<center>
                 <div class='alert alert-success py-3'>
                  <h1>Form submit successfully</h1>
                  <p class='text-secondary'>We will reach to you to confirm, Thank you.</p>
                   </div>
                  </center>";
               } else {
                   $errors['failed'] = "Database error: " . $stmt->error; // Log this properly in production
               }
               $stmt->close();
           }

        }

   ?>
  <!-- PHP SCRIPT -->


      <!-- hire us -->
    <div id="cont">
      <div class="container">
        <div class="main">
          <div class="container">
            <h1 class="hire-h1">Hire Us</h1>
            <p id="hire-p">Our primary goal is to generate massive ROI in result for You. We commit to it 200%</p>
          </div>
        </div>
      </div>
    </div>
    <!-- hire us -->


    <div class="container-hire">
      <div class="container">
          <h2 class="complete">Complete This Form To Hire Us Immediately</h2>
          <p class="complete-p">We are experts that focus on quality work & Fast delivery</p>
          <div class="row">
          <div class="col-lg-6">
            <!-- Form -->
            <form  method="post" actio="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="row">
              <div class="col-sm-9 mb-3">
                <span><div class="text-danger"><?php echo $errors['fn_err'] ?? ''; ?></div></span>
                <input type="text" name="fName" class="form-control" placeholder="Your full name">
              </div>
              <div class="col-sm-9 mb-3">
                <span><div class="text-danger left"><?php echo $errors['mail_err'] ?? ''; ?></div></span>
                <input type="text" name="email" class="form-control" placeholder="Email">
              </div>
              <div class="col-sm-9 mb-3">
                <span><div class="text-danger"><?php echo $errors['phon_err'] ?? ''; ?></div></span>
                <input type="mobile" name="phone" class="form-control" placeholder="Phone number">
              </div>
              <div class="col-sm-9 mb-3">
                <span><div class="text-danger"><?php echo $errors['add_err'] ?? ''; ?></div></span>
                <input type="text" name="address" class="form-control" placeholder="Residencial address">
              </div>
            </div>

            <!-- MARK THE SERVICE -->
            <h1 class="mark-h1">Mark the Service Category you Need</h1>
            <div class="row col-sm-9">
              <!-- The `name="interests[]"` attribute is crucial.  The `[]` creates an array of selected checkbox values. -->
              <label class="box">
                <input type="checkbox" name="interests[]" value="Brand & graphic Designing"> Branding and Graphic Designing
              </label>
              <label class="box">
                <input type="checkbox" name="interests[]" value="CopyWriting Services"> CopyWriting Services,Content Creation
              </label>
              <label class="box">
                <input type="checkbox" name="interests[]" value="Web & app Development"> Web and App Development
              </label>
              <label class="box">
                <input type="checkbox" name="interests[]" value="Database Administration"> Database Administration
              </label>
              <label class="box">
                <input type="checkbox" name="interests[]" value="Aws Administration"> AWS Administration
              </label>
              <label class="box">
                <input type="checkbox" name="interests[]" value="Paid & Organics Advert"> Paid & Organics Advertisement
              </label>
              <label class="box">
                <input type="checkbox" name="interests[]" value="Motion & Video Editing"> Motion Graphics / Video Editing
              </label>
              <div class="btn-p">
                <button type="submit" class="btn btn-sub">Submit</button>
              </div>
            </div>

          </form>
        </div>

        <div class="col-lg-6 form-img-animat">
          <img src="images/form.svg" class="img-fluid" alt="">
        </div>

      </div>
    </div>
  </div>

  <!-- contact-us -->
    <div class="contact-us">
     <div class="container-fluid">
      <div class="cont-main">
        <h1 class="contact">Contact Us</h1>
        <p class="cont-p">If you have any queries, don't hesitate to get in touch with us. Our team would be delighted to assist you!</p>


       <div class="head1 row">
         <div class="col-lg-6 ">
           <div class="card">
             <div class="card-body">
               <i class="fa-solid fa-envelope"></i>
               <h2 class="email">EMAIL</h2>
               <h2 class="gemray">gemraydigitalagency@gmail.com</h2>
             </div>
           </div>
         </div>

         <div class="col-lg-6 ">
           <div class="card">
             <div class="card-body">
               <i class="fa-solid fa-phone"></i>
               <h2 class="email">CALL US</h2>
               <h2 class="gemray">+233 535 817 118</h2>
             </div>
           </div>
         </div>

         <div class="col-lg-6 ">
           <div class="card">
             <div class="card-body">
              <i class="fab fa-whatsapp"></i>
               <h2 class="email">WHATSAPP</h2>
               <h2 class="gemray">+233 535 817 118</h2>
             </div>
           </div>
         </div>

         <div class="col-lg-6">
           <div class="card">
             <div class="card-body">
               <i class="fab fa-facebook"></i>
               <h2 class="email">FACEBOOK</h2>
               <h2 class="gemray">Gemray Digital Agency</h2>
             </div>
           </div>
         </div>
        </div>
        </div>
      </div>
      </div>
      <!-- contact-us -->


      <!-- footer -->
        <div id="footer">
          <div class="container">
            <div class="row">
              <hr>
              <div class="col-lg-4 col-md-6">
                <h5 class="footer-h6">We are here to help you increase your productivity and derive more sales into your business .Choose Us and you will Never regret.</h5>
              </div>
            <div class="col-lg-4 col-md-6 useful-a">
              <h5 class="useful">Useful Links</h5>
              <a href="index.php">Home</a>
              <a href="hire-us.php">Hire us</a>
              <a href="refreshing.php">Refreshing approach to Digital Marking</a>
            </div>
            <div class="col-lg-4 col-md-12">
              <h5 class="useful">Contact Us</h5>
              <h6 class="yhaw">Gemraydigitalagency@gmail.com</h6>
              <h6 class="yhaw ">+233 559 984 234</h6>
              <div class="social-icons">
                <a href="https://web.facebook.com/people/Gemray-Digital-Agency/61554421756650/?mibextid=LQQJ4d"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/gemray_digital?igsh=Y3ZlbjdhdWpzYWJ1&utm_source=qr"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.tiktok.com/@gemray_digital"><i class="fa-brands fa-tiktok"></i></a>
              </div>
            </div>
            </div>
          </div>
          <div class="botom">
            <h5>Copyright © 2024. | Gemray Digital Agency</h5>
          </div>
        </div>
        <!-- footer -->




    <!-- jquery plugin -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- jquery plugin -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Bootstrap Bundle with Popper -->

    <script>
    // Navbar scroll effect
      const navEl = document.querySelector('.navbar');
        window.addEventListener('scroll', function() {
          if(window.scrollY >= 56 ){
            navEl.classList.add('navbar-scrolled');
          }else if (window.scrollY < 56 ) {
            navEl.classList.remove('navbar-scrolled');
          }
        });
        $(window).scroll(function(){
          if($(document).scrollTop() > 100){
            $('nav').addClass('animate');
          }else{
            $('nav').removeClass('animate');
          }
        });
        // Navbar scroll effect


        // scrollreveal
        ScrollReveal().reveal('.head .card', {
            delay: 200,
            duration: 1000,
            origin: 'bottom',
            distance: '20px',
            easing: 'cubic-bezier(0.5, 0, 0, 1)',
            interval: 200
        });

    </script>
  </body>
</html>
