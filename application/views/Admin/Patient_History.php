<?php include_once ('A_header.php'); ?>

<div class="col-md-10">
	<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Bootstrap dataTables</div>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>SR.no</th>
								<th>UID</th>
								<th>Date of creation</th>
								<th>Hospital ID</th>
								<th>Doctor id</th>
								<th>Disease ID</th>
								<th>DESCRIPTION</th>
								<th>Report Link</th>
							</tr>
						</thead>
						<tbody>
						<?php if(count($querry)):?>
						<?php foreach($querry as $q):?>
							<tr class="odd gradeX">
								<td><?= $q->sr_no ?></td>
								<td><?= $q->uid ?></td>
								<td><?= $q->dt_of_cre ?></td>
								<td><?= $this->encrypt->decode($q->hosp_id) ?> </td>
								<td><?= $this->encrypt->decode($q->doc_id) ?></td>
								<td><?= $q->disease_id ?></td>
								<td><?= $this->encrypt->decode($q->descp) ?></td>
								<td><?= $this->encrypt->decode($q->rep_link) ?></td>
								
							</tr>
							<?php endforeach;?>
							<?php endif;?>
							
						</tbody>
					</table>
  				</div>
  			</div>
  			</div>
  			  
 
  
  			 <?php include_once 'A_footer.php';?>
