<?= $this->extend('layout/index'); ?>


<?= $this->section('konten'); ?>

<?php
$tz = 'Asia/Jakarta';
$dt = new DateTime("now", new DateTimeZone($tz));
$timestamp = $dt->format('Y-m-d');
?>

<div class="container">
  <div class="row">
    <div class="col shadow p-3 mb-5 bg-body rounded">
      <h1 class="h3 mb-4 text-dark text-center"><?= $title; ?></h1>
      <hr class="bg-dark">
      <form action="/daftar/save" method="POST">
        <?= csrf_field(); ?>
        <div class="mb-3">
          <label for="bulan" class="form-label">Nama</label>
          <input class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" type="text" placeholder="Masukan Nama" aria-label=" input example" name="nama" readonly value="<?= $warga['nama']; ?>">
        </div>
        <div class="mb-3">
          <label for="bulan" class="form-label">Id Warga</label>
          <input class="form-control <?= ($validation->hasError('warga.id')) ? 'is-invalid' : ''; ?>" type="number" placeholder="mausukan id warga" aria-label=" input example" name="warga_id" value="<?= $warga['id']; ?>" readonly>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
          <textarea class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?>" id="exampleFormControlTextarea1" rows="3" placeholder="masukan keterangan" name="keterangan" autofocus required><?= old('keterangan'); ?></textarea>
          <div class="invalid-feedback">
            <?= $validation->getError('keterangan'); ?>
          </div>
        </div>
        <div class="mb-3">
          <label for="tanggal" class="form-label">Tanggal</label>
          <input class="form-control" type="text" placeholder=" input" aria-label=" input example" name="tanggal" readonly value="<?= $timestamp; ?>">
        </div>
        <div class="mb-3">
          <label for="bulan" class="form-label">Bulan</label>
          <input class="form-control" type="text" placeholder=" input" aria-label=" input example" name="bulan" readonly value="<?= date('m'); ?>">
        </div>
        <div class="mb-3">
          <label for="tahun" class="form-label">Tahun</label>
          <input class="form-control" type="text" placeholder=" input" aria-label=" input example" name="tahun" readonly value="<?= date('Y'); ?>">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Jumlah</label>
          <input type="number" class="form-control <?= ($validation->hasError('jumlah')) ? 'is-invalid' : ''; ?>" id="exampleFormControlInput1" placeholder="" name="jumlah" value="<?= old('jumlah'); ?>">
          <div class="invalid-feedback">
            <?= $validation->getError('jumlah'); ?>
          </div>
        </div>
        <div class="col">
          <a href="/daftar" class="btn btn-info mb-3 mt-3"><i class="bi bi-arrow-left-square"></i></a>
          <button type="submit" class="btn btn-primary ml-3">Tambah Kas</button>
        </div>
      </form>
    </div>
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3>Penjelasan</h3>
        </div>
        <div class="card-body">
          <p>
            Masukan id warga sesuai dengan yang ada di daftar warga, berikan keterangan dengan jelas.
            <br>
            Jumlah IURAN warga di isi dengan 3 digit angka pertama nominal.
            Contoh :
            <br>
          <ol>
            <li>Iuran warga Rp.500.000 = 500</li>
            <li>Iuran warga Rp.50.000 = 50</li>
          </ol>
          <br>
          minimal pembayaran satu minggu Rp.10.000 dan maksimal pembayaran Rp.900.000.
          </p>
        </div>
      </div>
    </div>
  </div>








</div>


<?= $this->endSection(); ?>