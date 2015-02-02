<?php
require_once("/inc/config/config.php");
$pageTitle = DEVELOPER . " | " . "Web Developer";
$section = "index";
include("/inc/header.php");
?>

	<div class="container">
		<div id="carousel-wrapper">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="/img/frontend.jpg" alt="Front End Web Development">
						<div class="carousel-caption">
							<h3>Front end development. HTML5/CSS3 - Javascript - Responsive</h3>
						</div>
					</div>
					<div class="item">
						<img src="/img/backend.jpg" alt="Back End Development">
						<div class="carousel-caption">
							<h3>Back end development speciallizing PHP server scripting language</h3>
						</div>
					</div>
					<div class="item">
						<img src="/img/server.jpg" alt="Server Depolyment">
						<div class="carousel-caption" id="carousel-server-item">
							<h3>Server depolyment, maintenance, & security</h3>
						</div>
					</div>
				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" id="lefto"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" id="righto"></span>
				</a>
			</div>
		</div>
	</div>
<?php include("/inc/footer.php");?>