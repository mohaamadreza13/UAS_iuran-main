<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                </select> entries</label></div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
              <thead>
                <tr role="row">
                  <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 57px;">Name</th>
                  <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 61px;">Position</th>
                  <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 49px;">Office</th>
                  <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 31px;">Age</th>
                  <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 68px;">Start date</th>
                  <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 67px;">Salary</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th rowspan="1" colspan="1">Name</th>
                  <th rowspan="1" colspan="1">Position</th>
                  <th rowspan="1" colspan="1">Office</th>
                  <th rowspan="1" colspan="1">Age</th>
                  <th rowspan="1" colspan="1">Start date</th>
                  <th rowspan="1" colspan="1">Salary</th>
                </tr>
              </tfoot>
              <tbody>
                <tr class="odd">
                  <td class="sorting_1">Airi Satou</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>33</td>
                  <td>2008/11/28</td>
                  <td>$162,700</td>
                </tr>
                <tr class="even">
                  <td class="sorting_1">Angelica Ramos</td>
                  <td>Chief Executive Officer (CEO)</td>
                  <td>London</td>
                  <td>47</td>
                  <td>2009/10/09</td>
                  <td>$1,200,000</td>
                </tr>
                <tr class="odd">
                  <td class="sorting_1">Ashton Cox</td>
                  <td>Junior Technical Author</td>
                  <td>San Francisco</td>
                  <td>66</td>
                  <td>2009/01/12</td>
                  <td>$86,000</td>
                </tr>
                <tr class="even">
                  <td class="sorting_1">Bradley Greer</td>
                  <td>Software Engineer</td>
                  <td>London</td>
                  <td>41</td>
                  <td>2012/10/13</td>
                  <td>$132,000</td>
                </tr>
                <tr class="odd">
                  <td class="sorting_1">Brenden Wagner</td>
                  <td>Software Engineer</td>
                  <td>San Francisco</td>
                  <td>28</td>
                  <td>2011/06/07</td>
                  <td>$206,850</td>
                </tr>
                <tr class="even">
                  <td class="sorting_1">Brielle Williamson</td>
                  <td>Integration Specialist</td>
                  <td>New York</td>
                  <td>61</td>
                  <td>2012/12/02</td>
                  <td>$372,000</td>
                </tr>
                <tr class="odd">
                  <td class="sorting_1">Bruno Nash</td>
                  <td>Software Engineer</td>
                  <td>London</td>
                  <td>38</td>
                  <td>2011/05/03</td>
                  <td>$163,500</td>
                </tr>
                <tr class="even">
                  <td class="sorting_1">Caesar Vance</td>
                  <td>Pre-Sales Support</td>
                  <td>New York</td>
                  <td>21</td>
                  <td>2011/12/12</td>
                  <td>$106,450</td>
                </tr>
                <tr class="odd">
                  <td class="sorting_1">Cara Stevens</td>
                  <td>Sales Assistant</td>
                  <td>New York</td>
                  <td>46</td>
                  <td>2011/12/06</td>
                  <td>$145,600</td>
                </tr>
                <tr class="even">
                  <td class="sorting_1">Cedric Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>Edinburgh</td>
                  <td>22</td>
                  <td>2012/03/29</td>
                  <td>$433,060</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-5">
            <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
          </div>
          <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
              <ul class="pagination">
                <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                <li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead class="table-dark">
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
    <tbody>
      <?php $i = 1 + (10 * ($currentPage - 1)); ?>
      <?php foreach ($daftar as $d) : ?>
        <tr class="text-center">
          <th scope="row" class="table-dark"><?= $i++; ?></th>
          <td><?= $d['id']; ?></td>
          <td><?= $d['nik']; ?></td>
          <td><?= $d['nama']; ?></td>
          <td><?= $d['kelamin']; ?></td>
          <td><?= substr($d['alamat'], 0, 15); ?></td>
          <td>No. <?= $d['no_rumah']; ?></td>
          <td><?= $d['status']; ?></td>
          <td>
            <a href="/pages/<?= $d['nik']; ?>" class="btn btn-success"><i class="bi bi-eye-fill"></i></a>
            <a href="/pages/edit/<?= $d['nik']; ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>

            <form action="/pages/<?= $d['id']; ?>" method="post" class="d-inline">
              <?= csrf_field(); ?>
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin..?');"><i class="bi bi-trash3"></i></button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <span class="text-center"><?= $pager->links('warga', 'warga_pagination'); ?></span>
</div>



