<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <meta charset="utf-8">

    <base href='<?php echo base_url(); ?>'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- jQuery cdn link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo.png" type="img/x-icon">

    <script src="js/main.js"></script>
</head>
<body>
    <?= $header ?>
    <div style="margin-bottom: 100px;"></div>

    <div style="margin-bottom: 50px;"></div>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3" style="margin-left: -20px;">
                    <!--side-nav-->
                    <div class="list-group bg-info" style="height: 50vh;">
                        <a href="index.php" class="list-group-item list-group-item-action bg-info text-center text-white">
                        He Thong</a>

                        <a href="#" class="list-group-item list-group-item-action bg-info text-center text-white">
                        Admin</a>

                        <a href="#" class="list-group-item list-group-item-action bg-info text-center text-white">
                        Quan Ly Tiem Vaccine</a>

                        <a href="#" class="list-group-item list-group-item-action bg-info text-center text-white">
                        Quan Ly Vaccine</a>

                        <a href="#" class="list-group-item list-group-item-action bg-info text-center text-white">
                        Quan Ly Bac Si</a> 

                         <a href="adminlogin.php" class="list-group-item list-group-item-action bg-info text-center text-white">
                        Dang xuat</a>    
                    </div>
                    <!-- ket thuc side-nav-->
                </div>
                <div class="col-md-10"></div>
            </div>
        </div>
    </div>

     <!--<div style="margin-bottom: 300px;"></div>-->
    <!--<h2><a href="index.php">Logout</a></h2>-->

</body>
</html>