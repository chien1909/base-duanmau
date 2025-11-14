<div class="main-content">
    <div class="container-fluid">
        <h2 class="mb-4"><i class='bxr bxs-edit-alt'></i> Chỉnh Sửa Danh Mục: **Laptop**</h2>

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0">Cập Nhật Thông Tin Danh Mục</h5>
            </div>
            <div class="card-body">
                <form action="index.php?ctl=admin&class=category&act=update" method="POST">
                    
                    <input type="hidden" name="id" value="2">
                    
                    <div class="mb-3">
                        <label for="categoryName" class="form-label required">Tên Danh Mục</label>
                        <input type="text" class="form-control" id="categoryName" name="name" required value="Laptop" placeholder="Ví dụ: Điện Thoại Thông Minh">
                        <div class="form-text">Tên danh mục sẽ hiển thị trên website.</div>
                    </div>

                    <div class="mb-4">
                        <label for="parentCategory" class="form-label">Danh Mục Cha</label>
                        <select class="form-select" id="parentCategory" name="parent_id">
                            <option value="0">-- (Không có) Đây là Danh mục cha cấp 1 --</option>
                            <option disabled>---</option>
                            <option value="1" selected>Thiết Bị Điện Tử</option>
                            <option value="4">Thời Trang</option>
                            <option value="5">Đồ Gia Dụng</option>
                        </select>
                        <div class="form-text">Chọn danh mục cha nếu đây là danh mục con.</div>
                    </div>
                    
                    <div class="d-flex justify-content-end">
                        <a href="index.php?ctl=admin&class=category&act=category" class="btn btn-secondary me-2">
                            <i class='bxr bxs-arrow-back'></i> Hủy bỏ
                        </a>
                        <button type="submit" class="btn btn-success">
                            <i class='bxr bxs-save'></i> Cập Nhật Danh Mục
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>