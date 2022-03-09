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
           <form action="<?= BASEURL; ?>/transaksi/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukan : Nama / Kode Barang" name="cari" id="cari" aria-describedby="button-addon2" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari" autocomplete="off">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
  <!-- End Card Pencarian  -->

  <!-- Card Hasil Pencarian -->
  <div class="col-lg-8 my-1">
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
                            <td><a href="#" class="btn btn-sm btn-success"><i class="fa-solid fa-cart-shopping"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
  </div>
  <!-- End Card Hasil Pencarian -->
</div>

<!-- Card Kasir -->
<div class="my-5">
    <div class="card border-primary" style="width:100%;"> 
        <div class="card-header text-white bg-primary"><i class="fa-solid fa-cart-shopping"></i> Kasir</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" width="100%">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Customer</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total</th>
                        <th scope="col">Kasir</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tbody>
                </table>
            </div>
            <hr></hr>
            <form action="#" method="POST">
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
                        <label for="total">Total</label>
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
                        <input type="text" class="form-control" id="hitung" name="hitung" value="<?= $hitung; ?>" required>
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