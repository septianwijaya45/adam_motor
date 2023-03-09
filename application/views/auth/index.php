<style>
	body {
		background: linear-gradient(90deg, #A9A9A9, #343a40);
	}
</style>
<div class="container mt-5 pt-4">
	<div class="row justify-content-center mt-5">
		<div class="col-lg-4 col-10 text-white rounded p-4 mt-5">
			<h3 class="mb-4 text-center">Halaman Login</h3>
			<form action="<?= base_url('auth/login'); ?>" method="post">
				<div class="form-group">
					<label for="username"><i class="fas fa-fw fa-user"></i> Username</label>
					<input type="text" id="username" class="form-control rounded-pill" placeholder="Masukkan Username" name="username" required>
				</div>
				<div class="form-group">
					<label for="password"><i class="fas fa-fw fa-lock"></i> Password</label>
					<input type="password" id="password" class="form-control rounded-pill" placeholder="Masukkan Password" name="password" required>
				</div>
				<div class="form-group text-right">
					<button type="submit" class="btn btn-primary btn-block">Login</button>
				</div>
			</form>
			<br><center><p style="color: white;">Website by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>Anggita</a></p></center>
			
		</div>
	</div>
</div>
