<?php
class dashboardController
{
    
    public function dashboard()
    {
        include '../Front-end/view/admin/header_link.php';
        include_once '../Front-end/view/admin/header.php';
        require_once '../Front-end/view/admin/dashboard/dashboard.php';
        include_once '../Front-end/view/admin/footter_link.php';
    }

}

class categoryController
{
    
    public function category()
    {
        include '../Front-end/view/admin/header_link.php';
        include_once '../Front-end/view/admin/header.php';
        require_once '../Front-end/view/admin/category/category.php';
        include_once '../Front-end/view/admin/footter_link.php';
    }

    public function addCategory()
    {
        include '../Front-end/view/admin/header_link.php';
        include_once '../Front-end/view/admin/header.php';
        require_once '../Front-end/view/admin/category/addCategory.php';
        include_once '../Front-end/view/admin/footter_link.php';
    }

    public function editCategory()
    {
        include '../Front-end/view/admin/header_link.php';
        include_once '../Front-end/view/admin/header.php';
        require_once '../Front-end/view/admin/category/editCategory.php';
        include_once '../Front-end/view/admin/footter_link.php';
    }
}


class productController
{
    
    public function product()
    {
        include '../Front-end/view/admin/header_link.php';
        include_once '../Front-end/view/admin/header.php';
        require_once '../Front-end/view/admin/product/product.php';
        include_once '../Front-end/view/admin/footter_link.php';
    }

    public function addProduct()
    {
        include '../Front-end/view/admin/header_link.php';
        include_once '../Front-end/view/admin/header.php';
        require_once '../Front-end/view/admin/product/addProduct.php';
        include_once '../Front-end/view/admin/footter_link.php';
    }

    public function editProduct()
    {
        include '../Front-end/view/admin/header_link.php';
        include_once '../Front-end/view/admin/header.php';
        require_once '../Front-end/view/admin/product/editProduct.php';
        include_once '../Front-end/view/admin/footter_link.php';
    }

    public function product_detail()
    {
        include '../Front-end/view/admin/header_link.php';
        include_once '../Front-end/view/admin/header.php';
        require_once '../Front-end/view/admin/product/product_detail.php';
        include_once '../Front-end/view/admin/footter_link.php';
    }
}

class reviewController
{
    
    public function review()
    {
        include '../Front-end/view/admin/header_link.php';
        include_once '../Front-end/view/admin/header.php';
        require_once '../Front-end/view/admin/review/review.php';
        include_once '../Front-end/view/admin/footter_link.php';
    }
}

class orderController
{
    
    public function order()
    {
        include '../Front-end/view/admin/header_link.php';
        include_once '../Front-end/view/admin/header.php';
        require_once '../Front-end/view/admin/order/order.php';
        include_once '../Front-end/view/admin/footter_link.php';
    }

    public function order_detail()
    {
        include '../Front-end/view/admin/header_link.php';
        include_once '../Front-end/view/admin/header.php';
        require_once '../Front-end/view/admin/order/order_detail.php';
        include_once '../Front-end/view/admin/footter_link.php';
    }
}

class userController
{
    
    public function user()
    {
        include '../Front-end/view/admin/header_link.php';
        include_once '../Front-end/view/admin/header.php';
        require_once '../Front-end/view/admin/user/user.php';
        include_once '../Front-end/view/admin/footter_link.php';
    }

    public function addUser()
    {
        include '../Front-end/view/admin/header_link.php';
        include_once '../Front-end/view/admin/header.php';
        require_once '../Front-end/view/admin/user/addUser.php';
        include_once '../Front-end/view/admin/footter_link.php';
    }

    public function editUser()
    {
        include '../Front-end/view/admin/header_link.php';
        include_once '../Front-end/view/admin/header.php';
        require_once '../Front-end/view/admin/user/editUser.php';
        include_once '../Front-end/view/admin/footter_link.php';
    }
}

class discountController
{
    
    public function discount()
    {
        include '../Front-end/view/admin/header_link.php';
        include_once '../Front-end/view/admin/header.php';
        require_once '../Front-end/view/admin/discount/discount.php';
        include_once '../Front-end/view/admin/footter_link.php';
    }

    public function addDiscount()
    {
        include '../Front-end/view/admin/header_link.php';
        include_once '../Front-end/view/admin/header.php';
        require_once '../Front-end/view/admin/discount/addDiscount.php';
        include_once '../Front-end/view/admin/footter_link.php';
    }

    public function editDiscount()
    {
        include '../Front-end/view/admin/header_link.php';
        include_once '../Front-end/view/admin/header.php';
        require_once '../Front-end/view/admin/discount/editDiscount.php';
        include_once '../Front-end/view/admin/footter_link.php';
    }
}


class feedbackController
{
    
    public function feedback()
    {
        include '../Front-end/view/admin/header_link.php';
        include_once '../Front-end/view/admin/header.php';
        require_once '../Front-end/view/admin/feedback/feedback.php';
        include_once '../Front-end/view/admin/footter_link.php';
    }

    public function feedback_detail()
    {
        include '../Front-end/view/admin/header_link.php';
        include_once '../Front-end/view/admin/header.php';
        require_once '../Front-end/view/admin/feedback/feedback_detail.php';
        include_once '../Front-end/view/admin/footter_link.php';
    }
}

class newController
{
    
    public function new()
    {
        include '../Front-end/view/admin/header_link.php';
        include_once '../Front-end/view/admin/header.php';
        require_once '../Front-end/view/admin/new/new.php';
        include_once '../Front-end/view/admin/footter_link.php';
    }

    public function addNew()
    {
        include '../Front-end/view/admin/header_link.php';
        include_once '../Front-end/view/admin/header.php';
        require_once '../Front-end/view/admin/new/addNew.php';
        include_once '../Front-end/view/admin/footter_link.php';
    }

    public function editNew()
    {
        include '../Front-end/view/admin/header_link.php';
        include_once '../Front-end/view/admin/header.php';
        require_once '../Front-end/view/admin/new/editNew.php';
        include_once '../Front-end/view/admin/footter_link.php';
    }
}

class settingController
{
    
    public function setting()
    {
        include '../Front-end/view/admin/header_link.php';
        include_once '../Front-end/view/admin/header.php';
        require_once '../Front-end/view/admin/setting/setting.php';
        include_once '../Front-end/view/admin/footter_link.php';
    }

}