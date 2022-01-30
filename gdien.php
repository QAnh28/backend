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
    <link rel="stylesheet" href="css/style.css">
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
        //truy vấn lấy về danh mục
        //$truyvanDM = "SELECT * FROM `truyen`";
        //$data = mysqli_query($conn, $truyvanDM);

        //while($row = mysqli_fetch_assoc($data)){
           // echo"id:".$row["mã truyện"]."<br>";
           // echo"<hr>";
        //}
        ?>
     
                <h1>DANH SÁCH KHO PHIẾU MƯỢN</h1>
                <div>
                    <table border="2px" bgcolor="#81c784" cellpadding="10px" style="color:white;">
                        <tr>
                            <td>STT(id)</td>
                            <td>Mã TRUYỆN</td>
                            <td>TÊN TRUYỆN</td>
                            <td>TÊN KH</td>
                            <td>SDT</td>
                            <td>ĐỊA CHỈ</td>
                            <td>NGÀY THUÊ</td>
                            <td>NGÀY TRẢ</td>
                            <td>T_CỌC</td>
                            <td>T_THUÊ</td>
                            <td>SL</td>
                            <td>TÌNH TRẠNG</td>
                            <td></td>
                        </tr>
                        <?php
                            $sql = "SELECT * FROM phieu_muon";
                            $query = mysqli_query($conn,$sql);
                            while($rows = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $rows["id"];?></td>
                                <td><?php echo $rows["ma_truyen"];?></td>
                                <td><?php echo $rows["ten_truyen"];?></td>
                                <td><?php echo $rows["ten_khach_hang"];?></td>
                                <td><?php echo $rows["sdt"];?></td>
                                <td><?php echo $rows["dia_chi"];?></td>
                                <td><?php echo $rows["ngay_thue"];?></td>
                                <td><?php echo $rows["ngay_tra"];?></td>
                                <td><?php echo $rows["tien_coc"];?></td>
                                <td><?php echo $rows["tien_thue"];?></td>
                                <td><?php echo $rows["so_luong"];?></td>
                                <td><?php echo $rows["tinh_trang_truyen"];?></td>
                                <td><a href="sua1.php?id=<?php echo $rows['id'];?>">SỬA</a></td>
                            </tr>
                            <?php } ?>
                    </table>
                </div>
                    
                </div>
            </div>
        </div>
    </main>
    </body>
</html>