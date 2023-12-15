<?php
require "../component/header.php";
require "../db/db.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $photo = $_FILES['photo']['name'];
    $tmpphoto = $_FILES['photo']['tmp_name'];
    move_uploaded_file($tmpphoto, "../uploaded_img/$photo");
    $qry = $pdo->prepare("INSERT INTO products (name,category,price,image) VALUES (:name,:category,:price,:image)");
    $qry->bindParam(":name", $name, PDO::PARAM_STR);
    $qry->bindParam(":price", $price, PDO::PARAM_STR);
    $qry->bindParam(":category", $category, PDO::PARAM_STR);
    $qry->bindParam(":image", $photo, PDO::PARAM_STR);
    $qry->execute();
}
?>
<form action="./addProduct.php" method="post" enctype="multipart/form-data" class="flex flex-col m-auto w-fit p-10 border border-slate-400 rounded-sm mt-10">
    <input type="text" name="name" placeholder="enter product name" class="mb-5 border-slate-400 hover:border-yellow-400 border px-3 py-1">
    <input type="text" name="price" placeholder="enter product price" class="mb-5 border-slate-400 hover:border-yellow-400 border px-3 py-1">
    <select name="category" id="" class="mb-5 border-slate-400 hover:border-yellow-400 border px-3 py-1">
        <option value="" selected>select category--</option>
        <option value="main dish">main dish</option>
        <option value="fast food">fast food</option>
        <option value="drinks">drinks</option>
        <option value="desserts">desserts</option>
    </select>
    <input type="file" name="photo" class="mb-5 border-slate-400 hover:border-yellow-400 border">
    <input type="submit" value="submit" name="submit" class="px-5 py-1 rounded-md bg-yellow-400 text-white hover:bg-yellow-500 hover:text-slate-200 transition-all">
</form>