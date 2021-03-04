<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('update'); ?>
	<input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
	<div class="form-group">
		<label class="form-label">First name</label>
		<input type="text" name="first-name" class="form-control" placeholder="Enter First name" value="<?php echo $user['first_name']; ?>">
	</div>
	<div class="form-group">
		<label class="form-label">Last name</label>
		<input type="text" name="last-name" class="form-control" placeholder="Enter Last name" value="<?php echo $user['last_name']; ?>">
	</div>
	<div class="form-group">
		<label class="form-label">Position</label>
		<input type="text" name="position" class="form-control" placeholder="Enter Position" value="<?php echo $user['position']; ?>">
	</div>
	<div class="text-right">
		<button type="submit" class="btn btn-default">Update</button>
	</div>
</form>