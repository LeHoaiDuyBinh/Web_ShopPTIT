<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PTIT-Shop</title>

    <!-- Bootstrap CSS -->
    <?php require_once './mvc/views/shopping/libcss.php'; ?>
    <link rel="stylesheet" href="/public/css/product.css">
</head>

<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <?php require_once './mvc/views/shopping/header.php'; ?>

    <!--************* Product  ****************  -->
    <section class="product">
        <div class="container-product">
            <div class="product-top row">
                <p>Trang chủ</p><span>&#10230; </span>
                <p>Nữ</p> <span>&#10230; </span>
                <p>Hàng nữ mới về</p>
                <span>&#10230;</span>
                <p>Áo thun Baby Tee</p>
            </div>
            <div class="product-content row">
                <div class="product-content-left row">
                    <div class="product-content-left-big-img">
                        <img src="/public/img/aothun_babytee.jpg" alt="">
                    </div>
                    <div class="product-content-left-small-img">
                        <img src="/public/img/aothun_babytee.jpg" alt="">
                        <img src="/public/img/aothun_babytee_2.jpg" alt="">
                        <img src="/public/img/aothun_babytee_3.jpg" alt="">
                        <img src="/public/img/aothun_babytee_4.jpg" alt="">

                    </div>
                </div>
                <div class="product-content-right">
                    <div class="product-content-right-product-name">
                        <h1>ÁO THUN BABY TEE</h1>
                        <p>SKU: 57B9489</p>
                    </div>
                    <div class="product-content-right-product-price">
                        <p style="font-weight: bold; font-size: 24px;">590.000<sup>đ</sup></p>
                    </div>
                    <div class="product-content-right-product-color">
                        <p style="font-weight: bold; font-size: 24px;"><span>Màu sắc</span>: Trắng ngà</p>
                        <div class="product-content-right-product-color-img">
                            <img src="/public/img/color_trang_nga.png" alt="">
                        </div>
                    </div>
                    <div class="product-content-right-product-size" style="margin-top: 10px;">
                        <div class="size">
                            <span>S</span>
                            <span>M</span>
                            <span>L</span>
                            <span>XL</span>
                            <span>XXL</span>
                        </div>
                    </div>
                    <div class="quantity">
                        <p style="font-weight: bold; color: #6C6D70;">Số lượng</p>
                        <input type="number" min="0" value="1" class="custom-number-input">
                    </div>
                    <p style=" color: red; display: none;">Vui lòng chọn size</p>
                    <div class="product-content-right-product-button">
                        <button><p style="margin-bottom: 1%;">THÊM VÀO GIỎ</p></button>
                        <a href="/Cart">
                            <button><i class="fa fa-shopping-cart"></i><p style="margin-bottom: 1%;">MUA HÀNG</p></button>
                        </a>
                    </div>
                    <div class="product-content-right-product-icon">
                        <div class="product-content-right-product-icon-item">
                            <i class="fa fa-phone"></i>
                            <p style="margin-bottom: 1%;">Hotline</p>
                        </div>
                        <div class="product-content-right-product-icon-item">
                            <i class="fa fa-wechat"></i>
                            <p style="margin-bottom: 1%;">Chat</p>
                        </div>
                        <div class="product-content-right-product-icon-item">
                            <i class="fa fa-envelope"></i>
                            <p style="margin-bottom: 1%;">Email</p>
                        </div>
                    </div>
                    <div class="product-content-right-bottom">
                        <div class="product-content-right-bottom-top">
                            <i class="fa fa-angle-down" style="font-size: 22px; font-weight: bold"></i>
                        </div>
                        <div class="product-content-right-bottom-content-big">
                            <div class="product-content-right-bottom-content-title row">
                                <div class="product-content-right-bottom-content-title-item introduction">
                                    <p>Giới thiệu</p>
                                </div>
                                <div class="product-content-right-bottom-content-title-item detail">
                                    <p>Chi tiết sản phẩm</p>
                                </div>
                                <div class="product-content-right-bottom-content-title-item preserve">
                                    <p>Bảo quản</p>
                                </div>
                                <div class="product-content-right-bottom-content-title-item">
                                    <p>Tham khảo Size</p>
                                </div>
                            </div>
                            <div class="product-content-right-bottom-content">
                                <div class="product-content-right-bottom-content-introduction">
                                    <p>Trẻ trung, năng động xuống phố ngày hè trong kiểu dáng thun Baby Tee đang được các bạn trẻ ưa chuộng hiện nay.</p>
                                    <p>Thiết kế áo trơn, cổ tròn, tạo điểm nhấn in chữ nổi mặt sau. Bạn có thể kết hợp áo cùng nhiều kiểu chân váy và quần khác nhau để tạo nên phong cách riêng cho mình. </p>
                                    <p style="font-weight: bold; font-size: 16px;">Thông tin mẫu:</p>
                                    <p style="font-weight: bold; font-size: 16px;">Chiều cao: <span style="font-weight: normal; font-size: 14px;">163 cm</span></p>
                                    <p style="font-weight: bold; font-size: 16px;">Cân nặng: <span style="font-weight: normal; font-size: 14px;">47kg</span></p>
                                    <p style=" font-weight: bold; font-size: 16px;">Số đo 3 vòng: <span style="font-weight: normal; font-size: 14px;">83-61-90cm</span>
                                    </p>
                                    <p>Mẫu mặc size S Lưu ý: Màu sắc sản phẩm thực tế sẽ có sự chênh lệch nhỏ so với ảnh do điều kiện ánh sáng khi chụp và màu sắc hiển thị qua màn hình máy tính/ điện thoại.</p>
                                </div>
                                <div class="product-content-right-bottom-content-detail" style="display: none;">
                                    <p style="font-weight: bold;">Dòng sản phẩm: <span style="font-weight: normal;">You</span></p>
                                    <p style="font-weight: bold;">Nhóm sản phẩm: <span style="font-weight: normal;">Áo</span></p>
                                    <p style="font-weight: bold;">Cổ áo: <span style="font-weight: normal;">Cổ tròn</span></p>
                                </div>
                                <div class="product-content-right-bottom-content-preserve" style="display: none;">
                                    <p>Chi tiết bảo quản sản phẩm :</p>
                                    <p style="font-weight: bold;">* Các sản phẩm thuộc dòng cao cấp (Senora) và áo khoác (dạ, tweed, lông, phao) chỉ giặt khô, tuyệt đối không giặt ướt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product related -->
    <section class="product-related">
        <div class="product-related-title">
            <p>Sản phẩm tương tự</p>
        </div>
        <div class="product-content row">
            <div class="product-related-item">
                <img src="/public/img/aothun_co_vien_den.jpg" alt="">
                <img src="/public/img/color_black.png" alt="">
                <a href="">Áo thun cổ viền đen</a>
                <p>690.000đ</p>
            </div>
            <div class="product-related-item">
                <img src="/public/img/aothun_co_vien_den.jpg" alt="">
                <img src="/public/img/color_black.png" alt="">
                <a href="">Áo thun cổ viền đen</a>
                <p>690.000đ</p>
            </div>
            <div class="product-related-item">
                <img src="/public/img/aothun_co_vien_den.jpg" alt="">
                <img src="/public/img/color_black.png" alt="">
                <a href="">Áo thun cổ viền đen</a>
                <p>690.000đ</p>
            </div>
        </div>
    </section>

    <?php require_once './mvc/views/shopping/footer.php'; ?>
    
</body>

</html>
<script src="/public/js/sroll.js "></script>
<script src="/public/js/responsiveMenu.js "></script>
<script src="/public/js/product.js "></script>