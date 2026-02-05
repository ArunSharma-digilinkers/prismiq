<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<header>
    <?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<div class="page-banner-wrap page-banner-fixed">
    <div class="container">
        <h2>E-Rickshaw Batteries</h2>
    </div>
</div>

<main class="s1">
    <div class="main-wrapper">

        <div class="products-batteries-wrapper section-entry">
            <div class="container">
                <div class="pro-info-wrap">
                    <p>Prismiq Current EV is a next-generation tubular battery meticulously engineered to meet the demanding power needs of e-rickshaws and other electric vehicles. Specially designed for consistent performance and long operational life, this battery delivers reliable, uninterrupted energy—ideal for daily commercial use in urban and rural environments. With its ultra-low maintenance design, Prismiq Current EV minimizes downtime and reduces ownership costs, making it a smart and efficient choice for e-mobility entrepreneurs. The battery features fast-charging technology, allowing users to get back on the road quicker, and is built to withstand high vibration, frequent charge-discharge cycles, and challenging weather conditions. Developed under strict quality standards and leveraging Prismiq’s innovative engineering, it ensures high mileage per charge and excellent deep-discharge recovery. Trusted by EV owners across India, Prismiq Current EV sets a new benchmark in the e-rickshaw battery segment—empowering a cleaner, more profitable electric future for drivers and fleet operators alike.</p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 mrt50">
                            <div class="value-points">
                                <div class="choose-icon">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="icon-details">
                                    <p class="ab-points">Higher mileage</p>
                                </div>
                            </div>

                            <div class="value-points">
                                <div class="choose-icon">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="icon-details">
                                    <p class="ab-points">Higher capacity</p>
                                </div>
                            </div>

                            <div class="value-points">
                                <div class="choose-icon">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="icon-details">
                                    <p class="ab-points">Ultra low maintenance – extra savings</p>
                                </div>
                            </div>

                            <div class="value-points">
                                <div class="choose-icon">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="icon-details">
                                    <p class="ab-points">Enjoy the promise of a long battery life</p>
                                </div>
                            </div>
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
                                    $query = "SELECT * FROM product_details WHERE category = 'E-Rickshaw' AND series='prismiq'";
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
                                    $query = "SELECT * FROM product_details WHERE category = 'E-Rickshaw' AND series='ecolight'";
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
                                                        <a href="<?php echo $path; ?>erickshaw-battery?id=<?php echo $row['id']; ?>">View
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