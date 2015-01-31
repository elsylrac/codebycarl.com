<?php
require_once("../inc/config/config.php");
$pageTitle = DEVELOPER . " | " . "Contact Me";
$section = "contact";
include("../inc/header.php");
?>

	<div class="container">
		<h1>Contact Me!</h1>
		<form role="form">
			<div class="wrapper">
				<div class="form-group has-feedback has-feedback-left">
					<label for="inputName" class="control-label">Name</label>
					<input type="text" placeholder="Enter Your Name" class="form-control" id="inputName">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback has-feedback-left">
					<label for="inputEmail" class="control-label">Email</label>
					<input type="text" placeholder="Enter You Email Address" class="form-control" id="inputEmail">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group">
					<label for="inputInqury">Reason for inquiry</label>
					<select name="inputInqury" class="form-control" id="inputInquiry">
						<option value="General">General</option>
						<option value="Freelance">Freelance/Employment (Paid Work)</option>
						<option value="Collab">Collaboration (Unpaid Work)</option>
					</select>
				</div>
				<div class="form group">
					<label for="inputMessage" class="control-label">Message</label>
					<textarea placeholder="Write Your Message" class="form-control" rows="3" id="inputMessage"></textarea>
				</div>
				<input type="submit" class="btn btn-primary" value="Submit Button">
			</div>
		</form>
	</div>
<?php include("../inc/footer.php");?>