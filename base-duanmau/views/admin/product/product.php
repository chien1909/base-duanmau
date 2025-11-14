<div class="main-content">
    <div class="container-fluid">
        <h2 class="mb-4"><i class='bxr bxs-package'></i> Quản Lý Sản Phẩm</h2>

        <div class="card shadow-sm">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Danh Sách Sản Phẩm</h5>
                <a href="index.php?ctl=admin&class=product&act=addProduct" class="btn btn-primary btn-sm">
                    <i class='bxr bxs-plus-circle'></i> Thêm Sản Phẩm Mới
                </a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-striped mb-0 align-middle">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Hình Ảnh</th>
                                <th scope="col">Tên Sản Phẩm</th>
                                <th scope="col">Giá Bán</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Số Lượng Tồn</th>
                                <th scope="col">Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td class="img_pro"><img class="img_allproduct" src="../image/photo-5-163698973434139514998.jpg" alt=""></td>
                                <td>Laptop Gaming X Model 2024</td>
                                <td class="gia">35000000</td>
                                <td>Điện thoại</td>
                                <td>50</td>
                                <td>
                                    <a href="index.php?ctl=admin&class=product&act=product_detail&id=1" class="btn btn-secondary btn-sm me-2 text-light" title="Chi tiết"><i class='bxr  bxs-eye-alt'></i></a>
                                    <button class="btn btn-danger btn-sm" title="Xóa"><i class='bxr bxs-trash'></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td class="img_pro"><img class="img_allproduct" src="../image/photo-5-163698973434139514998.jpg" alt=""></td>
                                <td>Điện Thoại Z Pro 5G</td>
                                <td class="gia">18500000</td>
                                <td>Điện thoại</td>
                                <td>120</td>
                                <td>
                                    <a href="#" class="btn btn-secondary btn-sm me-2 text-light" title="Chi tiết"><i class='bxr  bxs-eye-alt'></i></a>
                                    <button class="btn btn-danger btn-sm" title="Xóa"><i class='bxr bxs-trash'></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td class="img_pro"><img class="img_allproduct" src="../image/photo-5-163698973434139514998.jpg" alt=""></td>
                                <td>Tai Nghe Không Dây A01</td>
                                <td class="gia">1200000</td>
                                <td>Điện thoại</td>
                                <td>0</td>
                                <td>
                                    <a href="#" class="btn btn-secondary btn-sm me-2 text-light" title="Chi tiết"><i class='bxr  bxs-eye-alt'></i></a>
                                    <button class="btn btn-danger btn-sm" title="Xóa"><i class='bxr bxs-trash'></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white">
                <nav aria-label="Product Page navigation">
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