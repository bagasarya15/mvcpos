<!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $data['title'] ?> </h1>

      <div class="table-responsive">
        <table class="table" id="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Supplier</th>
              <th scope="col">Alamat</th>
              <th scope="col">Tlp</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach( $data['sup'] as $sup) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $sup['namaSupplier']; ?></td>
              <td><?= $sup['alamatSupplier']; ?></td>
              <td><?= $sup['tlpSupplier']; ?></td>
              <td><?= $sup['deskripsi']; ?></td>
              <td>Tambahin di sini</td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
    </div>
  </div>
    <!-- End container-->
</div>
<!-- End of Main Content -->
