<?php
    session_start();
    include('conn.php');
    $id = $_SESSION['user-id'];
    $sql = "SELECT * FROM users WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $money = $row['money'] + 30000;

    $insert = "UPDATE users SET money='$money' where id='$id'";
    $result_ = mysqli_query($conn, $insert);
    echo "<script>
    window.location.replace('./charge.html');
    </script>";
?>
?>