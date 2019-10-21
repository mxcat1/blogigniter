<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo APP_NAME . ' | ' . APP_DESCRIPTION ?></title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/admin/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/admin/custom.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/admin/skins/_all-skins.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

	<?php $this->load->view("admin/template/header"); ?>
	<?php $this->load->view("admin/template/nav"); ?>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>

			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="#">Tables</a></li>
				<li class="active">Simple</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="box">
				<div class="box-header">

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Condensed Full Width Table</h3>
						</div>
						<!-- /.box-header -->
						<?php
						echo form_open('','class="my_form" enctype="multipart/form-data"');
						?>

						<div class="form-group">
							<?php
							echo form_label('Titulo','title');
							?>
							<?php
							$text_input=array(
								'name'=>'title',
								'id'=>'title',
								'value'=>'',
								'class'=>'form-control input-lg'
							);
							echo form_input($text_input);
							?>
						</div>

						<div class="form-group">
							<?php
								echo form_label('URL Limpia','url_clean');
							?>
							<?php
							    $text_url=array(
							    	'name'=>'url_clean',
							    	'id'=>'url_clean',
							    	'value'=>'',
							    	'class'=>'form-control input-lg'
								);
							    echo form_input($text_url);
							?>
						</div>

						<div class="form-group">
							<?php
							    echo form_label('Contenido','content');
							?>
							<?php
							    $content=array(
							    	'name'=>'content',
							    	'id'=>'content',
									'value'=>'',
									'class'=>'form-control input-lg'
								);
							    echo form_textarea($content);
							?>
						</div>
						<div class="form-group">
							<?php
							    echo form_label('Descripcion','description');
							?>
							<?php
							    $description=array(
							    	'name'=>'description',
							    	'id'=>'description',
									'value'=>'',
									'class'=>'form-control input-lg'
								);
							    echo form_textarea($description);
							?>
						</div>
						<div class="form-group">
							<?php
							    echo form_label('Seleccione una Imagen','image');
							?>
							<?php
							    $input_image=array(
							    	'name'=>'image',
							    	'id'=>'image',
									'type'=>'file',
									'value'=>'',
									'class'=>'form-control input-lg'
								);
							    echo form_input($input_image);
							?>
						</div>
						
						<div class="form-group">
							<?php
							    echo form_label('Publicado','posted')." : " ;
								echo form_dropdown('posted',$data_posted,'class="form-control input-lg"');
							?>
						</div>

						<div class="form-group">
							<?php
							    $btn_ssubmit=array(
							    	'name'=>'mysubmit',
							    	'id'=>'mysubmit',
									'value'=>'Guardar',
									'class'=>'btn btn-primary'
								);
							    echo form_submit($btn_ssubmit);
							?>
						</div>
						<?php
						echo form_close();
						?>
						<!-- /.box-body -->
					</div>
				</div>
				<!-- /.box-body -->
			</div>
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<?php $this->load->view("admin/template/footer"); ?>
	<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/js/admin/adminlte.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/admin/demo.js"></script>
</body>
</html>

