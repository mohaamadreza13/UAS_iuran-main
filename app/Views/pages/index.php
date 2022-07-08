<?= $this->extend('layout/index'); ?>


<?= $this->section('konten'); ?>
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row">
    <div class="col-4">
      <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    </div>
    <div class="col-4">
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-primary" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="col-4">
      <form action="" method="GET">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="masukan NIK pencarian..." name="keyword" autofocus>
          <button class="btn btn-outline-secondary" type="submit" name="submit"><i class="bi bi-search"></i></button>
        </div>
      </form>
    </div>
  </div>

  <div class="row justify-content-between">
    <div class="col-4">
      <a href="/pages/create" class="btn btn-primary mb-3"><i class="bi bi-plus-square-fill"> Data Warga</i></a>
    </div>
    <div class="col-4">
      <p>L = Laki - Laki <br> P = Perempuan</p>
    </div>
    <div class="col-4">
      <p>1 = Belum Menikah <br> 2 = Sudah Menikah</p>
    </div>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="row">
        <div class="col">
          <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
          <div class="row">
            <div class="col-sm-12">
              <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                <thead>
                  <tr class="text-center">
                    <th scope="col">NO</th>
                    <th scope="col">Id Warga</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">L/P</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No.Rumah</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr class="text-center">
                    <th scope="col">NO</th>
                    <th scope="col">Id Warga</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">L/P</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No.Rumah</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php $i = 1 + (10 * ($currentPage - 1)); ?>
                  <?php foreach ($daftar as $d) : ?>
                    <tr class="text-center">
                      <th scope="row"><?= $i++; ?></th>
                      <td><?= $d['id']; ?></td>
                      <td><?= $d['nik']; ?></td>
                      <td><?= $d['nama']; ?></td>
                      <td><?= $d['kelamin']; ?></td>
                      <td><?= substr($d['alamat'], 0, 15); ?></td>
                      <td>No. <?= $d['no_rumah']; ?></td>
                      <td><?= $d['status']; ?></td>
                      <td>
                        <div class="row">
                          <div class="col">
                            <a href="/pages/<?= $d['nik']; ?>" class="btn btn-success"><i class="bi bi-eye-fill"></i></a>
                            <a href="/pages/edit/<?= $d['nik']; ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                          </div>
                        </div>
                        <div class="row mt-2">
                          <div class="col">
                            <a href="/daftar/create/<?= $d['nik']; ?>" class="btn btn-info"><i class="bi bi-currency-dollar"></i></a>
                            <form action="/pages/<?= $d['id']; ?>" method="post" class="d-inline">
                              <?= csrf_field(); ?>
                              <input type="hidden" name="_method" value="DELETE">
                              <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin..?');"><i class="bi bi-trash3"></i></button>
                            </form>
                          </div>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <span class="text-center"><?= $pager->links('warga', 'warga_pagination'); ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>

<?= $this->endSection(); ?>