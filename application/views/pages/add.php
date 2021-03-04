<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('add'); ?>
	<div class="form-group">
		<label class="form-label">First name</label>
		<input type="text" name="first-name" class="form-control" placeholder="Enter First name">
	</div>
	<div class="form-group">
		<label class="form-label">Last name</label>
		<input type="text" name="last-name" class="form-control" placeholder="Enter Last name">
	</div>
	<div class="form-group">
		<label class="form-label">Position</label>
		<input type="text" name="position" class="form-control" placeholder="Enter Position">
	</div>
	<div class="text-right">
		<button type="submit" class="btn btn-default">Save</button>
	</div>
</form>