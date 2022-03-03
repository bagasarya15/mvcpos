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
    <button type="button" class="btn btn-primary btn-sm tambahProduk" data-toggle="modal" data-target="#produkModal">
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
            <th scope="col">Kategori</th>
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
              <td><?= $produk['id_kategori']; ?></td>
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
    <div class="modal-content w-75">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/produk/tambah" method="POST">
          <input type="hidden" name="id_produk" id="id_produk">
          <div class="form-group">
            <label for="kodeBarang">Kode Barang</label>
            <input type="text" value="BRG" class="form-control" name="kodeBarang" id="kodeBarang">
          </div>
          <div class="form-group">
            <label for="id_kategori">Kategori</label>
            <select id="id_kategori" name="id_kategori" class="form-control">
              <?php foreach ($data['kategori'] as $kat): ?>
                <option value="<?= $kat['id_kategori']; ?>"><?= $kat['kategori']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
              <label for="namaBarang">Nama Barang</label>
              <input type="text" class="form-control" name="namaBarang" id="namaBarang" autocomplete="off">
          </div>
          <div class="form-group">
              <label for="hargaBeli">Harga Beli</label>
              <input type="text" class="form-control" name="hargaBeli" id="hargaBeli" autocomplete="off">
          </div>
          <div class="form-group">
              <label for="hargaJual">Harga Jual</label>
              <input type="text" class="form-control" name="hargaJual" id="hargaJual" autocomplete="off">
          </div>
          <div class="form-group">
              <label for="satuanBarang">Satuan Barang</label>
              <select id="satuanBarang" name="satuanBarang" class="form-control">
                <option value="-">-</option>
                <option value="PCS">PCS</option>
                <option value="Liter">Liter</option>
                <option value="Kg">Kg</option>
              </select>
          </div>
          <div class="form-group">
              <label for="stok">Stok Barang</label>
              <input type="number" class="form-control" name="stok" id="stok">
          </div>
          <div class="form-group">
            <label for="tgl_input">Tanggal Input</label>
            <input type="text" readonly="readonly" class="form-control" value="<?=  date("j F Y, G:i");?>" name="tgl_input" id="tgl_input">
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
