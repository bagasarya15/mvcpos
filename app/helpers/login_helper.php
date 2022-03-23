<?php  
  include '../app/config/configLog.php';

  error_reporting(0);
  session_start();
   
  if (isset($_SESSION['username']) && isset($_SESSION['id_user']) && isset($_SESSION['name']) && isset($_SESSION['role']) ) {
      header('Location:' . BASEURL . '/auth/login');
  }
   
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $role = $_POST['role'];
    $name = $_POST['name'];
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' AND role = '$role'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
          $row = mysqli_fetch_assoc($result);
          $_SESSION['username'] = $row['username'];
          $_SESSION['role'] = $row['role'];
          $_SESSION['name'] = $row['name'];
          header('Location:' . BASEURL . '/home');
    } else {
        Flasher::setFlash('Username, Password Atau Role','Salah', 'Silahkan Coba Lagi !', 'danger');
    }
  }
?>