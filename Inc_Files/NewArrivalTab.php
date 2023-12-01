<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS\NewArrivalTab.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="Arrival-container">
        <h1 class="Arrival-Tittle">មកដល់​ថ្មី</h1>
        <?php

            include('DBconfig.php');
                $qw = 'SELECT * FROM tblbooks Order By DateIn DESC';
                $rw = $conn->query($qw);

            if ($rw->num_rows > 0) { ?>
                <?php while ($row = $rw->fetch_assoc()) { ?>
                    <div class="Arrival-content">
                        <div class="Arrival-box">
                            <a href="View.php?fdId=<?= $row["ProductID"] ?>">
                            <img src="<?php echo $row["Image"]; ?>" alt=""></a>
                        </div>
                    </div>
                    <?php } ?>
            <?php } else
                echo '0 results';
            $conn->close();
        ?>
    </div>
</body>
</html>