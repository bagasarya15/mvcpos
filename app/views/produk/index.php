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
    <a href="<?= BASEURL; ?>/produk/print" target="_blank" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Cetak Data <?= $data['title']; ?></a>
  </div>
  <!-- End Reports -->
  
  <!-- Button trigger modal -->
  <div class="d-flex justify-content-end my-2">
    <button type="button" class="btn btn-primary btn-sm tambahCustomer" data-toggle="modal" data-target="#produkModal">
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
            <th scope="col">Kode Barang</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga Beli</th>
            <th scope="col">Harga Jual</th>
            <th scope="col">Satuan Barang</th>
            <th scope="col">Stok</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($data['produk'] as $produk) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $produk['kodeBarang']; ?></td>
              <td><?= $produk['namaBarang']; ?></td>
              <td><?= $produk['hargaBeli']; ?></td>
              <td><?= $produk['hargaJual']; ?></td>
              <td><?= $produk['satuanBarang']; ?></td>
              <td><?= $produk['stok']; ?></td>
              <td>
                <!--Detail  -->
                <a href="<?= BASEURL; ?>/produk/detail<?= $produk['id_produk']; ?>" class="mb-1 btn btn-warning btn-sm">Detail</a>
                <!-- Ubah Data -->
                <a href="<?= BASEURL; ?>/produk/ubah/<?= $produk['id_produk']; ?>" class="mb-1 btn btn-success btn-sm modalUbahProduk" data-toggle="modal" data-target="#produkModal" data-id_produk="<?= $produk['id_produk']; ?>"></i> Ubah </a>
                <!-- Hapus Data -->
                <a href="<?= BASEURL; ?>/produk/hapus/<?= $produk['id_produk']; ?>" class="mb-1 btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini ?');"> Hapus </a>
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
<div class="modal fade" id="produkModal" tabindex="-3" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog d-flex justify-content-center">
    <div class="modal-content w-100">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/produk/tambah" method="post">
          <input type="hidden" name="id_produk" id="id_produk">
          <div class="form-group">
            <label for="namaBarang">Nama Barang</label>
            <input type="text" class="form-control" id="namaBarang" name="namaBarang" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="alamatCustomer">Kategori</label>
            <input type="text" class="form-control" id="kategori" name="kategori" autocomplete="off">
        </div>
          <div class="form-group">
            <label for="tlpCustomer">Tlp</label>
            <input type="number" class="form-control" id="tlpCustomer" name="tlpCustomer" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="tgl_input">Tanggal Input</label>
            <input type="text" required readonly="readonly" class="form-control" value="<?=  date("j F Y, G:i");?>" name="tgl_input">
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