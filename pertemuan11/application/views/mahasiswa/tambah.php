<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <?php if (validation_errors()):?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors();?>
                    </div>
                    <?php endif;?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Pilih Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option>Teknik Informatika</option>
                                <option>Sistem Informasi</option>
                                <option>Ilmu Komputer</option>
                                <option>Teknik Komputer</option>
                                <option>Manajemen Informatika</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-danger float-right">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>