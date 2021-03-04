<h1>List of Employee</h1>
<table>
	<thead>
		<tr>
			<th>#</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Position</th>
			<th>Create Date</th>
			<th>
				<a href="<?php echo base_url(); ?>add" class="btn btn-green">Add</a>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($users as $user): ?>
		<tr>
			<th><?php echo $user['id']; ?></th>
			<td><?php echo $user['first_name']; ?></td>
			<td><?php echo $user['last_name']; ?></td>
			<td><?php echo $user['position']; ?></td>
			<td><?php echo date("Y-m-d", strtotime($user['create_date'])); ?></td>
			<td>
				<a href="<?php echo base_url(); ?>pages/edit/<?php echo $user['id']?>" class="btn btn-yellow">Edit</a>
				<a href="<?php echo base_url(); ?>pages/delete/<?php echo $user['id']?>" class="btn btn-red btn-delete">Delete</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<div class="modal">
	<div class="modal-overlay"></div>
	<div class="modal-wrap">
		<div class="h1">Are you sure you want to delete this?</div>
		<?php echo form_open('/delete'); ?>
			<button type="submit" class="btn btn-default btn-red">Delete</button>
			<a href="#" class="btn btn-cancel btn-default">Cancel</a>
		</form>
	</div>
</div>