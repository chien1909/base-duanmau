<div class="main-content">
    <div class="container-fluid">
        <h2 class="mb-4"><i class='bxr bxs-discount'></i> Quản Lý Mã Giảm Giá</h2>

        <div class="card shadow-sm">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Danh Sách Mã Giảm Giá</h5>
                <a href="index.php?ctl=admin&class=discount&act=addDiscount" class="btn btn-primary btn-sm">
                    <i class='bxr bxs-plus-circle'></i> Thêm Mã Giảm Giá Mới
                </a>
            </div>
            
            <div class="card-body border-bottom">
                <form class="row g-3 align-items-center">
                    <div class="col-md-3">
                        <label for="filterType" class="form-label mb-0 visually-hidden">Lọc theo Loại</label>
                        <select class="form-select form-select-sm" id="filterType" name="type">
                            <option value="">-- Lọc theo Loại giảm --</option>
                            <option value="PERCENT">Phần trăm (%)</option>
                            <option value="FIXED">Số tiền cố định</option>
                        </select>
                    </div>
                    <div class="col-md-7">
                        <label for="searchCoupon" class="form-label mb-0 visually-hidden">Tìm kiếm</label>
                        <input type="text" class="form-control form-control-sm" id="searchCoupon" placeholder="Tìm kiếm theo Mã Code hoặc Mô tả...">
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
                                <th scope="col">Mã Code</th>
                                <th scope="col">Giá Trị Giảm</th>
                                <th scope="col">Đã Dùng / Giới Hạn</th>
                                <th scope="col">Ngày Hết Hạn</th>
                                <th scope="col">Trạng Thái</th>
                                <th scope="col">Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>**TETNGUYENDAN**</td>
                                <td>15%</td>
                                <td>150 / 500</td>
                                <td>2026-02-15</td>
                                <td><span class="badge bg-success">Đang hoạt động</span></td>
                                <td>
                                    <a href="index.php?ctl=admin&class=discount&act=editDiscount&id=1" class="btn btn-secondary btn-sm me-2 text-light" title="Sửa"><i class='bxr bxs-edit-alt'></i></a>
                                    <button class="btn btn-danger btn-sm" title="Xóa"><i class='bxr bxs-trash'></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>SALEFIX100</td>
                                <td class="gia">100000</td>
                                <td>800 / 800</td>
                                <td>2025-10-30</td>
                                <td><span class="badge bg-danger">Hết hiệu lực</span></td>
                                <td>
                                    <a href="index.php?ctl=admin&class=discount&act=editDiscount&id=2" class="btn btn-secondary btn-sm me-2 text-light" title="Sửa"><i class='bxr bxs-edit-alt'></i></a>
                                    <button class="btn btn-danger btn-sm" title="Xóa"><i class='bxr bxs-trash'></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white">
                <nav aria-label="Coupon Page navigation">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>