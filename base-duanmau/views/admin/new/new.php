<div class="main-content">
    <div class="container-fluid">
        <h2 class="mb-4"><i class='bxr bxs-news'></i> Quản Lý Bài Viết / Tin Tức</h2>

        <div class="card shadow-sm">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Danh Sách Bài Viết</h5>
                <a href="index.php?ctl=admin&class=new&act=addNew" class="btn btn-primary btn-sm">
                    <i class='bxr bxs-plus-circle'></i> Tạo Bài Viết Mới
                </a>
            </div>
            
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-striped mb-0 align-middle">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col" style="width: 30%;">Tiêu Đề</th>
                                <th scope="col" style="width: 40%;">Tóm Tắt</th>
                                <th scope="col">Trạng Thái</th>
                                <th scope="col">Ngày Tạo</th>
                                <th scope="col">Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">10</th>
                                <td>**Phân Tích Thị Trường Laptop 2025**</td>
                                <td>Xu hướng chip mới, màn hình OLED và sự lên ngôi của AI PC.</td>
                                <td><span class="badge bg-success">Đã xuất bản</span></td>
                                <td>2025-11-01</td>
                                <td>
                                    <a href="index.php?ctl=admin&class=new&act=editNew&id=10" class="btn btn-secondary btn-sm me-2 text-light" title="Sửa"><i class='bxr bxs-edit-alt'></i></a>
                                    <a href="/tin-tuc/phan-tich-laptop-2025" target="_blank" class="btn btn-info btn-sm me-2 text-white" title="Xem công khai"><i class='bxr bxs-eye-alt'></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td>Review nhanh Samsung Z-Fold 6</td>
                                <td>Chỉ là bản nháp, chưa hoàn thiện nội dung và hình ảnh.</td>
                                <td><span class="badge bg-warning text-dark">Nháp</span></td>
                                <td>2025-11-10</td>
                                <td>
                                    <a href="index.php?ctl=admin&class=new&act=editNew&id=11" class="btn btn-secondary btn-sm me-2 text-light" title="Sửa"><i class='bxr bxs-edit-alt'></i></a>
                                    <button class="btn btn-danger btn-sm" title="Xóa"><i class='bxr bxs-trash'></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>