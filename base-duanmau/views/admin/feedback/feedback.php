<div class="main-content">
    <div class="container-fluid">
        <h2 class="mb-4"><i class='bxr bxs-message-dots'></i> Quản Lý Phản Hồi & Góp Ý</h2>

        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <h5 class="card-title mb-0">Danh Sách Phản Hồi</h5>
            </div>
            
            <div class="card-body border-bottom">
                <form class="row g-3 align-items-center">
                    <div class="col-md-3">
                        <label for="filterStatus" class="form-label mb-0 visually-hidden">Lọc theo Trạng thái xử lý</label>
                        <select class="form-select form-select-sm" id="filterStatus" name="status">
                            <option value="">-- Lọc theo Trạng thái --</option>
                            <option value="NEW">Mới (NEW)</option>
                            <option value="IN_PROGRESS">Đang xử lý (IN_PROGRESS)</option>
                            <option value="RESOLVED">Đã giải quyết (RESOLVED)</option>
                        </select>
                    </div>
                    <div class="col-md-7">
                        <label for="searchFeedback" class="form-label mb-0 visually-hidden">Tìm kiếm</label>
                        <input type="text" class="form-control form-control-sm" id="searchFeedback" placeholder="Tìm kiếm theo Tiêu đề, Email hoặc Nội dung...">
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
                                <th scope="col">Họ Tên & Email</th>
                                <th scope="col" style="width: 20%;">Tiêu Đề</th>
                                <th scope="col" style="width: 30%;">Nội Dung Tóm Tắt</th>
                                <th scope="col">Thời Gian Gửi</th>
                                <th scope="col">Trạng Thái</th>
                                <th scope="col">Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">501</th>
                                <td>**Phạm Minh**<br><small>minh.p@gmail.com</small></td>
                                <td>Lỗi không đặt hàng được</td>
                                <td>Khách hàng báo lỗi không thể thanh toán bằng thẻ...</td>
                                <td>2025-11-13 15:30</td>
                                <td><span class="badge bg-danger">NEW</span></td>
                                <td>
                                    <a href="index.php?ctl=admin&class=feedback&act=feedback_detail&id=501" class="btn btn-info btn-sm me-2 text-white" title="Chi tiết"><i class='bxr bxs-eye-alt'></i></a>
                                    <a href="index.php?ctl=admin&class=feedback&act=delete&id=500" class="btn btn-secondary btn-sm" title="Xóa"><i class='bxr bxs-trash'></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">500</th>
                                <td>**Lê Hải Yến**<br><small>yen.l@company.vn</small></td>
                                <td>Góp ý về giao diện</td>
                                <td>Đề xuất thêm tính năng so sánh sản phẩm trên trang chủ.</td>
                                <td>2025-11-10 09:00</td>
                                <td><span class="badge bg-success">RESOLVED</span></td>
                                <td>
                                    <a href="index.php?ctl=admin&class=feedback&act=feedback_detail&id=500" class="btn btn-info btn-sm me-2 text-white" title="Chi tiết"><i class='bxr bxs-eye-alt'></i></a>
                                    <a href="index.php?ctl=admin&class=feedback&act=delete&id=500" class="btn btn-secondary btn-sm" title="Xóa"><i class='bxr bxs-trash'></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white">
                <nav aria-label="Feedback Page navigation">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>