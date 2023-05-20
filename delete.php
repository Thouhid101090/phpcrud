<?php require_once('connection.php'); ?>
<?php
    $id=$_GET['id'];
    $sql="delete from students where id=$id";
    $rs=$mysqli->query($sql);
    if($rs){
        header('location: index.php');
    }else{
        echo $mysqli->error;
    }
