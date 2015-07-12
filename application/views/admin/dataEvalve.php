<?php
/**
 * Created by PhpStorm.
 * User: thadaninilesh
 * Date: 12/7/15
 * Time: 1:46 AM
 */
	$coste = array(
		"id" => "coste",
		"name" => "ce",
		"placeholder" => "Cost Importance",
		"maxlength" => "50",
		"class" => "form-control element-width-3",
		"autocomplete" => "off"
	);
	$time = array(
		"id" => "time",
		"name" => "tr",
		"placeholder" => "Time Importance",
		"maxlength" => "50",
		"class" => "form-control element-width-3",
		"autocomplete" => "off"
	);
	$respc = array(
		"id" => "respc",
		"name" => "rr",
		"placeholder" => "Responsibility Importance",
		"maxlength" => "50",
		"class" => "form-control element-width-3",
		"autocomplete" => "off"
	);
	$disr = array(
		"id" => "disr",
		"name" => "dr",
		"placeholder" => "Distance Importance",
		"maxlength" => "50",
		"class" => "form-control element-width-3",
		"autocomplete" => "off"
	);
	$coll = array(
		"id" => "coll",
		"name" => "cr",
		"placeholder" => "Collaboration Importance",
		"maxlength" => "50",
		"class" => "form-control element-width-3",
		"autocomplete" => "off"
	);
	$support = array(
		"id" => "support",
		"name" => "sr",
		"placeholder" => "Support Importance",
		"maxlength" => "50",
		"class" => "form-control element-width-3",
		"autocomplete" => "off"
	);
	$evaluate = array(
		"id" => "evaluate",
		"name" => "evaluation",
		"class" => "btn btn-lg btn-success btn-block",
		"value" => "Evaluate Data"
	);
	echo form_open('admin/dataEvaluation');
?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-sm-12">
			<h1 class="page-header" style="margin-top: 10px">Data Evaluation Parameters</h1>
		</div>
	</div>
<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-6">
			<div class="form-group">
				<?php
					echo form_label("Cost &nbsp;*","coste");
					echo form_input($coste);
				?>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<?php
					echo form_label("Time &nbsp;*","time");
					echo form_input($time);
				?>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<?php
					echo form_label("Responsibility &nbsp;*","rr");
					echo form_input($respc);
				?>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<?php
					echo form_label("Distance &nbsp;*","disr");
					echo form_input($disr);
				?>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<?php
					echo form_label("Collaboration &nbsp;*","coll");
					echo form_input($coll);
				?>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<?php
					echo form_label("Support &nbsp;*","support");
					echo form_input($support);
				?>
			</div>
		</div>
		<div class="col-sm-offset-3 col-sm-6">
			<div class="form-group">
				<?php
					echo form_submit($evaluate);
				?>
			</div>
		</div>
	</div>
</div>
<?php echo form_close(); ?>

</div>