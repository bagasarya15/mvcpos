<?php
  include '../app/config/configLog.php';

  error_reporting(0); 
  session_start();
  
  if (isset($_SESSION['username'])) {
      header('Location:' . BASEURL . '/auth/login');
  }
  
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
                  echo "<script>alert('Registrasi Berhasil !')</script>";
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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Start CSS -->
      <?php include '../public/css/style.php'; ?>
    <!-- End  -->
    <title><?= $data['title']; ?></title>
  </head>
  <body class="text-center">
    <form action="" method="POST" class="form-signin">
      <div class="card">
        <div class="card-body">
          <h1 class="h3 mb-3 font-weight-normal">Registrasi</h1>

          <label for="username" class="sr-only">Username</label>
          <input class="form-control" type="text" name="username" id="username" class="form-control mb-2" placeholder="Username" autofocus required />

          <label for="password" class="sr-only">Password</label>
          <input type="password" id="password" name="password" class="form-control mt-2" placeholder="Password" required />

          <label for="password" class="sr-only">Confirm Password</label>
          <input type="password" id="cpassword" name="cpassword" class="form-control" placeholder="Confirm Password" required/>

          <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" style="background-color: #4a6fdc">Daftar</button>

          <div class="d-block text-center mt-3">
            <small>Sudah punya akun ? <a href="<?= BASEURL; ?>/auth/login" class="text-decoration-none">Ke halaman login</a></small>
          </div>
        </div>
      </div>
    </form>
  </body>
</html>
