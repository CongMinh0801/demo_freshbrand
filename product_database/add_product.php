<?php
    include 'connect_db.php';

    if(isset($_POST['submit'])){
        $ten = $_POST['ten'];
        $slogan = $_POST['slogan'];
        $sevices = $_POST['sevices'];
        $careers = $_POST['careers'];
        $detail = $_POST['detail'];
        $img = $_FILES['img']['name'];

        //Lay dia chi thu muc hinh anh da tao truoc do
        $target_dir ="./img/";
        //tao duong dan truy cap den file
        $target_file = $target_dir.$img;
        //check cac bien luu tru thong tin- dam bao chung da duoc nhap du lieu
        if(isset($ten) && isset($slogan) && isset($sevices) && isset($careers) && isset($detail) && isset($img)){
                //Lưu hình ảnh vào thư mục tam tmp_name trên server
                move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                //viet cau lenh sqp
                $sql = "INSERT INTO `product`(`name`, `slogan`,`sevices`, `careers`, `detail`, `img`) 
                VALUES ('$ten','$slogan','$sevices','$careers', '$detail','$img') ";
                mysqli_query($conn, $sql);
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./them.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <title>Document</title>
</head>
<body style="padding:48px;">
    <form class="form" action="" method="post" enctype="multipart/form-data">
        <h1 class="form-title">Thêm sản phẩm</h1>
        <div class="product_name">
            <label for="">Tên sản phẩm</label><br>
            <input type="text" name="ten"><br>
        </div>
        
        <div class="product_price">
            <label for="">Slogan</label><br>
            <input type="text" name ="slogan"><br>
        </div>

        <div class="product_address" >
            <label for="">Các dịch vụ (cách nhau bởi "-")</label><br>
            <input type="text" name ="sevices"><br>
        </div>
        
        
        <div class="product_location">
            <label for="">Các ngành (cách nhau bởi "-")</label><br>
            <input type="text" name ="careers"><br>
        </div>

        <div clas="product_type">
            <label for="">Mô tả</label><br>
            <textarea name="detail" id="" cols="30" rows="10"></textarea>
        </div>

        <div class="product_img">
            <label for="">Hình ảnh</label><br>
            <input type="file" id="file" name="img" value="Choosen file"><br>
        </div>

        <div class="submit_btn">
            <input type="submit" value="Thêm" name="submit">
        </div>
    </form>

    
</body>
</html>