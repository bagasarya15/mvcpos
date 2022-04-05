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
  
        
        <button type="button" class="btn btn-sm btn-primary mt-1 float-right tambahProduk" data-toggle="modal" data-target="#produkModal"> <i class="fa fa-plus mr-1"></i> Tambah Produk </button>
        
        <a href="<?= BASEURL; ?>/produk/print" target="_blank" class="btn btn-sm btn-success shadow-sm float-right mt-1 mr-2"><i class="fa-solid fa-download mr-1"></i> Cetak Data <?= $data['title']; ?></a>
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
            <th scope="col">Kode Barang</th>
            <th scope="col">Kategori</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga Beli</th>
            <th scope="col">Harga Jual</th>
            <th scope="col">Stok</th>
            <th scope="col">Satuan Barang</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($data['produk'] as $produk) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $produk['kodeBarang']; ?></td>
              <td><?= $produk['kategori']; ?></td>
              <td><?= $produk['namaBarang']; ?></td>
              <td>Rp.<?= number_format($produk['hargaBeli']);?>,-</td>
              <td>Rp.<?= number_format($produk['hargaJual']);?>,-</td>
              <td><?= $produk['stok']; ?></td>
              <td><?= $produk['satuanBarang']; ?></td>
              <td>
                <!--Detail  -->
                <a href="<?= BASEURL; ?>/produk/detail/<?= $produk['id_produk']; ?>" class="mb-1 btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                <!-- Ubah Data -->
                <a href="<?= BASEURL; ?>/produk/ubah/<?= $produk['id_produk']; ?>" class="mb-1 btn btn-success btn-sm modalUbahProduk" data-toggle="modal" data-target="#produkModal" data-id_produk="<?= $produk['id_produk']; ?>"><i class="fa fa-edit"></i></a>
                <!-- Hapus Data -->
                <a href="<?= BASEURL; ?>/produk/hapus/<?= $produk['id_produk']; ?>" class="mb-1 btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini ?');"> <i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <!-- Perhitungan Produk -->
            <?php 
              $totalBeli += $produk['hargaBeli'] * $produk['stok']; 
              $totalJual += $produk['hargaJual'] * $produk['stok'];
              $totalStok += $produk['stok'];
            ?>
            <!-- End Perhitungan -->
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <th>#</th>
            <th>Total</th>
            <th colspan="2"></th>
            <th>Rp.<?= number_format($totalBeli);?>,-</td>
            <th>Rp.<?= number_format($totalJual);?>,-</td>
            <th><?= $totalStok;?></td>
            <th colspan="2"></th>
          </tr>
        </tfoot>
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
            <input type="text" class="form-control" name="kodeBarang" id="kodeBarang" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="id_kategori">Kategori</label>
            <select id="id_kategori" name="id_kategori" class="form-control" required>
              <?php foreach ($data['getKategori'] as $getKategori): ?>                
                <option value="<?= $getKategori['kategori']; ?>"><?= $getKategori['kategori']; ?></option>
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
            <input type="text" readonly="readonly" class="form-control" value="<?=  date("d F Y, G:i");?>" name="tgl_input" id="tgl_input">
          </div>
          <div class="form-group">
            <label for="tgl_update">Tanggal Update</label>
            <input type="text" readonly="readonly" class="form-control" value="<?=  date("d F Y, G:i");?>" name="tgl_update" id="tgl_update">
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
