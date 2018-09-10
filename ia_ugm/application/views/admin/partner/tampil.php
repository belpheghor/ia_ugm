 	<h3><b>Partner Data</b></h3>
 	<hr>
 	<a href="<?php echo base_url("admin/partner/add") ?>" class="btn btn-success btn-sm">Create New</a>
 	<br>
 	<br>
 	<table class="table table-bordered table-striped table-responsive" id="thetable">
 		<thead>
 			<tr> 
 				<th>No</th>
 				<th>Partner Name</th>
 				<th>link</th>
 				<th>Option</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php foreach ($partner as $key => $value): ?>
 				<tr>
 					<td><?php echo $key+1; ?></td>
 					<td><?php echo $value['partner_name']; ?></td>
 					<td><?php echo $value['partner_link']; ?></td>
 					<td>
 						<a href="" class="btn btn-warning btn-sm">Detail</a>
 						<a href="<?php echo base_url("admin/partner/edit/$value[partner_id]") ?>" class="btn btn-info btn-sm"> Edit</a>

 						<a href="<?php echo base_url("admin/partner/delete/$value[partner_id]") ?>" class="btn btn-danger btn-sm">Delete</a>
 					</td> 
 				</tr>

 			<?php endforeach ?>
 		</tbody>
 	</table>
