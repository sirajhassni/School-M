<?php

include_once 'includes/navbar.php';
?>

<!-- Bootstrap Slider -->

<section class="mb-5">
  <div id="carousel-1" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-1" data-slide-to="1"></li>
      <li data-target="#carousel-1" data-slide-to="2"></li>
      <li data-target="#carousel-1" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner" role="listbox">

      <div class="carousel-item active">
        <img class="d-block img-fluid" src="imgs/banner-2.jpg" alt="slide">
        <div class="carousel-caption d-none d-md-block">
          <h3>1 Lorem ipsum dolor</h3>
          <p>two and more carousel in one page example...</p>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block img-fluid" src="imgs/banner-2.jpg" alt="Slide">
        <div class="carousel-caption d-none d-md-block">
          <h3>2 Lorem ipsum dolor</h3>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing...</p>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block img-fluid" src="imgs/banner-2.jpg" alt="Slide">
        <div class="carousel-caption d-none d-md-block">
          <h3>3 Lorem ipsum dolor</h3>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing...</p>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block img-fluid" src="imgs/banner-2.jpg" alt="Slide">
        <div class="carousel-caption d-none d-md-block">
          <h3>4 Lorem ipsum dolor</h3>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing...</p>
        </div>
      </div>

    </div><!-- e carousel-inner -->

    <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">prev</span>
    </a>

    <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">next</span>
    </a>

  </div><!-- e carousel -->
</section><!-- e section -->

<!-- Our Features Section -->

<div class="our-features-section">

  <div class="Main-Container">

    <div class="Pragraf">
      <p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante
        vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendreri</p>
    </div>

    <div class="container">
      <div class="row">


        <div class="col-md-4 img" style="text-align: center;">
          <img class="img-fluid" src="imgs/Online Courses.jpg" alt="Our Features image 1">
          <h3>Online Courses Facilities</h3>
          <h6>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim</h6>
        </div>

        <div class="col-md-4 img" style="text-align: center;">
          <img class="img-fluid" src="imgs/Student Admin Pannel.jpg" alt="Our Features image 2">
          <h3>Student Admin Panel</h3>
          <h6>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim</h6>
        </div>

        <div class="col-md-4 img" style="text-align: center;">
          <img class="img-fluid" src="imgs/Perfect Guidelines.jpg" alt="Our Features image 3">
          <h3>Perfect Guidelines</h3>
          <h6>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim</h6>
        </div>

      </div>
    </div>
  </div>
</div>
<?php
include_once 'includes/footer.php';
