<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
    <?php include('koneksi.php'); ?>
    <?php
        // GET LAST KODE NOMOR FOR INCREMENT
        $query_kode = mysql_query("SELECT * FROM serial_number ORDER BY id DESC LIMIT 1");
        if (mysql_num_rows($query_kode) > 0) {
            // if any data get last digit increment
            $row_kode = mysql_fetch_assoc($query_kode);
            $last_digit_kode_nomor = intval(substr($row_kode["serial_number"], -4));
            $number = sprintf('%04d', $last_digit_kode_nomor + 1);
        } else {
            // if no data exist
            $last_digit_kode_nomor = 0001;   
            $number = sprintf('%04d', $last_digit_kode_nomor);
        }
    ?>
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
								<h4>Form</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Production</li>
                                    <li class="breadcrumb-item"><a href="serial-number.php">List Serial Number</a></li>
									<li class="breadcrumb-item active" aria-current="page">Create Serial Number</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<form method="POST" action="show-qr.php" >
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Production Batch</label>
                            <div class="col-sm-12 col-md-10">
                                <select name="batch_produksi" class="custom-select col-12">
                                    <option selected="">Choose...</option>
                                    <?php 
										// GET ID PEMESAN FROM TBL BATCH_PRODUKSI
										$query_produksi = mysql_query("SELECT * FROM batch_produksi");
										$data_produksi = mysql_fetch_assoc($query_produksi);
										do {										
									?>
										<option value="<?= $data_produksi['id']; ?>" ><?=$data_produksi['kode_batch']; ?></option>
									<?php } while($data_produksi = mysql_fetch_assoc($query_produksi)); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Product Category</label>
                            <div class="col-sm-12 col-md-10">
                                <select name="kategori_produk" class="custom-select col-12">
                                    <option selected="">Choose...</option>
                                    <?php 
										// GET kode kategori FROM TBL kategori_produk
										$query_category = mysql_query("SELECT * FROM kategori_produk");
										$data_category = mysql_fetch_assoc($query_category);
										do {								
									?>
										<option value="<?= $data_category['id']; ?>" ><?= $data_category['kode'] . " - " . $data_category['detail']; ?></option>
									<?php } while($data_category = mysql_fetch_assoc($query_category)); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Kode Nomor</label>
                            <div class="col-sm-12 col-md-10">
                                <input name="kode_nomor" class="form-control" type="text" value="<?= $number ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">LCD</label>
                            <div class="col-sm-12 col-md-10">
                                <select name="LCD" class="custom-select col-12">
                                    <option selected>Choose...</option>
                                    <?php 
										// GET ID perangkat FROM TBL perangkat WHERE perangkat = "LCD"
										$query_perangkat_lcd = mysql_query("SELECT * FROM perangkat WHERE nama_perangkat = 'LCD'");
										$data_lcd = mysql_fetch_assoc($query_perangkat_lcd);
										do {										
									?>
										<option value="<?= $data_lcd['id']; ?>" ><?="Batch-" . $data_lcd['no_batch'] . ", Kardus-" . $data_lcd['no_kardus']; ?></option>
									<?php } while($data_lcd = mysql_fetch_assoc($query_perangkat_lcd)); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">PCB</label>
                            <div class="col-sm-12 col-md-10">
                                <select name="PCB" class="custom-select col-12">
                                    <option selected>Choose...</option>
                                    <?php 
										// GET ID perangkat FROM TBL perangkat WHERE perangkat = "PCB"
										$query_perangkat_pcb = mysql_query("SELECT * FROM perangkat WHERE nama_perangkat = 'PCB'");
										$data_pcb = mysql_fetch_assoc($query_perangkat_pcb);
										do {										
									?>
										<option value="<?= $data_pcb['id']; ?>" ><?="Batch-" . $data_pcb['no_batch'] . ", Kardus-" . $data_pcb['no_kardus']; ?></option>
									<?php } while($data_pcb = mysql_fetch_assoc($query_perangkat_pcb)); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Load Cell</label>
                            <div class="col-sm-12 col-md-10">
                                <select name="LOADCELL" class="custom-select col-12">
                                    <option selected>Choose...</option>
                                    <?php 
										// GET ID perangkat FROM TBL perangkat WHERE perangkat = "LOADCELL"
										$query_perangkat_loadcell = mysql_query("SELECT * FROM perangkat WHERE nama_perangkat = 'LOADCELL'");
										$data_loadcell = mysql_fetch_assoc($query_perangkat_loadcell);
										do {										
									?>
										<option value="<?= $data_loadcell['id']; ?>" ><?="Batch-" . $data_loadcell['no_batch'] . ", Kardus-" . $data_loadcell['no_kardus']; ?></option>
									<?php } while($data_loadcell = mysql_fetch_assoc($query_perangkat_loadcell)); ?>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="pull-right">
                                <!-- <a href="show-qr.php" type="submit" class="btn btn-primary btn-sm" role="button">Create</a> -->
                                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Create">
                            </div>
                        </div>
                    </form>
				</div>	
				<!-- Default Basic Forms End -->
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>