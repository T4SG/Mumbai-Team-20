<?php
$name= array(
		"class" => "form-control col-md-4 col-xs-12",
		"id" => "name",
		"name" => "user",
		"placeholder" => "Enter Name",
		"autocomplete" => "off"
	);
$mob= array(
		"class" => "form-control col-md-4 col-xs-12",
		"id" => "mob",
		"name" => "mob",
		"placeholder" => "Enter Mobile Number",
		"autocomplete" => "off"
	);
$user= array(
		"class" => "form-control col-md-4 col-xs-12",
		"id" => "user",
		"name" => "user",
		"placeholder" => "Enter Email",
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
$country = array(
		"class" => "form-control col-md-4 col-xs-12",
		"id" => "country",
		"name" => "country",
		"placeholder" => "Enter Country",
		"autocomplete" => "off"
	);
$city = array(
		"class" => "form-control col-md-4 col-xs-12",
		"id" => "city",
		"name" => "city",
		"placeholder" => "Enter City",
		"autocomplete" => "off"
	);

?>
	<div id="page-wrapper">
		<div class="row" style="padding-top: 20px">
			<div class="col-sm-4">
				<div class="form-group">
					<?php echo form_label('Name','name'); ?>
					<?php echo form_input($name); ?>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<?php echo form_label('Mobile No','mob'); ?>
					<?php echo form_input($mob); ?>
				</div>
			</div>
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
				<div class="col-sm-4">
					<div class="form-group">
						<?php echo form_label('Country','country'); ?>
						<?php echo form_input($country); ?>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<?php echo form_label('City','city'); ?>
						<?php echo form_input($city); ?>
					</div>
				</div>

			</div>
		</div>
	</div>
<?php echo form_close(); ?>

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
var country=document.getElementById('country').value;
if(!country.match(/^[A-Za-z]+$/))
{
	alert("ONLY ALPHABETS");
	document.getElementById('country').value="";
}
var city=document.getElementById('city').value;
if(!city.match(/^[A-Za-z]+$/))
{
	alert("ONLY ALPHABETS");
	document.getElementById('city').value="";
}
var name=document.getElementById('name').value;
if(!name.match(/^[A-Za-z]+$/))
{
	alert("ONLY ALPHABETS");
	document.getElementById('name').value="";
}	
function chkmob()
{
	var mob=document.getElementById("mob");
	var l = mob.length;
	if(!((l>10 || l<10) && mob.match(/^[0-9]+$/)))
	{alert("Enter a valid Mobile Numbaer");
	document.getElementById('mob').value="";
	}
}
</script>