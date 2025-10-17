<?php
include_once 'Db.php';
include_once 'service_header.php';
?>

<style>
    .head {
        min-height: 350px;
        overflow: hidden;
        text-align: center;
        position: relative;
        background-image: url(images/refresh.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 80px 0;
        margin-bottom: 50px;
    }
    .head::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, rgba(29,78,137, 0.4) 50%, rgba(29,78,137, 0.5) 100%);
    }
    .head-we {
        position: relative;
        z-index: 2;
        color: white;
        padding: 30px;
    }
    .we {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 20px;
        color: white;
    }
    .span1 {
        color: #08b9e0ff;
    }
    .we-commit-p {
        font-size: 1rem;
        max-width: 800px;
        margin: 0 auto;
        line-height: 1.6;
    }
    .card-view {
        padding: 20px;
        height: 100%;
    }
    .card {
        height: 100%;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0,0,0,0.2);
    }
    .card-body {
        padding: 25px;
    }
    .card-title {
        color: #1d4e89;
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 15px;
    }
    .card-text {
        color: #666;
        margin-bottom: 20px;
        line-height: 1.2;
        font-weight: 500;
        font-size: 1.1rem;
    }
    .btn-primary1 {
        background-color: #1d4e89;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }
    .btn-primary1:hover {
        background-color: #667eea;
        color: white;
    }
    .services-container {
        padding: 0 30px;
    }
</style>

<!-- Header Section -->
<div id="service-main">
    <div class="head">
        <div class="head-we">
            <div class="wespan-animate">
                <h1 class="we">Our <span class="span1">SERVICES</span></h1>
            </div>
            <p class="we-commit-p">Our ultimate goal is to provide your company or business with effective and
                converting sales sequence, training and service with track records to guarantee effective result.</p>
        </div>
    </div>

    <!-- Services Cards Section -->
    <div class="services-container">
        <div class="container-fluid">
            <div class="row g-4">
                <?php
                $sql = "SELECT id, card_title, card_text, button FROM services WHERE is_active = 1 ORDER BY sort_order ASC";
                $result = $link->query($sql);

                if ($result && $result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-lg-6 col-md-6">
                        <div class="card-view">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo htmlspecialchars($row['card_title']); ?></h5>
                                    <p class="card-text"><?php echo htmlspecialchars($row['card_text']); ?></p>
                                    <div class="d-flex gap-2">
                                        <a href="hire-us.php" class="btn btn-primary1"><?php echo htmlspecialchars($row['button']); ?></a>
                                        <a href="service-detail.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-secondary">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <?php
                    }
                } else {
                    echo '<div class="col-12 text-center"><p>No services available at the moment.</p></div>';
                }
                $result->free();
                ?>
            </div>
        </div>
    </div>
</div>

<?php include_once 'service_footer.php'; ?>
