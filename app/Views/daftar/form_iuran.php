<?= $this->extend('layout/index'); ?>


<?= $this->section('konten'); ?>



<div class="container">

  <form action="/home/simpan_from" method="post">
    
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <select class="form-select mb-3" aria-label="Default select example" name="status" required value="">
        <option selected>Pilih Status Anda
          </option>
          <?php foreach($warga as $d) : ?>
        <option value="<?php $d['id'] ?>"><?= $d['nama']; ?></option>
        <?php endforeach; ?>
      </select>
      <div class="invalid-feedback">
        <?= $validation->getError('status'); ?>
      </div>
    </div>
  </form>

</div>




<?= $this->endSection(); ?>