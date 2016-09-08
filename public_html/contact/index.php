<?php

//grab current Directory
$CURRENT_DIR = __DIR__;

//set page name
$PAGE_TITLE = "Contact";

//load HTML head tag
require_once(dirname(__DIR__) . "/php/partials/head-utils.php");
?>

<body class="sfooter others">
	<div class="sfooter-content background2">
		<?php require_once($PREFIX . "php/partials/header.php"); ?>
		<main>
			<div class="container form-wrap">
				<div class="row">
					<div class="col-sm-6">

						<form id="contact-form" class="" method="POST" action="php/mailer.php" novalidate>
							<div class="form-group">
								<label for="name">Name</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input class="form-control" type="text" name="name" id="name" placeholder="Full Name">
								</div>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-envelope"></i>
									</div>
									<input class="form-control" type="text" name="email" id="email"placeholder="Email Address">
								</div>
							</div>
							<div class="form-group">
								<label for="subject">Subject</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-pencil"></i>
									</div>
									<input class="form-control" type="text" name="subject" id="subject" placeholder="Subject">
							</div>
							<div class="form-group">
								<label for="message">Message</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-comment"></i>
									</div>
									<textarea name="message" rows="5" class="form-control" id="message" placeholder="Your message (2000 characters Max)"></textarea>
								</div>
							</div>
							<!-- google recaptcha -->
							<div class="g-recaptcha" data-sitekey="6Le3sykTAAAAANVMQUAH4gv3MLo0qEwEV7doAAcr"></div>

							<button type="submit" class="btn btn-info">Submit</button>
							<button type="reset" class="btn btn-default">Reset</button>
						</form>
						<div class="row">
							<div class="col-xs-6">
								<div id="output-area">

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>

</body>
