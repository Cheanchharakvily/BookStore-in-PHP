<?php
    include 'DBconfig.php';

    $fdId = isset($_GET['fdId']) ? $_GET['fdId'] : null;

    if ($fdId !== null) {
        
        $qw = 'SELECT * FROM tblbooks WHERE ID = "'.$fdId.'"';
    } else {
        $qw = 'SELECT * FROM tblbooks Order By DateIn DESC';
    }

    $rw = $conn->query($qw);
?>
