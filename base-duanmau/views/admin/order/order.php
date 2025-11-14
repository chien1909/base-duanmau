<div class="main-content">
    <div class="container-fluid">
        <h2 class="mb-4"><i class='bxr bxs-shopping-bag'></i> Quản Lý Đơn Hàng</h2>

        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <h5 class="card-title mb-0">Danh Sách Đơn Hàng</h5>
            </div>
            
            <div class="card-body border-bottom">
                <form class="row g-3 align-items-center">
                    <div class="col-md-3">
                        <label for="filterStatus" class="form-label mb-0 visually-hidden">Lọc theo Trạng thái</label>
                        <select class="form-select form-select-sm" id="filterStatus" name="status">
                            <option value="">-- Lọc theo Trạng thái --</option>
                            <option value="PENDING">Đang chờ xử lý (PENDING)</option>
                            <option value="SHIPPED">Đang giao hàng (SHIPPED)</option>
                            <option value="DELIVERED">Đã giao hàng (DELIVERED)</option>
                            <option value="CANCELED">Đã hủy (CANCELED)</option>
                        </select>
                    </div>
                    <div class="col-md-7">
                        <label for="searchOrder" class="form-label mb-0 visually-hidden">Tìm kiếm</label>
                        <input type="text" class="form-control form-control-sm" id="searchOrder" placeholder="Tìm kiếm theo Mã Đơn hoặc Tên Khách hàng...">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-secondary btn-sm w-100"><i class='bxr bx-filter-alt'></i> Lọc</button>
                    </div>
                </form>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-striped mb-0 align-middle">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Khách Hàng</th>
                                <th scope="col">Tổng Giá Trị</th>
                                <th scope="col">Trạng Thái</th>
                                <th scope="col">Ngày Đặt</th>
                                <th scope="col">Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1001</th>
                                <td>Nguyễn Văn A (ID: 15)</td>
                                <td class="text-danger fw-bold gia">35000000</td>
                                <td><span class="badge bg-warning text-dark">PENDING</span></td>
                                <td>2025-10-20</td>
                                <td>
                                    <a href="index.php?ctl=admin&class=order&act=order_detail&id=1001" class="btn btn-info btn-sm me-2 text-white" title="Chi tiết"><i class='bxr bxs-eye-alt'></i></a>
                                    <button class="btn btn-secondary btn-sm" title="Cập nhật trạng thái"><i class='bxr bxs-edit-alt'></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1002</th>
                                <td>Khách Vãng Lai</td>
                                <td class="text-success fw-bold gia">1200000</td>
                                <td><span class="badge bg-success">DELIVERED</span></td>
                                <td>2025-10-18</td>
                                <td>
                                    <a href="index.php?ctl=admin&class=order&act=order_detail&id=1002" class="btn btn-info btn-sm me-2 text-white" title="Chi tiết"><i class='bxr bxs-eye-alt'></i></a>
                                    <button class="btn btn-secondary btn-sm" title="Cập nhật trạng thái"><i class='bxr bxs-edit-alt'></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1003</th>
                                <td>Lê Thị B (ID: 22)</td>
                                <td class="text-secondary fw-bold gia">18500000</td>
                                <td><span class="badge bg-primary">SHIPPED</span></td>
                                <td>2025-10-25</td>
                                <td>
                                    <a href="index.php?ctl=admin&class=order&act=order_detail&id=1003" class="btn btn-info btn-sm me-2 text-white" title="Chi tiết"><i class='bxr bxs-eye-alt'></i></a>
                                    <button class="btn btn-secondary btn-sm" title="Cập nhật trạng thái"><i class='bxr bxs-edit-alt'></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white">
                <nav aria-label="Order Page navigation">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>