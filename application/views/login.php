<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?=$title?></title>

    <link href="<?=base_url("assets/admin/css/bootstrap.min.css")?>" rel="stylesheet">
    <link href="<?=base_url("assets/admin/font-awesome/css/font-awesome.css")?>" rel="stylesheet">

    <link href="<?=base_url("assets/admin/css/animate.css")?>" rel="stylesheet">
    <link href="<?=base_url("assets/admin/css/style.css")?>" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">A</h1>

            </div>
            <!-- <h3>Welcome to </h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views. -->
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            <!-- </p> -->
            <p>Login</p>
            
            <form class="m-t" role="form" action="<?=site_url('login')?>" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" required="required" name="username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="required" name="password">
                </div>
                <input type="submit" class="btn btn-primary block full-width m-b" name="login" value="login">

                <!-- <a href="#"><small>Forgot password?</small></a> -->
            </form>
            <p class="m-t"> <small>Lembaga Penelitian dan Pengembangan Universitas Sriwijaya &copy; 2019</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src=<?=base_url("assets/admin/js/jquery-3.1.1.min.js")?>></script>
    <script src=<?=base_url("assets/admin/js/popper.min.js")?>></script>
    <script src=<?=base_url("assets/admin/js/bootstrap.js")?>></script>

</body>

</html>
