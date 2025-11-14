<div class="main-content">
    <div class="container-fluid">
        <h2 class="mb-4"><i class='bxr bxs-coupon'></i> Thêm Mã Giảm Giá Mới</h2>

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0">Chi Tiết Mã Giảm Giá</h5>
            </div>
            <div class="card-body">
                <form method="POST">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="couponCode" class="form-label required">Mã Code (CODE)</label>
                            <input type="text" class="form-control" id="couponCode" name="code" required placeholder="Ví dụ: SALE10K">
                            <div class="form-text">Mã này phải là duy nhất.</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="discountType" class="form-label required">Loại Giảm Giá</label>
                            <select class="form-select" id="discountType" name="discount_type" required>
                                <option value="">-- Chọn Loại Giảm Giá --</option>
                                <option value="PERCENT">Giảm theo Phần trăm (%)</option>
                                <option value="FIXED">Giảm theo Số tiền cố định</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="discountValue" class="form-label required">Giá Trị Giảm</label>
                            <input type="number" class="form-control" id="discountValue" name="discount_value" required min="0" placeholder="0">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="minOrderAmount" class="form-label">Đơn Hàng Tối Thiểu (đ)</label>
                            <input type="number" class="form-control" id="minOrderAmount" name="min_order_amount" value="0" min="0" placeholder="0 nếu không giới hạn">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="startDate" class="form-label required">Ngày Bắt Đầu Hiệu Lực</label>
                            <input type="datetime-local" class="form-control" id="startDate" name="start_date" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="endDate" class="form-label required">Ngày Hết Hạn</label>
                            <input type="datetime-local" class="form-control" id="endDate" name="end_date" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="usageLimit" class="form-label">Số Lần Sử Dụng Tối Đa</label>
                            <input type="number" class="form-control" id="usageLimit" name="usage_limit" min="1" placeholder="Để trống nếu không giới hạn">
                        </div>
                        <div class="col-md-6 mb-3 d-flex align-items-end">
                            <div class="form-check form-switch pb-1">
                                <input class="form-check-input" type="checkbox" id="isActive" name="is_active" value="1" checked>
                                <label class="form-check-label" for="isActive">Kích hoạt Mã giảm giá (Hoạt động)</label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="description" class="form-label">Mô tả về Mã Giảm Giá</label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Nhập mô tả chi tiết về mã giảm giá này..."></textarea>
                    </div>

                    <div class="d-flex justify-content-end">
                        <a href="index.php?ctl=admin&class=discount&act=discount" class="btn btn-secondary me-2">
                            <i class='bxr bxs-arrow-back'></i> Quay lại
                        </a>
                        <button type="submit" class="btn btn-success">
                            <i class='bxr bxs-save'></i> Lưu Mã Giảm Giá
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>