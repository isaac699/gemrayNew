<?php
$slug = isset($_GET['slug']) ? strtolower(trim($_GET['slug'])) : '';

$studies = [
  'ecommerce-roas-boost' => [
    'title' => 'E-Commerce Growth',
    'client' => 'Fashion Retail Brand',
    'challenge' => 'Low online sales despite strong offline presence.',
    'solution' => 'Optimized SEO, personalized email campaigns, and social media ads targeting.',
    'results' => ['300% increase in online revenue in 6 months', 
    '+120K+ new Instagram followers', 'Conversion rate improved by 2.5x'],
  ],
  'b2b-seo-pipeline' => [
    'title' => 'SaaS Lead Generation',
    'client' => 'B2B SaaS Startup',
    'challenge' => 'Struggling to attract qualified leads in a competitive niche.',
    'solution' => 'Built a content marketing funnel, LinkedIn ads, and webinar series.',
    'results' => ['5x more qualified leads in 90 days', '40% reduction in cost-per-lead', 
    'TSecured enterprise clients within 3 months'],
  ],
  'local-leads-explosion' => [
    'title' => 'Brand Awareness Campaign',
    'client' => 'Health & Wellness Brand',
    'challenge' => 'Needed to increase brand visibility and credibility.',
    'solution' => 'Influencer partnerships, short-form TikTok content, and PR placements.',
    'results' => ['2.5M+ video views in 60 days', 'Brand mentioned in 3 major online publications',
     '78% increase in direct website traffic'],
  ],
];

if (!isset($studies[$slug])) {
  header('Location: /first-sem-final-pro/case-studies.php');
  exit;
}

$study = $studies[$slug];

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Required meta tags -->

    <title>Service</title>

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
    <link rel="stylesheet" href="/first-sem-final-pro/styles.css">
    <!-- Bootstrap css -->

    <!-- lightbox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <!-- lightbox -->

    <style>
      body{
        font-family: 'Montserrat',sans-serif;
      }
      .details-main{
        background: #E8F9FF;
        font-family: 'Montserrat',sans-serif;
      }
      .details-main h1{
        font-size: 2.5rem;
        font-weight: 500;
        color: #373A40;
      }
      .details-main h5{
        font-size: 1.2rem;
        font-weight: 500;
        color:  #373A40;
      }
      .details-main p{
        font-size: 1.1rem;
        font-weight: 500;
        color: #686D76;
      }
      .details-main ul{
        font-size: 1rem;
        font-weight: 500;
        color: #686D76;
      }
      .details-main li{
        font-size: 1rem;
        font-weight: 500;
        color: #686D76;
      }
     
      .details-main .btn{
        font-size: 1rem;
        font-weight: 500;
        color: #fff;
        background: #154D71;
        border: 1px solid #eee;
        border-radius: 5px;
        padding: 10px 20px;
        text-decoration: none;
        margin-right: 10px;
      }
      .details-main .btn:hover{
        font-size: 1rem;
        font-weight: 400;
        color: #fff;
      }
      .details-main .btn:active{
        font-size: 1rem;
        font-weight: 400;
        color: #fff;
      }
      .details-main .btn:focus{
        font-size: 1rem;
        font-weight: 400;
        color: #fff;
      }
     

      .details-main .back{
        font-size: 1rem;
        font-weight: 400;
        color: #fff;
        background: #33A1E0;
      }

      /* card */
      .details-main .card{
        background: #fff;
        border: 1px solid #686D76;
        border-radius: 10px;
        padding: 20px;
      }
      .details-main h6{
        font-size: 2rem;
        font-weight: 400;
        color: #373A40;
      }
      .details-main h5{
        font-size: 1.5rem;
        font-weight: 500;
        color: #373A40;
      }
      .details-main ul{
        padding: 0;
        margin: 0;
      }
      .details-main a{
        font-size: 1rem;
        font-weight: 400;
        color: #686D76;
        text-decoration: none;
      }
      .details-main a:hover{
        font-size: 1rem;
        font-weight: 400;
        color: #33A1E0;
        text-decoration: none;
      }

    </style>
  </head>
  <body>

    <!-- Navigation Bar -->
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top navbar-light">
    <div class="container-fluid">

      <a class="navbar-brand smooth-scroll" href="/first-sem-final-pro/index.php">
          <img src="/first-sem-final-pro/images/raylogo.png" alt="gemray" width="50" height="50">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/first-sem-final-pro/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/first-sem-final-pro/portfolio.php">Our Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/first-sem-final-pro/case-studies.php">Case Studies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/first-sem-final-pro/service.php">Our Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/first-sem-final-pro/hire-us.php" id="cartLink">Hire Us</a>
                </li>
              </ul>
            </div>
        </div>
      </nav>
      <!-- Navbar -->

<div class="details-main">
<div class="container-fluid py-5">
  <div class="row">
    <div class="col-lg-6">
      <h1 class="mb-2"><?php echo htmlspecialchars($study['title']); ?></h1>
      <p class="text-secondary mb-4">Client: <?php echo htmlspecialchars($study['client']); ?></p>

      <h5>Challenge</h5>
      <p><?php echo htmlspecialchars($study['challenge']); ?></p>

      <h5>Solution</h5>
      <p><?php echo htmlspecialchars($study['solution']); ?></p>

      <h5>Results</h5>
      <ul>
        <?php foreach ($study['results'] as $r): ?>
          <li><?php echo htmlspecialchars($r); ?></li>
        <?php endforeach; ?>
      </ul>

      <div class="mt-4">
        <a href="/first-sem-final-pro/hire-us.php" class="btn btn-primary">Start your project</a>
        <a href="/first-sem-final-pro/case-studies.php" class="back btn btn-outline-secondary ms-2">Back to all</a>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h6 class="card-title">Explore more</h6>
          <ul class="mb-0">
            <li><a href="/first-sem-final-pro/service-detail.php?slug=seo">SEO Services</a></li>
            <li><a href="/first-sem-final-pro/service-detail.php?slug=ppc">PPC Services</a></li>
            <li><a href="/first-sem-final-pro/portfolio.php">See our portfolio</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<?php include_once 'service_footer.php'; ?> 