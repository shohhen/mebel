

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




    <div class="ftco-blocks-cover-1">
        <div class="ftco-cover-1" style="background-image: url('assets/images/hero_1.jpg');">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-lg-12 text-center">
                   <div class="box-92819">
                    <h1 class="text-uppercase text-black mb-3">Our Projects</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus harum, error minima?</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>

    
    <div class="site-section">
      <div class="container">
        

        <div class="row">
        <?php
            foreach ($projectList as $list ) {
                
           
        ?>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="">
            <div class="media-02819">
              <a href="" class="img-link small"><img src="assets/images/<?=$list['img']?>" alt="Image" class="img-fluid"></a>
              <h3><a href="" name='<?=$_POST[$list['id']]?>'><?=$list['name']?></a></h3>
              <p><?=$list['desciption']?></p>
              <span>#<?=$list['catname']?></span>
            </div>
          </div>
          
        <?php }  ?>
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
