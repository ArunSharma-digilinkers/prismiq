<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<header>
    <?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<main class="s1">
    <div class="main-wrapper">

        <div class="page-banner-wrap page-banner-fixed">
            <div class="container">
                <h2>Ecolight</h2>
            </div>
        </div>

        <div class="prismiq-info-wrapper section-entry">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="img/ecolight-info-img.jpg" class="img-fluid br15">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h3>Ecolight Batteries</h3>
                        <h4>Prismiq Industries is a global leader in the production and supply of advanced lead acid
                            batteries.</h4>
                        <p>
                            Prismiq Industries is a global leader in the manufacturing and supply of cutting-edge
                            lead-acid batteries, serving diverse sectors including automotive, industrial, and renewable
                            energy. With decades of experience and a commitment to excellence, we deliver reliable,
                            high-performance battery solutions that meet international standards. At Prismiq, innovation
                            meets reliability to create energy storage you can count on.
                        </p>

                        <!-- <div class="value-points mb-1">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <p class="ab-points">High Performance & Long Service Life</p>
                        </div>

                        <div class="value-points mb-1">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <p class="ab-points">100% Quality Tested Products</p>
                        </div>

                        <div class="value-points mb-1">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <p class="ab-points">Advanced Tall Tubular Battery Technology</p>
                        </div> -->

                        <div class="hm1-btn">
                            <a href="">Read More</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="brand-cta-section">
            <h2>Reliable Energy for Every Moment That Matters</h2>
            <p class="text-white">Built for durability and consistent performance, Prismiq batteries are engineered to
                deliver dependable power when you need it most.With advanced tubular technology, extended battery life,
                and robust construction, Prismiq ensures maximum efficiency and minimal maintenance.
            </p>
            <div class="cta-btns">
                <a href="tel: +91 7428466522" class="btn-outline"><i class="fa-solid fa-phone"></i> Talk to an
                    Expert</a>
            </div>
        </div>


        <div class="brand-why-choose section-entry">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="heading-box">
                            <h3>Why Choose Us</h3>
                            <h4>Power You Can Trust, Performance You Can Rely On.</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                        <div class="why-box">
                            <div class="icon-box">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <h4>Advanced Tubular Technology</h4>
                            <p>
                                Engineered with high-performance tubular plates for superior efficiency and longer service life.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                        <div class="why-box">
                            <div class="icon-box">
                                <i class="fa-solid fa-arrow-trend-up"></i>
                            </div>
                            <h4>Backup Performance</h4>
                            <p>
                                Designed to deliver consistent, uninterrupted power during long outages.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                        <div class="why-box">
                            <div class="icon-box">
                                <i class="fa-solid fa-screwdriver-wrench"></i>
                            </div>
                            <h4>Low Maintenance Design</h4>
                            <p>
                                Engineered with high-performance tubular plates for superior efficiency and longer
                                service life.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="batteries-wrapper section-entry">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="battery-heading-wrap">
                            <h2>Our Wide Range Of Batteries</h2>
                        </div>
                    </div>

                    <div class="pill-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="nav nav-pills mrb40">
                                        <li class="nav-item mb-10">
                                            <a class="nav-link active pro-nav" data-bs-toggle="pill" href="#inverter" role="tab"
                                                aria-controls="inverter" aria-selected="true">Inverter Batteries</a>
                                        </li>
                                        <li class="nav-item mb-10">
                                            <a class="nav-link pro-nav" data-bs-toggle="pill" href="#Automotive" role="tab"
                                                aria-controls="Automotive" aria-selected="false">Automotive Batteries</a>
                                        </li>
                                        <li class="nav-item mb-10">
                                            <a class="nav-link pro-nav" data-bs-toggle="pill" href="#E-Rickshaw" role="tab"
                                                aria-controls="E-Rickshaw" aria-selected="false">E-Rickshaw Batteries</a>
                                        </li>
                                        <li class="nav-item mb-10">
                                            <a class="nav-link pro-nav" data-bs-toggle="pill" href="#Solar" role="tab"
                                                aria-controls="solar" aria-selected="false">Solar Batteries</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link pro-nav" data-bs-toggle="pill" href="#Tractor" role="tab"
                                                aria-controls="Tractor" aria-selected="false">Tractor Batteries</a>
                                        </li> 
                                    </ul>

                                    <div class="tab-content mt-3">
                                        <div class="tab-pane fade show active" id="inverter" role="tabpanel" aria-labelledby="inverter-tab">
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
                                    <div class="tab-content mt-3">
                                        <div class="tab-pane fade show" id="Automotive" role="tabpanel" aria-labelledby="automotive-tab">
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
                                                                    <a href="<?php echo $path; ?>automotive-battery?id=<?php echo $row['id']; ?>">View
                                                                        Details</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>


                                                <?php } ?>




                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content mt-3">
                                        <div class="tab-pane fade show" id="E-Rickshaw" role="tabpanel" aria-labelledby="Prismiq-tab">
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

                                     <div class="tab-content mt-3">
                                        <div class="tab-pane fade show" id="Solar" role="tabpanel" aria-labelledby="Prismiq-tab">
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
                                                                    <a href="<?php echo $path; ?>solar-battery?id=<?php echo $row['id']; ?>">View
                                                                        Details</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>


                                                <?php } ?>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-content mt-3">
                                        <div class="tab-pane fade show" id="Tractor" role="tabpanel" aria-labelledby="Tractor-tab">
                                            <div class="row">
                                                <?php
                                                $query = "SELECT * FROM product_details WHERE category = 'Tractor' AND series='ecolight'";
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
                                                                    <a href="<?php echo $path; ?>tractor-battery?id=<?php echo $row['id']; ?>">View
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
        </div>


    </div>

</main>




<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>