<div class="row justify-content-start">
    <h1 class="h3 mb-4 text-dark"><?= $title; ?></h1>
    <?php if (session()->getFlashdata('pesan')) : ?>
      <div class="alert alert-danger" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
      </div>
    <?php endif; ?>
    <form action="/pages/update/<?= $warga['id']; ?>" method="post">
      <?= csrf_field(); ?>
      <div class="col-6 text-bg-secondary p-3">
        <div class="mb-3">
          <label for="nik" class="form-label">NIK</label>
          <input type="number" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" id="nik" placeholder="No.KTP" name="nik" value="<?= (old('nik')) ? old('nik') : $warga['nik']; ?>" required>
          <div class="invalid-feedback">
            <?= $validation->getError('nik'); ?>
          </div>
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" placeholder="Nama" name="nama" value="<?= (old('nama')) ? old('nama') : $warga['nama']; ?>">
          <div class=" invalid-feedback">
            <?= $validation->getError('nama'); ?>
          </div>
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Jenis Kelamin</label>
          <select class="form-select mb-3 <?= ($validation->hasError('kelamin')) ? 'is-invalid' : ''; ?>" aria-label="Default select example" name="kelamin" required>
            <option selected value=""><?= (old('kelamin')) ? old('kelamin') : $warga['kelamin']; ?></option>
            <option value="L">(L) Laki-laki</option>
            <option value="P">(P) Perempuan</option>
          </select>
          <div class="invalid-feedback">
            <?= $validation->getError('kelamin'); ?>
          </div>
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <textarea class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" rows="3" placeholder="Masuk alamat anda..." name="alamat" value=""><?= (old('alamat')) ? old('alamat') : $warga['alamat']; ?></textarea>
          <div class="invalid-feedback">
            <?= $validation->getError('alamat'); ?>
          </div>
        </div>
        <div class="mb-3">
          <label for="no_rumah" class="form-label">No.
            Rumah</label>
          <input type="number" class="form-control <?= ($validation->hasError('no_rumah')) ? 'is-invalid' : ''; ?>" id="no_rumah" placeholder="No rumah" name="no_rumah" value="<?= (old('no_rumah')) ? old('no_rumah') : $warga['no_rumah']; ?>">
          <div class="invalid-feedback">
            <?= $validation->getError('no_rumah'); ?>
          </div>
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Status</label>
          <select class="form-select mb-3 <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" aria-label="Default select example" name="status" required>
            <option selected value="">
              <?= (old('status')) ? old('status') : $warga['status']; ?>
            </option>
            <option value="1">(1) Belum Nikah</option>
            <option value="2">(2) Sudah Nikah</option>
          </select>
          <div class="invalid-feedback">
            <?= $validation->getError('status'); ?>
          </div>
        </div>
        <div class="col">
          <a href="/warga" class="btn btn-info mt-3"><i class="bi bi-arrow-left-square"></i></a>
          <button type="submit" class="btn btn-primary ml-3">Edit Data</button>
        </div>
      </div>
    </form>
  </div>






<a href="/daftar" class="btn btn-secondary mb-3"><i class="bi bi-arrow-left-square"></i></a>




  <div class="row">
    <h1 class="h3 mb-4 text-dark"><?= $title; ?></h1>
    <div class="col-6 text-bg-secondary p-3">
      <form action="/daftar/save" method="POST">
        <?= csrf_field(); ?>
        <div class="mb-3">
          <label for="bulan" class="form-label">Id Warga</label>
          <input class="form-control <?= ($validation->hasError('warga.id')) ? 'is-invalid' : ''; ?>" type="number"
            placeholder="mausukan id warga" aria-label=" input example" name="warga_id" value="<?= old('warga.id'); ?>">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
          <textarea class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?>"
            id="exampleFormControlTextarea1" rows="3" placeholder="masukan keterangan"
            name="keterangan"><?= old('keterangan'); ?></textarea>
          <div class="invalid-feedback">
            <?= $validation->getError('keterangan'); ?>
          </div>
        </div>
        <div class="mb-3">
          <label for="tanggal" class="form-label">Tanggal</label>
          <input class="form-control" type="text" placeholder=" input" aria-label=" input example" name="tanggal"
            readonly value="<?= $timestamp; ?>">
        </div>
        <div class="mb-3">
          <label for="bulan" class="form-label">Bulan</label>
          <input class="form-control" type="text" placeholder=" input" aria-label=" input example" name="bulan" readonly
            value="<?= date('m'); ?>">
        </div>
        <div class="mb-3">
          <label for="tahun" class="form-label">Tahun</label>
          <input class="form-control" type="text" placeholder=" input" aria-label=" input example" name="tahun" readonly
            value="<?= date('Y'); ?>">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Jumlah</label>
          <input type="number" class="form-control <?= ($validation->hasError('jumlah')) ? 'is-invalid' : ''; ?>"
            id="exampleFormControlInput1" placeholder="" name="jumlah" value="<?= old('jumlah'); ?>">
          <div class="invalid-feedback">
            <?= $validation->getError('jumlah'); ?>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Kas</button>
      </form>
    </div>
    <div class="col-6 text-bg-secondary p-3">
      <h3>Penjelasan</h3>
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