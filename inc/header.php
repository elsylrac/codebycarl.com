<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php if(isset($pageTitle)){echo $pageTitle;}?></title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
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
				<p><a class="navbar-brand" href="#"><i class="glyphicon glyphicon-qrcode" id="qr"></i><?php echo CODENAME;?></a><span id="dotcom">.com</span></p>
			</div>
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><i class="glyphicon glyphicon-user nvbr-glyph"></i>About</a></li>
        			<li><a href="#"><i class="glyphicon glyphicon-folder-open nvbr-glyph"></i>Portfolio</a></li>
        			<li><a href="#"><i class="glyphicon glyphicon-stats nvbr-glyph"></i>Skills</a></li>
        			<li><a href="#"><i class="glyphicon glyphicon-comment nvbr-glyph"></i>Contact</a></li>
				</ul>
			</div>
		</nav>
	</header>