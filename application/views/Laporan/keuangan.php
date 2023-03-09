<div class="container">
	<div class="row my-2">
		<div class="col-lg my-2 py-2 header-title">
			<h3><i class="fas fa-fw fa-file-pdf"></i> Halaman Laporan</h3>
		</div>
	</div>
	<div class="row my-2">
		<div class="col-lg-12">
	        <form method="post" action="<?= base_url('laporan'); ?>" class="form-inline bg-info p-3 rounded text-white">
	          <div class="row mx-auto justify-content-center">
	            <div class="col-lg text-center ml-2 p-1">
					<?php if (isset($_POST['cari_tanggal'])): ?>
						<?php 
							$tanggal_awal_heading = date('d-m-Y', strtotime($tanggal_awal));
							$tanggal_akhir_heading = date('d-m-Y', strtotime($tanggal_akhir));
						 ?>
						<h5>Dari Tanggal <?= $tanggal_awal_heading; ?> Sampai Tanggal <?= $tanggal_akhir_heading; ?>, Status Bayar : 
						<?php if ($status_bayar == 'belum_dibayar'): ?>
							<span>Belum Dibayar</span>
						<?php elseif ($status_bayar == 'sudah_dibayar'): ?>
							<span>Sudah Dibayar</span>
						<?php else: ?>
							<span>Semua</span>
						<?php endif ?></h5>
					<?php else: ?>
						<h5>Dari Tanggal <?= date('d F Y'); ?> Sampai Tanggal <?= date('d F Y'); ?></h5>
					<?php endif ?>
	            </div>
	          </div>
	          <div class="row justify-content-center text-center">
	            <div class="col-lg">
	              <div class="form-group my-1">
	                <label class="mx-2">Dari tanggal : </label>
	                <?php if (isset($_POST['cari_tanggal'])): ?>
	                  <input type="date" name="tanggal_awal" class="form-control" value="<?= $tanggal_awal; ?>">
	                <?php else: ?>
	                  <input type="date" name="tanggal_awal" class="form-control" value="<?= date('Y-m-d'); ?>">
	                <?php endif ?>
	              </div>
	            </div>
	            <div class="col-lg">
	              <div class="form-group my-1">
	                <label class="mx-2">Sampai tanggal : </label>
	                <?php if (isset($_POST['cari_tanggal'])): ?>
	                  <input type="date" name="tanggal_akhir" class="form-control" value="<?= $tanggal_akhir; ?>">
	                <?php else: ?>
	                  <input type="date" name="tanggal_akhir" class="form-control" value="<?= date('Y-m-d'); ?>">
	                <?php endif ?>
	              </div>
	            </div>
	            <div class="col-lg mt-4">
	              <div class="form-group my-1">
                    <a href="" class="btn btn-success mx-1" type="submit"><i class="fas fa-fw fa-filter"></i> Cetak</a>
	                <button class="btn btn-warning mx-1" type="button" id="btn-lihat" name="cari_tanggal"><i class="fas fa-fw fa-eye"></i> Lihat</button>
	              </div>
	            </div>
	          </div>
	        </form>
	    </div>
	</div>
</div>