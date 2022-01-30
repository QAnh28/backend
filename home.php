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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> 
    <style>
        #anh,#anh1,#anh2{
            height: 85vh;
            width: 80%;
        }
        #chu,#chu1,#chu2{
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
                        <a class="nav-link" id="chu" href="">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chu1" href="dangnhap.php">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chu2" href="dangky.php">Đăng ký</a>
                    </li>
            </div>
        </div>
    </header>
    <main>
        <div class="container-fluid">
            <div class="container">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="img/3-3.jpg" class="d-block w-100" alt="..." class="anh" id="anh">
                        </div>
                        <div class="carousel-item">
                        <img src="img/6.jpeg" class="d-block w-100" alt="..." id="anh1">
                        </div>
                        <div class="carousel-item">
                        <img src="img/9.jpg" class="d-block w-100" alt="..." id="anh2">
                        </div>
                    </div>
                </div>
            
            </div>
        </div>  
    </main>
    
</body>
</html>