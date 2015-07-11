/**
 * Created this to add a user as admin
 
 */

<?php
$user= array(
		"class" => "form-control col-md-4 col-xs-12",
		"id" => "user",
		"name" => "user",
		"placeholder" => "Enter UserName",
		"autocomplete" => "off"
	);
$password = array(
		"class" => "form-control col-md-4 col-xs-12",
		"id" => "password",
		"name" => "password",
		"placeholder" => "Enter Password",
		"autocomplete" => "off"
	);
$passwordC = array(
		"class" => "form-control col-md-4 col-xs-12",
		"id" => "passwordC",
		"name" => "passwordC",
		"placeholder" => "Enter Password Again",
		"autocomplete" => "off"
	);
	
?>
<div id="page-wrapper">

	<div class="row" style="padding-top: 20px">
		<div class="col-sm-12">
			<div class="col-sm-4">
				<div class="form-group">
					<?php echo form_label('User','user'); ?>
					<?php echo form_input($user); ?>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<?php echo form_label('Password','password'); ?>
					<?php echo form_input($password); ?>
				</div>
			</div>
			
			<div class="col-sm-4">
				<div class="form-group">
					<?php echo form_label('Confirm Password','passwordC'); ?>
					<?php echo form_input($passwordC); ?>
				</div>
			</div>
			</div>
</div>
</div>
<script>
function chkemail()
		{	val=document.getElementById('user');
			var len=val.length;
			var at=val.IndexOfndexOf("@");
			var dot=val.LastIndexOf(".");
			if(at<1||dot<=at+2||dot>=val.length)
				alert("ENTER A VALID USER");
		}
function chkpass()
		{
		  var str=document.getElementById('password').value;
		  var str1=document.getElementById('passwordC').value;
		  if(str!=str1)
			{
				alert("PASSWORDS DO NOT MATCH");
				document.getElementById('password').value="";
			    document.getElementById('passwordC').value="";
			}
		}		








</script>