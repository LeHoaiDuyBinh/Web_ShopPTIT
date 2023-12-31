<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once './mvc/views/shopping/libcss.php'; ?>
    <link rel="stylesheet" href="/public/css/confirmUser.css">
</head>

<body>
    <?php require_once './mvc/views/shopping/header.php'; ?>
    <main id="main" class="site-main" style="margin-top: 8%;">
        <div class="container">
            <div class="auth auth-forgotpass">
                <div class="auth-container">
                    <div class="auth-forgotpass">
                        <div class="auth__login auth__block">
                            <h3 class="auth__title">
                                Xác thực tài khoản?
                            </h3>
                            <div class="auth__login__content" style="text-align: center;">
                                <p class="auth__description">
                                    (Mã xác thực đã được gửi tới số email của bạn)
                                </p>
                                <!-- in lỗi -->
                                <?php
                                    if(isset($_SESSION['err'])): ?> 
                                        <div class="custom-alert custom-alert-error" role="alert" style="display: inline-block !important; text-align: center; height: auto !important; width: auto !important;"><i class="fa fa-times-circle"></i><?php echo $_SESSION['err'] ?> </div>
                                        <?php unset($_SESSION['err']);  ?>
                                    <?php endif; ?>
                                <form class="auth__form" role="login" enctype="application/x-www-form-urlencoded" name="frm_register" method="post" action="<?php echo isset($_SESSION['token']) ? "/Auth/Verify/" .  $_SESSION['token'] : "/Auth/";  ?>">
                                    <div class="form-group">
                                        <input class="form-control" type="text" value="" name="confirmCode" placeholder="Nhập mã xác thực">
                                    </div>
                                    <div class="auth__form__buttons">
                                        <button type="submit" class="btn btn--large">Gửi đi</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once './mvc/views/shopping/footer.php'; ?>
</body>

</html>