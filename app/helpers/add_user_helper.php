<?php 
include '../app/config/configLog.php';

  if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $name = $_POST['name'];
      $role = $_POST['role'];
      $password = md5($_POST['password']);
      $cpassword = md5($_POST['cpassword']);
  
      if ($password == $cpassword) {
          $sql = "SELECT * FROM users WHERE username='$username'";
          $result = mysqli_query($conn, $sql);
          if (!$result->num_rows > 0) {
              $sql = "INSERT INTO users (username, name, role, password)
                      VALUES ('$username', '$name', '$role' ,'$password')";
              $result = mysqli_query($conn, $sql);
              if ($result) {
                  Flasher::setFlash('Users','Berhasil', 'Ditambahkan', 'success');
                  $username = '';
                  $name = '';
                  $role = '';
                  $_POST['password'] = '';
                  $_POST['cpassword'] = '';
              } else {
                  Flasher::setFlash('Users','Gagal', 'Ditambah', 'danger');
              }
          } else {
              Flasher::setFlash('Username','Sudah', 'Terdaftar', 'warning');
          }
      } else {
          Flasher::setFlash('Password','Tidak', 'Sesuai', 'danger');
      }
  }
?>