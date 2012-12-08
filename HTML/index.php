<!doctype html>
<html>
<head>
<?php include($_SERVER['DOCUMENT_ROOT']."/commonhead.php"); ?>
<title>Home...?</title>
<link rel="canonical" href="#">
<meta name="Keywords" content="codewarrior, devry" /> <!--Add more tags Later -->
</head>
<body>
	<header><?php include($_SERVER['DOCUMENT_ROOT']."/header.php"); ?></header>
	<!-- Login Modal -->
	<div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="loginLabel">Please Login</h3>
		</div>
		<div class="modal-body">
			<form class="form-horizontal">
				<div class="control-group">
					<label class="control-label" for="inputEmail">Email</label>
					<div class="controls">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-envelope"></i></span><input type="text" id="inputEmail" placeholder="Email" required>
						</div>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword">Password</label>
					<div class="controls">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-lock"></i></span><input type="password" id="inputPassword" placeholder="Password" required>
						</div>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<label class="checkbox">
							<input type="checkbox">Remember me
						</label>
					</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button> <button class="btn btn-primary">Proceed</button>
		</div>
	</div>
	<!-- Login Modal -->
	<div id="login2Modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="login2Label" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="login2Label">Please Login</h3>
		</div>
		<div class="modal-body">
			<form id='login' action='/login.php' method='post' accept-charset='UTF-8'>
				<fieldset>
					<input type='hidden' name='submitted' id='submitted' value='1'>
					
					<label for='username'>UserName:</label>
					<input type='text' name='username' id='username' maxlength="50">
					
					<label for='password'>Password:</label>
					<input type='password' name='password' id='password' maxlength="50">
					
					<input type='submit' name='Submit' value='Submit' class="btn btn-primary">
				</fieldset>
			</form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		</div>
	</div>
	<div class="container">
		<?php include($_SERVER['DOCUMENT_ROOT']."/js_body.php"); ?>
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<div role="main">
			<div class="row-fluid">
				<div class="span12">
					<section>
						<h1>Hello there!</h1>
						<p>Below there is a placeholder image within a responsive container, holy cow!!!</p>
						<img src="img/Konachan.com_148267.jpg" class="holyCowImg" alt="Just a Placeholder">
						<div class="clearfloat"></div>
					</section>
				</div>
			</div>
		</div><!-- END role=main -->

		<div class="clearfloat"></div>
		<footer><?php include($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?></div></footer>
		<noscript>
			<div id="noscript-bg"></div>
			<div id="noscript-text">
				<b>This site makes extensive use of JavaScript.</b><br>
				Please <a href="https://www.google.com/support/adsense/bin/answer.py?answer=12654" target="_blank">enable JavaScript</a> on your browser.
			</div>
		</noscript>
	</div> <!-- END .container -->
</body>
</html>