<?php
    include 'connect_db.php';

    if(isset($_POST['submit'])){
        $insight = $_POST['insight'];
        $sevices = $_POST['sevices'];
        $img = $_FILES['img']['name'];


        $target_dir ="./img/";
        $target_file = $target_dir.$img;
        //check cac bien luu tru thong tin- dam bao chung da duoc nhap du lieu
        if(isset($insight) && isset($sevices) && isset($img)){
                //Lưu hình ảnh vào thư mục tam tmp_name trên server
                move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                //viet cau lenh sqp
                $sql = "INSERT INTO `insights`( `insight`,`sevices`,  `img`) 
                VALUES ('$insight', '$sevices', '$img') ";
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
        <h1 class="form-title">Thêm ngành</h1>
        
        <div class="product_location">
            <label for="">Hiểu biết</label><br>
            <input type="text" name ="insight"><br>
        </div>

        <div class="product_address" >
            <label for="">Các dịch vụ (cách nhau bởi "|")</label><br>
            <input type="text" name ="sevices"><br>
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