<?php
    include('database.php');
    $idcourse = $_GET['idcourse'];
    $sql = "DELETE FROM subject WHERE idcourse='$idcourse'";
    $result = mysqli_query($connect,$sql);
    if ($result)
        echo"<script>alert('Berjaya padam rekod')</script>";
    else
        echo "<script>alert('Berjaya padam rekod')</script>";
    echo "<script>window.location='index.php'</script>";
?>