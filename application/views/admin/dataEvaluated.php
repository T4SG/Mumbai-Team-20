<?php
/**
 * Created by PhpStorm.
 * User: thadaninilesh
 * Date: 12/7/15
 * Time: 5:17 AM
 */
?>
<div class="row">
	<div class="page-header">
		<h1>Prioritized Data</h1>
	</div>
</div>
<div class="col-sm-12">
	<div class="panel panel-info">
		<div class="panel-heading" style="text-align: center">
			<h3>Schools to Rebuild</h3>
		</div>
		<!-- /.panel-heading -->
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
					<tr>
						<th>School</th>
						<th>Location</th>
						<th>Investment</th>
						<th>Duration</th>
						<th>Responsive</th>
						<th>Collaboration</th>
						<th>Distance</th>
						<th>Support</th>
						<th>Result</th>
					</tr>
					</thead>
					<tbody>
					<?php
						foreach($evaluated->result_array() as $fetchrow){
							echo "<tr class='odd gradeX'>";
							echo "<td>".$fetchrow['Name']."</td>";
							echo "<td>".$fetchrow['Place'].",".$fetchrow['State'].",".$fetchrow['Country'];
							echo "<td>".$fetchrow['coste'];
							echo "<td>".$fetchrow['timee']."</td>";
							echo "<td>".$fetchrow['respc']."</td>";
							echo "<td>".$fetchrow['coll']."</td>";
							echo "<td>".$fetchrow['disr']."</td>";
							echo "<td>".$fetchrow['support']."</td>";
							echo "<td>".$fetchrow['result']."</td>";
						}
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
