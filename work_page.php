<?php
    require "inc/header.php";
?>

    <div class="work_page-container" style="margin-top:70px;">
        <div class="home_page-container__categories">
            <div onmouseover="sevicesFadeIn()" onmouseout="sevicesFadeOut()" class="home_page-container__categories-sevices">
                Tất cả dịch vụ <i class="fa-solid fa-plus"></i>
                <div class="home_page-container__categories-sevices-list">
                    <a onclick="a()" href="./work_page.php?=chienluoc" class="home_page-container__categories-sevices-list-item">
                        Chiến lược
                    </a>
                    <a href="./work_page.php?=datten" class="home_page-container__categories-sevices-list-item">
                        Đặt tên
                    </a>
                    <a href="./work_page.php?=khauhieu" class="home_page-container__categories-sevices-list-item">
                        Khẩu hiệu
                    </a>
                    <a href="./work_page.php?=logo" class="home_page-container__categories-sevices-list-item">
                        Logo
                    </a>
                    <a href="./work_page.php?=bonhandangthuonghieu" class="home_page-container__categories-sevices-list-item">
                        Bộ nhận dạng thương hiệu
                    </a>
                    <a href="./work_page.php?=baobi" class="home_page-container__categories-sevices-list-item">
                        Bao bì
                    </a>
                    <a href="./work_page.php?=chiendich" class="home_page-container__categories-sevices-list-item">
                        Chiến dịch
                    </a>
                    <a href="./work_page.php?=kithuatso" class="home_page-container__categories-sevices-list-item">
                        Kĩ thuật số
                    </a>
                    <a href="./work_page.php?=bientap" class="home_page-container__categories-sevices-list-item">
                        Biên tập
                    </a>
                    <a href="./work_page.php?=khonggiantrienlam" class="home_page-container__categories-sevices-list-item">
                        Không gian triển lãm
                    </a>
                    <a href="./work_page.php?=chuphinhdoanhnghiep" class="home_page-container__categories-sevices-list-item">
                        Chụp hình doanh nghiệp
                    </a>
                    <a href="./work_page.php?=inan" class="home_page-container__categories-sevices-list-item">
                        In ấn
                    </a>
                </div>
            </div>
            <div onmouseover="careerFadeIn()" onmouseout="careerFadeOut()" class="home_page-container__categories-career">
                Tất cả ngành <i class="fa-solid fa-plus"></i>
                <div class="home_page-container__categories-career-list">
                    <a href="./work_page.php?=sanphamtieudungvagiadung" class="home_page-container__categories-career-list-item">
                        Sản phẩm tiêu dùng và gia dụng
                    </a>
                    <a href="./work_page.php?=congnghiepvasanxuat" class="home_page-container__categories-career-list-item">
                        Công nghiệp và sản xuất
                    </a>
                    <a href="./work_page.php?=ruouvangvaruoumanh" class="home_page-container__categories-career-list-item">
                        Rượu vang và rượu mạnh
                    </a>
                    <a href="./work_page.php?=dichvuvataichinh" class="home_page-container__categories-career-list-item">
                        Dịch vụ và tài chính
                    </a>
                    <a href="./work_page.php?=vantai" class="home_page-container__categories-career-list-item">
                        Vận tải
                    </a>
                    <a href="./work_page.php?=nangluongvatienich" class="home_page-container__categories-career-list-item">
                        Năng lượng và tiện ích
                    </a>
                    <a href="./work_page.php?=chamsocsuckhoevaduocpham" class="home_page-container__categories-career-list-item">
                        Chăm sóc sức khỏe và dược phẩm
                    </a>
                    <a href="./work_page.php?=thucphamvadouong" class="home_page-container__categories-career-list-item">
                        Thực phẩm và đồ uống
                    </a>
                    <a href="./work_page.php?=cactochucphiloinhuan" class="home_page-container__categories-career-list-item">
                        Các tổ chức phi lợi nhuận
                    </a>
                    <a href="./work_page.php?=truyenthongvagiaitri" class="home_page-container__categories-career-list-item">
                        Truyền thông và giải trí
                    </a>
                    <a href="./work_page.php?=dichvukhachhang" class="home_page-container__categories-career-list-item">
                        Dịch vụ khách hàng
                    </a>
                    <a href="./work_page.php?=thoitrangvabanle" class="home_page-container__categories-career-list-item">
                        Thời trang và bán lẻ
                    </a>
                    <a href="./work_page.php?=dichvuchuyennghiep" class="home_page-container__categories-career-list-item">
                        Dịch vụ chuyên nghiệp
                    </a>
                    <a href="./work_page.php?=diaoc" class="home_page-container__categories-career-list-item">
                        Địa ốc
                    </a>
                    <a href="./work_page.php?=nongnghiep" class="home_page-container__categories-career-list-item">
                        Nông nghiệp
                    </a>
                    <a href="./work_page.php?=dichvuvaresort" class="home_page-container__categories-career-list-item">
                        Du lịch và resort
                    </a>
                    <a href="./work_page.php?=congnghe" class="home_page-container__categories-career-list-item">
                        Công nghệ
                    </a>
                    <a href="./work_page.php?=kientrucvaxaydung" class="home_page-container__categories-career-list-item">
                        Kiến trúc và xây dựng
                    </a>
                </div>
            </div>
        </div>

        <div class="work_page-container__header">
            <p class="work_page-container__header-title">
                Công việc
            </p>
            <i class="work_page-container__header-icon fa-solid fa-arrow-right"></i>
            <div class="work_page-container__header-slogan">
                LÀM CHO THƯƠNG HIỆU TRỰC QUAN HƠN
            </div>
        </div>

        <div class="work_page-container__products">
            <?php
                $sql = "SELECT * FROM `product`";
                $query = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($query)){

            ?>
            <div class="home_page-container__product-list-item">
                <img class="home_page-container__product-list-item-img" src="./product_database/img/<?= $row["img"] ?>" alt="">
                <div class="home_page-container__product-list-item-overlay">
                    <div class="home_page-container__product-list-item-overlay-name">
                        <?= $row["name"] ?>
                    </div>
                    <div class="home_page-container__product-list-item-overlay-career">
                        <?= $row["careers"] ?>
                    </div>
                    <div class="home_page-container__product-list-item-overlay-sevices">
                        <?= $row["sevices"] ?>
                    </div>
                    <div class="home_page-container__product-list-item-overlay-view">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <i class="fa-solid fa-arrow-right home_page-container__product-list-item-overlay-arrow"></i>
                </div>
            </div>
            <?php }?>
        </div>
        

        <div class="work_page-container__more-product">
            <button onclick="loadMore()" class="work_page-container__more-product-btn">
                Xem thêm
            </button>
        </div>

        <div class="work_page-container__insights">
            <i class="work_page-container__insights-icon fa-solid fa-arrow-right"></i>
            <a href="./insights_page.php" class="work_page-container__insights-slogan">
                Hiểu biết sâu sắc
            </a>
        </div>
    </div>
    

