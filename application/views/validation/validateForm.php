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

	$freqnd = array(
		"class" => "form-control col-md-4 col-xs-12",
		"id" => "freqnd",
		"name" => "freqnd",
		"placeholder" => "Scale 1-100",
		"autocomplete" => "off"
	);

	$submit = array(
		"name" => "submit",
		"id" => "submit",
		"value" => "Submit",
		"class" => "btn btn-success btn-lg btn-block"
	);

echo form_open('validation/validate');
?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-sm-12">
			<h1 class="page-header" style="margin-top: 10px">School Rebuilding Entries</h1>
		</div>
	</div>

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
					<?php echo form_label('Collaboration','responsive') ?>
					<select name="collaborate" class="form-control" id="responsive">
						<option value="">Please Select collaboration</option>
						<option name="ngo" value="NGO">NGO</option>
						<option name="corporate" value="CORPORATE">Corporate</option>
						<option name="contractor" value="CONTRACTOR">Contractor</option>
					</select>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
					<?php echo form_label('Support','cooperation'); ?>
					<select name="support" id="cooperation" class="form-control">
						<option value="">Please Select level of support</option>
						<option name="full" value="FULL">Full</option>
						<option name="moderate" value="MODERATE">Moderate</option>
						<option name="null" value="NULL">Null</option>
					</select>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
					<?php echo form_label('Duration','duration'); ?>
					<select name="duration" id="duration" class="form-control">
						<option value="">Please Select a duration</option>
						<option name="five" value="<5 years"> <5 years </option>
						<option name="four" value="<4 years"><4 years</option>
						<option name="three" value="<3 years"><3 years</option>
						<option name="two" value="<2 years"><2 years</option>
						<option name="one" value="<1 year"><1 year</option>
					</select>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
					<?php echo form_label('Responsiveness'); ?>
					<select name="responsive" id="responsive" class="form-control">
						<option value="">Please Select a duration</option>
						<option name="five" value="Very Frequent">Very Frequent</option>
						<option name="four" value="Frequent">Frequent</option>
						<option name="three" value="Occasional">Occasional</option>
						<option name="two" value="Rarely">Rarely</option>
					</select>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
					<?php echo form_label('Disaste Frequency','freqnd');?>
					<?php echo form_input($freqnd); ?>
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
