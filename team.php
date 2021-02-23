<?php include("header.php") ?>


<?php $con = mysqli_connect("localhost","root","","company"); ?> 



<!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Team</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Team</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our <strong>Team</strong></h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">


 <?php 

$sql = "SELECT * FROM team";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {?>

    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
    <div class="member" data-aos="fade-up">
      <div class="member-img">
        <img src="admin/<?php echo $row['img']; ?>" class="img-fluid" alt="pic">
        <div class="social">
          <a href=""><i class="icofont-twitter"></i></a>
          <a href=""><i class="icofont-facebook"></i></a>
          <a href=""><i class="icofont-instagram"></i></a>
          <a href=""><i class="icofont-linkedin"></i></a>
        </div>
      </div>
      <div class="member-info">
        <h4><?php echo $row['name'];   ?></h4>
        <span><?php echo $row['designation'];?></span>
      </div>
    </div>
  </div>
   
 <?php } ?>
<?php   } ?>

      </div>

      </div>
    </section><!-- End Our Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  
 <?php include("footer.php"); ?>