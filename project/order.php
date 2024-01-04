<?php
include "../component/header.php";
include "../db/db.php";
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $productname = $_POST['productname'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $total_price = $price * $quantity;
    $qry = $pdo->prepare('INSERT INTO orders (user_name,name,number,price,total_price) VALUES (:user_name,:name,:number,:price,:total_price)');
    $qry->bindParam(":user_name", $username, PDO::PARAM_STR);
    $qry->bindParam(":name", $productname, PDO::PARAM_STR);
    $qry->bindParam(":number", $quantity, PDO::PARAM_STR);
    $qry->bindParam(":price", $price, PDO::PARAM_STR);
    $qry->bindParam(":total_price", $total_price, PDO::PARAM_STR);
    $qry->execute();
    header("location:index.php");
}
