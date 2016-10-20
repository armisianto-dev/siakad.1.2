	<script>
    $(document).ready(function() {
        $('#tartikel').DataTable(
        {
            "sSearch": "Pencarian:" ,
            "ordering": false,
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Semua"]],
            "sPaginationType": "full_numbers",
            "language": {
            "lengthMenu": "Menampilkan _MENU_ Baris per halaman",
            "zeroRecords": "Tidak menemukan pencarian yang anda maksud",
            "info": "Halaman _PAGE_ dari _PAGES_ | Total data _MAX_",
            "infoEmpty": "Tidak menemukan data",
            "infoFiltered": "(hasil pencarian dari _MAX_ data)",
            "paginate": {
              "next": "<i class='fa fa-forward'></i>",
              "previous": "<i class='fa fa-backward'></i>",
              "first": "<i class='fa fa-fast-backward'></i>",
              "last": "<i class='fa fa-fast-forward'></i>"
            }
           }
        
        });
        
    } );
</script>
	<div class="row">
	    <div class="col-xs-12">
	        <div class="box">
	            <div class="box-header">
	                <h3 class="box-title"><i class="ion-person"></i> Users</h3>
	                 <a style="height:100%;padding:9px 10px;" class="btn btn-sm btn-primary btn-flat pull-right" href="<?=site_url('register')?>"><span class="fa fa-plus-square"></span>&nbsp;Tambah User</a>&nbsp;
	            </div><!-- /.box-header -->
	            <div class="box-body table-responsive">
	            	<!-- notif -->
	                <div class="alert alert-info alert-dismissable col-centered col-xs-5" <?php if(is_string($message)){echo 'style="display:block; margin-bottom:7px;"';}else{echo 'style="display:none;"';}?> >
	                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                    <?php echo $message;?>  
	                </div>

	                <table class="table table-hover table-condensed table-bordered" id="tartikel"> 
	                	<thead>
	                		<tr>
								<th style="text-align:center;">#</th>
								<th>NIS/NIP</th>
								<th>Email</th>
								<th>Groups</th>
							</tr>
						</thead>
						<?php
							if(!empty($users)){
								$i = 1; 
								foreach ($users as $user):
						?>	
							<tr>
					            <td width="3%" style="text-align:center;"><?php echo $i++?></td>
					            <td width="25%"><?php echo $user->username;?></td>
					            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
								<td>
									<?php foreach ($user->groups as $group):?>
										<span class="label label-info"><?php echo htmlspecialchars(ucwords(str_replace('_', ' ', $group->name)),ENT_QUOTES,'UTF-8')?></span>
					                <?php endforeach;?>
									
									<span class="pull-right">
										<?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, 'Active','class="label label-success" title="Deactivate this user"') : anchor("auth/activate/". $user->id, 'Non Active','class="label label-default" title="Activate this user"');?>
										<?php echo anchor("auth/edit_user/".$user->id, 'Edit','class="label label-warning" title="Edit '.htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8').' data"');?>
										<?php 
											if(!($this->ion_auth->user()->row()->id == $user->id)){
												echo anchor("auth/delete_user/".$user->id, 'Delete','class="label label-danger" title="Delete '.htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8').' data" onClick="return confirm(\'Yakin ingin menghapus data pengguna dengan nama '.htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8').' ?\');"');
											}else{
												echo '<small class="label label-default">Delete</small>';
											}
										?>
									</span>
								</td>
							</tr>
						<?php 
								endforeach;
							}else{
						?>
							<tr><td colspan="7" align="center">Tidak ada data</td></tr>
						<?php 
							}
						?>
					</table>
				</div><!-- /.box-body -->
	        </div><!-- /.box -->                            
	    </div>
	</div>