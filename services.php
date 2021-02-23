<?php include("header.php") ?>

<?php $con = mysqli_connect("localhost","root","","company"); ?> 





<!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Services</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Services</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">

        <?php 

$sql = "SELECT * FROM services";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {?>


          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
             <img src="admin/<?php echo $row['img']; ?>" class="img-fluid" alt="pic">
              <h4><a href=""><?php echo $row['tittle'] ?></a></h4>
              <p><?php  echo $row['content']?></p>
            </div>
          </div>

         

        

          <?php } ?>
<?php   } ?>
         


        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
   <!-- End Features Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <?php include("footer.php"); ?>