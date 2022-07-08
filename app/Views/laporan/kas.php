<?= $this->extend('layout/index'); ?>


<?= $this->section('konten'); ?>
<div class="container-fluid">

  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead class="table-dark">
        <tr>
          <th scope="col">NO</th>
          <th scope="col">NIK</th>
          <th scope="col">Nama</th>
          <th scope="col">keterangan</th>
        </tr>
      </thead>
      <?php 
      $n = 1;
      foreach($kas as $row => $values) : ?>
      <tbody>
        <tr>
          <th scope="row"><?= $n++; ?></th>
          <td><?= $values->nik ?></td>
          <td><?= $values->nama ?></td>
          <td><?= $values->keterangan ?></td>
        </tr>
      </tbody>
      <?php endforeach; ?>
    </table>
  </div>

</div>

<?= $this->endSection(); ?>