<div class="main-content">
    <div class="container-fluid">
        <h2 class="mb-4"><i class='bxr bxs-user-detail'></i> Quản Lý Người Dùng</h2>

        <div class="card shadow-sm">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Danh Sách Tài Khoản</h5>
                <a href="index.php?ctl=admin&class=user&act=addUser" class="btn btn-primary btn-sm">
                    <i class='bxr bxs-plus-circle'></i> Thêm Người Dùng Mới
                </a>
            </div>
            
            <div class="card-body border-bottom">
                <form class="row g-3 align-items-center">
                    <div class="col-md-3">
                        <label for="filterRole" class="form-label mb-0 visually-hidden">Lọc theo Vai trò</label>
                        <select class="form-select form-select-sm" id="filterRole" name="role_id">
                            <option value="">-- Lọc theo Vai trò --</option>
                            <option value="1">Super Admin</option>
                            <option value="2">Quản lý Sản phẩm</option>
                            <option value="3">Quản lý Đơn hàng</option>
                            <option value="5">Người dùng thường</option>
                        </select>
                    </div>
                    <div class="col-md-7">
                        <label for="searchUser" class="form-label mb-0 visually-hidden">Tìm kiếm</label>
                        <input type="text" class="form-control form-control-sm" id="searchUser" placeholder="Tìm kiếm theo Tên hoặc Email...">
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
                                <th scope="col">Họ và Tên</th>
                                <th scope="col">Email</th>
                                <th scope="col">Điện Thoại</th>
                                <th scope="col">Vai Trò</th>
                                <th scope="col">Trạng Thái</th>
                                <th scope="col">Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Super Admin</td>
                                <td>admin@shop.com</td>
                                <td>0901xxxxxx</td>
                                <td><span class="badge bg-danger">Super Admin</span></td>
                                <td><span class="badge bg-success">Hoạt động</span></td>
                                <td>
                                    <a href="index.php?ctl=admin&class=user&act=editUser&id=1" class="btn btn-secondary btn-sm me-2 text-light" title="Sửa"><i class='bxr bxs-edit-alt'></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Trần Thị C</td>
                                <td>c.tran@shop.com</td>
                                <td>0910xxxxxx</td>
                                <td><span class="badge bg-primary">QL Sản phẩm</span></td>
                                <td><span class="badge bg-success">Hoạt động</span></td>
                                <td>
                                    <a href="index.php?ctl=admin&class=user&act=editUser&id=2" class="btn btn-secondary btn-sm me-2 text-light" title="Sửa"><i class='bxr bxs-edit-alt'></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">15</th>
                                <td>Nguyễn Văn A</td>
                                <td>van.a@user.com</td>
                                <td>0912xxxxxx</td>
                                <td><span class="badge bg-info">Người dùng thường</span></td>
                                <td><span class="badge bg-secondary">Bị khóa</span></td>
                                <td>
                                    <a href="index.php?ctl=admin&class=user&act=editUser&id=15" class="btn btn-secondary btn-sm me-2 text-light" title="Sửa"><i class='bxr bxs-edit-alt'></i></a>
                                    <button class="btn btn-success btn-sm" title="Mở khóa"><i class='bxr bxs-lock-open-alt'></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white">
                <nav aria-label="User Page navigation">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>