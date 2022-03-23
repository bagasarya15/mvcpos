<?php include '../app/helpers/add_user_helper.php'; ?>
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
    <a href="<?= BASEURL; ?>/user" class="btn btn-sm btn-success shadow-sm"><i class="fa-solid fa-rotate"></i> Refresh</a>
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
            <th scope="col">Username</th>
            <th scope="col">Nama</th>
            <th scope="col">Hak Akses</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($data['users'] as $users) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $users['username']; ?></td>
              <td><?= $users['name']; ?></td>
              <td><?= $users['role']; ?></td>
              <td>
                <!-- Ubah Data -->
              <a href="#" class="btn btn-sm btn-warning">Ubah</a>
                <!-- Hapus Data -->
                <a href="<?= BASEURL; ?>/user/hapus/<?= $users['id_user']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini ?');"> Hapus </a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
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
          <!-- <input type="hidden" name="id_user" id="id_user"> -->
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" autocomplete="off" value="<?= $name; ?>" required>
          </div>
          <div class="form-group">
            <label for="role">Role</label>
            <select class="form-control mb-3" name="role" id="role" aria-label="Default select example">
              <option selected value="user">-</option>
              <option value="user">user</option>
              <option value="admin">admin</option>
            </select>
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