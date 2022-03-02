<!-- Begin Page Content -->
<div class="container-fluid">
  <script>
    window.print();
  </script>
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $data['title'] ?></h1>
  <!-- Table -->
  <div class="w-100">
    <div class="table-responsive">
      <table class="display responsive nowrap table text-center" width="100%" id="tablePos">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Supplier</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tlp</th>
            <th scope="col">Deskripsi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($data['sup'] as $sup) : ?>
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><?= $sup['namaSupplier']; ?></td>
            <td><?= $sup['alamatSupplier']; ?></td>
            <td><?= $sup['tlpSupplier']; ?></td>
            <td><?= $sup['deskripsi']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- End container-->
</div>
<!-- End of Main Content -->
