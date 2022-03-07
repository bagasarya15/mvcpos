<?php 
  include '../app/config/configLog.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $data['title'] ?> </h1>
    <!-- Content Row -->
    <div class="row">
        <!-- Card Item-->
        <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Produk</div>
                                <?php
                                    $query = "SELECT * FROM produk";
                                    $query_run = mysqli_query($conn, $query);
                                    $count = mysqli_num_rows($query_run);
                                    echo '<div class="h5 mb-0 font-weight-bold text-gray-800"> '.$count.'</div>';
                                ?>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-box-open fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Card Supplier-->
        <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Supplier</div>
                                <?php
                                    $query = "SELECT * FROM supplier";
                                    $query_run = mysqli_query($conn, $query);
                                    $count = mysqli_num_rows($query_run);
                                    echo '<div class="h5 mb-0 font-weight-bold text-gray-800"> '.$count.'</div>';
                                ?>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-truck fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Card Customer -->
        <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Customer</div>
                                <?php
                                    $query = "SELECT * FROM customer";
                                    $query_run = mysqli_query($conn, $query);
                                    $count = mysqli_num_rows($query_run);
                                    echo '<div class="h5 mb-0 font-weight-bold text-gray-800"> '.$count.'</div>';
                                ?>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card User-->
        <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                User</div>
                                <?php
                                        $query = "SELECT * FROM users";
                                        $query_run = mysqli_query($conn, $query);
                                        $count = mysqli_num_rows($query_run);
                                        echo '<div class="h5 mb-0 font-weight-bold text-gray-800"> '.$count.'</div>';
                                ?>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Card Transaksi Terbaru -->
<div class="card mx-4" style="max-width: 100%">
    <div class="card-body">
        <h4 class="mb-4">Transaksi Terbaru</h4>
        <!-- Table -->
        <div class="#">
            <div class="#">
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
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->