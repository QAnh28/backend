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
                <div id="right" class="col-md-9 col-lg-9" style="padding-left:0;" >
                <?php
                    if(isset($_POST["them"])){
                        $matruyen = $_POST["matruyen"];
                        $getTenTruyen = "SELECT ten_truyen FROM truyen WHERE id = '$matruyen'";
                        $query = $conn->query($getTenTruyen);
                        $result = mysqli_fetch_assoc($query);
                        $tentruyen = $result["ten_truyen"];
                        //$Maphieumuon = $_POST['MaPhieuMuon'];
                        $TenKH = $_POST['TenKH'];
                        $SDT = $_POST['SDT'];
                        $DiaChi = $_POST['DiaChi'];
                        $NgayMuon = date("Y-m-d");    // Lấy thời gian hiện tại
                        //$NgayTra = $_POST['NgayTra'];
                        $SL = $_POST['SL'];
                        $Tiencoc = $_POST['TienCoc'];
                        $Tienthue = $_POST['TienThue'];
                        $Tinhtrang = $_POST['Tinhtrang'];

                        /*if($matruyen ==""){echo "vui lòng nhập vào mã truyện <br/>";}
                        if($tentruyen ==""){echo "vui lòng nhập vào tên truyện <br/>";}
                        if($Maphieumuon ==""){echo "vui lòng nhập vào mã phiếu mươn <br/>";}*/
                        if($TenKH ==""){echo "vui lòng nhập vào tên khách hang <br/>";}
                        if($SDT ==""){echo "vui lòng nhập vào SDT <br/>";}
                        if($DiaChi ==""){echo "vui lòng nhập vào Địa chỉ <br/>";}
                        if($NgayMuon ==""){echo "vui lòng nhập vào Ngày thuê <br/>";}
                        if($SL ==""){echo "vui lòng nhập vào SL <br/>";}
                        if($Tiencoc ==""){echo "vui lòng nhập vào Tiền Cọc <br/>";}
                        if($Tinhtrang ==""){echo "vui lòng nhập vào tinh trang <br/>";}


                        if($matruyen!="" && $tentruyen!="" && $TenKH!="" && $SDT!="" && $DiaChi!="" && $NgayMuon!="" && $SL!="" && $Tiencoc!=""){
                        $sql = "INSERT INTO phieu_muon(ma_truyen,ten_truyen,ten_khach_hang,sdt,dia_chi,ngay_thue,tien_coc,tien_thue,so_luong,tinh_trang_truyen) VALUES('$matruyen','$tentruyen','$TenKH','$SDT','$DiaChi','$NgayMuon','$Tiencoc','$Tienthue','$SL','$Tinhtrang')";
                        //$sql = "INSERT INTO truyen(so_luong_thue) VALUES('$SL')";
                            if($conn->query($sql)){
                                echo ("<script>alert('thêm thành công!');</script>");
                            }else{
                                echo ("<script>alert('thêm ko  thành công!');</script>");
                            }
                        }

                    }

                ?>
                <?php 
                    // lấy danh sách truyện
                    $sql = "SELECT id, ten_truyen FROM truyen";
                    $data = $conn->query($sql);
                ?>
                    <form method="post" action="" class="form1" id="phieumuon">
                        <h3>LẬP PHIẾU MƯỢN</h3>
                        <!-- <h5>Mã phiếu mượn</h5>
                        <input type="text" name="MaPhieuMuon"><br> -->
                        <!-- <h5>Mã truyện</h5>
                        <input type="text" name="matruyen" placeholder="*bắt buộc"><br>
                        <h5>Tên Truyện</h5>
                        <input type="text" name="tentruyen" placeholder="*bắt buộc"><br>
                        <h5>họ tên khách hàng</h5> -->
                        <h5>Tên Truyện</h5>
                        <select name="matruyen">
                            <?php while($row = mysqli_fetch_assoc($data)) {?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['ten_truyen']; ?></option>
                            <?php } ?>
                        </select>
                        <h5>Họ tên khách hàng</h5>
                        <input type="text" name="TenKH" placeholder="*bắt buộc"><br>
                        <h5>Số điện thoại</h5>
                        <input type="text" name="SDT" placeholder="*bắt buộc"><br>
                        <h5>Địa chỉ</h5>
                        <input type="text" name="DiaChi" placeholder="*bắt buộc"><br>
                        <h5>Ngày Mượn</h5>
                        <input type="date" name="NgayMuon" value="<?php echo date("Y-m-d"); ?>" placeholder="*bắt buộc" disabled><br>
                        <!--h5>Ngày trả</h5>
                        <input type="date" name="NgayTra" placeholder="*không bắt buộc"><br-->
                        <h5>Số lượng</h5>
                        <input type="text" name="SL" placeholder="*bắt buộc"><br>
                        <h5>Tiền Cọc</h5>
                        <input type="text" name="TienCoc" placeholder="*bắt buộc"><br>
                        <h5>Tiền thuê</h5>
                        <input type="text" name="TienThue"><br>
                        <h5>Tình trạng truyện khi mượn</h5>
                        <input type="text" name="Tinhtrang" placeholder="*bắt buộc"><br>
                        <button name="them" class="luu">Lưu</button>
                        <!--<button style="width:20%;">Lập và In</button>-->
                    </form>
</body>