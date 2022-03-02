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
  
  <!-- Button trigger modal -->
  <div class="d-flex justify-content-end my-2">
    <button type="button" class="btn btn-primary btn-sm tambahKategori" data-toggle="modal" data-target="#kategoriModal">
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
            <th scope="col">Kategori</th>
            <th scope="col">Tanggal Input</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($data['kategori'] as $kategori) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $kategori['kategori']; ?></td>
              <td><?= $kategori['tgl_input']; ?></td>
              <td>
                <!-- Ubah Data -->
                <a href="<?= BASEURL; ?>/kategori/ubah/<?= $kategori['id_kategori']; ?>" class="mb-1 btn btn-success btn-sm modalUbahKategori" data-toggle="modal" data-target="#kategoriModal" data-id_kategori="<?= $kategori['id_kategori']; ?>"> Ubah </a>
                <!-- Hapus Data -->
                <a href="<?= BASEURL; ?>/kategori/hapus/<?= $kategori['id_kategori']; ?>" class="mb-1 btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini ?');"> Hapus </a>
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
</div>

<!-- Modal -->
<div class="modal fade" id="kategoriModal" tabindex="-4" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog d-flex justify-content-center">
    <div class="modal-content w-75">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/kategori/tambah" method="post">
          <input type="hidden" name="id_kategori" id="id_kategori">
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" autocomplete="off">
             </div>
            <div class="form-group">
                <label for="tgl_input">Tanggal Input</label>
                <input type="text" required readonly="readonly" class="form-control" value="<?=  date("j F Y, G:i");?>" id="tgl_input" name="tgl_input">
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