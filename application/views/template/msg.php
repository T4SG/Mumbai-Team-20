<?php
if (isset($success)) {
    ?>
    <div class="col-xs-offset-3 col-xs-8">
        <div class="form-group">
            <div class="alert alert-dismissable alert-success" style="margin-top: 10px">
                <button type="button" class="close" data-dismiss="alert"></button>
                <strong>Well done!<br></strong>
                <span style="font-size: 1.1em"><?php echo $success; ?></span>
            </div>
        </div>
    </div>
<?php
}
if (isset($error)) {
    ?>
    <div class="col-xs-offset-3 col-xs-8">
        <div class="form-group">
			<div class="alert alert-dismissable alert-danger" style="margin-top: 10px">
				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<span style="font-size: 1.1em"><?php echo $error; ?></span>
			</div>
        </div>
    </div>
<?php
}
if (validation_errors()) {
?>
<div class="col-xs-offset-3 col-xs-8">
    <div class="form-group">
        <div class="alert alert-dismissable alert-warning" style="margin-top: 10px">
            <button type="button" class="close" data-dismiss="alert"></button>
            <span style="font-size: 1.1em"><?php echo validation_errors(); ?></span>
        </div>
    </div>
</div>
<?php
}
?>