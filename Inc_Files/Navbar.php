<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS\navbar.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="container">
        <div class="logo">
            <!-- <img src="img\logo.jpg" alt="" height="50px" width="50px"> -->
            <h1>Online BookStore</h1>
        </div>
        <div class="nav-container">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Explore.php">Explore Books</a></li>
                <li><a href="Categories.php">Categories</a></li>
                <li><a href="">About</a></li>
            </ul>
        </div>
        <div class="icon">
            <a href=""><i class="fa-solid fa-cart-shopping fa-lg" style="color:black;"></i></a>
            <a href="Signup.php"><i class="fa-solid fa-circle-user fa-2xl" style="color:black;"></i></a>
        </div>
    </div>
</body>
</html>