<div class="container">

	<?php if ($this->session->flashdata()) : ?>
		<div class="row mt-3">
			<div class="col-md-6">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Data Mahasiswa</strong> berhasil di Tambahkan <?= $this->session->flashdata('flash'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<h1>Data Mahasiswa</h1>
			<ul class="list-group">
				<?php
				foreach ($mahasiswa as $mhs) {
					?>
					<li class="list-group-item">
						<?= $mhs['Nama']; ?>
						<a href="<?= base_url();?>mahasiswa/hapus" class="badge badge-danger float-right" onclick="return confirm('yakin?')">hapus</a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>