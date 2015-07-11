<?php
/**
 * Created by PhpStorm.
 * User: thadaninilesh
 * Date: 11/7/15
 * Time: 10:37 PM
 */
?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-sm-12">
			<?php
				$user = array(
					'id' => 'user',
					'name' => 'user',
					'class' => 'btn btn-info btn-lg',
					'value' => 'Add Local Partners',
				);
				$admin = array(
					'id' => 'admin',
					'name' => 'admin',
					'class' => 'btn btn-info btn-lg',
					'value' => 'Add HHF user'
				);
				$evaluation = array(
					'id' => 'evaluation',
					'class' => 'evaluation',
					'name' => 'evaluate',
					'value' => 'Evaluate',
					'class' => 'btn btn-info btn-lg'
				);
				echo form_open('admin/adminDashboard');
			?>

			<div class="col-sm-4">
				<div class="form-group">
					<?php
						echo form_submit($user);
					?>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<?php
						echo form_submit($admin);
					?>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<?php
						echo form_submit($evaluation);
					?>
				</div>
			</div>
		</div>
	</div>
</div>



