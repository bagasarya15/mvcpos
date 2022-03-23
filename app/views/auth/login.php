<?php include '../app/helpers/login_helper.php'; ?>
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
  
  <body>
    <form action="" method="POST" class="form-signin">
      <div class="card">
        <div class="card-body">
          <h1 class="h3 mb-3 font-weight-normal text-center title">SR - POS</h1>
          <hr>
          <div class="row">
            <div class="col-sm">
              <?php Flasher::flashLogin() ?>
            </div>
          </div>

            <label for="username" class="sr-only">Username</label>
            <input type="text" id="username" name="username" class="form-control mb-2" placeholder="Username" value="<?= $username; ?>" autofocus autocomplete="off" required  />

            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" />

            <label for="role" class="">User Level :</label>
            <select class="form-control mb-3" name="role" aria-label="Default select example">
              <option selected value="user">User</option>
              <option value="admin">Admin</option>
            </select>
          
            <button class="btn btn-xs btn-primary form-control" type="submit" name="submit" style="background-color: #191E3A">Login</button>
        </div>
      </div>
    </form>
  </body>
</html>
