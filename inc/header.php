<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php if(isset($pageTitle)){echo $pageTitle;}?></title>
	<meta name="description" content="<?php echo DEVELOPER;?> | Front-end Web Developer">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<!-- <link rel="shortcut icon" href="favicon.ico"> -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Play|Montserrat:400,700" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<header>
		<nav class="navbar navbar-default navbar-static-top">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<i class="sr-only">Toggle navigation</i>
					<i class="icon-bar"></i>
					<i class="icon-bar"></i>
					<i class="icon-bar"></i>
				</button>
				<p><a class="navbar-brand" href="/"><i class="glyphicon glyphicon-qrcode" id="qr"></i><?php echo CODENAME;?></a><!-- <span id="dotcom">.com</span> --></p>
			</div>
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav navbar-right">
					<li <?php if ($section == "index") echo "class=\"active\"";?>><a href="/"><i class="glyphicon glyphicon-user nvbr-glyph"></i>About</a></li>
        			<li <?php if ($section == "portfolio") echo "class=\"active\"";?>><a href="#"><i class="glyphicon glyphicon-folder-open nvbr-glyph"></i>Portfolio</a></li>
        			<li <?php if ($section == "skills") echo "class=\"active\"";?>><a href="/skills/"><i class="glyphicon glyphicon-stats nvbr-glyph"></i>Skills</a></li>
        			<li <?php if ($section == "contact") echo "class=\"active\"";?>><a href="/contact/"><i class="glyphicon glyphicon-comment nvbr-glyph"></i>Contact</a></li>
				</ul>
			</div>
		</nav>
	</header>