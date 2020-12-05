<?php get_admin_header(); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <span><?php echo lang('index_heading');?></span>
            <a href="<?php echo base_url().'auth/create_user'; ?>" class="btn btn-primary btn-flat">
                <i class="fa fa-plus"></i> Add New
            </a>
        </h1>

        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Menus</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

		<p><?php echo lang('index_subheading');?></p>

		<?php if (isset($_SESSION['message'])) : ?>
			<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong><i class="icon fa fa-check"></i> Success!</strong>
				<?php
				echo $_SESSION['message'];
				unset($_SESSION['message']);
				?>
			</div>
		<?php endif; ?>

	<div class="box box-primary">
		<!-- /.box-header -->
		<div class="box-body table-responsive no-padding">
			<table class="table table-hover table-master">
				<tr>
					<th><?php echo lang('index_fname_th');?></th>
					<th><?php echo lang('index_lname_th');?></th>
					<th><?php echo lang('index_email_th');?></th>
					<th><?php echo lang('index_action_th');?></th>
				</tr>
				<?php foreach ($users as $user):?>
					<tr>
						<td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
						<td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
						<td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
						<td>
							<a href="<?php echo base_url().'auth/edit_user/'.$user->id; ?>/" class="btn btn-sm btn-primary btn-flat">
								<i class="fa fa-edit" ></i>
							</a>


							<button type="button" data-toggle="modal" data-target="#modal-remove-<?php echo $user->id; ?>"  class="btn btn-sm btn-danger btn-flat remove-item">
								<i class="fa fa-trash" ></i>
							</button>

							<form action="<?php echo base_url().'auth/delete/'.$user->id; ?>/" method="post">
								<?php get_csrf_input(); ?>
								<div class="modal fade" id="modal-remove-<?php echo $user->id; ?>">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title">Remove Item</h4>
											</div>
											<div class="modal-body">
												<p><strong><i class="fa fa-warning"></i> Would you like to delete the item?</strong> <br> When you clear the item, you will not be able to retrieve it again</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle-o"></i> Close</button>
												<button name="submit" type="submit" class="btn btn-danger"><i class="fa fa-trash" ></i> Delete</button>
											</div>
										</div>
										<!-- /.modal-content -->
									</div>
									<!-- /.modal-dialog -->
								</div>
								<!-- /.modal -->
							</form>

						</td>
					</tr>
				<?php endforeach;?>
			</table>
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->

<!-- <p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p> -->

</section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php get_admin_footer(); ?>