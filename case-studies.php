<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Required meta tags -->

    <title>Case study</title>

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

    <!-- Custom css -->
    <style>
      /* case studies */
      .case-studies {
        background-image: url(images/9.png);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 40px 0;
        height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;

      }
      .case-studies::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(28, 110, 164, 0.7);
        z-index: 1;
      }
      .case-studies .content {
        text-align: center;
        color: #fff;
        z-index: 2;
        position: relative;
      }
      .case-studies .content h1 {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: #fff;
      }
      .case-studies .content p {
        font-size: 1.2rem;
        font-weight: 400;
        margin-bottom: 20px;
      }
      .case-studies .content .text-secondary {
        color: #EEEEEE !important;
      }
      .card-text{
        font-weight: 500;
      }

    .we-partner{
      font-size: 1.2rem;
      font-weight: bold;
      color: #EEEEEE;
      line-height: 2rem;
      padding: 0 10%;
    }
    @media(max-width: 768px){
      .we-partner{
        font-size: 1rem;
        line-height: 1.5rem;
        padding: 0 5%;
        text-align: left;
      }
      .case-studies .content h1{
        font-size: 3rem;
        text-align: left;
        padding: 0 5%;
      }
      .case-studies .content p{
        font-size: 1rem;
      }
    }
    /* case studies */ 

      .row .col-md-6 {
        font-family: 'Montserrat', sans-serif;
      }
      /* Ensure Montserrat on cards on this page */
      .card,
      .card-title,
      .card-text,
      .card-body,
      .btn {
        font-family: 'Montserrat', sans-serif !important;
      }
    </style>

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
                    <a class="nav-link" href="Portfolio.php">Our Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="case-studies.php">Case Studies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.php">Our Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hire-us.php" id="cartLink">Hire Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Case Studies -->
 <div class="case-studies">
    <div class="container-fluid">
    <div class="content">
      <h1 class="mb-2">Case Studies</h1>
      <p class="we-partner text-secondary ">We partner with brands to craft digital strategies that drive measurable growth. 
        Explore our case studies to see how we’ve helped businesses like yours achieve breakthrough success.</p>
    </div>
  </div>
  </div>

  <div class="container-fluid">
  <div class="row">
    <?php
    $studies = [
      [
        'slug' => 'ecommerce-roas-boost',
        'title' => 'E-Commerce Growth',
        'excerpt' => 'Scaled paid search and CRO to triple return on ad spend.',
        'metrics' => ['+300% increase in online sales within 6 months', '2.5x improvement in website conversion rate',
         '10% increase in repeat purchases'],
      ],
      [
        'slug' => 'b2b-seo-pipeline',
        'title' => 'SaaS Lead Generation',
        'excerpt' => 'Built a content marketing funnel, LinkedIn ads, and webinar series.',
        'metrics' => ['5x more qualified leads generated in 90 days', '40% reduction in cost-per-lead (CPL)',
         '3 new enterprise clients signed within 3 months'],
      ],
      [
        'slug' => 'local-leads-explosion',
        'title' => 'Brand Awareness Campaign',
        'excerpt' => 'Needed to increase brand visibility and credibility.',
        'metrics' => ['2.5M+ TikTok and Instagram video views in 60 days', '78% increase in direct website traffic',
         '3 major online publications featured the brand (earned media coverage)'],
      ],
    ];

    foreach ($studies as $study): ?>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?php echo htmlspecialchars($study['title']); ?></h5>
            <p class="card-text text-secondary"><?php echo htmlspecialchars($study['excerpt']); ?></p>
            <ul class="small text-success fw-medium">
              <?php foreach ($study['metrics'] as $metric): ?>
                <li style="color: #686D76 !important;"><?php echo htmlspecialchars($metric); ?></li>
              <?php endforeach; ?>
            </ul>
            <div class="mt-auto">
              <a href="/first-sem-final-pro/case-study-detail.php?slug=<?php echo urlencode($study['slug']); ?>" class="btn btn-outline-primary">Read case study</a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
</div>


<?php include_once 'service_footer.php'; ?> 