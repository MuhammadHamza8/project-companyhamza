<?php include("header.php") ?>


<?php $con = mysqli_connect("localhost","root","","company"); ?> 


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            
             
            <!-- start blog entry -->

            <?php 
            
            $show = $_REQUEST['show'];
            
            
            
            
            ?>

     <?php      
     
     $sql = "SELECT * from post WHERE id = '$show';";
   $result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) { ?>
    
 <article class="entry" data-aos="fade-up">

              <div class="entry-img">
              <img src="admin/<?php echo $row['img']; ?>" class="img-fluid" alt="pic">
              </div>

              <h2 class="entry-title">
              <h1> <?php echo $row['tittle']; ?><h1>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html"><?php echo $row['admn'] ; ?></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html"><?php echo $row['catagary']; ?></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  <?php echo $row['descripton']; ?>
                </p>
               
              </div>

            </article>


        <?php  }  ?>
<?php  }  ?>

            
            <!-- End blog entry -->

          
     

         
            
           



            <!-- End sidebar recent posts-->

              <!-- End sidebar tags-->

            <!-- End sidebar -->

         <!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main



<?php include("footer.php"); ?>