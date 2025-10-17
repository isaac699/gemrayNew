<?php
include_once 'admin/includes/Db.php';

// Get service ID and fetch service details
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$service = null;
$details = null;

if ($id) {
    // Fetch the service
    $query = "SELECT * FROM services WHERE id = ?";
    if ($stmt = $link->prepare($query)) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $service = $result->fetch_assoc();
        $stmt->close();
        
        // If service exists, fetch its details
        if ($service) {
            $query2 = "SELECT * FROM service_details WHERE service_id = ?";
            if ($stmt2 = $link->prepare($query2)) {
                $stmt2->bind_param("i", $id);
                $stmt2->execute();
                $result2 = $stmt2->get_result();
                $details = $result2->fetch_assoc();
                $stmt2->close();
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $service ? htmlspecialchars($service['title']) : 'Service Detail'; ?> - GemRay Digital</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">


    <?php include_once 'service_header.php'; ?>

    <style>
        .service-detail-header {
            background-image: url('images/strategic30.png');
            padding: 120px 0 100px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            color: white;
        }
        
        .service-detail-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, 
                rgba(29, 78, 137, 0.90) 0%,
                rgba(23, 162, 184, 0.80) 100%);
            z-index: 1;
        }

        .service-detail-header .container {
            position: relative;
            z-index: 2;
        }

        .service-detail-header h1 {
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
            margin-bottom: 1.5rem;
        }

        .service-detail-header .lead {
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
            font-size: 1.25rem;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .service-content {
            padding: 60px 0;
            background: #f8f9fa;
        }
        
        .detail-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }
        
        .detail-card h3 {
            color: #1d4e89;
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        .service-image {
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .service-image img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease;
        }
        
        .service-image:hover img {
            transform: scale(1.05);
        }
        
        .benefits-list {
            list-style: none;
            padding: 0;
        }
        
        .benefits-list li {
            padding: 15px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
        }
        
        .benefits-list li:last-child {
            border-bottom: none;
        }
        
        .benefits-list li i {
            color: #17a2b8;
            margin-right: 15px;
        }
        
        .cta-section {
            background: #1d4e89;
            padding: 40px;
            border-radius: 15px;
            color: white;
            text-align: center;
            margin-top: 40px;
        }
        
        .btn-custom {
            background: #17a2b8;
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            border: none;
            transition: all 0.3s ease;
        }
        
        .btn-custom:hover {
            background: #138496;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <?php if ($service && $details): ?>
        <div class="service-detail-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1 class="display-4"><?php echo htmlspecialchars($service['card_title']); ?></h1>
                        <p class="lead"><?php echo htmlspecialchars($service['card_text']); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="service-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="detail-card">
                            <h3><?php echo htmlspecialchars($details['detail_title']); ?></h3>
                            <?php if ($details['detail_image']): ?>
                            <div class="service-image">
                                <img src="<?php echo htmlspecialchars($details['detail_image']); ?>" 
                                     alt="<?php echo htmlspecialchars($details['detail_title']); ?>">
                            </div>
                            <?php endif; ?>
                            <div class="content">
                                <?php echo nl2br(htmlspecialchars($details['detail_content'])); ?>
                            </div>
                        </div>

                        <div class="detail-card">
                            <h3>Our Process</h3>
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <i class="fas fa-search fa-2x mb-3 text-primary"></i>
                                    <h5>Discovery</h5>
                                    <p>Understanding your needs</p>
                                </div>
                                <div class="col-md-4 text-center">
                                    <i class="fas fa-cogs fa-2x mb-3 text-primary"></i>
                                    <h5>Implementation</h5>
                                    <p>Expert execution</p>
                                </div>
                                <div class="col-md-4 text-center">
                                    <i class="fas fa-chart-line fa-2x mb-3 text-primary"></i>
                                    <h5>Results</h5>
                                    <p>Measuring success</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="detail-card">
                            <h3>Benefits</h3>
                            <ul class="benefits-list">
                                <li><i class="fas fa-check-circle"></i> Expert Guidance</li>
                                <li><i class="fas fa-check-circle"></i> Custom Solutions</li>
                                <li><i class="fas fa-check-circle"></i> Proven Results</li>
                                <li><i class="fas fa-check-circle"></i> Dedicated Support</li>
                            </ul>
                        </div>

                        <div class="cta-section">
                            <h3 class="mb-4">Ready to Get Started?</h3>
                            <p class="mb-4">Let's discuss how we can help your business grow</p>
                            <a href="hire-us.php" class="btn btn-custom">Contact Us Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php else: ?>
        <div class="container mt-5">
            <div class="alert alert-warning">
                <h4>Service Not Found</h4>
                <p>The requested service could not be found. Please check our <a href="service.php">services page</a> for available services.</p>
            </div>
        </div>
    <?php endif; ?>

    <?php include_once 'service_footer.php'; ?>
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/9aa0371bbe.js" crossorigin="anonymous"></script>
</body>
</html>