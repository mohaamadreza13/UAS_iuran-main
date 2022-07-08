<?= $this->extend('layout/index'); ?>
<?= $this->section('konten'); ?>


<div class="container">

  <div class="daftar w-50 ml-5 shadow p-3 mb-5 bg-body rounded">
    <form action="/pages/save" method="post" class="p-4">
      <?= csrf_field(); ?>
      <div class="header">
        <h1 class="h3 mb-4 text-dark text-center"><?= $title; ?></h1>
        <hr class="bg-dark">
      </div>
      <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="number" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" id="nik" placeholder="No.KTP" name="nik" value="<?= old('nik'); ?>">
        <div class="invalid-feedback">
          <?= $validation->getError('nik'); ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" placeholder="Nama" name="nama" value="<?= old('nama'); ?>">
        <div class=" invalid-feedback">
          <?= $validation->getError('nama'); ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Jenis Kelamin</label>
        <select class="form-select mb-3 <?= ($validation->hasError('kelamin')) ? 'is-invalid' : ''; ?>" aria-label="Default select example" name="kelamin" required value="<?= old('kelamin'); ?>">
          <option selected>Pilih Jenis kelamin</option>
          <option value="L">Laki - laki</option>
          <option value="P">Perempuan</option>
        </select>
        <div class="invalid-feedback">
          <?= $validation->getError('kelamin'); ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" rows="3" placeholder="Masuk alamat anda..." name="alamat" value=""><?= old('alamat'); ?></textarea>
        <div class="invalid-feedback">
          <?= $validation->getError('alamat'); ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="no_rumah" class="form-label">No.
          Rumah</label>
        <input type="number" class="form-control <?= ($validation->hasError('no_rumah')) ? 'is-invalid' : ''; ?>" id="no_rumah" placeholder="No rumah" name="no_rumah" value="<?= old('no_rumah'); ?>">
        <div class="invalid-feedback">
          <?= $validation->getError('no_rumah'); ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Status</label>
        <select class="form-select mb-3 <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" aria-label="Default select example" name="status" required value="<?= old('status'); ?>">
          <option selected>Pilih Status Anda
          </option>
          <option value="1">Belum Nikah</option>
          <option value="2">Sudah Nikah</option>
        </select>
        <div class="invalid-feedback">
          <?= $validation->getError('status'); ?>
        </div>
      </div>
      <div class="col">
          <a href="/warga" class="btn btn-info mt-3 mr-3"><i class="bi bi-arrow-left-square"></i></a>
          <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
        </div>
    </form>
  </div>

</div>


<?= $this->endSection(); ?>