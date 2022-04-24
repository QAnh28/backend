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
            background-image: url(img/images.jpg);
            padding-top: 10%;
        }
        form{
            border: 1px;
            width: 20%;
            height: 30vh;
            background-color: #008080;
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
            /*width: 30%;*/
            font-size: large;
        }
        span{
            color:red;
            display: none;
        }
        h3{
            color:red;
            display: none;
        }
    </style>
</head>
<body>
    <?php
    //ket noi voi co so du lieu
    $servername ="localhost";
    $username ="root";
    $password ="";
    $database ="quanlythuetruyen2";

    $conn = mysqli_connect($servername,$username,$password,$database);
    if($conn){
        echo("kết nối thành công!");
    }else{
        echo("Kết nối ko thành công!");
    } 
    ?>
    <?php 
    //Khai báo sử dụng session
        session_start();

        //Xử lý đăng nhập
        if(isset($_POST['dangnhap'])){
            //
            $email = $_POST['email'];
            $password = $_POST['password'];

            //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
            if ($email=="" || $password=="") {
                echo"<style>span{display:block;}</style>";
            }else{
                //Kiểm tra email co ton tai hay khong
                        //$sql = "SELECT * FROM nguoi_dung WHERE hoten = '$hoten' OR email = '$email' OR mat_khau='$password'";
                $sql = "SELECT * FROM nguoi_dung WHERE email = '$email' OR mat_khau='$password'";
                // Thực thi câu truy vấn
                $result = mysqli_query($conn, $sql);
                // Nếu kết quả trả về bang 0 thì nghĩa là username hoặc email khong tồn tại trong CSDL
                if(mysqli_num_rows($result) == 0)
                {
                    // Sử dụng javascript để thông báo
                    echo '<script language="javascript">alert("Thông tin đăng nhập khong ton tai");  window.location="dangky.php";</script>';
                    
                    // Dừng chương trình
                    //die ();
                }else{
                    $row = mysqli_fetch_array($result);
                    if($password != $row['mat_khau']){
                        echo"<style>h3{display:block;}</style>";

                    }else{
                        if($email == 'admin@gmail.com' && $password =='ad12356'){
                            $_SESSION['email']= $email;
                            header('location:index.php');
                        }else{
                            header('location:khach.php');
                        }
                    }

                }
            }
        }
                    
    ?>
    <div>
        <form action="dangnhap.php" method="post">
            <h2>Email</h2>
            <span>Vui long dien email</span>
            <input type="text" name="email">
            <h2>Password</h2>
            <span>vui long dien mat khau</span>
            <h3>Mật khẩu không đúng. Vui lòng Nhập lại</h3>
            <input type="password" name="password">
            <button type="submit" name="dangnhap">Đăng nhập</button>
            <h4>nếu chưa có tài khoản thì hãy <a href="dangky.php" style="color:red">Đăng ký</a></h4>
        </form>

    </div>
    
</body>
</html>