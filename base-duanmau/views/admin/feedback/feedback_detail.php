<div class="main-content">
    <div class="container-fluid">
        <h2 class="mb-4"><i class='bxr bxs-file-detail'></i> Chi Tiết Phản Hồi #501</h2>

        <div class="card shadow-sm">
            <div class="card-header bg-warning text-dark">
                <h5 class="card-title mb-0">Lỗi không đặt hàng được <span class="badge bg-danger float-end">NEW</span></h5>
            </div>
            <div class="card-body">
                
                <div class="row mb-4">
                    <div class="col-md-6">
                        <p><strong>Người Gửi:</strong> Phạm Minh</p>
                        <p><strong>Email:</strong> minh.p@gmail.com</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <p><strong>Thời Điểm Gửi:</strong> 2025-11-13 15:30:45</p>
                        <p><strong>Trạng Thái Hiện Tại:</strong> <span class="badge bg-danger">MỚI</span></p>
                    </div>
                </div>
                
                <hr>

                <div class="mb-4 p-3 bg-light border rounded">
                    <h6>Nội Dung Phản Hồi Khách Hàng:</h6>
                    <p>Chào bộ phận hỗ trợ,</p>
                    <p>Tôi đang cố gắng thanh toán đơn hàng #1050 bằng thẻ tín dụng Visa nhưng hệ thống báo lỗi không rõ ràng. Tôi đã thử lại 3 lần nhưng vẫn không được. Xin vui lòng kiểm tra lỗi thanh toán và phản hồi lại sớm nhất có thể. Tôi muốn mua sản phẩm này gấp.</p>
                </div>
                
                <hr>

                <h5 class="mt-4 mb-3"><i class='bxr bxs-comment-detail'></i> Phản Hồi & Cập Nhật Nội Bộ</h5>
                <form action="index.php?ctl=admin&class=feedback&act=reply_and_update&id=501" method="POST">
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="newStatus" class="form-label">Chuyển sang Trạng Thái</label>
                            <select class="form-select" id="newStatus" name="status">
                                <option value="NEW" selected>Mới (NEW)</option>
                                <option value="IN_PROGRESS">Đang xử lý (IN_PROGRESS)</option>
                                <option value="RESOLVED">Đã giải quyết (RESOLVED)</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                             <label for="adminName" class="form-label">Người Xử Lý/Phản Hồi</label>
                            <input type="text" class="form-control" id="adminName" value="Super Admin (ID: 1)" disabled>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="responseContent" class="form-label">Nội dung Phản Hồi gửi Khách hàng</label>
                        <textarea class="form-control" id="responseContent" name="response_content" rows="4" placeholder="Nhập nội dung phản hồi chính thức cho khách hàng..."></textarea>
                        <div class="form-text">Phản hồi này sẽ được gửi đến email: **minh.p@gmail.com**</div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="internalNote" class="form-label">Ghi Chú Nội Bộ (Chỉ Admin xem)</label>
                        <textarea class="form-control" id="internalNote" name="internal_note" rows="2" placeholder="Tóm tắt hành động đã thực hiện (VD: Đã kiểm tra log, cần chuyển cho team IT)..."></textarea>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-success">
                            <i class='bxr bxs-send'></i> Gửi Phản Hồi & Cập Nhật
                        </button>
                    </div>
                </form>

            </div>
            <div class="card-footer bg-white">
                 <a href="index.php?ctl=admin&class=feedback&act=feedback" class="btn btn-secondary">
                    <i class='bxr bxs-arrow-back'></i> Quay lại Danh sách
                </a>
                <button class="btn btn-danger float-end"><i class='bxr bxs-trash'></i> Xóa Phản Hồi</button>
            </div>
        </div>
    </div>
</div>