<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS\Explore.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS\navbar.css">
    <link rel="stylesheet" href="CSS\Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <?php include "Inc_Files\Navbar.php" ?>
    </div>
    <div class="container-books">
        <div class="side-tabs">
            <h1>Sub Categories</h1>
            <div class="cat-tabs">
                <li><a href="Explore.php">All</a></li>
                <li><a href="Explore.php?fdId=1">ទស្សនវិជ្ជា</a></li>
                <li><a href="Explore.php?fdId=2">មនោសញ្ចេតនា</a></li>
                <li><a href="Explore.php?fdId=3">វិទ្យាសាស្ត្រ</a></li>
                <li><a href="Explore.php?fdId=4">បច្ចេកវិទ្យា</a></li>
                <li><a href="Explore.php?fdId=5">ជីវប្រវត្តិ</a></li>
                <li><a href="Explore.php?fdId=6">ស្រមើស្រមៃ</a></li>
                <li><a href="Explore.php?fdId=7">ប្រលោមលោក</a></li>
                <li><a href="Explore.php?fdId=8">ប្រវត្តិសាស្ត្រ</a></li>
                <li><a href="Explore.php?fdId=9">កំណាព្យ</a></li>
                <li><a href="Explore.php?fdId=10">ប្រឌិត</a></li>
                <li><a href="Explore.php?fdId=11">សៀវភៅកុមារ</a></li>
                <li><a href="Explore.php?fdId=12">ទស្សនាវដ្តី</a></li>
            </div>
        </div>


        <div class="main-tabs">
            <h1>All Books</h1>
            <?php

            include 'Query\Catquery.php';

            if ($rw->num_rows > 0) { ?>
                <?php while ($row = $rw->fetch_assoc()) { ?>
                    <div class="box-book">
                        <div class="tabs-row">
                            <a href="View.php?fdId=<?= $row["ProductID"] ?>">
                                <div class="books-tabs">
                                    <img src="<?php echo $row["Image"]; ?>" alt="">
                                    <h1><?php echo $row["Title"]; ?></h1>
                                </div>
                            </a>    
                        </div>
                    </div>
                    <?php } ?>
            <?php } else
                echo '0 results';
            $conn->close();
        ?>
        </div>
    </div>
</body>
</html>