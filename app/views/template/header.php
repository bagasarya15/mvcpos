<?php 
    include '../app/helpers/session_helper.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Title Head -->
    <title> SR-POS | <?= $data['title']; ?></title>
    <link rel="icon" href="<?= BASEURL; ?>/img/app-store.png">
    <!-- Title Head End -->

    <!-- Custom fonts for this template-->
    <link href="<?= BASEURL; ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= BASEURL; ?>/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?= BASEURL; ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/vendor/datatables/buttons/2.2.2/css/buttons.bootstrap4.min.css" rel="stylesheet">

    <!-- <style>
        @keyframes roll {
            0% {
                transform: rotate(0);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        .sidebar-brand-icon {
            animation: roll infinite 5s;
        }
    </style> -->

</head>
<body id="page-top">