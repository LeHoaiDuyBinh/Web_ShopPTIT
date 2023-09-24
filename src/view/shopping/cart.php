<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PTIT-Shop</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="view/shopping/css/trangchu.css">
    <link rel="stylesheet" href="view/shopping/css/responsive.css">
    <link rel="stylesheet" href="view/shopping/css/product.css">
    <link rel="stylesheet" href="view/shopping/css/cart.css">
</head>

<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <?php require_once 'header.php'; ?>

    <!-- Cart -->
    <section class="cart">
        <div class="lifcycle-cart">
            <p>Giỏ hàng</p>
            <p>Địa chỉ giao hàng</p>
            <p>Thanh toán</p>
        </div>
        <div class="container-cart">
            <div class="cart-top-wrap">
                <div class="cart-top">
                    <div class="cart-top-cart cart-top-item">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="cart-top-address cart-top-item">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="cart-top-payment cart-top-item">
                        <i class="fas fa-money-check-alt"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-cart">
            <div class="cart-content row">
                <div class="cart-content-left">
                    <table>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Màu</th>
                            <th>Size</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th>Xóa</th>
                        </tr>
                        <tr>
                            <td><img src="./view/shopping/img/aothun_babytee.jpg" alt=""></td>
                            <td>
                                <p>Áo thun baby tee SKU 57B9489</p>
                            </td>
                            <td><img src="./view/shopping/img/color_trang_nga.png" alt=""></td>
                            <td>
                                <p>M</p>
                            </td>
                            <td><input type="number" value="1" min="1"></td>
                            <td>
                                <p>590.000 đ</p>
                            </td>
                            <td><span>X</span></td>
                        </tr>
                        <tr>
                            <td><img src="./view/shopping/img/aothun_co_vien_den.jpg" alt=""></td>
                            <td>
                                <p>Áo cổ viền đen SKU 54B8352</p>
                            </td>
                            <td><img src="./view/shopping/img/color_black.png" alt=""></td>
                            <td>
                                <p>M</p>
                            </td>
                            <td><input type="number" value="1" min="1"></td>
                            <td>
                                <p>790.000 đ</p>
                            </td>
                            <td><span>X</span></td>
                        </tr>
                    </table>
                </div>
                <div class="cart-content-right">
                    <table>
                        <tr>
                            <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                        </tr>
                        <tr>
                            <td>TỔNG SẢN PHẨM</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>TỔNG TIỀN HÀNG</td>
                            <td>
                                <p style="font-size: 15px;">1.380.000 <sup>đ</sup></p>
                            </td>
                        </tr>
                        <tr>
                            <td>TẠM TÍNH</td>
                            <td>
                                <p style="color: black; font-weight: bold; font-size: 15px;">1.380.000 <sup>đ</sup></p>
                            </td>
                        </tr>
                    </table>
                    <div class="cart-content-right-text">
                        <p>Đơn hàng sẽ được freeship có giá trị từ 399.000 đ</p>
                    </div>
                    <div class="cart-content-right-button">
                        <a href="/?page=category">
                            <button>TIẾP TỤC MUA SẮM</button>
                        </a>
                        <a href="/?page=delivery">
                            <button>THANH TOÁN</button>
                        </a>
                    </div>
                    <div class="cart-content-right-login">
                        <p>TÀI KHOẢN PTIT-SHOP</p>
                        <p>Hãy <a href="" style="color: #DDC488; font-weight: bold;">Đăng nhập </a>tài khoản của bạn để tích điểm thành viên</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once 'footer.php'; ?>
    
</body>

</html>
<script src="./view/shopping/js/sroll.js "></script>
<script src="./view/shopping/js/responsiveMenu.js "></script>