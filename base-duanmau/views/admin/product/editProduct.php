<div class="main-content py-4">
    <div class="container">
        <h2 class="text-center fw-bold mb-4">Sửa Sản Phẩm</h2>

        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <form id="productForm" method="POST" enctype="multipart/form-data">

                    <!-- THÔNG TIN CƠ BẢN -->
                    <h5 class="fw-semibold mb-3 text-secondary border-bottom pb-2">Thông tin cơ bản</h5>
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label class="form-label">Tên sản phẩm <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="product_name" required placeholder="Nhập tên sản phẩm" value="Iphone 17 plus">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Danh mục</label>
                            <select class="form-select" name="category">
                                <option>Chọn danh mục...</option>
                                <option value="thoitrang">Thời Trang</option>
                                <option value="dientu" selected>Điện Tử</option>
                                <option value="giaydep">Giày Dép</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Thương hiệu</label>
                            <input type="text" class="form-control" name="brand" placeholder="Ví dụ: Apple, Nike" value="Iphone">
                        </div>
                    </div>

                    <!-- MÔ TẢ -->
                    <h5 class="fw-semibold mb-3 text-secondary border-bottom pb-2">Mô tả sản phẩm</h5>
                    <div class="mb-3">
                        <label class="form-label">Mô tả ngắn <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="short_description" rows="2" required>...</textarea>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Mô tả chi tiết</label>
                        <div id="editor-container" style="height: 200px;"></div>
                        <input type="hidden" name="long_description" id="hiddenDescription">
                    </div>

                    <!-- THÔNG SỐ KỸ THUẬT -->
                    <h5 class="fw-semibold mb-3 text-secondary border-bottom pb-2">
                        Thông số kỹ thuật
                        <span class="badge bg-secondary-subtle text-secondary ms-1">Tuỳ chọn</span>
                    </h5>
                    <div class="mb-4">
                        <textarea class="form-control" rows="4" name="specifications" placeholder="Ví dụ: RAM: 8GB, Chất liệu: Cotton 100%">...</textarea>
                    </div>

                    <!-- BIẾN THỂ SẢN PHẨM -->
                    <h5 class="fw-semibold mb-3 text-secondary border-bottom pb-2">Biến thể sản phẩm</h5>

                    <div id="optionsInputContainer" class="mb-3 border p-3 rounded bg-light">
                        <div class="option-row row g-2 align-items-end mb-2" id="option-0">
                            <div class="col-md-4">
                                <input type="text" class="form-control option-name" placeholder="Tên thuộc tính (VD: Màu sắc)" value="Xanh" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control option-values" placeholder="Giá trị (VD: Đỏ, Xanh, Đen)" value="32GB, 12GB" required>
                            </div>
                            <div class="col-md-2 d-grid">
                                <button type="button" class="btn btn-danger delete-option-btn" data-option-id="option-0">
                                    <i class='bx bx-trash'></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-2 mb-4">
                        <button type="button" class="btn btn-outline-secondary" id="addOptionBtn">
                            <i class='bx bx-plus'></i> Thêm thuộc tính
                        </button>
                        <button type="button" class="btn btn-primary" id="generateVariantsBtn">
                            <i class='bx bx-cog'></i> Tạo biến thể
                        </button>
                    </div>

                    <h5 id="variantsHeader" class="fw-semibold text-secondary mb-3" style="display:none;">
                        Danh sách biến thể
                    </h5>

                    <div id="variantsContainer">
                        <div class="alert alert-info text-center mb-3">
                            Nhấn "Tạo biến thể" sau khi nhập thuộc tính.
                        </div>
                        <div class="variant-row border rounded p-3 mb-3"
                            data-parent="${optionId}" data-option="${name}" data-value="${v}">
                            <strong>Xanh:</strong> 32GB
                            <div class="mt-2 row g-3">
                                <input type="hidden" name="variants[${variantIndex}][option]" value="${name}">
                                <input type="hidden" name="variants[${variantIndex}][value]" value="${v}">
                                <div class="col-md-3">
                                    <label class="form-label mb-0 small">Giá gốc (*)</label>
                                    <input type="number" class="form-control variant-price" name="variants[${variantIndex}][price]" min="0" placeholder="0" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label mb-0 small">Giảm giá (%)</label>
                                    <input type="number" class="form-control variant-discount" name="variants[${variantIndex}][discount]" min="0" max="100" placeholder="0">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label mb-0 small">Giá sau giảm</label>
                                    <input type="text" class="form-control variant-sale-price" readonly placeholder="Giá bán">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label mb-0 small">Kho hàng (*)</label>
                                    <input type="number" class="form-control variant-stock" name="variants[${variantIndex}][stock]" min="0" placeholder="0" required>
                                </div>
                                <div class="col-12 mt-2">
                                    <label class="form-label mb-0 small">Hình ảnh biến thể</label>
                                    <input class="form-control" type="file" name="variants[${variantIndex}][images][]" multiple>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-end mt-4">
                        <button type="submit" class="btn btn-success px-4">
                            <i class="bx bx-save"></i> Lưu
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>