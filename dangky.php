<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            width: 100%;
            height: 80vh;
            background-image: url(img/4.jpg);
            padding-top: 10%;
        }
        form{
            border: 1px;
            width: 20%;
            height: 45vh;
            background-color: black;
            border-radius:10px;
            text-align:center;
            margin-left: 35%;
            padding: 5%;
        }
        input{
            width: 100%;
            height: 3vh;
        }
        button{
            margin-top:5%;
            width: 30%;
            font-size: large;
        }
        h2,h3{
            color: red;
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
    <div>
        <?php

            //Xử lý đăng nhập
            if(isset($_POST["them"])){
                $hoten = $_POST["hoten"];
                $email = $_POST["email"];
                $password = $_POST["password"];

                if($hoten ==""){echo "vui lòng nhập vào họ tên <br/>";}
                if($email ==""){echo "vui lòng nhập vào email <br/>";}
                if($password ==""){echo "vui lòng nhập vào password <br/>";}

                // Kiểm tra username hoặc email có bị trùng hay không
                $sql = "SELECT * FROM nguoi_dung WHERE hoten = '$hoten' OR email = '$email'";
                
                // Thực thi câu truy vấn
                $result = mysqli_query($conn, $sql);
                
                // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
                if(mysqli_num_rows($result) > 0)
                {
                    // Sử dụng javascript để thông báo
                    echo '<script language="javascript">alert("Thông tin đăng nhập bị sai");  window.location="dangky.php";</script>';
                    
                    // Dừng chương trình
                    die ();
                }else{

                    $sql = "INSERT INTO nguoi_dung(hoten,email,mat_khau) VALUES('$hoten','$email','$password')";

                    if($conn->query($sql)){
                        echo ("<script>alert('đăng ký thành công!');</script>");
                    }else{
                        echo ("<script>alert('đăng ký ko  thành công!');</script>");
                    }
                }
            }
        ?>
        <form action="" method="post">
            <h2>Họ tên</h2>
            <input type="text" name="hoten">
            <h2>Email</h2>
            <input type="email" name="email" >
            <h2>Password</h2>
            <input type="password" name="password">
            <button type="submit" class="luu" name="them" values="them">Submit</button>
            <h3>nếu chưa có tài khoản thì hãy <a href="dangky.php" style="color:red">Đăng ký</a></h3>
        </form>

    </div>
    
</body>
</html>