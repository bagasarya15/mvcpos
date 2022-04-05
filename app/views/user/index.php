<?php include '../app/helpers/add_user_helper.php'; ?>
<!-- Begin Page Content -->
<div class="container-fluid">
  
    <!-- Alert -->
    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash() ?>
      </div>
    </div>
    <!-- End Alert -->

  <!-- Page Heading -->
  <div class="card rounded my-4" style="max-width: 100%; height: 80px;">
      <div class="card-body">
        <a class="btn btn-sm text-dark font-weight-bold" readonly style="font-size: 120%;"><?= $data['title']; ?></a>
        <button type="button" class="btn btn-sm btn-primary mr-2 mt-1 float-right" data-toggle="modal" data-target="#supModal"> <i class="fa fa-plus"></i> Tambah User </button>
        <a href="<?= BASEURL; ?>/user" class="btn btn-sm btn-success mr-2 mt-1 float-right"><i class="fa-solid fa-rotate mr-1"></i> Refresh</a>
    </div>
  </div>
  <!-- Page Heading End -->
  
  <!-- Table -->
  <div class="w-100 mt-4">
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
              <a href="#" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                <!-- Hapus Data -->
                <a href="<?= BASEURL; ?>/user/hapus/<?= $users['id_user']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini ?');"> <i class="fa fa-trash"></i> </a>
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
        <h5 class="modal-title" id="formModalLabel">Tambah Data User </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <input type="hidden" name="id_user" id="id_user">
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