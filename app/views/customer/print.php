<!-- Begin Page Content -->
<div class="container-fluid">
    <script>window.print();</script>
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $data['title'] ?> </h1>
  <!-- Table -->
  <div class="w-100">
    <div class="table-responsive">
      <table class="display responsive nowrap table text-center" width="100%" id="tablePos">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Customer</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tlp</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($data['customer'] as $cus) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $cus['namaCustomer']; ?></td>
              <td><?= $cus['alamatCustomer']; ?></td>
              <td><?= $cus['tlpCustomer']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- End container-->
</div>
<!-- End of Main Content -->