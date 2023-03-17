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
								<h4>Create Batch Production</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="batch-production-table.php">Batch Production</a></li>
									<li class="breadcrumb-item active" aria-current="page">Create Batch Production</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									January 2018
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<form>
					<div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Pemesan Produk</label>
                        <div class="col-sm-12 col-md-10">
                            <select class="custom-select col-12">
                                <option selected="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
					</div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Batch Code</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" value="100" type="number">
                        </div>
					</div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Tanggal Mulai Produksi</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control date-picker" placeholder="Select Date" type="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Tanggal Akhir Produksi</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control date-picker" placeholder="Select Date" type="text">
                        </div>
                    </div>
					</form>
					<div class="clearfix">
						<div class="pull-right">
							<a href="batch-production-table.php" class="btn btn-primary btn-sm" role="button">Create</a>
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