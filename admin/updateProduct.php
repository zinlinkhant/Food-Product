<?php
require "../component/header.php";
require "../db/db.php";
$id = $_GET['id'];
$qry = $pdo->prepare('SELECT * FROM products WHERE id=:id');
$qry->bindParam(":id", $id, PDO::PARAM_STR);
$qry->execute();
$p = $qry->fetch();
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $photo = $p['image'];
    if (isset($_FILES['photo']['name'])) {
        $photo = $_FILES['photo']['name'];
    }
    $qry = $pdo->prepare("UPDATE products SET name=:name,category=:category,price=:price,image=:image WHERE id=:id");
    $qry->bindParam(":id", $id, PDO::PARAM_STR);
    $qry->bindParam(":name", $name, PDO::PARAM_STR);
    $qry->bindParam(":category", $category, PDO::PARAM_STR);
    $qry->bindParam(":price", $price, PDO::PARAM_STR);
    $qry->bindParam(":image", $photo, PDO::PARAM_STR);
    $qry->execute();
}
