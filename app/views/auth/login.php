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
      $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
      $result = mysqli_query($conn, $sql);
      if ($result->num_rows > 0) {
          $row = mysqli_fetch_assoc($result);
          $_SESSION['username'] = $row['username'];
          header('Location:' . BASEURL . '/home');
      } else {
          echo "<script>alert('Username atau Password Salah. Silahkan Coba Lagi !')</script>";
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
          <h1 class="h3 mb-3 font-weight-normal">MVC POS</h1>

            <label for="username" class="sr-only">Username</label>
            <input type="text" id="username" name="username" class="form-control mb-2" placeholder="Username" autofocus />
            
            <!-- <label for="email" class="sr-only">Email</label>
            <input type="text" id="email" name="email" class="form-control mb-2" placeholder="Email" autofocus /> -->

            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" />

            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" style="background-color: #4a6fdc">Login</button>
        </div>
      </div>
    </form>
  </body>
</html>
