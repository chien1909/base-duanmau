<div class="main-content">
    <div class="container-fluid">
        <h2 class="mb-4"><i class='bxr bxs-edit-alt'></i> Chỉnh Sửa Bài Viết: **Phân Tích Thị Trường Laptop**</h2>

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0">Cập Nhật Thông Tin Bài Viết</h5>
            </div>
            <div class="card-body">
                <form action="index.php?ctl=admin&class=news&act=update" method="POST" enctype="multipart/form-data">

                    <input type="hidden" name="news_id" value="10">

                    <div class="mb-3">
                        <label for="newsTitle" class="form-label required">Tiêu Đề Bài Viết</label>
                        <input type="text" class="form-control" id="newsTitle" name="title" required value="Phân Tích Thị Trường Laptop 2025" placeholder="Nhập tiêu đề">
                    </div>

                    <div class="mb-3">
                        <label for="newsSlug" class="form-label">URL Slug (Đường dẫn thân thiện)</label>
                        <input type="text" class="form-control" id="newsSlug" name="slug" value="phan-tich-thi-truong-laptop-2025" placeholder="Ví dụ: 5-mau-laptop-gaming-tot-nhat">
                        <div class="form-text">Đường dẫn sẽ là: `/tin-tuc/phan-tich-thi-truong-laptop-2025`</div>
                    </div>

                    <div class="mb-3">
                        <label for="shortDescription" class="form-label">Tóm Tắt / Mô Tả Ngắn</label>
                        <textarea class="form-control" id="shortDescription" name="short_description" rows="2">Xu hướng chip mới, màn hình OLED và sự lên ngôi của AI PC đang định hình lại thị trường máy tính xách tay trong năm tới.</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ảnh Đại Diện Hiện Tại</label>
                        <div class="d-flex align-items-center">
                            <img src="../image/photo-5-163698973434139514998.jpg" alt="Ảnh đại diện" style="width: 150px; height: 100px; object-fit: cover;" class="img-thumbnail me-3">
                            <div>
                                <label for="thumbnail" class="form-label mb-1">Thay đổi Ảnh Đại Diện Mới</label>
                                <input class="form-control" type="file" id="thumbnail" name="thumbnail" accept="image/*">
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="fullContent" class="form-label required">Nội Dung Đầy Đủ</label>
                        <div id="editor-container" style="height:200px;"></div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center border-top pt-3">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="isPublished" name="is_published" value="1" checked>
                            <label class="form-check-label" for="isPublished">Xuất bản ngay (Published)</label>
                            <div class="form-text text-success">Bài viết này đang **Được Xuất Bản**.</div>
                        </div>
                        <div class="d-flex">
                            <a href="index.php?ctl=admin&class=new&act=new" class="btn btn-secondary me-2">
                                <i class='bxr bxs-arrow-back'></i> Hủy bỏ
                            </a>
                            <button type="submit" class="btn btn-success">
                                <i class='bxr bxs-save'></i> Cập Nhật Bài Viết
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>