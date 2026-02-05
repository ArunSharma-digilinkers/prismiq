<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<?php 
	$id = $_GET['id'];
	$query = "SELECT * FROM `product_details` WHERE id= '$id' ";
	$result = $link->query($query);
	$row = $result->fetch_assoc();
 ?>

<header>
    <?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<main class="s1">
    <div class="main-wrapper">
    
    <div class="page-banner-wrap page-banner-fixed">
        <div class="container">
            <h2 class="text-center"><?php echo $row['model']; ?></h2>
        </div>
    </div>


    <div class="battery-wrapper section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12 flex-center mb-4">
                    <img src="<?php echo $path; ?>img/<?php echo $row['image']; ?>" alt="" class="img-fluid img-shadow">
                </div>
               <div class="col-lg-8 col-md-8 col-sm-12  mrt40">
                <table class="table details-table">
                  <thead class="thead-dark">
                    <tr>
                      <th colspan="2">PRODUCT SPECIFICATIONS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">CATEGORY</th>
                      <td><?php echo $row['category']; ?></td>
                    </tr>
                    <tr>
                      <th scope="row">MODEL</th>
                     <td><?php echo $row['model']; ?></td>
                    </tr>
                    <tr>
                      <th scope="row">WEIGHT</th>
                      <td><?php echo $row['weight']; ?> </td>
                    </tr>
                    <tr>
                      <th scope="row">WARRANTY</th>
                      <td><?php echo $row['warranty']; ?></td>
                    </tr>
                    <tr>
                      <th scope="row">UTILITY</th>
                      <td><?php echo $row['utility']; ?></td>
                    </tr>
                  </tbody>
           </table>
              </div>

            </div>
        </div>
    </div>


    </div>
</main>