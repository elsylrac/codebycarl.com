<?php
require_once("../inc/config/config.php");
$pageTitle = DEVELOPER . " | " . "Skills";
$section = "skills";
include("../inc/header.php");
?>

	<div class="container">
		<div class="page-header">
			<h1 class="text-center">Skills</h1>
			<div class="wrapper">
				<section class="skillset" id="html-skillset">
					<p><img src="/img/html5-logo.svg" class="pull-left" id="html-logo"></p>
					<div class="progress html-progress">
						<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
							85%
						</div>
					</div>
				</section>
				<section class="skillset" id="css-skillset">
					<p><img src="/img/css3-logo.svg" class="pull-left" id="css3-logo"></p>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
							60%
						</div>
					</div>
				</section>
				<section class="skillset" id="js-skillset">
					<p><img src="/img/js-logo.svg" class="pull-left" id="js-logo"></p>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
							40%
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
<?php include("../inc/footer.php");?>