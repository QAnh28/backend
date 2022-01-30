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
                            <button id="sua"><a href="sua.php">SỬA</a></button>
                            <button id="xoa"><a href="xoa.php">XÓA</a></button>
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
                            <button class="kho"><a href="khotruyen.php">Cập nhật Kho Truyện</a></button>
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
                            <button id="capnhat"><a href="khophieu.php">Cập Nhật Phiếu Mượn</a></button>
                            <button class="kho"><a href="khotruyen.php">Cập Nhật Kho Truyện</a></button>
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
                <div id="right" class="col-md-9 col-lg-9" style="padding-left:0;" >
                <?php
                    if(isset($_POST["them"])){
                        $matruyen = $_POST["mãtruyện"];
                        $tentruyen = $_POST["têntruyện"];
                        $Maphieumuon = $_POST['MaPhieuMuon'];
                        $TenKH = $_POST['TenKH'];
                        $SDT = $_POST['SDT'];
                        $DiaChi = $_POST['DiaChi'];
                        $NgayMuon = $_POST['NgayMuon'];
                        $NgayTra = $_POST['NgayTra'];
                        $SL = $_POST['SL'];
                        $Tiencoc = $_POST['TienCoc'];
                        $Tienthue = $_POST['TienThue'];
                        $Tinhtrang = $_POST['Tinhtrang'];

                        if($matruyen ==""){echo "vui lòng nhập vào mã truyện <br/>";}
                        if($tentruyen ==""){echo "vui lòng nhập vào tên truyện <br/>";}
                        if($Maphieumuon ==""){echo "vui lòng nhập vào mã phiếu mươn <br/>";}
                        if($TenKH ==""){echo "vui lòng nhập vào tên khách hang <br/>";}
                        if($SDT ==""){echo "vui lòng nhập vào SDT <br/>";}
                        if($DiaChi ==""){echo "vui lòng nhập vào Địa chỉ <br/>";}
                        if($NgayMuon ==""){echo "vui lòng nhập vào Ngày thuê <br/>";}
                        if($SL ==""){echo "vui lòng nhập vào SL <br/>";}
                        if($Tiencoc ==""){echo "vui lòng nhập vào Tiền Cọc <br/>";}
                        if($Tinhtrang ==""){echo "vui lòng nhập vào tinh trang <br/>";}

                        if($matruyen!="" && $tentruyen!="" && $Maphieumuon!="" && $TenKH!="" && $SDT!="" && $DiaChi!="" && $NgayMuon!="" && $SL!="" && $Tiencoc!=""){
                            $sql = "INSERT INTO phieu_muon (Mã phiếu Mượn,mã truyện,tên truyện,tên khach hang,SDT,Địa Chỉ,ngay thue,ngay tra,so luong,Tien coc,Tien thue,tinh trang truyen khi muon) VALUE(N'$Maphieumuon',N'$matruyen',N'$tentruyen',N'$TenKH',N'$SDT',N'$DiaChi',N'$NgayMuon',N'$NgayTra',N'$SL',N'$Tiêncoc',N'$Tienthue',N'$Tinhtrang')";
                            if($conn -> query("INSERT INTO phieu_muon (Mã phiếu Mượn,mã truyện,tên truyện,tên khach hang,SDT,Địa Chỉ,ngay thue,ngay tra,so luong,Tien coc,Tien thue,tinh trang truyen khi muon) VALUE(N'$Maphieumuon',N'$matruyen',N'$tentruyen',N'$TenKH',N'$SDT',N'$DiaChi',N'$NgayMuon',N'$NgayTra',N'$SL',N'$Tiêncoc',N'$Tienthue',N'$Tinhtrang')")){
                                echo ("<script>alert('thêm thành công!');</script>");
                            }else{
                                echo ("<script>alert('thêm ko  thành công!');</script>");
                            }
                        }

                    }

                ?>
                <form method="POST" action="" class="form1" id="capnhat2">
                        <h3>CẬP NHẬT PHIẾU MƯỢN</h3>
                        <h5>Mã phiếu mượn</h5>
                        <input type="text" name="MaPhieuMuon"><br>
                        <h5>Mã truyện</h5>
                        <input type="text" name="mãtruyện"><br>
                        <h5>Tên Truyện</h5>
                        <input type="text" name="têntruyện"><br>
                        <h5>họ tên khách hàng</h5>
                        <input type="text" name="TenKH"><br>
                        <h5>Số điện thoại</h5>
                        <input type="text" name="SDT"><br>
                        <h5>Địa chỉ</h5>
                        <input type="text" name="DiaChi"><br>
                        <h5>Ngày Mượn</h5>
                        <input type="date" name="NgayMuon"><br>
                        <h5>Ngày trả</h5>
                        <input type="date" name="NgayTra"><br>
                        <h5>Số lượng</h5>
                        <input type="text" name="SL"><br>
                        <h5>Tiền Cọc</h5>
                        <input type="text" name="TienCoc"><br>
                        <h5>Tiền thuê</h5>
                        <input type="text" name="TienThue"><br>
                        <h5>Tình trạng truyện khi mượn</h5>
                        <input type="text" name="Tinhtrang"><br>
                        <button name="them" class="luu">Lưu</button>
                    </form>
</body>