<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-3 text-gray-800"><?= $data['title'] ?> </h1>

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
                            <td><?= $keranjang['namaBarang'];  ?></td>
                            <td><input type="number" class="form-control" name="jumlah" value="<?= $keranjang['jumlah'];?>"></td>
                            <td>Rp.<?= number_format($keranjang['total']);?>,-</td>
                            <td><?= $_SESSION['username']; ?></td>
                            <td>
                                <button type="submit" class="btn btn-sm btn-warning">Update</button>
                            </td>
                        </form>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <hr></hr>
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
                        <input type="text" class="form-control" id="hitung" name="hitung" value="<?= $hitung; ?>">
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