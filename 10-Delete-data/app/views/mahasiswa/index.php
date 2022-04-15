<div class="container mt-3">
  <div class="row">
    <div class="col-lg-6"></div>
    <?php
    Flasher::flash();
    ?>

  </div>
  <div class="row">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data Mahasiswa
      </button>
      <br><br>
      <h3>Daftar Mahasiswa</h3>
      <?php foreach ($data['mhs'] as $mhs) : ?>
        <ul class="list-group">
          <li class="list-group-item">
            <?= $mhs['nama'] ?>
            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge bg-danger float-end ms-1" onclick="return confirm('yakin dihapus?');">Hapus</a>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge bg-primary float-end ms-1">Detail</a>
          </li>
        </ul>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="mb-3">
            <label for="nrp" class="form-label">NRP</label>
            <input type="number" class="form-control" id="nrp" name="nrp">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>

          <div class="mb-3">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Industri">Teknik Industri</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
              <option value="Teknik Kimia">Teknik Kimia</option>
              <option value="Teknik Pangan">Teknik Pangan</option>
            </select>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>