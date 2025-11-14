<div class="main-content">
    <div class="container-fluid">
        <h2 class="mb-4"><i class='bxr bxs-star-half'></i> Quản Lý Đánh Giá Sản Phẩm</h2>

        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <h5 class="card-title mb-0">Danh Sách Đánh Giá Khách Hàng</h5>
            </div>
            
            <div class="card-body border-bottom">
                <form class="row g-3 align-items-center">
                    <div class="col-md-3">
                        <label for="filterStatus" class="form-label mb-0 visually-hidden">Lọc theo Trạng thái duyệt</label>
                        <select class="form-select form-select-sm" id="filterStatus" name="is_approved">
                            <option value="">-- Lọc theo Trạng thái duyệt --</option>
                            <option value="0">Chờ duyệt (Pending)</option>
                            <option value="1">Đã duyệt (Approved)</option>
                        </select>
                    </div>
                    <div class="col-md-7">
                        <label for="searchReview" class="form-label mb-0 visually-hidden">Tìm kiếm</label>
                        <input type="text" class="form-control form-control-sm" id="searchReview" placeholder="Tìm kiếm theo Tên SP, Email hoặc Nội dung nhận xét...">
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
                                <th scope="col">Sản Phẩm</th>
                                <th scope="col">Người Đánh Giá</th>
                                <th scope="col">Điểm (Sao)</th>
                                <th scope="col">Nội Dung</th>
                                <th scope="col">Trạng Thái</th>
                                <th scope="col">Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">205</th>
                                <td>**Laptop Gaming X**</td>
                                <td>Nguyễn Văn A (ID: 15)</td>
                                <td><span class="text-warning">★★★★★</span> (5)</td>
                                <td style="width: 30%;">Máy dùng rất nhanh, thiết kế đẹp, đáng tiền.</td>
                                <td><span class="badge bg-warning text-dark">Chờ duyệt</span></td>
                                <td>
                                    <a href="index.php?ctl=admin&class=review&act=approve&id=205" class="btn btn-success btn-sm me-2" title="Duyệt"><i class='bxr bxs-check-circle'></i> Duyệt</a>
                                    <a href="index.php?ctl=admin&class=review&act=reject&id=205" class="btn btn-danger btn-sm" title="Từ chối/Xóa"><i class='bxr bxs-trash'></i> Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">204</th>
                                <td>**Điện Thoại Z Pro 5G**</td>
                                <td>Lê Thị B (ID: 22)</td>
                                <td><span class="text-warning">★★★☆☆</span> (3)</td>
                                <td style="width: 30%;">Máy ảnh tốt, nhưng pin hơi yếu, giao hàng nhanh.</td>
                                <td><span class="badge bg-success">Đã duyệt</span></td>
                                <td>
                                    <a href="index.php?ctl=admin&class=review&act=unapprove&id=204" class="btn btn-warning btn-sm me-2 text-dark" title="Hủy duyệt"><i class='bxr bxs-x-circle'></i> Hủy duyệt</a>
                                    <a href="index.php?ctl=admin&class=review&act=delete&id=204" class="btn btn-danger btn-sm" title="Xóa"><i class='bxr bxs-trash'></i> Xóa</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white">
                <nav aria-label="Review Page navigation">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>