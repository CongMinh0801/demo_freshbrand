<?php
    include "connect_db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./inc/header.css">
    <link rel="stylesheet" href="./inc/footer.css">
    <link rel="stylesheet" href="./assets/css/home_page.css">
    <link rel="stylesheet" href="./assets/css/work_page.css">
    <link rel="stylesheet" href="./assets/css/about-us_page.css">
    <link rel="stylesheet" href="./assets/css/contact_page.css">
    <link rel="stylesheet" href="./assets/css/insights_page.css">
    <link rel="stylesheet" href="./assets/css/approach_page.css">
    <title>FreshBrand | Branding Agency</title>
</head>
<body>
    <div class="header">
        <div class="header__navbar">
            <div class="header__navbar-brand-block">
                <a href="home_page.php"><img src="./assets/img/Logo.svg" alt="" class="header__navbar-brand-block-logo"></a>
                <span class="header__navbar-brand-block-title">Đổi mới thương hiệu trực quan</span>
            </div>
            <div class="header__navbar-list-block">
                <div class="header__navbar-list-block-item">
                    <a href="./work_page.php" class="header__navbar-list-block-item-link">Work</a>
                    <a style="color: var(--primary-color);" href="./work_page.php" class="header__navbar-list-block-item-link-after">Great</a>
                </div>
                <div class="header__navbar-list-block-item">
                    <a href="./about-us_page.php" class="header__navbar-list-block-item-link">About</a>
                    <a style="color: var(--primary-color);" href="./about-us_page.php" class="header__navbar-list-block-item-link-after">All</a>
                </div>
                <div class="header__navbar-list-block-item">
                    <a href="./insights_page.php" class="header__navbar-list-block-item-link">Insights</a>
                    <a style="color: var(--primary-color);" href="./insights_page.php" class="header__navbar-list-block-item-link-after">Master</a>
                </div>
                <div class="header__navbar-list-block-item">
                    <a href="./contact_page.php" class="header__navbar-list-block-item-link">Contact</a>
                    <a style="color: var(--primary-color);" href="./contact_page.php" class="header__navbar-list-block-item-link-after">Hello</a>
                </div>
                <div class="header__navbar-list-block-item">
                    <button onclick="openOverlayMenu()">
                        <i class="header__navbar-list-block-item-baricon fa-solid fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="header__overlay-menu">
        <div class="header__overlay-menu-navbar">
            <img src="./assets/img/Logo_black-white.png" alt="" class="header__overlay-menu-navbar-logo">
            <div class="header__overlay-menu-navbar-langeages">
                <button class="header__overlay-menu-navbar-langeages-item vietnamese language-active">
                    Vietnamese
                </button>
                <button class="header__overlay-menu-navbar-langeages-item english">
                    English
                </button>
                <button onclick="closeOverlayMenu()">
                <i class="header__overlay-menu-navbar-exit-icon fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>
        <div class="header__overlay-menu-container">
            <div class="header__overlay-menu-container-list">
                <div class="header__overlay-menu-container-list-child">
                    <div class="header__overlay-menu-container-list-child-item"><a href="">Công việc</a>   </div>
                    <div class="header__overlay-menu-container-list-child-item"><a href="">Dịch vụ</a>   </div>
                    <div class="header__overlay-menu-container-list-child-item"><a href="">Giới thiệu</a>   </div>
                </div>
                <div class="header__overlay-menu-container-list-child">
                    <div class="header__overlay-menu-container-list-child-item"><a href="">Hiểu Biết</a>   </div>
                    <div class="header__overlay-menu-container-list-child-item"><a href="">Tổng Quan</a>   </div>
                    <div class="header__overlay-menu-container-list-child-item"><a href="">Tiếp xúc</a>   </div>
                </div>
            </div>
            <div class="header__overlay-menu-container-social">
                <div class="header__overlay-menu-container-social-item"><a href="">Facebook</a>   </div>
                <div class="header__overlay-menu-container-social-item"><a href="">Behance</a>   </div>
                <div class="header__overlay-menu-container-social-item"><a href="">Instagram</a>   </div>
                <div class="header__overlay-menu-container-social-item"><a href="">Skype</a>   </div>
                <div class="header__overlay-menu-container-social-item"><a href="">Messenger</a>   </div>
            </div>
        </div>
    </div>


    <script>
        function openOverlayMenu(){
            document.querySelector(".header__overlay-menu").setAttribute("style","top:0; opacity:1; transition: all linear 0.3s;");
        }
        function closeOverlayMenu(){
            document.querySelector(".header__overlay-menu").setAttribute("style","top:-100%; opacity:0; transition: all linear 0.3s;");
        }

        var d = new Date();
        let hour = d.getHours();
        var r = document.querySelector(":root");
        if(hour>=18){
            r.style.setProperty("--white-color", "#000");
            r.style.setProperty("--black-color", "#fff");
            document.querySelector(".header__navbar-brand-block-logo").setAttribute("src","./assets/img/Logo1.svg");
        }else{
            r.style.setProperty("--black-color", "#000");
            r.style.setProperty("--white-color", "#fff");
            document.querySelector(".header__navbar-brand-block-logo").setAttribute("src","./assets/img/Logo.svg");
        }
    </script>