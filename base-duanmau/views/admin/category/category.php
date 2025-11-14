<div class="main-content">
    <div class="container-fluid">
        <h2 class="mb-4"><i class='bxr bxs-category-alt'></i> Quản Lý Danh Mục</h2>

        <div class="card shadow-sm">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Danh Sách Danh Mục</h5>
                <a href="index.php?ctl=admin&class=category&act=addCategory" class="btn btn-primary btn-sm">
                    <i class='bxr bxs-plus-circle'></i> Thêm Danh Mục Mới
                </a>
            </div>
            
            <div class="card-body border-bottom">
                <form class="row g-3 align-items-center">
                    <div class="col-md-4">
                        <label for="filterParent" class="form-label mb-0 visually-hidden">Lọc theo Danh mục cha</label>
                        <select class="form-select form-select-sm" id="filterParent" name="parent_id">
                            <option value="">-- Lọc theo Danh mục cha --</option>
                            <option value="1">Thiết Bị Điện Tử</option>
                            <option value="4">Thời Trang</option>
                            <option value="0">Hiển thị Danh mục Cha</option>
                            <option value="-1">Hiển thị tất cả</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="searchCategory" class="form-label mb-0 visually-hidden">Tìm kiếm theo tên</label>
                        <input type="text" class="form-control form-control-sm" id="searchCategory" placeholder="Tìm kiếm theo Tên Danh Mục...">
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
                                <th scope="col">Tên Danh Mục</th>
                                <th scope="col">Danh Mục Tham Chiếu</th>
                                <th scope="col">Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Thiết Bị Điện Tử</td>
                                <td>Danh mục cha</td>
                                <td>
                                    <a href="index.php?ctl=admin&class=category&act=editCategory&id=1" class="btn btn-secondary btn-sm me-2 text-light" title="Sửa"><i class='bxr bxs-edit-alt'></i></a>
                                    <button class="btn btn-danger btn-sm" title="Xóa"><i class='bxr bxs-trash'></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Laptop</td>
                                <td>Thuộc: Thiết Bị Điện Tử</td>
                                <td>
                                    <a href="index.php?ctl=admin&class=category&act=editCategory&id=2" class="btn btn-secondary btn-sm me-2 text-light" title="Sửa"><i class='bxr bxs-edit-alt'></i></a>
                                    <button class="btn btn-danger btn-sm" title="Xóa"><i class='bxr bxs-trash'></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Điện Thoại</td>
                                <td>Thuộc: Thiết Bị Điện Tử</td>
                                <td>
                                    <a href="index.php?ctl=admin&class=category&act=editCategory&id=3" class="btn btn-secondary btn-sm me-2 text-light" title="Sửa"><i class='bxr bxs-edit-alt'></i></a>
                                    <button class="btn btn-danger btn-sm" title="Xóa"><i class='bxr bxs-trash'></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Thời Trang</td>
                                <td>Danh mục cha</td>
                                <td>
                                    <a href="index.php?ctl=admin&class=category&act=editCategory&id=4" class="btn btn-secondary btn-sm me-2 text-light" title="Sửa"><i class='bxr bxs-edit-alt'></i></a>
                                    <button class="btn btn-danger btn-sm" title="Xóa"><i class='bxr bxs-trash'></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white">
                <nav aria-label="Category Page navigation">
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