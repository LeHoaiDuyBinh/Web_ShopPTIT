<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'libHeader.php'; ?>
    <title>PTITShop</title>
</head>

<body>

    <?php require_once './mvc/views/admin/sideBar.php'; ?>

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <?php require_once './mvc/views/admin/navBar.php'; ?>

        <!-- End of Navbar -->

        <main>
            <div class="header">
                <div class="left">
                    <h1>Đơn hàng</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">
                                Order
                            </a></li>
                        /
                        <li><a href="#" class="active">Shop</a></li>

                        <button id="addBtn" style="font-size: 14px; border: none; right: 0; position: absolute; margin-right: 26px;margin-bottom: 48px; background-color:var(--primary); color: white;; width: 150px; height: 40px;border-radius: 8px;">
                            Thêm đơn hàng
                        </button>
                    </ul>
                </div>
            </div>

            <!--********************* Order ***********************-->
            <div style="background: var(--light);color: var(--dark);">
                <table width="100%">
                    <thead>
                        <tr>
                            <th><span class="las la-sort"></span> MÃ ĐƠN</th>
                            <th><span class="las la-sort"></span> TÊN KHÁCH HÀNG</th>
                            <th><span class="las la-sort"></span> NGÀY ĐẶT</th>
                            <th><span class="las la-sort"></span> TRẠNG THÁI</th>
                            <th><span class="las la-sort"></span> TỔNG TIỀN</th>
                            <th><span class="las la-sort"></span> ACTION</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <!-- Dữ liệu mẫu -->
                        <!-- <tr>
                            <td>1</td>
                            <td>
                                <div class="client">
                                    <div class="client-info">
                                        <h4>PTITATB019</h4>
                                    </div>
                                </div>
                            </td>
                            <td>Captain-Monkey</td>
                            <td>19 April, 2022</td>
                            <td>Còn hàng</td>
                            <td>790.000đ</td>
                            <td><i class="fa fa-trash"></i>
                                <i class="fa fa-pencil"></i>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
            <div id="myModal" class="modal" style="display: none;">
                <div class="modal-content" style="border-radius: 8px;">
                    <form id="OrderForm">
                        <label for="OrderCode">Mã đơn:</label>
                        <input style="color: black" type="text" id="MaDonHang" name="MaDonHang" required>

                        <label for="NameCustomer">Tên khách hàng:</label>
                        <input style="color: black" type="text" id="TenKhachHang" name="TenKhachHang" required>

                        <label for="OrderDate">Ngày đặt:</label>
                        <input style="height: 47px; width:100%;" type="date" id="NgayDat" name="NgayDat" required>

                        <label for="OrderStatus" style="width: 100%; margin-top: 8px;">Trạng thái:</label>
                        <select style="height: 47px; width:100%;" id="TrangThai" name="TrangThai" required>
                            <option value="ConHang">Còn hàng</option>
                            <option value="HetHang">Hết hàng</option>
                        </select>

                        <label for="TotalMoney" style="margin-top: 8px;">Tổng tiền:</label>
                        <input style="color: black" type="text" id="TongTien" name="TongTien" required>
                        <br>

                        <button style="color: white; padding: 14px 20px; margin: 8px 0; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; margin-right: 10px;" type="submit" id="submitBtn">Thêm</button>
                        <button style="color: white; padding: 14px 20px; margin: 8px 0; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;" class="btnCancel" type="button" id="cancelBtn">Hủy</button>
                    </form>
                </div>
            </div>
            <!-- Confirmation Modal -->
            <div id="confirmationModal">
                <p>Bạn có chắc chắn muốn xóa dữ liệu này?</p>
                <button id="confirmDelete" onclick="deleteData()" style="background: var(--primary); border: none;padding: 10px 15px; color: white; border-radius: 8px; width: 60px;">Có</button>
                <button id="cancelDelete" onclick="closeConfirmationModal()" style="background: var(--dark-grey); border: none;padding: 10px 10px; color: white; border-radius: 8px; width: 60px;">Không</button>
            </div>
        </main>
    </div>

    </main>

    </div>

    <script src="/public/js/dashboard.js"></script>
</body>

