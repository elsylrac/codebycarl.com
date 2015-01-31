<?php
require_once("../inc/config/config.php");
$pageTitle = DEVELOPER . " | " . "Contact Me";
$section = "contact";
include("../inc/header.php");
// form stuff
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["inputName"])) {
    	$nameErr = "Name is required";
 	} else {
    	$name = xxx($_POST["inputName"]);
  	}
  $name = xxx($_POST["inputName"]);
  $email = xxx($_POST["inputEmail"]);
  $reason = xxx($_POST["inputInquiry"]);
  $message = xxx($_POST["inputMessage"]);
}?>

	<div class="container">
		<h1 class="text-center">Contact Me!</h1>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" role="form">
			<div class="wrapper">
				<div class="form-group has-feedback has-feedback-left">
					<label for="inputName" class="control-label">Name</label>
					<input type="text" placeholder="Enter Your Name" value="<?php if (isset($name)) echo $name;?>" class="form-control" name="inputName">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback has-feedback-left">
					<label for="inputEmail" class="control-label">Email</label>
					<input type="text" placeholder="Enter You Email Address" value="<?php if (isset($email)) echo $email;?>" class="form-control" name="inputEmail">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group">
					<label for="inputInquiry">Reason for inquiry</label>
					<select class="form-control" name="inputInquiry">
						<option value="General">General</option>
						<option value="Freelance">Freelance / Employment (Paid Work)</option>
						<option value="Collab">Collaboration (Unpaid Work)</option>
					</select>
				</div>
				<div class="form group">
					<label for="inputMessage" class="control-label">Message</label>
					<textarea placeholder="Write Your Message" value="<?php if (isset($message)) echo $message;?>"class="form-control" rows="3" name="inputMessage"></textarea>
				</div>
				<div class="form-group" id="submit-btn">
					<input type="submit" class="btn btn-primary btn-lg center-block" value="Submit Button">
				</div>
			</div>
		</form>
	</div>
<?php include("../inc/footer.php");?>