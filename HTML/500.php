<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>N7SC | 500 Internal Service Error</title>
		<!--[if IE]><![endif]-->
		<link rel="stylesheet" href="css/error-styles.css">
	</head>
	<body>
		<div class="container">
			<h1>Error 500 <span>:(</span></h1>
			<p>Sorry, but the server encountered an error and could not complete your request.</p>
			<p>It looks like this was the result of either:</p>
			<ul>
				<li>Your browser being crazy</li>
				<li>Someone spilled coffee all over our server</li>
				<li>Too much incoming traffic</li>
			</ul>
			<p>A team of highly trained monkeys has been dispatched to deal with this situation. Please show them the following message.</p>
			<div class="hero-unit">
				<?php 
					$dateAndTime = date("m/d/Y h:i:s a", time());
					$Msg = "This is an encoded string. You got this error on: " .$dateAndTime. " Yes lol this was based off of Google\'s error page because it\'s awesome and so is Google <3!";
					$encodedMsg = base64_encode($Msg);
					$formatedEncodedMsg = chunk_split($encodedMsg, 15);
					echo $formatedEncodedMsg;
				 ?>
			</div>
			<button class="btn btn-large btn-block btn-primary" type="button" onclick="window.location.reload(true)">Click Here To Refresh</button>
			<a class="btn btn-large btn-block" href="index.php">Click Here To Goto Home Page</a>
		</div>
	</body>
</html>
