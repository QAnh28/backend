<?php 
                    if(isset($_POST['add'])){
                        $mãtruyện = $_POST['mãtruyện'];
                        $têntruyện = $_POST['têntruyện'];
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

                        $sql="INSERT INTO phiếu mượn (Mã phiếu mượn,Mã truyện,Tên truyện,Tên Khách Hàng,Số Điện Thoại,Địa chỉ,Ngày Mượn,Ngày Trả,Số Lượng,Tiền Cọc,Tiền Thuê,Tình trạng Truyện) VALUE(N'$Mãphieumuon',N'$mãtruyện',N'$têntruyện',N'$TenKH',N'$SDT',N'$DiaChi',N'$NgayMuon',N'$NgayTra',N'$SL',N'$Tiêncoc',N'$Tienthue',N'$Tinhtrang')";
                        if($conn->query("$sql")===TRUE){
                            echo ("<script>alert('thêm thành công!')</script>");
                        }else{
                            echo ("<script>alert('thêm ko  thành công!')</script>");

                        }
                    }
                ?>
                // if(isset($_POST['add'])){
                $mãtruyện = $_POST['mãtruyện'];
                $têntruyện = $_POST['têntruyện'];
                $SLNhap = $_POST['SLnhap'];
                $SLThue = $_POST['SLthue'];
                $Giatruyen = $_POST['giatruyen'];
                $NXB = $_POST['NXB'];
                $TenTacGia = $_POST['TenTG'];
                $TheLoai = $_POST['TL'];

                $sql="INSERT INTO truyện (mã truyện,Tên truyện,SLNhap,SLThue,Giá Truyện,NXB,Tên Tác Giả,Thể Loại) VALUE('$mãtruyện','$têntruyện','$SLNhap''$SLThue','$Giatruyen','$NXB','$TenTacGia','$TheLoai')";
                if($conn->query($sql)===TRUE){
                    echo ("<script>alert('thêm thành công!')</script>");
                }else{
                    echo ("<script>alert('thêm ko  thành công!')</script>");
                }

            }
        $conn->close();
    ?>//
            $mãtruyện = "";
            $têntruyện = "";
            $SLNhap = "";
            $SLThue = "";
            $Giatruyen = "";
            $NXB = "";
            $TenTacGia = "";
            $TheLoai = "";

            if(isset($_POST['add'])){
                if(isset($_POST["mãtruyện"])) { $mãtruyện = $_POST['mãtruyện']; }
                if(isset($_POST["têntruyện"])) { $têntruyện = $_POST['têntruyện']; }
                if(isset($_POST["SLnhap"])) { $SLNhap = $_POST['SLnhap']; }
                if(isset($_POST["SLthue"])) { $SLThue = $_POST['SLthue']; }
                if(isset($_POST["giatruyen"])) { $Giatruyen = $_POST['giatruyen']; }
                if(isset($_POST["NXB"])) { $NXB = $_POST['NXB']; }
                if(isset($_POST["TenTG"])) { $TenTacGia = $_POST['TenTG']; }
                if(isset($_POST["TL"])) { $TheLoai = $_POST['TL']; }
            
                //Code xử lý, insert dữ liệu vào table
                $sql="INSERT INTO truyện (mã truyện,Tên truyện,SLNhap,SLThue,Giá Truyện,NXB,Tên Tác Giả,Thể Loại) VALUE('$mãtruyện','$têntruyện','$SLNhap','$SLThue','$Giatruyen','$NXB','$TenTacGia','$TheLoai')";
            
                if (mysqli_query($connect, $sql)) {
                    echo "Thêm dữ liệu thành công";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                }
            }
            
            //Đóng database
            mysqli_close($connect);


            if(isset($_POST['them'])){
        $mãtruyện = $_POST['mãtruyện'];
        $têntruyện = $_POST['têntruyện'];
        $SLNhap = $_POST['SLnhap'];
        $SLThue = $_POST['SLthue'];
        $Giatruyen = $_POST['giatruyen'];
        $NXB = $_POST['NXB'];
        $TenTacGia = $_POST['TenTG'];
        $TheLoai = $_POST['TL'];

        if($conn -> query("INSERT INTO truyen (mã truyện,Tên truyện,SLNhap,SLThue,Giá Truyện,NXB,Tên Tác Giả,Thể loại) 
        VALUES (N'$mãtruyện',N'$têntruyện',N'$SLNhap',N'$SLThue',N'$Giatruyen',N'$NXB',N'$TenTacGia',N'$TheLoai')")){
            echo ("<script>alert('thêm thành công!');</script>");
        }else{
            echo ("<script>alert('thêm ko  thành công!');</script>");

        }

    }
    $conn->close();
    <div>
                            <table border="2px" bgcolor="white" align="center">
                                <tr color="white">
                                    <th>Mã truyện</td>
                                    <th>tên truyện</td>
                                    <th>tên khách hàng</td>
                                    <th>ngày mượn</td>
                                    <th>Số lượng</td>
                                    <th>tiền cọc</td>
                                    <th>Tinh trang</td>
                                </tr>
                            </table>
                        </div>
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
        $truyvanDM = "SELECT * FROM `phieu_muon`";
        $data = mysqli_query($conn, $truyvanDM);

            while($row = mysqli_fetch_assoc($data)){
                echo"  mã phiếu mượn: ".$row["Mã phiếu Mượn"]."<br>";
                echo"  ma truyen: ".$row["mã truyện"]."<br>";
                echo"  tên truyen: ".$row["tên truyện"]."<br>";
                echo"  Tên KH: ".$row["tên khach hang"]."<br>";
                echo"  SDT: ".$row["SDT"]."<br>";
                echo"  Địa CHỈ: ".$row["Địa Chỉ"]."<br>";
                echo"  Ngày thuê: ".$row["ngay thue"]."<br>";
                echo"  Ngày TRẢ: ".$row["ngay tra"]."<br>";
                echo"  Tiền CỌC: ".$row["Tien coc"]."<br>";
                echo"  TIen thue: ".$row["Tien thue"]."<br>";
                echo"  SL: ".$row["so luong"]."<br>";
                echo"  Tinh trang: ".$row["tinh trang truyen khi thue"]."<br>";
                echo "<p><a href='khophieu.php?mã phiếu mượn=" . $row['Mã phiếu Mượn'] . "'>Update</a></p>";
                echo"<hr>";
            }
            <table border="2px" bgcolor="white" cellpadding="10px">
                        <tr>
                            <td>STT(id)</td>
                            <td>TÊN TRUYỆN</td>
                            <td>NGÀY NHẬP</td>
                            <td>SL NHẬP</td>
                            <td>SL THUÊ</td>
                            <td>GIÁ TRUYỆN</td>
                            <td>NXB</td>
                            <td>TÁC GIẢ</td>
                            <td>THỂ LOẠI</td>
                            <td></td>
                            <td></td>
                        </tr>

    //Truyền tham số id tới trang update.php
    echo "<hr>";
    <button id="sua"><a href="sua.php">SỬA</a></button>
    <button id="xoa"><a href="xoa.php">XÓA</a></button>
    <?php
    /*$truyvanDM = "SELECT  * FROM phieu_muon";
    $data = mysqli_query($conn, $truyvanDM);*/
    /*while($row = mysqli_fetch_assoc($data)){
        echo"ma truyen:".$row["mã truyện"]."<br>";
        echo"tên truyen:".$row["tên truyện"]."<br>";
        echo"Tên KH:".$row["tên khach hang"]."<br>";
        echo"Ngày thuê:".$row["ngay thue"]."<br>";
        echo"SL:".$row["so luong"]."<br>";
        echo"Tinh trang:".$row["tinh trang truyen khi thue"]."<br>";
        echo"<hr>";
    } */ 
    ?>   



?>