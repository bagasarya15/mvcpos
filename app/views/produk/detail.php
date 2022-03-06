<!-- Page Heading -->
<h1 class="h3 mb-4 mx-4 text-gray-800"><?= $data['title'] ?> </h1>
<!-- Container -->
<div class="container-fluid">
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
    <a href="<?= BASEURL;?>/produk" class="btn btn-sm btn-primary mx-1">Kembali</a>
</div>
<!-- End Container -->