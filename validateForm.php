<?php
/**
 * Created by PhpStorm.
 * User: thadaninilesh
 * Date: 11/7/15
 * Time: 4:22 PM
 */
	$name = array(
		"class" => "form-control col-md-4 col-xs-12",
		"id" => "name",
		"name" => "name",
		"placeholder" => "Enter your name",
		"autocomplete" => "off"
	);

	$nameOfSchool = array(
		"class" => "form-control col-md-4 col-xs-12",
		"id" => "nameOfSchool",
		"name" => "nameOfSchool",
		"placeholder" => "Name of school",
		"autocomplete" => "off"
	);

	$cost = array(
		"class" => "form-control col-md-4 col-xs-12",
		"id" => "cost",
		"name" => "cost",
		"placeholder" => "Approximate cost",
		"autocomplete" => "off"
	);

	$presentStudent = array(
		"class" => "form-control col-md-4 col-xs-12",
		"id" => "presentStudent",
		"name" => "presentStudent",
		"placeholder" => "Present Students",
		"autocomplete" => "off"
	);

	$expectedStudent = array(
		"class" => "form-control col-md-4 col-xs-12",
		"id" => "expectedStudent",
		"name" => "expectedStudent",
		"placeholder" => "Expected Students",
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

	$state = array(
		"class" => "form-control col-md-4 col-xs-12",
		"id" => "state",
		"name" => "state",
		"placeholder" => "Enter State",
		"autocomplete" => "off"
	);

	$submit = array(
		"name" => "submit",
		"id" => "submit",
		"value" => "Submit",
		"onsubmit"=>"validate()",
		"class" => "btn btn-success btn-lg btn-block"
	);

echo form_open('validation/validate');
?>
<div id="page-wrapper">

	<div class="row" style="padding-top: 20px">
		<div class="col-sm-12">
			<div class="col-sm-4">
				<div class="form-group">
					<?php echo form_label('Name','name'); ?>
					<?php echo form_input($name); ?>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<?php echo form_label('School Name','nameOfSchool'); ?>
					<?php echo form_input($nameOfSchool); ?>
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
					<?php echo form_label('State','state'); ?>
					<?php echo form_input($state); ?>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<?php echo form_label('Place','city'); ?>
					<?php echo form_input($city); ?>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<?php echo form_label('Approximate Cost','cost'); ?>
					<?php echo form_input($cost); ?>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<?php echo form_label('Present no of students','cost'); ?>
					<?php echo form_input($presentStudent); ?>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<?php echo form_label('Expected no of students','cost'); ?>
					<?php echo form_input($expectedStudent); ?>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<?php echo form_label('') ?>
					<select name="responsive" class="form-control" id="responsive">
						<option value="">Please Select responsiveness</option>
						<option name="ngo" value="NGO">NGO</option>
						<option name="corporate" value="CORPORATE">Corporate</option>
						<option name="contractor" value="CONTRACTOR">Contractor</option>
					</select>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<?php echo form_label('Co-operation','cooperation'); ?>
					<select name="cooperation" id="cooperation" class="form-control">
						<option value="">Please Select level of cooperation</option>
						<option name="full" value="FULL">Full</option>
						<option name="moderate" value="MODERATE">Moderate</option>
						<option name="null" value="NULL">Null</option>
					</select>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<?php echo form_label('Duration','duration'); ?>
					<select name="duration" id="duration" class="form-control">
						<option value="">Please Select a duration</option>
						<option name="five" value="<5 years"><5 years</option>
						<option name="four" value="<4 years"><3 years</option>
						<option name="three" value="<3 years"><2 years</option>
						<option name="two" value="<2 years"><2 years</option>
						<option name="one" value="<1 year"><1 year</option>
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-offset-3 col-sm-6">
			<div class="form-group">
				<?php
					echo form_submit($submit);
				?>
			</div>
		</div>
	</div>
</div>
<?php echo form_close(); ?>
<script>
function validate()

{
var name=document.getElementById('name').value;
if(!name.match(/^[A-Za-z]+$/))
{
	alert("ONLY ALPHABETS");
	document.getElementById('name').value="";
}
var nameOfSchool=document.getElementById('nameOfSchool').value;
if(!nameOfSchool.match(/^[A-Za-z]+$/))
{
	alert("ONLY ALPHABETS");
	document.getElementById('nameOfSchool').value="";
}
var cost=document.getElementById('cost').value;
if(!cost.match(/^[0-9]+$/))
{
	alert("ONLY NUMERIC DATA");
	document.getElementById('cost').value="";
}
var presentStudent=document.getElementById('presentStudent').value;
if(!presentStudent.match(/^[0-9]+$/))
{
	alert("ONLY NUMERIC DATA");
	document.getElementById('presentStudentl').value="";
}
var expectedStudent=document.getElementById('expectedStudent').value;
if(!expectedStudent.match(/^[0-9]+$/))
{
	alert("ONLY NUMERIC DATA");
	document.getElementById('expectedStudent').value="";
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
var state=document.getElementById('state').value;
if(!state.match(/^[A-Za-z]+$/))
{
	alert("ONLY ALPHABETS");
	document.getElementById('state').value="";
}
var duration = document.getElementById('duration').value;
var responsive = document.getElementById('responsive').value;
var responsive = document.getElementById('responsive').value;
if (cooperation==null) {alert("Please select a cooperation level")};
if (duration==null) {alert("Please select a duration")};
if (responsive==null) {alert("Please select a response level")};
}
</script>