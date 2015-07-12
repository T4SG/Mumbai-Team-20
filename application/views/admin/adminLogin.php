<?php
/**
 * Created by PhpStorm.
 * User: thadaninilesh
 * Date: 11/7/15
 * Time: 8:17 PM
 */

	$username = array(
		"name" => "username",
		"type" => "email",
		"id" => "username",
		"class" => "form-control",
		"placeholder" => "Enter your username",
		"autocomplete" => "off"
	);

	$password = array(
		"name" => "password",
		"type" => "password",
		"id" => "password",
		"class" => "form-control",
		"placeholder" => "Enter your password",
		"autocomplete" => "off"
	);

	$login = array(
		"name" => "login",
		"id" => "login",
		"class" => "btn btn-lg btn-success btn-block",
		"value" => "Login",
	);
echo form_open('admin/adminAuthenticate');
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>SB Admin 2 - Bootstrap Admin Theme</title>

		<!-- Bootstrap Core CSS -->
		<link href="<?php echo CSS . "bootstrap.css"; ?>" rel="stylesheet">

		<!-- MetisMenu CSS -->
		<!--<link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">-->


		<!-- Custom CSS -->
		<link href="<?php echo CSS . "sb-admin.css"; ?>" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="<?php echo ASSET . "font-awesome/css/font-awesome.css"; ?>" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>
	<!-- jQuery -->

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Please Sign In</h3>
				</div>
				<div class="panel-body">
					<form role="form">
						<fieldset>
							<div class="form-group">
								<?php echo form_input($username); ?>
							</div>
							<div class="form-group">
								<?php echo form_input($password); ?>
							</div>
							<!-- Change this to a button or input when using this as a form -->
							<?php echo form_submit($login); ?>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo form_close(); ?>
	<script src="<?php echo JS."plugins/metisMenu/jquery.metisMenu.js";?>"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo JS."bootstrap.min.js"; ?>"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<!--<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>-->

	<!-- Custom Theme JavaScript -->
	<script src="<?php echo JS . "sb-admin.js"; ?>" ></script>

	</body>

</html>