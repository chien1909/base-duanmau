<div class="main-content">
    <div class="container-fluid">
        <h2 class="mb-4"><i class='bxr bxs-edit-alt'></i> Chỉnh Sửa Mã Giảm Giá: **TETNGUYENDAN**</h2> 

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0">Cập Nhật Chi Tiết Mã Giảm Giá</h5>
            </div>
            <div class="card-body">
                <form action="index.php?ctl=admin&class=coupon&act=update" method="POST">
                    
                    <input type="hidden" name="coupon_id" value="1">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="couponCode" class="form-label required">Mã Code (CODE)</label>
                            <input type="text" class="form-control" id="couponCode" name="code" required value="TETNGUYENDAN" placeholder="Ví dụ: SALE10K">
                            <div class="form-text">Mã này phải là duy nhất.</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="discountType" class="form-label required">Loại Giảm Giá</label>
                            <select class="form-select" id="discountType" name="discount_type" required>
                                <option value="PERCENT" selected>Giảm theo Phần trăm (%)</option>
                                <option value="FIXED">Giảm theo Số tiền cố định</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="discountValue" class="form-label required">Giá Trị Giảm</label>
                            <input type="number" class="form-control" id="discountValue" name="discount_value" required min="0" value="15" placeholder="0">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="minOrderAmount" class="form-label">Đơn Hàng Tối Thiểu (đ)</label>
                            <input type="number" class="form-control" id="minOrderAmount" name="min_order_amount" value="500000" min="0" placeholder="0 nếu không giới hạn">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="startDate" class="form-label required">Ngày Bắt Đầu Hiệu Lực</label>
                            <input type="datetime-local" class="form-control" id="startDate" name="start_date" required value="2025-01-01T00:00">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="endDate" class="form-label required">Ngày Hết Hạn</label>
                            <input type="datetime-local" class="form-control" id="endDate" name="end_date" required value="2026-02-15T23:59">
                        </div>
                    </div>
                    
                    <div class="row">
                         <div class="col-md-6 mb-3">
                            <label for="usageLimit" class="form-label">Số Lần Sử Dụng Tối Đa</label>
                            <input type="number" class="form-control" id="usageLimit" name="usage_limit" min="1" value="500" placeholder="Để trống nếu không giới hạn">
                            <div class="form-text">Đã sử dụng: 150 lần</div>
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
                        <textarea class="form-control" id="description" name="description" rows="3">Giảm 15% cho đơn hàng có giá trị từ 500,000đ trở lên, áp dụng trong dịp Tết Nguyên Đán.</textarea>
                    </div>

                    <div class="d-flex justify-content-end">
                        <a href="index.php?ctl=admin&class=discount&act=discount" class="btn btn-secondary me-2">
                            <i class='bxr bxs-arrow-back'></i> Hủy bỏ
                        </a>
                        <button type="submit" class="btn btn-success">
                            <i class='bxr bxs-save'></i> Cập Nhật Mã Giảm Giá
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>