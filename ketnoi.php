//tao ket noi voi database
<?php
    $servername ="localhost";
    $username ="root";
    $password ="";
    $database ="quanlythuetruyen2";

    $conn = mysqli_connect($servername,$username,$password,$database);
    if($conn){
        // tránh hiển thị lỗi tiếng việt
        // mysqli_query($conn, "SET NAMES 'utf8'");
        echo("kết nối thành công!");
    }else{
        echo("Kết nối ko thành công!");
    } 
    //truy vấn lấy về danh mục
    $truyvanDM = "SELECT * FROM truyen";
    $data = mysqli_query($conn, $truyvanDM);

    while($row = mysqli_fetch_assoc($data)){
        echo"id:".$row["mã truyện"]."<br>";
        echo"<hr>";
    } 
?>