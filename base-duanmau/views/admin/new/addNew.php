<div class="main-content">
    <div class="container-fluid">
        <h2 class="mb-4"><i class='bxr bxs-news'></i> Thêm Bài Viết Mới</h2>

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0">Thông Tin Bài Viết</h5>
            </div>
            <div class="card-body">
                <form action="index.php?ctl=admin&class=news&act=store" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="newsTitle" class="form-label required">Tiêu Đề Bài Viết</label>
                        <input type="text" class="form-control" id="newsTitle" name="title" required placeholder="Nhập tiêu đề (Ví dụ: 5 Mẫu Laptop Gaming Tốt Nhất)">
                    </div>

                    <div class="mb-3">
                        <label for="newsSlug" class="form-label">URL Slug (Đường dẫn thân thiện)</label>
                        <input type="text" class="form-control" id="newsSlug" name="slug" placeholder="Ví dụ: 5-mau-laptop-gaming-tot-nhat">
                        <div class="form-text">Để trống để hệ thống tự động tạo slug từ tiêu đề.</div>
                    </div>

                    <div class="mb-3">
                        <label for="shortDescription" class="form-label">Tóm Tắt / Mô Tả Ngắn</label>
                        <textarea class="form-control" id="shortDescription" name="short_description" rows="2" placeholder="Tóm tắt nội dung bài viết, tối đa 500 ký tự."></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="thumbnail" class="form-label">Ảnh Đại Diện (Thumbnail)</label>
                        <input class="form-control" type="file" id="thumbnail" name="thumbnail" accept="image/*">
                    </div>

                    <div class="mb-4">
                        <label for="fullContent" class="form-label required">Nội Dung Đầy Đủ</label>
                        <div id="editor-container" style="height:200px;"></div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center border-top pt-3">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="isPublished" name="is_published" value="1">
                            <label class="form-check-label" for="isPublished">Xuất bản ngay (Published)</label>
                            <div class="form-text">Nếu không chọn, bài viết sẽ ở trạng thái **Nháp**.</div>
                        </div>
                        <div class="d-flex">
                            <a href="index.php?ctl=admin&class=new&act=new" class="btn btn-secondary me-2">
                                <i class='bxr bxs-arrow-back'></i> Quay lại
                            </a>
                            <button type="submit" class="btn btn-success">
                                <i class='bxr bxs-save'></i> Lưu Bài Viết
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>