</html>
<script>
    //Khai báo biến tổng quát dùng mọi chỗ
    const link = document.querySelector(".slide-menu-order");
    const addBtn = document.getElementById("addBtn");
    const modal = document.getElementById("myModal");
    const btnEdit = document.getElementById("submitBtn");
    const cancelBtn = document.getElementById("cancelBtn");
    const tbody = document.getElementById("tbody");

    let isEditing = false;

    // ************************************ THÊM DỮ LIỆU ************************************ //
    //Thêm đơn hàng
    addBtn.addEventListener('click', function() {
        isEditing = false;
        modal.style.display = "block";
        document.getElementById("MaDonHang").value = ""
        document.getElementById("TenKhachHang").value = ""
        document.getElementById("NgayDat").value = ""
        document.getElementById("TrangThai").value = ""
        document.getElementById("TongTien").value = ""
        btnEdit.innerText = "Thêm"
    })

    //Xử lý button add
    let productList = [];

    function sortProductList() {
        productList.sort((a, b) => {
            // Sử dụng toLowerCase để so sánh không phân biệt chữ hoa, chữ thường
            const maDonHangA = a.maDonHang.toLowerCase();
            const maDonHangB = b.maDonHang.toLowerCase();

            if (maDonHangA < maDonHangB) {
                return -1;
            }
            if (maDonHangA > maDonHangB) {
                return 1;
            }
            return 0;
        });
    }

    // Xử lý sự kiện submit của form
    document.getElementById("OrderForm").addEventListener("submit", function(event) {
        event.preventDefault();

        if (isEditing == false) {
            const maDonHang = document.getElementById("MaDonHang").value;
            const tenKhachHang = document.getElementById("TenKhachHang").value;
            const ngayDat = document.getElementById("NgayDat").value;
            const orderStatus = document.getElementById("TrangThai").value;
            const tongTien = document.getElementById("TongTien").value;

            const newProduct = {
                maDonHang: maDonHang,
                tenKhachHang: tenKhachHang,
                ngayDat: ngayDat,
                orderStatus: orderStatus,
                tongTien: tongTien,
            };

            // Thêm sản phẩm mới vào đầu danh sách (kiểu stack)
            productList.unshift(newProduct);
        }
        renderTable();
        modal.style.display = "none";
    });

    // Hàm để render lại bảng
    function renderTable() {
        tbody.innerHTML = "";

        productList.forEach(function(product) {
            const newRowHTML = `
            <tr>
                <td>
                    <div class="client">
                        <div class="client-info">
                            <h4>${product.maDonHang}</h4>
                        </div>
                    </div>
                </td>
                <td>${product.tenKhachHang}</td>
                <td>${product.ngayDat}</td>
                <td>${product.orderStatus}</td>
                <td>${product.tongTien}</td>
                <td>
                    <i class="fa fa-trash"></i>
                    <i class="fa fa-pencil"></i>
                </td>
            </tr>
        `;

            tbody.insertAdjacentHTML("beforeend", newRowHTML);
        });
    }

    //**************************** XÓA DỮ LIỆU ************************************//
    tbody.addEventListener("click", function(event) {
        if (event.target.classList.contains("fa-trash")) {
            const row = event.target.closest("tr");
            const maDonHang = row.querySelector("h4").textContent; // Lấy mã danh mục từ HTML
            showConfirmationModal(maDonHang);
        }
    });

    // Hiển thị modal xác nhận xóa
    function showConfirmationModal(maDonHang) {
        const confirmationModal = document.getElementById("confirmationModal");
        confirmationModal.style.display = "block";

        // Xác nhận xóa
        document.getElementById("confirmDelete").onclick = function() {
            // Tìm index của sản phẩm cần xóa
            const index = productList.findIndex((product) => product.maDonHang === maDonHang);

            if (index !== -1) {
                productList.splice(index, 1);
                renderTable();
            }

            closeConfirmationModal();
        };

        // Hủy xóa
        document.getElementById("cancelDelete").onclick = function() {
            closeConfirmationModal();
        };
    }

    function closeConfirmationModal() {
        const confirmationModal = document.getElementById("confirmationModal");
        confirmationModal.style.display = "none";
    }


    //*************************************** SỬA DỮ LIỆU *******************************************//
    function handleEditClick(event) {
        isEditing = true;
        const row = event.target.closest("tr");
        const maDonHang = row.querySelector("h4").textContent;
        btnEdit.innerText = "Sửa"
        editProduct(maDonHang);
    }

    function renderTable() {
        tbody.innerHTML = "";
        sortProductList()
        productList.forEach(function(product) {
            const newRowHTML = `
        <tr>
            <td>
                <div class="client">
                    <div class="client-info">
                        <h4>${product.maDonHang}</h4>
                    </div>
                </div>
            </td>
            <td>${product.tenKhachHang}</td>
            <td>${product.ngayDat}</td>
            <td>${product.orderStatus}</td>
            <td>${product.tongTien}</td>
            <td>
                <i class="fa fa-trash" onclick="handleDeleteClick(event)"></i>
                <i class="fa fa-pencil" onclick="handleEditClick(event)"></i>
            </td>
        </tr>
    `;

            tbody.insertAdjacentHTML("beforeend", newRowHTML);
        });
    }

    function editProduct(maDonHang) {
        const productToEditIndex = productList.findIndex((product) => product.maDonHang === maDonHang);

        if (productToEditIndex !== -1) {
            const productToEdit = productList[productToEditIndex];
            modal.style.display = "block";
            document.getElementById("MaDonHang").value = productToEdit.maDonHang;
            document.getElementById("TenKhachHang").value = productToEdit.tenKhachHang;
            document.getElementById("NgayDat").value = productToEdit.ngayDat;
            document.getElementById("TrangThai").value = productToEdit.orderStatus;
            document.getElementById("TongTien").value = productToEdit.tongTien;
        }
    }

    document.getElementById("OrderForm").addEventListener("submit", function(event) {
        event.preventDefault();

        if (isEditing == true) {

            const maDonHang = document.getElementById("MaDonHang").value;
            const tenKhachHang = document.getElementById("TenKhachHang").value;
            const ngayDat = document.getElementById("NgayDat").value;
            const orderStatus = document.getElementById("TrangThai").value;
            const tongTien = document.getElementById("TongTien").value;

            for (let i = 0; i < productList.length; i++) {
                if (productList[i].maDonHang === maDonHang) {
                    // Cập nhật thông tin của chi tiết đơn hàng
                    productList[i].tenKhachHang = tenKhachHang;
                    productList[i].ngayDat = ngayDat;
                    productList[i].orderStatus = orderStatus;
                    productList[i].tongTien = tongTien;
                    break; // Dừng vòng lặp khi tìm thấy và cập nhật
                }
            }
            renderTable();
        }
        modal.style.display = "none";
    });

    cancelBtn.addEventListener('click', function() {
            modal.style.display = "none";
        })
        //Active
    link.classList.add('active');
</script>