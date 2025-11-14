<?php

//Trang chu
class homeController
{
    public function home()
    {
        include '../Front-end/view/user/header_link.php';
        include_once '../Front-end/view/user/header.php';
        require_once '../Front-end/view/user/home.php';
        include_once '../Front-end/view/user/footter.php';
        include '../Front-end/view/user/footter_link.php';
    }
}
//San pham
class productController
{
    public function product()
    {
        include '../Front-end/view/user/header_link.php';
        include_once '../Front-end/view/user/header.php';
        require_once '../Front-end/view/user/product.php';
        include_once '../Front-end/view/user/footter.php';
        include '../Front-end/view/user/footter_link.php';
    }
    

    public function product_detail()
    {
        include '../Front-end/view/user/header_link.php';
        include_once '../Front-end/view/user/header.php';
        require_once '../Front-end/view/user/product_detail.php';
        include_once '../Front-end/view/user/footter.php';
        include '../Front-end/view/user/footter_link.php';
    }
}

//tin tuc
class newsController
{
    public function news()
    {
        include '../Front-end/view/user/header_link.php';
        include_once '../Front-end/view/user/header.php';
        require_once '../Front-end/view/user/news.php';
        include_once '../Front-end/view/user/footter.php';
        include '../Front-end/view/user/footter_link.php';
    }

    public function new_detail()
    {
        include '../Front-end/view/user/header_link.php';
        include_once '../Front-end/view/user/header.php';
        require_once '../Front-end/view/user/new_detail.php';
        include_once '../Front-end/view/user/footter.php';
        include '../Front-end/view/user/footter_link.php';
    }
}

//gioi thieu
class introduceController
{
    public function introduce()
    {
        include '../Front-end/view/user/header_link.php';
        include_once '../Front-end/view/user/header.php';
        require_once '../Front-end/view/user/introduce.php';
        include_once '../Front-end/view/user/footter.php';
        include '../Front-end/view/user/footter_link.php';
    }
}

//lien he
class contactController
{
    public function contact()
    {
        include '../Front-end/view/user/header_link.php';
        include_once '../Front-end/view/user/header.php';
        require_once '../Front-end/view/user/contact.php';
        include_once '../Front-end/view/user/footter.php';
        include '../Front-end/view/user/footter_link.php';
    }
}
//san pham yeu thich
class favouriteController
{
    public function favourite()
    {
        include '../Front-end/view/user/header_link.php';
        include_once '../Front-end/view/user/header.php';
        require_once '../Front-end/view/user/favourite.php';
        include_once '../Front-end/view/user/footter.php';
        include '../Front-end/view/user/footter_link.php';
    }
}
//gio hang
class cartController
{
    public function cart()
    {
        include '../Front-end/view/user/header_link.php';
        include_once '../Front-end/view/user/header.php';
        require_once '../Front-end/view/user/cart.php';
        include_once '../Front-end/view/user/footter.php';
        include '../Front-end/view/user/footter_link.php';
    }
}
//tai khoan
class accountController
{
    public function account()
    {
        include '../Front-end/view/user/header_link.php';
        include_once '../Front-end/view/user/header.php';
        require_once '../Front-end/view/user/account.php';
        include_once '../Front-end/view/user/footter.php';
        include '../Front-end/view/user/footter_link.php';
    }
}

//dang ky + dang nhap
class loginController
{
    public function login()
    {
        include '../Front-end/view/user/header_link.php';
        require_once '../Front-end/view/user/login.php';
        include '../Front-end/view/user/footter_link.php';
    }

    public function register()
    {
        include '../Front-end/view/user/header_link.php';
        require_once '../Front-end/view/user/register.php';
        include '../Front-end/view/user/footter_link.php';
    }
}

//chinh sach bao hanh
class guaranteeController
{
    public function guarantee()
    {
        include '../Front-end/view/user/header_link.php';
        include_once '../Front-end/view/user/header.php';
        require_once '../Front-end/view/user/bao_hanh.php';
        include_once '../Front-end/view/user/footter.php';
        include '../Front-end/view/user/footter_link.php';
    }
}

//dieu khoan su dung
class clauseController
{
    public function clause()
    {
        include '../Front-end/view/user/header_link.php';
        include_once '../Front-end/view/user/header.php';
        require_once '../Front-end/view/user/dieu_khoan.php';
        include_once '../Front-end/view/user/footter.php';
        include '../Front-end/view/user/footter_link.php';
    }
}

//ban hang va hoan tien
class refundController
{
    public function refund()
    {
        include '../Front-end/view/user/header_link.php';
        include_once '../Front-end/view/user/header.php';
        require_once '../Front-end/view/user/hoan_tien.php';
        include_once '../Front-end/view/user/footter.php';
        include '../Front-end/view/user/footter_link.php';
    }
}

//so sanh
class compareController
{
    public function compare()
    {
        include '../Front-end/view/user/header_link.php';
        include_once '../Front-end/view/user/header.php';
        require_once '../Front-end/view/user/compare.php';
        include_once '../Front-end/view/user/footter.php';
        include '../Front-end/view/user/footter_link.php';
    }
}

//ma giam gia
class discoundController
{
    public function discound()
    {
        include '../Front-end/view/user/header_link.php';
        include_once '../Front-end/view/user/header.php';
        require_once '../Front-end/view/user/discound.php';
        include_once '../Front-end/view/user/footter.php';
        include '../Front-end/view/user/footter_link.php';
    }
}
