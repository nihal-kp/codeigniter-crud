<?php include_once('header.php') ?>
	<div class="container">
		<?php if($msg1 = $this->session->flashdata('msg1')){ ?>
				<script type="text/javascript"> 
				alert('<?php echo $msg1; ?>');
				</script>
		<?php } ?>
		<?php if($msg2 = $this->session->flashdata('msg2')){ ?>
				<script type="text/javascript"> 
				alert('<?php echo $msg2; ?>');
				</script>
		<?php } ?>
		<?php if($msg3 = $this->session->flashdata('msg3')){ ?>
				<script type="text/javascript"> 
				alert('<?php echo $msg3; ?>');
				</script>
		<?php } ?>
			
		<h3>All User Details</h3>
		<?php echo anchor('welcome/create', 'Add New', ['class'=>'btn btn-primary']);?>			<!-- Prints: <a href="https:localhost.com/codeigniter/index.php/welcome/create" title="">Add New</a> -->
		<table class="table table-striped">
			<thead>
			<tr>
				<th>Name</th>
				<th>Age</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Address</th>
				<th>Action</th>
			</tr>
			</thead>
			<tbody>
			<?php if(count($users)): 
				foreach($users as $user):
			?>
			<tr>
				<td><?php echo $user->name; ?></td>
				<td><?php echo $user->age; ?></td>
				<td><?php echo $user->email; ?></td>
				<td><?php echo $user->phone; ?></td>
				<td><?php echo $user->address; ?></td>
				<td>
					<?php echo anchor("welcome/view/{$user->id}", 'View', ['class'=>'btn btn-info']);?>
					<?php echo anchor("welcome/update/{$user->id}", 'Update', ['class'=>'btn btn-success']);?>
					<?php echo anchor("welcome/delete/{$user->id}", 'Delete', ['class'=>'btn btn-danger']);?>
				</td>
			</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td>No records found!</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>
	</div>
<?php include_once('footer.php') ?>