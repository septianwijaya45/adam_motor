<style>
	hr {
		background-color: #aaa;
	}	

	.table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
	  background-color: #fefefe;
	}

	.table > tbody > tr:hover > td, .table > tbody > tr:hover > td > .pesanan > hr {
	    border-top: 1px solid #aaa;
	    border-left: 1px solid #aaa;
	    border-right: 1px solid #aaa;
	    border-bottom: 1px solid #aaa;
	}

</style>

<div class="container">
	<div class="row my-2">
		<div class="col-lg my-2 py-2 header-title">
			<h3><i class="fa fa-cart-plus"></i> Daftar Transaksi</h3>
		</div>
		<div class="col-lg my-2 py-2 header-button">
			<a href="" class="btn btn-primary" data-toggle="modal" data-target="#tambahReturnModal"><i class="fas fa-fw fa-plus"></i> Tambah Pesanan</a>
		</div>
	</div>
	<div class="row my-2">
		<div class="col-lg my-2 py-2">
			<div class="table-responsive">
				<table id="table_id" class="table text-center table-bordered table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Pembeli</th>
						<th>Nama Barang</th>
						<th>Status Return</th>
						<th>Tanggal Return</th>
						<th>Pengembalian Uang</th>
						<th>Pengembalian Stok</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
                    <?php 
                        $no = 1;
                        foreach($return as $row):
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row['nama_pembeli'] ?></td>
                            <td><?= $row['nama_menu'] ?></td>
                            <td><?= $row['status_return'] ?></td>
                            <td><?= $row['tgl_return'] ?></td>
                            <td><?= $row['total_uang'] ? $row['total_uang'] : '-' ?></td>
                            <td><?= $row['qty'] ? $row['qty'] : '-'  ?></td>
                            <td>
                                <a href="" class="btn btn-primary" data-toggle="modal" data-target="<?= '#editReturnModal'.$row['id_return'] ?>"> Edit</a>
                                <div class="modal fade" id="<?= 'editReturnModal'.$row['id_return'] ?>" tabindex="-1" aria-labelledby="tambahTransaksiModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                    <form action="<?= base_url('returnbarang/editReturnBarang/'.$row['id_return']); ?>" method="post">
                                        <div class="modal-content text-left">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="tambahTransaksiModalLabel"><i class="fas fa-fw fa-handshake"></i><sup><i class="fas fa-1x fa-plus"></i></sup> Tambah Transaksi</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="menu">Menu</label>
                                                        <select name="menu" id="menu" class="form-control">
                                                            <option value="" selected disabled class="text-center">== Pilih Menu ==</option>
                                                            <?php foreach($menu as $mn): ?>
                                                                <option value="<?= $mn['id_menu'] ?>" <?= $mn['id_menu'] == $row['id_menu'] ? 'selected' : '' ?>><?= $mn['nama_menu'] ?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="">Nama Pembeli</label>
                                                        <input type="text" name="nama_pembeli" id="nama_pembeli" placeholder="Nama Pembeli" class="form-control" value="<?= $row['nama_pembeli'] ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="">Status Return</label>
                                                        <select name="status_return" id="status_return" class="form-control" required>
                                                            <option value="" selected disabled class="text-center">== Pilih Status Return ==</option>
                                                            <option value="Return Barang" <?= $row['status_return'] == 'Return Barang' ? 'selected' : '' ?>>Return Barang</option>
                                                            <option value="Uang Kembali" <?= $row['status_return'] == 'Uang Kembali' ? 'selected' : '' ?>>Uang Kembali</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div id="record"></div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="">Tanggal Return</label>
                                                        <input type="date" name="tgl_return" id="tgl_return" placeholder="Tanggal Return" class="form-control" value="<?= $row['tgl_return'] ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="">Total Uang</label>
                                                        <input type="number" name="total_uang" id="total_uang" placeholder="Total Uang" class="form-control" value="<?= $row['total_uang'] ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="">Return QTY</label>
                                                        <input type="number" min="0" name="qty" id="qty" placeholder="QTY" class="form-control" value="<?= $row['qty'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-fw fa-times"></i> Batal</button>
                                            <button type="submit" class="btn btn-success"><i class="fas fa-fw fa-save"></i> Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                                <a class="btn btn-sm m-1 btn-danger btn-delete" data-name="<?= $row['id_return']; ?>" href="<?= base_url('returnbarang/deleteReturnBarang/' . $row['id_return']); ?>"><i class="fas fa-fw fa-trash"></i> Hapus</a>
                                <a class="btn btn-sm m-1 btn-warning" data-name="<?= $row['id_return']; ?>" href="<?= base_url('returnbarang/cetak/' . $row['id_return']); ?>"><i class="fas fa-fw fa-print"></i> Cetak</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
				</table>
			</div>	
		</div>
	</div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="tambahReturnModal" tabindex="-1" aria-labelledby="tambahTransaksiModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <form action="<?= base_url('returnbarang/addReturnBarang'); ?>" method="post">
            <div class="modal-content text-left">
                <div class="modal-header">
                <h5 class="modal-title" id="tambahTransaksiModalLabel"><i class="fas fa-fw fa-handshake"></i><sup><i class="fas fa-1x fa-plus"></i></sup> Tambah Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <a class="btn btn-primary mb-2" href="javascript:add();"><i class="fas fa-fw fa-plus"></i> Tambah Pesanan</a>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="menu">Menu</label>
                            <select name="menu" id="menu" class="form-control">
                                <option value="" selected disabled class="text-center">== Pilih Menu ==</option>
                                <?php foreach($menu as $mn): ?>
                                    <option value="<?= $mn['id_menu'] ?>"><?= $mn['nama_menu'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Nama Pembeli</label>
                            <input type="text" name="nama_pembeli" id="nama_pembeli" placeholder="Nama Pembeli" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Status Return</label>
                            <select name="status_return" id="status_return" class="form-control" required>
                                <option value="" selected disabled class="text-center">== Pilih Status Return ==</option>
                                <option value="Return Barang">Return Barang</option>
                                <option value="Uang Kembali">Uang Kembali</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div id="record"></div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Tanggal Return</label>
                            <input type="date" name="tgl_return" id="tgl_return" placeholder="Tanggal Return" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Total Uang</label>
                            <input type="number" name="total_uang" id="total_uang" placeholder="Total Uang" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Return QTY</label>
                            <input type="number" min="0" name="qty" id="qty" placeholder="QTY" class="form-control">
                        </div>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-fw fa-times"></i> Batal</button>
                <button type="submit" class="btn btn-success"><i class="fas fa-fw fa-save"></i> Simpan</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>

<script type="text/javascript">
	function add() {
	    var content = '';
	  	content += `
		<div class="row">
			<div class="col-lg-4">
				<div class="form-group">
	      		<label for="kuantitas[]">Kuantitas</label>
	      		<input type="number" min="1" id="kuantitas[]" class="form-control" placeholder="Masukkan Kuantitas" name="kuantitas[]" required>
	      	</div>
			</div>
			<div class="col-lg">
				<div class="form-group">
	      		<label for="id_menu[]">Nama Menu</label>
	      		<select name="id_menu[]" id="id_menu[]" class="form-control">
	      			<?php foreach ($menu as $dm): ?>
		      			<option value="<?= $dm['id_menu']; ?>"><?= $dm['nama_menu']; ?> | Rp. <?= ucwords($dm['harga_menu']); ?></option>
	      			<?php endforeach ?>
	      		</select>
	      	</div>
			</div>
		</div>`;
	  content += '<a class="btn btn-danger my-2" href="javascript:;" onclick="hapus(this)"><i class="fas fa-fw fa-trash"></i> Hapus Pesanan</a><br />';
	  content += '<hr />';

	  var x = document.createElement('div');
	  x.innerHTML = content;
	  document.getElementById('record').appendChild(x);
	}

	function hapus(element) {
		var x = document.getElementById('record');
		x.removeChild(element.parentNode);
	}

	function add2() {
	    var content = '';
	  	content += `
		<div class="row">
			<div class="col-lg-4">
				<div class="form-group">
	      		<label for="kuantitas[]">Kuantitas</label>
	      		<input type="number" min="1" id="kuantitas[]" class="form-control" placeholder="Masukkan Kuantitas" name="kuantitas[]" required>
	      	</div>
			</div>
			<div class="col-lg-8">
				<div class="form-group">
	      		<label for="id_menu[]">Nama Menu</label>
	      		<select name="id_menu[]" id="id_menu[]" class="form-control">
	      			<?php foreach ($menu as $dm): ?>
		      			<option value="<?= $dm['id_menu']; ?>"><?= $dm['nama_menu']; ?> | Rp. <?= ucwords($dm['harga_menu']); ?></option>
	      			<?php endforeach ?>
	      		</select>
	      	</div>
			</div>
		</div>`;
	  content += '<a class="btn btn-danger my-2" href="javascript:;" onclick="hapus2(this)"><i class="fas fa-fw fa-trash"></i> Hapus Pesanan</a><br />';
	  content += '<hr />';

	  var x2 = document.createElement('div');
	  x2.innerHTML = content;
	  document.getElementById('record2').appendChild(x2);
	}									      	

	function hapus2(element) {
		var x2 = document.getElementById('record2');
		x2.removeChild(element.parentNode);
	}

</script>