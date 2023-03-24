<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Create New</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Production</li>
                                    <li class="breadcrumb-item"><a href="list-pemesan-produk.php">List Pemesan Produk</a></li>
									<li class="breadcrumb-item active" aria-current="page">Create New</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<form>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">No. Produk</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" value="100" type="number">
                        </div>
					</div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Kode</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" placeholder="Johnny Brown">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Detail</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" placeholder="Johnny Brown">
                        </div>
                    </div>
					</form>
					<div class="clearfix">
						<div class="pull-right">
							<a href="list-pemesan-produk.php" class="btn btn-primary btn-sm" role="button">Create</a>
						</div>
					</div>
				</div>	
				<!-- Default Basic Forms End -->
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>