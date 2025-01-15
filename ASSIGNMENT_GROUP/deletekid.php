<?php
    include('database.php');
    $student = $_GET['student'];
    $sql = "delete from kids where student='$student'";
    $result = mysqli_query($connect,$sql);
    if ($result)
        echo"<script>alert('Berjaya padam rekod')</script>";
    else
        echo "<script>alert('Berjaya padam rekod')</script>";
    echo "<script>window.location='index.php'</script>";
?>