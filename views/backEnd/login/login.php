<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $this->title;?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo URL;?>public/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo URL;?>public/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL;?>public/admin/assets/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo URL;?>public/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
</style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="#"><img class="logo-img" src="<?php echo URL;?>public/admin/assets/images/logo.png" alt="logo"></a><span class="splash-description">Hãy nhập thông tin tài khoản.</span></div>
            <div class="card-body">
                <form method="POST" role="form" action="<?php echo URL;?>admin/run">
                    <div class="form-group">
                       <input  class="form-control form-control-lg" name="email" type="text" placeholder="Tài Khoản">
                       <?php if (isset($errors['email'])) {?>
                            <div class="help-block" style="color: red">
                                <?php echo $errors['email'] ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <input  class="form-control form-control-lg" name="password" type="password" placeholder="Mật khẩu">
                        <?php if (isset($errors['password'])) {?>
                            <div class="help-block" style="color: red">
                                <?php echo $errors['password'] ?>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="remember" ><span class="custom-control-label" value="1">Ghi nhớ đăng nhập</span>
                        </label>
                    </div> -->
                    <button type="submit" name="login_btn" class="btn btn-primary btn-lg btn-block">Đăng nhập</button>
                </form>
            </div>
        </div>
    </div>

        <!-- ============================================================== -->
        <!-- end login page  -->
        <!-- ============================================================== -->
        <!-- Optional JavaScript -->
        <script src="../<?php echo URL;?>public/vendor/jquery/jquery-3.3.1.min.js"></script>
        <script src="../<?php echo URL;?>public/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    </body>

    </html>