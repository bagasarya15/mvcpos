<?php
  include '../app/config/configLog.php';
  include '../app/helpers/session_helper.php';

  if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $cpassword = md5($_POST['cpassword']);
  
      if ($password == $cpassword) {
          $sql = "SELECT * FROM users WHERE username='$username'";
          $result = mysqli_query($conn, $sql);
          if (!$result->num_rows > 0) {
              $sql = "INSERT INTO users (username, password)
                      VALUES ('$username','$password')";
              $result = mysqli_query($conn, $sql);
              if ($result) {
                  echo "<script>alert('User Berhasil Ditambah !')</script>";
                  $username = '';
                  $_POST['password'] = '';
                  $_POST['cpassword'] = '';
              } else {
                  echo "<script>alert('Terjadi Kesalahan.')</script>";
              }
          } else {
              echo "<script>alert('Username Sudah Terdaftar.')</script>";
          }
      } else {
          echo "<script>alert('Password Tidak Sesuai')</script>";
      }
  }
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $data['title'] ?> </h1>

  <!-- Alert -->
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash() ?>
    </div>
  </div>
  <!-- End Alert -->

  <!-- Refresh Halaman -->
  <div class="d-flex">
    <a href="<?= BASEURL; ?>/auth/kasir" class="btn btn-sm btn-success shadow-sm"><i class="fa-solid fa-rotate"></i> Refresh</a>
  </div>
  <!--Refresh Halaman -->
  

  <!-- Button trigger modal -->
  <div class="d-flex justify-content-end my-2">
    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#supModal">
      Tambah <?= $data['title']; ?>
    </button>
  </div>
  <!-- End Button Trigger -->

  <!-- Table -->
  <div class="w-100">
    <div class="table-responsive">
      <table class="display responsive nowrap table text-center" width="100%" id="tablePos">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Users</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($data['users'] as $users) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $users['username']; ?></td>
              <td>
                <!-- Ubah Data -->

                <!-- Hapus Data -->
                <a href="<?= BASEURL; ?>/auth/hapus/<?= $users['id_user']; ?>" class="mb-1 btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini ?');"> Hapus </a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="supModal" tabindex="-7" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog d-flex justify-content-center">
    <div class="modal-content w-75">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data <?= $data['title']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <input type="hidden" name="id_user" id="id_user">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" rows="3" autocomplete="off"></input>
          </div>
          <div class="form-group">
            <label for="cpassword">Konfirmasi Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword" autocomplete="off">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary btn-sm" name="submit" id="submit">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>  