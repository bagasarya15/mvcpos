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

        <a href="<?= BASEURL; ?>/transaksi" class="btn btn-sm btn-success mr-2 mt-1 float-right"><i class="fa-solid fa-rotate mr-1"></i> Refresh</a>
    </div>
  </div>
  <!-- Page Heading End -->

<div class="row">
  <!-- Card Pencarian -->
  <div class="col-lg-4 my-1">
    <div class="card border-primary" style="width:100%;">
        <div class="card-header text-white bg-primary"><i class="fa-solid fa-magnifying-glass"></i> Cari Barang</div>
        <div class="card-body">
            <div class="form-group">
                <select class="form-control" name="selectBarang">
                <option class="disable">Pilih barang</option>
                <?php foreach ($data['produk'] as $produk) : ?>
                    <option value="<?= $produk['id_produk']; ?>"><?= $produk['namaBarang']; ?> - <?= $produk['hargaJual']; ?></option>
                <?php endforeach; ?>
                </select>
            </div>
           <!-- <form action="<?= BASEURL; ?>/transaksi/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukan : Nama / Kode Barang" name="cari" id="cari" aria-describedby="button-addon2" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari" autocomplete="off">Cari</button>
                    </div>
                </div>
            </form> -->
        </div>
    </div>
  </div>
  <!-- End Card Pencarian  -->

  <!-- Card Hasil Pencarian -->
  <!-- <div class="col-lg-8 my-1">
    <div class="card border-primary" style="width:100%;">
        <div class="card-header text-white bg-primary"><i class="fa-solid fa-list"></i> Hasil Pencarian</div>   
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga Jual</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['produk'] as $produk) : ?>
                        <tr>
                            <td><?= $produk['kodeBarang']; ?></td>
                            <td><?= $produk['namaBarang']; ?></td>
                            <td><?= $produk['hargaJual']; ?></td>
                            <td><a href="<?= BASEURL; ?>/transaksi/tambahKeranjang" class="btn btn-sm btn-success"><i class="fa-solid fa-cart-shopping"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
  </div> -->
  <!-- End Card Hasil Pencarian -->
</div>

<!-- Card Kasir -->
<div class="my-5">
    <div class="card border-primary" style="width:100%;"> 
        <div class="card-header text-white bg-primary"><i class="fa-solid fa-cart-shopping"></i> Kasir</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped text-center" width="100%" id="tablePos">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total</th>
                        <th scope="col">Kasir</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($data['keranjang'] as $keranjang) : ?>
                        <tr>
                        <form action="<?= BASEURL; ?>/transaksi/ubahKeranjang" method="POST">
                            
                            <input type="hidden" name="id_transaksi" value="<?= $keranjang['id_transaksi'];?>" class="form-control">
                            <input type="hidden" name="id_produk" value="<?= $keranjang['id_produk'];?>" class="form-control">
                            
                            <td><?= $no++; ?></td>
                            <td><?= $keranjang['namaBarang']; ?></td>
                            <td><input type="number" class="form-control" name="jumlah" value="<?= $keranjang['jumlah'];?>"></td>
                            <td>Rp.<?= number_format($keranjang['total']);?>,-</td>
                            <td><?= $_SESSION['name']; ?></td>
                            <td>
                                <button type="submit" class="btn btn-sm btn-warning">Update</button>

                                 <a href="<?= BASEURL; ?>/transaksi/hapus/<?= $keranjang['id_transaksi']; ?>" class="mb-1 btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini ?');"> Hapus </a>
                            </td>
                        </form>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <hr></hr>

            <!-- Perhitungan Untuk Input Ke Nota -->
            <?php
                $jumlah = $keranjang['jumlah'];
                $total = $keranjang['total'];
                $bayar = 50000 ;
                $hitung = $bayar - $total  ;
            ?>
            <!-- Perhitungan End -->

            <!-- Button Add Customer -->
            <div class="d-flex justify-content-start mb-4 mt-2">
                <button type="button" class="btn btn-primary btn-sm tambahCustomer" data-toggle="modal" data-target="#cusModal">
                    Tambah Customer
                </button>
            </div>
            <!-- End Button Trigger -->
            <form action="<?= BASEURL; ?>/transaksi/penjualan" method="POST">
                <div class="form-row">
                    <div class="col-sm-6 mb-3">
                        <label for="id_customer">Customer</label>
                        <select class="custom-select" id="id_customer" required>
                            <?php foreach ($data['customer'] as $cus): ?>
                                <option value="<?= $cus['id_customer']; ?>"><?= $cus['namaCustomer']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="total">Total Semua</label>
                        <input type="text" class="form-control" id="total" name="total" value="Rp.<?= number_format($total);?>,-" readonly>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-6 mb-3">
                        <label for="bayar">Bayar</label>
                        <input type="text" class="form-control" id="bayar" name="bayar" value="<?= $bayar; ?>" required>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="hitung">Kembali</label>
                        <input type="text" class="form-control" id="hitung" name="hitung" value="Rp.<?= number_format($hitung); ?>.-" readonly>
                    </div>
                </div>
                <button class="btn btn-sm btn-success float-sm-right" type="submit"><i class="fa-solid fa-cart-shopping"></i> Bayar</button>
                </form>
        </div>
    </div>
</div>
<!-- End Card Kasir -->
</div>
<!-- /.container-fluid -->
</div>



<!-- Modal Add Customer -->
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
        <form action="<?= BASEURL; ?>/transaksi/tambahCustomer" method="post">
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