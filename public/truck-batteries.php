<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<header>
    <?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<div class="page-banner-wrap page-banner-fixed">
    <div class="container">
        <h2>Tractor Batteries</h2>
    </div>
</div>

<main class="s1">
    <div class="main-wrapper">

        <div class="products-batteries-wrapper section-entry">
            <div class="container">
                <div class="pro-info-wrap">
                    <p>Prismiq offers a specialized range of tractor batteries engineered to meet the demanding requirements of Indian agricultural machinery. Built with rugged durability and advanced technology, these batteries are designed to optimize tractor performance across a wide range of terrains and weather conditions. Whether operating in fields, rugged off-road areas, or under extreme temperature fluctuations, Prismiq tractor batteries deliver consistent starting power, high endurance, and minimal maintenance—improving the overall productivity and reliability of your tractor. Manufactured in state-of-the-art facilities located in India, each battery is developed with strict quality standards and cutting-edge materials to ensure long service life and resistance to corrosion, vibration, and wear. Trusted by farmers and agricultural operators across the country, Prismiq batteries provide power you can rely on, even in the most challenging environments. When performance and durability matter, Prismiq is the power behind progress in Indian farming.</p>
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
                                    $query = "SELECT * FROM product_details WHERE category = 'Tractor' AND series='prismiq'";
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




</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>