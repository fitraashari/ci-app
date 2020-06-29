<div class="container">
<div class="row mt-3">
<div class="col-md-6">
<div class="card shadow">
  <div class="card-header">
    Form Tambah Mahasiswa
  </div>
  <div class="card-body">
      <?php if(validation_errors()): ?>
      <div class="alert alert-danger" role="alert">
      <?= validation_errors(); ?>
      </div>
      <?php endif?>
    <form action="" method="post">
    <input type="hidden" name="id" class="form-control" id="id" value="<?= $mahasiswa['id'] ?>">

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama'] ?>">
        </div>
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" name="nim" class="form-control" id="nim" value="<?= $mahasiswa['nim'] ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email" value="<?= $mahasiswa['email'] ?>">
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
            <option value="Sistem Informasi" <?= ($mahasiswa['jurusan']=='Sistem Informasi'?'selected':'') ?>>Sistem Informasi</option>
            <option value="Sistem Informasi Akuntansi" <?= ($mahasiswa['jurusan']=='Sistem Informasi Akuntansi'?'selected':'') ?>>Sistem Informasi Akuntansi</option>
            <option value="Tekik Informatika" <?= ($mahasiswa['jurusan']=='Teknik Informatika'?'selected':'') ?>>Teknik Informatika</option>
            <option value="Manajemen Informatika" <?= ($mahasiswa['jurusan']=='Manajemen Informatika'?'selected':'') ?>>Manejemen Informatika</option>
            <option value="Komputerisasi Akuntansi" <?= ($mahasiswa['jurusan']=='Komputerisasi Akuntansi'?'selected':'') ?>>Komputerisasi Akuntansi</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary float-right">Ubah Data</button>
    </form>
    
  </div>
</div>

</div>

</div></div>