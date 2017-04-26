

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Build Invest Group</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Roboto" rel="stylesheet">
		<link rel="stylesheet" href="css/styles.css" media="screen" title="no title">
		<!-- Bootstrap carousel -->
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/scripts.js" type="text/javascript"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- For scrolling front-page -->
		<script src="js/scrollify.js" type="text/javascript"></script>
		<!-- Font Awesome -->
		<script src="https://use.fontawesome.com/b860453c18.js"></script>
	</head>

	<body>

		<section class="thankyou">
			<div class="container-fluid">
				<div class="row">
					<div class="flex-container text-center">
						<img src="images/logo.png" alt="Build Invest Group Logo" width="170" height="100" >
						<a href="tel:+16049165534"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;(604) 916-5534</a>
						<a href="mailto:info@buildinvest.ca"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;info@BuildInvest.ca</a>
					</div>
				</div>
				<?php
					$result = '';
					if (isset($_POST["submit"])) {
						$name = $_POST['name'];
						$email = $_POST['email'];
						$message = $_POST['message'];
						$from = 'Website Client';
						$to = 'info@BuildInvest.ca';
						$subject = 'Message from Website';

						$body = "From: $name\n\n E-Mail: $email\n\n Message:\n $message";

						// Check if name has been entered
						if (!$_POST['name']) {
							$errName = 'Please enter your name';
						}

						// Check if email has been entered and is valid
						if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
							$errEmail = 'Please enter a valid email address';
						}

						//Check if message has been entered
						if (!$_POST['message']) {
							$errMessage = 'Please enter your message';
						}

						// If there are no errors, send the email
						if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
							if (mail ($to, $subject, $body, $from)) {
								$result='<h1>Thank you for your business!</h1><h3>You request has been submitted.</h3><h3>We will contact you as soon as possible!</h3>';
							} else {
								$result='<h1>Sorry! We have problems.</h1><h3>We will fix it as soon as possible</h3><h3>Please try later!</h3>';
							}
						}
					}
				?>
				<div class="row">
					<div class="flex-container text-center">
					<?php echo $result ?>
					</div>
				</div>
				<br><br><br>
				<div class="row">
					<div class="back-button">
	          <a href="/">Back to the Page</a>
	        </div>
				</div>
			</div>
		</section>

	</body>

</html>
