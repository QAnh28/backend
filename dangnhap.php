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
            background-color: white;
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
    </style>
</head>
<body>
    <?php
        session_start();

        if(isset($_POST['dangnhap'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            if($email == 'admin@gmail.com' && $password =='ad12356'){
                $_SESSION['email']= $email;
                header('location:index.php');

            }
            else{
                header('location:khach.php');
            }
        }
    ?>
    <div>
        <form action="dangnhap.php" method="post">
            <h2>Email</h2>
            <input type="text" name="email">
            <h2>Password</h2>
            <input type="password" name="password">
            <button type="submit" name="dangnhap">Đăng nhập</button>
            <h4>nếu chưa có tài khoản thì hãy <a href="dangky.php" style="color:red">Đăng ký</a></h4>
        </form>

    </div>
    
</body>
</html>