<?php

    

    $product_arr = [];
    $sql = "SELECT * FROM `product`";
    $query = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($query)){
        $product_arr[] = $row;
    }
    require "inc/footer.php";
?>
<script>
    var url_web = location.href;
    var filter_data="";
    if(url_web.includes("chienluoc")){
        filter_data = "Chiến lược";
    }
    else if(url_web.includes("datten")){
        filter_data = "Đặt tên";
    }
    else if(url_web.includes("khauhieu")){
        filter_data = "Khẩu hiệu";
    }
    else if(url_web.includes("bonhandangthuonghieu")){
        filter_data = "Bộ nhận dạng thương hiệu";
    }
    else if(url_web.includes("baobi")){
        filter_data = "Bao bì";
    }
    else if(url_web.includes("chiendich")){
        filter_data = "Chiến dịch";
    }
    else if(url_web.includes("kithuatso")){
        filter_data = "Kĩ thuật số";
    }
    else if(url_web.includes("bientap")){
        filter_data = "Biên tập";
    }
    else if(url_web.includes("khonggiantrienlam")){
        filter_data = "Không gian triển lãm";
    }
    else if(url_web.includes("chuphinhdoanhnghiep")){
        filter_data = "Chụp hình doanh nghiệp";
    }
    else if(url_web.includes("inan")){
        filter_data = "In ấn";
    }
    else if(url_web.includes("sanphamtieudungvagiadung")){
        filter_data = "Sản phẩm tiêu dùng & gia dụng";
    }
    else if(url_web.includes("congnghiepvasanxuat")){
        filter_data = "Công nghiệp & sản xuất";
    }
    else if(url_web.includes("ruouvangvaruoumanh")){
        filter_data = "Rượu vang & rượu mạnh";
    }
    else if(url_web.includes("dichvuvataichinh")){
        filter_data = "Dịch vụ tài chính";
    }
    else if(url_web.includes("vantai")){
        filter_data = "Vận tải";
    }
    else if(url_web.includes("nangluongvatienich")){
        filter_data = "Năng lượng & tiện ích";
    }
    else if(url_web.includes("chamsocsuckhoevaduocpham")){
        filter_data = "Chăm sóc sức khỏe & dược phẩm";
    }
    else if(url_web.includes("thucphamvadouong")){
        filter_data = "Thực phẩm & đồ uống";
    }
    else if(url_web.includes("cactochucphiloinhuan")){
        filter_data = "Các tổ chức phi lợi nhuận";
    }
    else if(url_web.includes("truyenthongvagiaitri")){
        filter_data = "Truyền thông & giải trí";
    }
    else if(url_web.includes("dichvukhachhang")){
        filter_data = "Dịch vụ khách hàng";
    }
    else if(url_web.includes("thoitrangvabanle")){
        filter_data = "Thời trang & Bán lẻ";
    }
    else if(url_web.includes("dichvuchuyennghiep")){
        filter_data = "Dịch vụ chuyên nghiệp";
    }
    else if(url_web.includes("diaoc")){
        filter_data = "Địa ốc";
    }
    else if(url_web.includes("nongnghiep")){
        filter_data = "Nông nghiệp";
    }
    else if(url_web.includes("dichvuvaresort")){
        filter_data = "Du lịch & Resort";
    }
    else if(url_web.includes("congnghe")){
        filter_data = "Công nghệ";
    }
    else if(url_web.includes("kientrucvaxaydung")){
        filter_data = "Kiến trúc & Xây dựng";
    }else if(url_web.includes("logo")){
        filter_data = "Logo";
    }

    
    var product_arr = <?php echo json_encode($product_arr);?>;
    if(filter_data!=""){
        for(var i = 1; i <= product_arr.length; i++){
            product = document.querySelector(`.home_page-container__product-list-item:nth-child(${i})`);
            if((product_arr[i-1].careers).includes(filter_data) || (product_arr[i-1].sevices).includes(filter_data)){
                product.setAttribute("style","display:block;");
            }else{
                product.setAttribute("style","display:none;");
            }
        }
    }else {
        for(var i = 1; i <= product_arr.length; i++){
            product = document.querySelector(`.home_page-container__product-list-item:nth-child(${i})`);
            if(i<=10){
                product.setAttribute("style","display:block;");
            }else{
                product.setAttribute("style","display:none;");
            }
            
        }
    }

    


    var numberOfProduct = 10;
    function loadMore(){
        for(var i = numberOfProduct+1; i <= numberOfProduct+5; i++){
            product = document.querySelector(`.home_page-container__product-list-item:nth-child(${i})`);
            product.setAttribute("style","display:block;");
        }
        numberOfProduct += 10;
    }

    

    function sevicesFadeIn(){
        document.querySelector(".home_page-container__categories-sevices-list").setAttribute("style","height:440px; transition: all linear 0.3s;");
        document.querySelector(".home_page-container__categories-sevices i").classList.remove("fa-plus");
        document.querySelector(".home_page-container__categories-sevices i").classList.add("fa-minus");
        document.querySelector(".work_page-container__header").setAttribute("style","margin-top:340px; transition: all linear 0.3s;");
    }

    function sevicesFadeOut(){
        document.querySelector(".home_page-container__categories-sevices-list").setAttribute("style","height:0px; transition: all linear 0.3s;");
        document.querySelector(".home_page-container__categories-sevices i").classList.remove("fa-minus");
        document.querySelector(".home_page-container__categories-sevices i").classList.add("fa-plus");
        document.querySelector(".work_page-container__header").setAttribute("style","margin-top:0px; transition: all linear 0.3s;");
    }

    function careerFadeIn(){
        document.querySelector(".home_page-container__categories-career-list").setAttribute("style","height:440px; transition: all linear 0.3s;");
        document.querySelector(".home_page-container__categories-career i").classList.remove("fa-plus");
        document.querySelector(".home_page-container__categories-career i").classList.add("fa-minus");
        document.querySelector(".work_page-container__header").setAttribute("style","margin-top:440px; transition: all linear 0.3s;");
    }

    function careerFadeOut(){
        document.querySelector(".home_page-container__categories-career-list").setAttribute("style","height:0px; transition: all linear 0.3s;");
        document.querySelector(".home_page-container__categories-career i").classList.remove("fa-minus");
        document.querySelector(".home_page-container__categories-career i").classList.add("fa-plus");
        document.querySelector(".work_page-container__header").setAttribute("style","margin-top:0px; transition: all linear 0.3s;");
    }
    </script>