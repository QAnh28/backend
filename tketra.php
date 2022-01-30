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
                <div id="right" class="col-md-9 col-lg-9" style="padding-left:5%;" >
                <h1>THỐNG KÊ TRUYỆN TRẢ</h1>
                <form action="" method="POST">
                        <input type="text" name="ngaytra" placeholder="*yyyy/mm/dd">
                        <button type="submit" name="capn">Seach</button>
                    </form>
                <hr>
                <table border="2px" bgcolor="#81c784" cellpadding="10px" style="color:white;">
                        <tr>
                            <td>STT(id)</td>
                            <td>Mã TRUYỆN</td>
                            <td>TÊN TRUYỆN</td>
                            <td>TÊN KH</td>
                            <td>SDT</td>
                            <td>ĐỊA CHỈ</td>
                            <td>NGÀY TRẢ</td>
                            <td>T_THUÊ</td>
                            <td>SL</td>
                            <td>TÌNH TRẠNG</td>
                        </tr>
                <?php 
                //tao ket noi và kiem tra kết nối
                if(isset($_POST["capn"])){
                    $ngaytra = $_POST["ngaytra"];
                    $arrKeyWord = explode(' ',$ngaytra);
                    //chuyển mảng thành xâu
                    $endKeyWord = '%'.implode('%',$arrKeyWord).'%';
                    // var_dump($ngaythue);
                    //if($ngaythue!="" ){
                        $sql= "SELECT * FROM phieu_muon WHERE ngay_tra LIKE '$endKeyWord'";
                        //if($conn->query($sql)){
                            $data = mysqli_query($conn, $sql);
                            // var_dump($data);
                            /*while($row = mysqli_fetch_assoc($data)){
                                echo"  mã phiếu mượn: ".$row["id"]."<br>";
                                echo"  ma truyen: ".$row["ma_truyen"]."<br>";
                                echo"  tên truyen: ".$row["ten_truyen"]."<br>";
                                echo"  Tên KH: ".$row["ten_khach_hang"]."<br>";
                                echo"  SDT: ".$row["sdt"]."<br>";
                                echo"  Địa CHỈ: ".$row["dia_chi"]."<br>";
                                echo"  Ngày trả: ".$row["ngay_tra"]."<br>";
                                echo"  tiền cọc: ".$row["tien_coc"]."<br>";
                                echo"  SL: ".$row["so_luong"]."<br>";
                                echo"  Tinh trang: ".$row["tinh_trang_truyen"]."<br>";
                                echo"<hr>";
                            }*/
                            while($rows = mysqli_fetch_array($data)){
                                ?>
                                <tr>
                                    <td><?php echo $rows["id"];?></td>
                                    <td><?php echo $rows["ma_truyen"];?></td>
                                    <td><?php echo $rows["ten_truyen"];?></td>
                                    <td><?php echo $rows["ten_khach_hang"];?></td>
                                    <td><?php echo $rows["sdt"];?></td>
                                    <td><?php echo $rows["dia_chi"];?></td>
                                    <td><?php echo $rows["ngay_tra"];?></td>
                                    <td><?php echo $rows["tien_thue"];?></td>
                                    <td><?php echo $rows["so_luong"];?></td>
                                    <td><?php echo $rows["tinh_trang_truyen"];?></td>
                                </tr>
                                <?php } }?>
            </table>
</body>