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

<!-- Bootstrap Slider -->

<div class="our-features-section">

</div>

<?php
include_once 'includes/footer.php';
