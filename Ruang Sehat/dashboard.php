<?php 

    session_start();

    $koneksi= new mysqli ("localhost","root","","ruang_sehat");

    $user =$_SESSION['nip'];
 if ($user == "") {
?>

<script type="text/javascript">
      window.location.href="index.php";
    </script>
    <?php
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RuangSehat - Dashboard</title>
    <!-- Bootstraps CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="dashboard.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
</head>
<body>
    <div class="wrapper">

        <ul class="navbar-nav sidebar">
            <!-- profile -->
            <div class="sidebar-card mt-4">
                <img src="img/profile.png" alt="...">
                <p class="text-center mb-2">Admin</p>
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active mt-4">
                <a class="nav-link" href="dashboard.php"> <img src="img/dashboard.png"><span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider text-white">

            <!-- Heading -->
            <div class="sidebar-heading">
                Input
            </div>

            <!-- Nav Item - Input data pasien -->
            <li class="nav-item">
                <a class="nav-link" href="inputdatapasien.html"> <img src="img/pasien.png"><span>Input Data Pasien</span></a>
            </li>
            <!-- Nav Item - Input data kamar -->
            <li class="nav-item">
                <a class="nav-link" href="#"> <img src="img/kamar.png"><span>Input Data Kamar</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider text-white">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>

            <!-- Nav Item - Lihat data pasien -->
            <li class="nav-item">
                <a class="nav-link" href="#"> <img src="img/pasien.png"><span>Lihat Data Pasien</span></a>
            </li>
            <!-- Nav Item - Lihat data kamar -->
            <li class="nav-item">
                <a class="nav-link" href="#"> <img src="img/kamar.png"><span>Lihat Data Kamar</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider text-white">

            <!-- Nav Item - Profile -->
            <li class="nav-item">
                <a class="nav-link" href="#"> <img src="img/pasien.png"><span>Profile</span></a>
            </li>
            <!-- Nav Item - Logout -->
            <li class="nav-item mt-3">
                <a class="nav-link" href="#" ><form action="logout.php" method="POST"><button class="btn btn-danger" type="submit" name="logout"> <img src="img/logout.png"><span>Logout</span></button></form></a>
            </li>

        </ul>

        <div class="content">
            <h1>Dashboard</h1>
        </div>
    </div>

</body>
</html>