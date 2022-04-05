<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Alert -->
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash() ?>
    </div>
  </div>
  <!-- End Alert -->

  <!-- Page Heading -->
  <div class="card rounded my-4" style="max-width: 100%; height: 80px;">
      <div class="card-body">
        <a class="btn btn-sm text-dark font-weight-bold" readonly style="font-size: 120%;"><?= $data['title']; ?></a>
  
        <button type="button" class="btn btn-sm btn-primary mt-1 float-right tambahSupplier" data-toggle="modal" data-target="#supModal"> <i class="fa fa-plus mr-1"></i> Tambah Supplier </button>
        
        <a href="<?= BASEURL; ?>/supplier/print" target="_blank" class="btn btn-sm btn-success shadow-sm float-right mt-1 mr-2"><i class="fa-solid fa-download mr-1"></i> Cetak Data <?= $data['title']; ?></a>
    </div>
  </div>
  <!-- Page Heading End -->

  <!-- Table -->
  <div class="w-100">
    <div class="table-responsive">
      <table class="display responsive nowrap table text-center" width="100%" id="tablePos">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Supplier</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tlp</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($data['supplier'] as $sup) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $sup['namaSupplier']; ?></td>
              <td><?= $sup['alamatSupplier']; ?></td>
              <td><?= $sup['tlpSupplier']; ?></td>
              <td><?= $sup['deskripsi']; ?></td>
              <td>
                <!-- Ubah Data -->
                <a href="<?= BASEURL; ?>/supplier/ubah/<?= $sup['id_supplier']; ?>" class="mb-1 btn btn-success btn-sm tampilModalUbah" data-toggle="modal" data-target="#supModal" data-id_supplier="<?= $sup['id_supplier']; ?>"> Ubah </a>
                <!-- Hapus Data -->
                <a href="<?= BASEURL; ?>/supplier/hapus/<?= $sup['id_supplier']; ?>" class="mb-1 btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini ?');"> Hapus </a>
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
<div class="modal fade" id="supModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog d-flex justify-content-center">
    <div class="modal-content w-75">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data <?= $data['title']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=  BASEURL; ?>/supplier/tambah" method="post">
          <input type="hidden" name="id_supplier" id="id_supplier">
          <div class="form-group">
            <label for="namaSupplier">Nama Supplier</label>
            <input type="text" class="form-control" id="namaSupplier" name="namaSupplier" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="alamatSupplier">Alamat</label>
            <textarea class="form-control" id="alamatSupplier" name="alamatSupplier" rows="3" autocomplete="off"></textarea>
          </div>
          <div class="form-group">
            <label for="tlpSupplier">Tlp</label>
            <input type="number" class="form-control" id="tlpSupplier" name="tlpSupplier" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" autocomplete="off">
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