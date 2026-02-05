<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<header>
    <?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<main class="s1">
    <div class="main-wrapper">

        <div class="page-banner-wrap page-banner-fixed">
            <div class="container">
                <h2>Extreme</h2>
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
                                                $query = "SELECT * FROM product_details WHERE category = 'inverter' AND series='extreme'";
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
                                                $query = "SELECT * FROM product_details WHERE category = 'Automotive' AND series='extreme'";
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
                                                $query = "SELECT * FROM product_details WHERE category = 'E-Rickshaw' AND series='extreme'";
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
                                                $query = "SELECT * FROM product_details WHERE category = 'Solar' AND series='extreme'";
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
                                                $query = "SELECT * FROM product_details WHERE category = 'Tractor' AND series='extreme'";
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