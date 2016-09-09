<?php

//grab current Directory
$CURRENT_DIR = __DIR__;

//set page name
$PAGE_TITLE = "About LDS";

//load HTML head tag
require_once(dirname(__DIR__) . "/php/partials/head-utils.php");
 ?>

<body class="sfooter all-else">
	<div class="sfooter-content background2">
		<?php require_once($PREFIX . "php/partials/header.php"); ?>


			<main class="about-page">
				<div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="catchy-text jumbotron">
                <h1 class="animated zoomIn">Who are we?</h1>
              </div>
            </div>
          </div>
				</div>
			</main>
	</div>
</body>
</html>
