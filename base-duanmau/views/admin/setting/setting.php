<div class="main-content">
    <div class="container-fluid">
        <h2 class="mb-4"><i class='bxr bxs-cog'></i> Cài Đặt Hệ Thống</h2>

        <div class="card shadow-sm">
            <div class="card-body">
                
                <form action="index.php?ctl=admin&class=setting&act=update" method="POST">
                    
                    <ul class="nav nav-tabs mb-4" id="settingTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="general-tab" data-bs-toggle="tab" href="#general" role="tab">Cài Đặt Chung</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ecommerce-tab" data-bs-toggle="tab" href="#ecommerce" role="tab">Thương Mại Điện Tử</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="seo-tab" data-bs-toggle="tab" href="#seo" role="tab">SEO & Marketing</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="settingTabsContent">
                        
                        <div class="tab-pane fade show active" id="general" role="tabpanel">
                            <h4 class="mb-3 text-primary">Thông Tin Cơ Bản Website</h4>

                            <div class="mb-3">
                                <label for="siteName" class="form-label">Tên Website</label>
                                <input type="text" class="form-control" id="siteName" name="SITE_NAME" value="Siêu Thị Công Nghệ A">
                                <div class="form-text">Tên này hiển thị ở tiêu đề trang và footer.</div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="siteEmail" class="form-label">Email Liên Hệ/Hỗ Trợ</label>
                                <input type="email" class="form-control" id="siteEmail" name="SITE_EMAIL" value="info@shopa.vn">
                            </div>
                            
                            <div class="mb-3">
                                <label for="phoneSupport" class="form-label">Số Điện Thoại Hỗ Trợ</label>
                                <input type="text" class="form-control" id="phoneSupport" name="PHONE_SUPPORT" value="1900 1234">
                            </div>
                            
                            <div class="mb-3">
                                <label for="allowRegistration" class="form-label">Cho phép đăng ký mới</label>
                                <select class="form-select" id="allowRegistration" name="ALLOW_REGISTRATION">
                                    <option value="1" selected>Có (Cho phép khách hàng tự đăng ký)</option>
                                    <option value="0">Không (Chỉ Admin tạo tài khoản)</option>
                                </select>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="ecommerce" role="tabpanel">
                            <h4 class="mb-3 text-success">Thông Số Vận Chuyển & Thanh Toán</h4>

                            <div class="mb-3">
                                <label for="shippingFeeDefault" class="form-label">Phí Vận Chuyển Mặc Định (đ)</label>
                                <input type="number" class="form-control" id="shippingFeeDefault" name="SHIPPING_FEE_DEFAULT" value="30000">
                            </div>
                            
                            <div class="mb-3">
                                <label for="minFreeShipping" class="form-label">Đơn Hàng Miễn Phí Vận Chuyển Tối Thiểu (đ)</label>
                                <input type="number" class="form-control" id="minFreeShipping" name="MIN_FREE_SHIPPING" value="1000000">
                            </div>
                            
                            <div class="mb-3">
                                <label for="taxRatePercent" class="form-label">Thuế Suất VAT (%)</label>
                                <input type="number" class="form-control" id="taxRatePercent" name="TAX_RATE_PERCENT" value="10">
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="seo" role="tabpanel">
                            <h4 class="mb-3 text-info">Tối Ưu Hóa Công Cụ Tìm Kiếm (SEO)</h4>

                            <div class="mb-3">
                                <label for="seoHomepageTitle" class="form-label">SEO Title Trang Chủ</label>
                                <input type="text" class="form-control" id="seoHomepageTitle" name="SEO_HOMEPAGE_TITLE" value="Mua Laptop Giá Tốt | Siêu Thị Công Nghệ A">
                                <div class="form-text">Tiêu đề này hiển thị trên tab trình duyệt và kết quả tìm kiếm.</div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="seoHomepageDesc" class="form-label">SEO Description Trang Chủ</label>
                                <textarea class="form-control" id="seoHomepageDesc" name="SEO_HOMEPAGE_DESC" rows="3">Hệ thống phân phối laptop, PC, phụ kiện chính hãng. Cam kết giá tốt nhất, giao hàng nhanh toàn quốc.</textarea>
                            </div>
                        </div>
                        
                    </div>
                    
                    <hr>

                     <div class="text-end mt-4">
                        <button type="submit" class="btn btn-success px-4">
                            <i class="bx bx-save"></i> Lưu thay đổi
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>