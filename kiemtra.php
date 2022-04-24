<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/style1.css">
    <style>
        #chu,#chu1{
            color: #fff;
            font-size: larger;
            font-style: italic;
        }
    </style>
</head>
<body>
<?php 
//tao ket noi và kiem tra kết nối
$servername ="localhost";
$username ="root";
$password ="";
$database ="quanlythuetruyen2";

$conn = new mysqli($servername,$username,$password,$database);
mysqli_set_charset($conn,"utf8");
if($conn){
    echo("kết nối thành công!");
}else{
    echo("Kết nối ko thành công!");
} 
 ?>
<header>
        <div class="container-fluid">
            <div class="container">
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" id="logo">TRUYỆN HOT</a>
                    <form class="form-inline">
                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </nav>
                  <ul class="nav" id="menu">
                    <li class="nav-item">
                        <a class="nav-link" href="">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chu1" href="dangxuat.php">
                            <button class="but1" type="submit" name="dangxuat">Đăng xuất</button>
                        </a>
                    </li>
            </div>
        </div>
    </header>
    <main>
        <div>
            <div class="container">
                <div class="row">
                    <div id="left" class="col-md-3 col-lg-3" style="padding-right:0;">
                    <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button id="butt" class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Quản Lý Truyện
                            </button>
                        </h2>
                        </div>
                    
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body" id="car1">
                            <button id="them"><a href="them.php">THÊM</a></button>
                            <button><a href="danhsach.php">DANH SÁCH</a></button>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button id="butt1" class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Quản lý mượn
                            </button>
                        </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body" id="car2">
                            <button id="kiemtra"><a href="kiemtra.php">KIểm tra thông tin truyện</a></button>
                            <button id="lap"><a href="lapphieu.php">Lập Phiếu Mượn</a></button>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button id="butt2" class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Quản lý trả
                            </button>
                        </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body" id="car3">
                            <button id="kiem-tra-phieu"><a href="kiemtra1.php">Kiểm tra Phiếu Mượn</a></button>
                            <button id="capnhat"><a href="gdien.php">danh sách phiếu mượn</a></button>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button id="butt4" class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Thống Kê
                            </button>
                        </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <button id="danhsach-mươn"><a href="tkemuon.php">Thống Kê Truyện Mượn</a></button>
                            <button id="danhsach-tra"><a href="tketra.php">Thống Kê Truyện Trả</a></button>
                            <button id="danhsach-them"><a href="tkethem.php">Thống Kê Thêm Mới></a></button>
                            <button id="danhsach-nhieu"><a href="tke.php">Thống Kê Truyện chạy nhất</a></button>
                            <button id="danhsach-doanh"><a href="doanhthu.php">Thống Kê doanh thu</a></button>

                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div id="right" class="col-md-9 col-lg-9" style="padding-left:0%;" >
                        <h3>KIỂM TRA THÔNG TIN TRUYỆN</h3>
                        <form action="" method="POST" class="form1">
                        <h5>Nhập tên truyện</h5>
                            <input type="text" name="tentruyen">
                            <button type="submit" name="capn">Seach</button>
                        <?php 
                //tao ket noi và kiem tra kết nối
                $servername ="localhost";
                $username ="root";
                $password ="";
                $database ="quanlythuetruyen2";

                $conn = new mysqli($servername,$username,$password,$database);
                mysqli_set_charset($conn,"utf8");
                /*if($conn){
                    echo("kết nối thành công!");
                }else{
                    echo("Kết nối ko thành công!");
                } */
                //truy vấn lấy về danh mục
                if(isset($_POST["capn"])){
                    $tentruyen = $_POST["tentruyen"];
                    $arrKeyWord = explode(' ',$tentruyen);
                    //chuyển mảng thành xâu
                    $endKeyWord = '%'.implode('%',$arrKeyWord).'%';
                    // var_dump($tentruyen);
                    //if($ngaythue!="" ){
                        //toan tu like dung de chi dinh viec tim gan dung 1 xau ky tu
                        $sql= "SELECT * FROM truyen WHERE ten_truyen LIKE '$endKeyWord'";
                        //if($conn->query($sql)){
                            $data = mysqli_query($conn, $sql);
                            // var_dump($data);
                            while($row = mysqli_fetch_assoc($data)){
                                echo"  Id: ".$row["id"]."<br>";
                                echo"  Tên truyen: ".$row["ten_truyen"]."<br>";
                                echo"  Số lượng nhập: ".$row["so_luong_nhap"]."<br>";
                                echo"  Số lượng thuê: ".$row["so_luong_thue"]."<br>";
                                echo"  Giá truyện: ".$row["gia_truyen"]."<br>";
                                echo"  NXB: ".$row["nxb"]."<br>";
                                echo"  Tác Giả: ".$row["ten_tac_gia"]."<br>";
                                echo"  Thể loại: ".$row["the_loai"]."<br>";
                                echo"<hr>";
                            }
                        }
                        ?>     
</body>