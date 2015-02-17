<ul id="navigation">
		
  	</ul>
    <!-- BEGIN NAVIGATION
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo Links::get('main') ?>">
          <div class="text_logo">Fiesta</div>
          </a>
          <div class="nav-collapse collapse">
            <ul class="nav">
            
              <!-- HOME -->
              <li <?php if (Route::current()=="/"): ?>
                class="nav-active"
              <?php endif ?>><a href="<?php echo Links::get('main') ?>">HOME</a></li>
              
              <!-- ELEMENTS -->
              <li <?php if (Route::current()=="/doc"): ?>
                class="nav-active"
              <?php endif ?> style="width: 131px !important;"><a href="<?php echo Links::get('doc') ?>">DOCUMENTATION</a></li>
              
              <!-- PORTFOLIO (DROP-DOWN) -->
              <li class="dropdown">
              	<a href="#about" class="dropdown-toggle" data-toggle="dropdown">PORTFOLIO</a>
              	<ul class="dropdown-menu">
              		<li><a href="portfolio.html">PORTFOLIO 3-COL</a></li>
              		<li><a href="portfolio2.html">PORTFOLIO 2-COL</a></li>
              		<li><a href="portfolio3.html">FILTERED PORTFOLIO</a></li>
              		<li><a href="portfolio-view.html">PORTFOLIO SINGLE</a></li>
              	</ul>
              </li>
              
              <!-- BLOG (DROP-DOWN) -->
              <li class="dropdown">
              	<a href="#about" class="dropdown-toggle" data-toggle="dropdown">BLOG</a>
              	<ul class="dropdown-menu">
              		<li><a href="blog-list.html">BLOG LIST</a></li>
              		<li><a href="blog-view.html">BLOG SINGLE</a></li>
              	</ul>
              </li>
              
              <!-- PAGES (DROP-DOWN) -->
              <li class="last dropdown">
              	<a href="#about" class="dropdown-toggle" data-toggle="dropdown">PAGES</a>
              	<ul class="dropdown-menu">
              		<li><a href="about.html">ABOUT</a></li>
              		<li><a href="what-we-do.html">WHAT WE DO</a></li>
              		<li><a href="team.html">OUR TEAM</a></li>
              		<li><a href="faq.html">FAQ</a></li>
              		<li><a href="testimonials.html">TESTIMONIALS</a></li>
              		<li><a href="pricing.html">PRICING</a></li>
              		<li><a href="comparison.html">COMPARISON TABLE</a></li>
              		<li><a href="contact.html">CONTACT</a></li>
              	</ul>
              </li>
              
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>