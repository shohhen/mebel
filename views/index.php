<!DOCTYPE html>
<html lang="en">

<head>
  <title>Marga &mdash; Website Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="assets/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      

     <?php include_once 'blocks/header.php' ?>




    <div class="owl-carousel-wrapper">

      

      <div class="box-92819">
        <div class="owl-carousel slide-one-item-alt-text">

          <div>
            <h1 class="text-uppercase mb-3">We Are Specialist In The Field of Architect</h1>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus harum, error minima?</p>
            <p class="mb-0"><a href="#" class="btn btn-primary rounded-0">Contact Us</a></p>
          </div>

          <div>
            <h1 class="text-uppercase mb-3">Design That Makes You Feel At Home</h1>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto deleniti similique, nesciunt.</p>
            <p class="mb-0"><a href="#" class="btn btn-primary rounded-0">Contact Us</a></p>
          </div>

          <div>
            <h1 class="text-uppercase mb-3">Ready To Start Your Home</h1>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, autem odit quae!</p>
            <p class="mb-0"><a href="#" class="btn btn-primary rounded-0">Contact Us</a></p>
          </div>

        </div>
      </div>



      <div class="owl-carousel owl-1 ">
        <div class="ftco-cover-1" style="background-image: url('assets/images/hero_1.jpg');"></div>
        <div class="ftco-cover-1" style="background-image: url('assets/images/hero_2.jpg');"></div>
        <div class="ftco-cover-1" style="background-image: url('assets/images/hero_3.jpg');"></div>
        
      </div>
    </div>

    
    <div class="site-section">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-4">
            <div class="h-100 bg-white box-29291">
              <h2 class="heading-39291">Welcome To <br> Our Company</h2> 
              <?php 
               foreach ($text as $key ) {
               

                
              ?>
              <p><?= $key['name']?></p>
             <?php
               }
                ?>
              <p class="mt-5">
                <span class="d-block font-weight-bold text-black">Bruce Smith</span>
                <span class="d-block font-weight-bold text-muted">Founder, CEO</span>
                
                <img src="assets/images/signature.svg" alt="Image" class="img-fluid" width="140">
              </p>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="owl-carousel owl-3">
              <img src="assets/images/about_1.jpg" alt="Image" class="img-fluid">
              <img src="assets/images/about_2.jpg" alt="Image" class="img-fluid">
              <img src="assets/images/about_3.jpg" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>

    


    <div class="site-section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-7">
            <h2 class="heading-39291 mb-0">What We Do</h2>
          </div>
        </div>
        <div class="row">
          <?php foreach ($category as $key) {
           
          ?>
          <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="assets/fonts/flaticon/svg/<?=$key['img']?>" alt="Image" class="img-fluid">
              </span>
              <h3 class="mb-4"><?=$key['name']?></h3>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-7">
            <h2 class="heading-39291 mb-0">Our Projects</h2>
          </div>
          <div class="col-md-5 text-right">
            <p class="mb-0"><a href="projects" class="more-39291">View All Projects</a></p>
          </div>
        </div>

        <div class="row">
          <?php 
            foreach ($projectList as $key) {
           
            
          ?>
          <div class="col-lg-6">
            <div class="media-02819">
              <img src="assets/images/<?=$key['img']?>" alt="Image" class="img-fluid">
              <h3><?=$key['name']?></h3>
              <span><?=$key['desciption']?></span>
            </div>
          </div>
          <?php }?>

        </div>
      </div>
    </div>

    
    <div class="site-section section-4">
      <div class="container">

        <div class="row justify-content-center text-center">
          <div class="col-md-7">
            <div class="slide-one-item owl-carousel">
              <blockquote class="testimonial-1">
                <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus totam sit delectus earum facere ex ea sunt, eos?</p>
                <cite><span class="text-black">Mike Dorney</span> &mdash; <span class="text-muted">CEO and Co-Founder</span></cite>
              </blockquote>

              <blockquote class="testimonial-1">
                <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
                <p>Eligendi earum ad perferendis dolores, dolor quas. Ullam in, eaque mollitia suscipit id aspernatur rerum! Sit quibusdam ullam tempora quis, in voluptatum maiores veritatis recusandae!</p>
                <cite><span class="text-black">James Smith</span> &mdash; <span class="text-muted">CEO and Co-Founder</span></cite>
              </blockquote>

              <blockquote class="testimonial-1">
                <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
                <p> Officia, eius omnis rem non quis eos excepturi cumque sequi pariatur eaque quasi nihil dicta tempore voluptate culpa, veritatis incidunt voluptatibus qui?</p>
                <cite><span class="text-black">Mike Dorney</span> &mdash; <span class="text-muted">CEO and Co-Founder</span></cite>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php include_once 'blocks/footer.php' ?>
    </div>

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.animateNumber.min.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/aos.js"></script>

    <script src="assets/js/main.js"></script>


  </body>

</html>
