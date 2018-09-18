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
 				<th>Requested Permission</th>
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
 						<?php if ($value['partner_status']=="Pending"): ?>
 							<span style="color: red"><?php echo $value['partner_status'] ?></span>
 						<?php endif ?>
 						<?php if ($value['partner_status']=="Accepted"): ?>
 							<span style="color: green">Accepted</span>
 							
 						<?php endif ?>
 					</td> 
 					<td>
 						<?php if ($value['partner_status']!="Pending"): ?>
 							<a href="<?php echo base_url("admin/partner/status/$value[partner_id]") ?>" class="btn btn-success btn-xs hidden">Accept</a>
 						<?php else: ?>
 							<a href="<?php echo base_url("admin/partner/status/$value[partner_id]") ?>" class="btn btn-success btn-xs">Accept</a>
 							<?php endif ?>
 						<a href="<?php echo base_url("#partner"); ?>" class="btn btn-warning btn-xs">Detail</a>
 						<a href="<?php echo base_url("admin/partner/edit/$value[partner_id]") ?>"
 							class="btn btn-info btn-xs">Edit</a>
 						<a href="<?php echo base_url("admin/partner/delete/$value[partner_id]") ?>" class="btn btn-danger btn-xs">Delete</a>
 					</td>
 				</tr>

 			<?php endforeach ?>
 		</tbody>
 	</table>
