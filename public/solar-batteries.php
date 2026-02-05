<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<header>
    <?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<div class="page-banner-wrap page-banner-fixed">
    <div class="container">
        <h2>Solar Batteries</h2>
    </div>
</div>

<main class="s1">
    <div class="main-wrapper">

        <div class="products-batteries-wrapper section-entry">
            <div class="container">
                <div class="pro-info-wrap">
                    <p>As the world faces an increasing shortage of natural resources, sustainable energy solutions have become more important than ever. Among these, solar energy has emerged as a reliable and eco-friendly alternative for electricity generation. A complete solar system typically includes key components such as solar panels, batteries, inverters, and charge controllers—each playing a vital role. While solar panels capture sunlight, it’s the battery that stores the energy, ensuring continuous power availability even during the night or cloudy conditions. Prismiq solar batteries are engineered to efficiently store solar energy, offering long backup power, deep-discharge protection, and durable performance in diverse weather conditions. Built to meet the needs of both residential and commercial solar setups, these batteries provide energy security and reduce dependence on the grid. With Prismiq, you’re not just storing energy—you’re investing in a smarter, cleaner future powered by innovation and sustainability.</p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 mrt50">
                            <div class="value-points">
                                <div class="choose-icon">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="icon-details">
                                    <p class="ab-points">Pasted Negative Plates</p>
                                </div>
                            </div>

                            <div class="value-points">
                                <div class="choose-icon">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="icon-details">
                                    <p class="ab-points">Acid Resistant Polyester Gauntlets</p>
                                </div>
                            </div>

                            <div class="value-points">
                                <div class="choose-icon">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="icon-details">
                                    <p class="ab-points">Micro porous Ceramic Vent Plug</p>
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
        
        <div class="pill-wrapper mrb40">
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
                                    $query = "SELECT * FROM product_details WHERE category = 'Solar' AND series='prismiq'";
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
                                                        <a href="<?php echo $path; ?>solar-battery?id=<?php echo $row['id']; ?>">View
                                                            Details</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    <?php } ?>


                                    <div class="tab-pane fade" id="ecolight" role="tabpanel" aria-labelledby="ecolight-tab">
                                        <div class="row">
                                    <?php
                                    $query = "SELECT * FROM product_details WHERE category = 'Solar' AND series='ecolight'";
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