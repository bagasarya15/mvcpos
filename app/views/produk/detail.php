<!-- Container -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card rounded my-4" style="max-width: 100%; height: 80px;">
        <div class="card-body">
            <a class="btn btn-sm text-dark font-weight-bold" readonly style="font-size: 120%;"><?= $data['title']; ?></a>
            <a href="<?= BASEURL; ?>/produk" class="btn btn-sm btn-success mr-2 mt-1 float-right"><i class="fa fa-list mr-1"></i> Daftar Produk </a>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg">
            <table class="table table-striped">
                <tr>
                    <td>ID Barang</td>
                    <td><?= $data['produk']['kodeBarang'];?></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td><?= $data['produk']['kategori']; ?></td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td><?= $data['produk']['namaBarang']; ?></td>
                </tr>
                <tr>
                    <td>Harga Beli</td>
                    <td><?= $data['produk']['hargaBeli']; ?></td>
                </tr>
                <tr>
                    <td>Harga Jual</td>
                    <td> <?= $data['produk']['hargaJual']; ?></td>
                </tr>
                <tr>
                    <td>Satuan</td>
                    <td><?= $data['produk']['satuanBarang']; ?></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td> <?= $data['produk']['stok']; ?></td>
                </tr>
                <tr>
                    <td>Tanggal Input</td>
                    <td><?= $data['produk']['tgl_input']; ?></td>
                </tr>
                <tr>
                    <td>Tanggal Update</td>
                    <td><?= $data['produk']['tgl_update']; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!-- End Container -->