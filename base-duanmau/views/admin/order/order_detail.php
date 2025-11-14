<div class="main-content">
    <div class="container-fluid">
        <h2 class="mb-4"><i class='bxr bxs-file-detail'></i> Chi Tiết Đơn Hàng #1001</h2>

        <div class="row">
            <div class="col-lg-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="card-title mb-0"><i class='bxr bxs-bell'></i> Trạng Thái Đơn Hàng</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="fw-bold">Trạng thái hiện tại:</span>
                            <span class="badge bg-warning text-dark fs-6">PENDING</span>
                        </div>
                        <hr>
                        <form method="POST">
                            <div class="mb-3">
                                <label for="newStatus" class="form-label">Cập nhật Trạng Thái</label>
                                <select class="form-select" id="newStatus" name="status">
                                    <option value="PENDING" selected>Đang chờ xử lý</option>
                                    <option value="SHIPPED">Đang giao hàng</option>
                                    <option value="DELIVERED">Đã giao hàng</option>
                                    <option value="CANCELED">Hủy đơn</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Lưu Trạng Thái Mới</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Thông Tin Khách Hàng & Giao Hàng</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Khách Hàng:</strong> Nguyễn Văn A (ID: 15)</p>
                                <p><strong>Email:</strong> van.a@example.com</p>
                                <p><strong>Điện Thoại:</strong> 090xxxxxxx</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Ngày Đặt:</strong> 2025-10-20 10:30:00</p>
                                <p><strong>Phương Thức TT:</strong> Thanh toán khi nhận hàng (COD)</p>
                                <p><strong>Địa Chỉ Giao Hàng:</strong> 123 Đường ABC, Phường 10, Quận 5, TP.HCM</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-info text-white">
                        <h5 class="card-title mb-0">Chi Tiết Sản Phẩm Đã Đặt</h5>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Sản Phẩm</th>
                                    <th>Giá (tại thời điểm đặt)</th>
                                    <th>Số Lượng</th>
                                    <th>Thành Tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Laptop Gaming X Model 2024 (ID: 1)</td>
                                    <td class="gia">35000000</td>
                                    <td>1</td>
                                    <td class="gia">35000000</td>
                                </tr>
                                <tr>
                                    <td>Tai Nghe Không Dây A01 (ID: 3)</td>
                                    <td class="gia">1200000</td>
                                    <td>2</td>
                                    <td class="gia">2400000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="row justify-content-end">
                            <div class="col-md-6">
                                <table class="table table-borderless table-sm mb-0">
                                    <tr>
                                        <td class="text-start">Tổng Giá Trị Sản Phẩm:</td>
                                        <td class="text-end gia">37400000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start">Mã Giảm Giá (COUPON_10):</td>
                                        <td class="text-end text-danger gia">2400000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start">Phí Vận Chuyển:</td>
                                        <td class="text-end gia">30000</td>
                                    </tr>
                                    <tr class="fw-bold fs-5 table-light">
                                        <td class="text-start">Tổng Thanh Toán (Grand Total):</td>
                                        <td class="text-end text-danger gia">35030000</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>