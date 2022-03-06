<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $data['title'] ?> </h1>
  
  <!-- Alert -->
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash() ?>
    </div>
  </div>
  <!-- End Alert -->

  <!-- Reports -->
  <div class="d-flex">
    <a href="<?= BASEURL; ?>/customer/print" target="_blank" class="btn btn-sm btn-primary shadow-sm"><i class="fa-solid fa-download"></i> Cetak Data <?= $data['title']; ?></a>
  </div>
  <!-- End Reports -->
  
  <!-- Button trigger modal -->
  <div class="d-flex justify-content-end my-2">
    <button type="button" class="btn btn-primary btn-sm tambahCustomer" data-toggle="modal" data-target="#cusModal">
      Tambah <?= $data['title']; ?>
    </button>
  </div>
  <!-- End Button Trigger -->

  <!-- Table -->
  <div class="w-100">
    <div class="table-responsive">
      <table class="display responsive nowrap table text-center" width="100%" id="tablePos">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Customer</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tlp</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($data['customer'] as $cus) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $cus['namaCustomer']; ?></td>
              <td><?= $cus['alamatCustomer']; ?></td>
              <td><?= $cus['tlpCustomer']; ?></td>
              <td>
                <!-- Ubah Data -->
                <a href="<?= BASEURL; ?>/customer/ubah/<?= $cus['id_customer']; ?>" class="mb-1 btn btn-success btn-sm modalUbahCustomer" data-toggle="modal" data-target="#cusModal" data-id_customer="<?= $cus['id_customer']; ?>"> Ubah </a>
                <!-- Hapus Data -->
                <a href="<?= BASEURL; ?>/customer/hapus/<?= $cus['id_customer']; ?>" class="mb-1 btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini ?');"> Hapus </a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- End container-->
</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="cusModal" tabindex="-2" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog d-flex justify-content-center">
    <div class="modal-content w-75">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/customer/tambah" method="post">
          <input type="hidden" name="id_customer" id="id_customer">
          <div class="form-group">
            <label for="namaCustomer">Nama Customer</label>
            <input type="text" class="form-control" id="namaCustomer" name="namaCustomer" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="alamatCustomer">Alamat</label>
            <textarea class="form-control" id="alamatCustomer" name="alamatCustomer" rows="3" autocomplete="off"></textarea>
          </div>
          <div class="form-group">
            <label for="tlpCustomer">Tlp</label>
            <input type="number" class="form-control" id="tlpCustomer" name="tlpCustomer" autocomplete="off">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary btn-sm">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>