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
  	if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["inputEmail"])) {
  	$emailErr = "Valid email address is required";
  } else {
  	$email = xxx($_POST["inputEmail"]);
  	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  if (empty($_POST["inputMessage"])) {
  	$messageErr = "Message field can not be blank";
  } else {
  	$message = xxx($_POST["inputMessage"]);
  }
  $reason = xxx($_POST["inputInquiry"]);
}?>

	<div class="container">
		<h1 class="text-center">Contact Me!</h1>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" role="form">
			<div class="wrapper">
				<div class="form-group has-feedback <?php if (!isset($nameErr)) echo "has-feedback-left"; else echo "has-error";?>">
					<label for="inputName" class="control-label">Name</label>
					<input type="text" placeholder="<?php if (isset($nameErr)) echo $nameErr; else echo "e.g Jamall Doe";?>" value="<?php if ((isset($name)) && !isset($nameErr)) echo $name;?>" class="form-control" name="inputName">
					<span class="glyphicon glyphicon-<?php if(isset($nameErr)) echo "warning-sign"; else echo "user";?> form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback <?php if (!isset($emailErr)) echo "has-feedback-left"; else echo "has-error";?>">
					<label for="inputEmail" class="control-label">Email</label>
					<input type="text" placeholder="<?php if (isset($emailErr)) echo $emailErr; else echo "e.g email@example.com";?>" value="<?php if ((isset($email)) && !isset($emailErr)) echo $email;?>" class="form-control" name="inputEmail">
					<span class="glyphicon glyphicon-<?php if(isset($emailErr)) echo "warning-sign"; else echo "envelope";?> form-control-feedback"></span>
				</div>
				<div class="form-group">
					<label for="inputInquiry">Reason for inquiry</label>
					<select class="form-control" name="inputInquiry">
						<option value="General">General</option>
						<option value="Freelance">Freelance / Employment (Paid Work)</option>
						<option value="Collab">Collaboration (Unpaid Work)</option>
					</select>
				</div>
				<div class="form-group <?php if (isset($messageErr)) echo "has-error";?>">
					<label for="inputMessage" class="control-label">Message</label>
					<textarea placeholder="<?php if (isset($messageErr)) echo $messageErr; else echo "Write Your Message";?>" value="<?php if (isset($message)) echo $message;?>" class="form-control" rows="3" name="inputMessage"></textarea>
					<span class="<?php if (isset($messageErr)) echo "glyphicon glyphicon-warning-sign form-control-feedback";?>"></span>
				</div>
				<div class="form-group" id="submit-btn">
					<button type="submit" class="btn btn-primary btn-lg center-block">
						<span class="glyphicon glyphicon-send"></span> Submit
					</button>
				</div>
			</div>
		</form>
	</div>
<?php include("../inc/footer.php");?>