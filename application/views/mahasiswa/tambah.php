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
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama">
        </div>
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" name="nim" class="form-control" id="nim">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Sistem Informasi Akuntansi">Sistem Informasi Akuntansi</option>
            <option value="Tekik Informatika">Teknik Informatika</option>
            <option value="Manajemen Informatika">Manejemen Informatika</option>
            <option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
    </form>
    
  </div>
</div>

</div>

</div></div>