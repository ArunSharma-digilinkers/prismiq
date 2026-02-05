<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<header>
    <?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<div class="page-banner-wrap page-banner-fixed">
    <div class="container">
        <h2>Automotive Batteries</h2>
    </div>
</div>

<main class="s1">
    <div class="main-wrapper">

        <div class="products-batteries-wrapper section-entry">
            <div class="container">
                <div class="pro-info-wrap">
                    <p>Prismiq is a trusted market leader in the automotive battery industry, renowned for delivering high-performance batteries for four-wheelers across India. With a strong commitment to quality, innovation, and reliability, Prismiq supplies its advanced automotive batteries to many of the country’s leading car manufacturers, including top international brands operating in the Indian market. Our batteries are engineered to withstand India’s diverse driving conditions—offering superior starting power, long service life, and resistance to extreme temperatures. Prismiq automotive batteries are designed using cutting-edge technology and high-quality materials, ensuring consistent performance, minimal maintenance, and optimal energy efficiency. Whether you're driving a compact car, sedan, SUV, or commercial vehicle, Prismiq offers the perfect power solution to meet your needs. Backed by an extensive service network and trusted by millions, Prismiq has earned its reputation as one of the best car battery manufacturers in India. Choose Prismiq—where performance meets peace of mind on every journey.</p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 mrt50">
                            <div class="value-points">
                                <div class="choose-icon">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="icon-details">
                                    <p class="ab-points">Trusted by major OEMs</p>
                                </div>
                            </div>

                            <div class="value-points">
                                <div class="choose-icon">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="icon-details">
                                    <p class="ab-points">Best cranking power</p>
                                </div>
                            </div>

                            <div class="value-points">
                                <div class="choose-icon">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="icon-details">
                                    <p class="ab-points">Paperless warranty</p>
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
                                    $query = "SELECT * FROM product_details WHERE category = 'Automotive' AND series='prismiq'";
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
                                                        <a href="<?php echo $path; ?>automotive-battery?id=<?php echo $row['id']; ?>">View
                                                            Details</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    <?php } ?>


                                    <div class="tab-pane fade" id="ecolight" role="tabpanel" aria-labelledby="ecolight-tab">
                                        <div class="row">
                                    <?php
                                    $query = "SELECT * FROM product_details WHERE category = 'Automotive' AND series='ecolight'";
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