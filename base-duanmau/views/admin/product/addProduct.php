<div class="main-content">
    <div class="container py-4">
        <h2 class="mb-4 text-center fw-bold">Thêm Sản Phẩm Mới</h2>

        <div class="product-card p-4 border rounded bg-white shadow-sm">
            <form id="productForm">
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Tên sản phẩm <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" required placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Danh mục</label>
                        <select class="form-select">
                            <option selected>Chọn danh mục...</option>
                            <option value="thoitrang">Thời Trang</option>
                            <option value="dientu">Điện Tử</option>
                            <option value="giaydep">Giày Dép</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Thương hiệu</label>
                        <input type="text" class="form-control" placeholder="Ví dụ: Apple, Nike">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mô tả ngắn <span class="text-danger">*</span></label>
                    <textarea class="form-control" rows="2" required placeholder="Tóm tắt ngắn gọn về sản phẩm"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mô tả chi tiết</label>
                    <div id="editor-container" style="height:200px;"></div>
                </div>

                <h5 class="mt-4 mb-3 text-secondary">Thông số kỹ thuật <span class="badge bg-secondary-subtle text-secondary">Tuỳ chọn</span></h5>
                <div class="mb-3 border p-3 rounded bg-light">
                    <textarea class="form-control" rows="4" placeholder="Nhập thông số kỹ thuật (Ví dụ: RAM: 8GB, Chất liệu: Cotton 100%)"></textarea>
                </div>

                <h5 class="mt-4 mb-3 text-secondary">Thiết lập Biến thể Sản phẩm</h5>

                <div id="optionsInputContainer" class="mb-3 border p-3 rounded">
                </div>

                <div class="d-flex gap-2 mb-4">
                    <button type="button" class="btn btn-outline-secondary" id="addOptionBtn">
                        <i class='bx bx-plus'></i> Thêm thuộc tính
                    </button>
                    <button type="button" class="btn btn-primary" id="generateVariantsBtn">
                        <i class='bx bx-cog'></i> Tạo biến thể
                    </button>
                </div>

                <h5 id="variantsHeader" class="text-secondary" style="display:none;">Danh sách biến thể</h5>
                <div id="variantsContainer">
                    <div class="alert alert-info text-center">Nhấn "Tạo biến thể" sau khi nhập thuộc tính.</div>
                </div>

                <div class="text-end mt-4">
                    <button type="submit" class="btn btn-success">Thêm sản phẩm</button>
                </div>
            </form>
        </div>
    </div>
</div>