<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<header>
    <?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<div class="page-banner-wrap page-banner-fixed">
    <div class="container">
        <h2>Inverter Batteries</h2>
    </div>
</div>

<main class="s1">
    <div class="main-wrapper">

        <div class="products-batteries-wrapper section-entry">
            <div class="container">
                <div class="pro-info-wrap">
                    <p>At Prismiq, we provide high-quality inverter batteries engineered to deliver long-lasting and dependable power backup for homes, offices, and critical applications. Our tubular batteries are built with extra heavy-duty thick plates, following Prismiq’s advanced innovation standards, ensuring exceptional durability, corrosion resistance, and extended life cycles even under demanding conditions. Designed to perform in high ambient temperatures, these batteries include built-in safety margins that make them ideal for regions with frequent power outages or harsh climates. With deep discharge recovery, faster charging capabilities, and low maintenance requirements, Prismiq inverter batteries are a smart, energy-efficient solution for modern power needs. Whether you're running essential appliances, lighting systems, or home electronics, you can trust Prismiq to keep your environment powered, stable, and protected. Experience the peace of mind that comes from reliable backup power—engineered for endurance, built for performance, and backed by Prismiq's commitment to innovation and quality.</p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 mrt50">
                            <div class="value-points">
                                <div class="choose-icon">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="icon-details">
                                    <p class="ab-points">High conversion efficiency and fast startup</p>
                                </div>
                            </div>

                            <div class="value-points">
                                <div class="choose-icon">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="icon-details">
                                    <p class="ab-points">Faster Recharge</p>
                                </div>
                            </div>

                            <div class="value-points">
                                <div class="choose-icon">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="icon-details">
                                    <p class="ab-points">Ceramic Water level indicators for easy checking of water level</p>
                                </div>
                            </div>

                            <div class="value-points">
                                <div class="choose-icon">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="icon-details">
                                    <p class="ab-points">Certified backup hours</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

         <div class="chart-wrapper mrb40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="chart-wrap">
                            <img src="img/inverter-chart-6.jpg" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="chart-wrap">
                            <img src="img/inverter-chart-1.jpg" class="img-fluid">
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="chart-wrap">
                            <img src="img/inverter-chart-2.jpg" class="img-fluid">
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="chart-wrap">
                            <img src="img/inverter-chart-3.jpg" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mrt30">
                        <div class="chart-wrap">
                            <img src="img/inverter-chart-4.jpg" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="chart-wrap">
                            <img src="img/inverter-chart-5.jpg" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pill-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills mrb40">
                            <li class="nav-item">
                                <a class="nav-link active pro-nav" data-bs-toggle="pill" href="#Prismiq" role="tab"
                                    aria-controls="Prismiq" aria-selected="true">Prismiq</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pro-nav" data-bs-toggle="pill" href="#Ecolight" role="tab"
                                    aria-controls="Ecolight" aria-selected="false">Ecolight</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pro-nav" data-bs-toggle="pill" href="#Extreme" role="tab"
                                    aria-controls="Extreme" aria-selected="false">Extreme</a>
                            </li>
                        </ul>

                        <div class="tab-content mt-3">
                            <div class="tab-pane fade show active" id="Prismiq" role="tabpanel" aria-labelledby="Prismiq-tab">
                                <div class="row">
                                    <?php
                                    $query = "SELECT * FROM product_details WHERE category = 'inverter' AND series='prismiq'";
                                    $result = mysqli_query($link, $query);
                                    while ($row = mysqli_fetch_assoc($result)) {

                                    ?>
                                        <div class="col-lg-4 col-md-4 col-sm-12 mb-5">
                                            <div class="product-card-wrap">
                                                <div class="img-product">
                                                    <img src="<?php echo $path; ?>img/<?php echo $row['image']; ?>" alt="" class="img-fluid">
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-details">
                                                        <h4><?php echo $row['model']; ?></h4>
                                                    </div>
                                                    <div class="pro-btn">
                                                        <a href="<?php echo $path; ?>inverter-battery?id=<?php echo $row['id']; ?>">View
                                                            Details</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    <?php } ?>


                                    <div class="tab-pane fade" id="ecolight" role="tabpanel" aria-labelledby="ecolight-tab">
                                        <div class="row">
                                    <?php
                                    $query = "SELECT * FROM product_details WHERE category = 'inverter' AND series='ecolight'";
                                    $result = mysqli_query($link, $query);
                                    while ($row = mysqli_fetch_assoc($result)) {

                                    ?>
                                        <div class="col-lg-4 col-md-4 col-sm-12 mb-5">
                                            <div class="product-card-wrap">
                                                <div class="img-product">
                                                    <img src="<?php echo $path; ?>img/<?php echo $row['image']; ?>" alt="" class="img-fluid">
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-details">
                                                        <h4><?php echo $row['model']; ?></h4>
                                                    </div>
                                                    <div class="pro-btn">
                                                        <a href="<?php echo $path; ?>inverter-battery?id=<?php echo $row['id']; ?>">View
                                                            Details</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    <?php } ?>


                                </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>