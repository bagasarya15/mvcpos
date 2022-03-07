<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-3 text-gray-800"><?= $data['title'] ?> </h1>

<div class="row">
    <!-- Card Cari Barang -->
    <div class="card border-primary ml-3" style="width: 30%; height: 50%;">
      <div class="card-header text-white bg-primary"><i class="fa-solid fa-magnifying-glass"></i> Cari Barang</div>
      <div class="card-body">
          <form action="<?= BASEURL; ?>/transaksi/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukan : Nama Barang" name="keyword" id="keyword" aria-describedby="button-addon2" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari" autocomplete="off">Cari</button>
                    </div>
                </div>
            </form>
      </div>
    <!-- End Card Cari Barang -->
    
    <!-- Table Hasil Cari -->
    </div>
    <div class="card border-primary mx-5" style="width: 50%;">
      <div class="card-header text-white bg-primary"><i class="fa-solid fa-list"></i> Hasil Pencarian</div>   
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
    <!-- End Table Hasil Cari -->
</div>

<!-- Card Kasir -->
<div class="row my-5 mx-2">
    <div class="card border-primary" style="width: 100%;">
        <div class="card-header text-white bg-primary"><i class="fa-solid fa-cart-shopping"></i> Kasir</div>
            <table class="table table-bordered mx-2 my-2" style="width: 30%; height:15%;">
                <tr>
                    <td><b>Tanggal</b></td>
                    <td><input type="text" readonly="readonly" class="form-control" value="<?php echo date("j F Y, G:i");?>" name="tgl_input"></td>
                </tr>
            </table>
        <div class="card-body">
            <div class="table-responsive">
                <table class="display responsive nowrap table text-center" width="100%" id="tablePos">
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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><?= $_SESSION['username']; ?></td>
                        <td></td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Card Kasir -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->