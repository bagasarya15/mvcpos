<script>window.print();</script>
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 my-4 text-gray-800 text-center"><?= $data['title'] ?> </h1>
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
            <th scope="col">Tanggal Input</th>
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
              <td><?= $produk['tgl_input']; ?></td>
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