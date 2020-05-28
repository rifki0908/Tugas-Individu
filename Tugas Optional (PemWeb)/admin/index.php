<?php include("../koneksi.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Alat Tulis</title>
	<link rel="shortcut icon" href="../images/logo/logo.png" />
    <link rel="stylesheet" href="../css/backend/style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-left">
                <a href="index.php">ADMIN</a>
            </div>
        </div>
        <div class="main">
            <div class="navbar">
                <ul>
                    <a href="index.php"><li><font>Dashboard</font></li></a>
                    <a href="index.php?module=admin"><li><font>Admin</font></li></a>
                    <a href="index.php?module=barang"><li><font>Barang</font></li></a>
                    <a href="index.php?module=jenis"><li><font>Jenis</font></li></a>
                    <a href="index.php?module=user"><li><font>User</font></li></a>
                </ul>
            </div>
            <div class="content">
                <?php
                    if(@$_GET['module'] !=''){
                        if(@$_GET['action'] !=''){
                            include("backend/".@$_GET['module']."/".@$_GET['action'].".php");
                        }else{
                            include("backend/".@$_GET['module']."/list.php");
                        }
                    }else{
                        include("backend/dashboard/list.php");
                    }
                ?>
            </div>
        </div>
        <div class="footer">
            <p>&copy; Copyright By Muhammad Rifki Agustian 2020.</p>
        </div>
    </div>
</body>
</html>