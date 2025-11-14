<div class="main-content">
    <div class="container-fluid">
        <h2 class="mb-4"><i class='bxr bxs-edit-alt'></i> Chỉnh Sửa Người Dùng: **Nguyễn Văn A**</h2> 

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0">Cập Nhật Thông Tin Tài Khoản</h5>
            </div>
            <div class="card-body">
                <form action="index.php?ctl=admin&class=user&act=update" method="POST">
                    
                    <input type="hidden" name="user_id" value="15">
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="fullName" class="form-label required">Họ và Tên</label>
                            <input type="text" class="form-control" id="fullName" name="full_name" required value="Nguyễn Văn A">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label required">Email Đăng Nhập</label>
                            <input type="email" class="form-control" id="email" name="email" required value="van.a@user.com">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label">Mật Khẩu (Để trống nếu không thay đổi)</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Chỉ nhập nếu muốn thay đổi mật khẩu">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Số Điện Thoại</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="0912xxxxxx">
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <label for="userRole" class="form-label required">Vai Trò / Phân Quyền</label>
                            <select class="form-select" id="userRole" name="role_id" required>
                                <option value="1">Super Admin</option>
                                <option value="2">Quản lý Sản phẩm</option>
                                <option value="3">Quản lý Đơn hàng</option>
                                <option value="4">Quản lý Marketing</option>
                                <option value="5" selected>Người dùng thường</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-4 d-flex align-items-center">
                             <div class="form-check form-switch pt-3">
                                 <input class="form-check-input" type="checkbox" id="isDisabled" name="is_disabled" value="1" checked> 
                                <label class="form-check-label" for="isDisabled">Khóa tài khoản (Disabled)</label>
                                <div class="form-text text-danger">Hiện tại tài khoản này đang bị khóa.</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-end">
                        <a href="index.php?ctl=admin&class=user&act=user" class="btn btn-secondary me-2">
                            <i class='bxr bxs-arrow-back'></i> Hủy bỏ
                        </a>
                        <button type="submit" class="btn btn-success">
                            <i class='bxr bxs-save'></i> Cập Nhật Người Dùng
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>