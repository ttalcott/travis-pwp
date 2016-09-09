<?php

//grab current Directory
$CURRENT_DIR = __DIR__;

//set page name
$PAGE_TITLE = "About LDS";

//load HTML head tag
require_once(dirname(__DIR__) . "/php/partials/head-utils.php");
 ?>
<?php require_once($PREFIX . "php/partials/header.php"); ?>
<body class="sfooter all-else">
	<div class="sfooter-content background2">
			<main class="about-page">
				<div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="catchy-text jumbotron animated zoomIn">
                <h1>Who are we?</h1>
              </div>
            </div>
          </div>
          <div class="col-md-6 about-section-1">
            <p class="animated fadeIn">
              Lyra Development Solutions is an Albuquerque software development company that was founded by Travis Talcott in 2016. We focus on making outstanding websites, web applications, mobile applications, and any other piece of software our customers desire.
            </p>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="catchy-text jumbotron animated zoomIn">
                <h1 >Our Goal</h1>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-md-offset-6 about-section-1">
            <p class="animated fadeIn">
              Our goal at Lyra Development Solutions is simple. Give our customers quality products that everyone will enjoy.
            </p>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="catchy-text jumbotron animated zoomIn">
                <h1>Our Promise</h1>
              </div>
            </div>
          </div>
          <div class="col-md-6 about-section-1">
            <p class="animated fadeIn">
              We promise to make your product exactly what you want it to be. From the early design stages to final deployment we will make sure all your needs and expectations are met.
            </p>
          </div>

				</div>
			</main>
	</div>
</body>
</html>
