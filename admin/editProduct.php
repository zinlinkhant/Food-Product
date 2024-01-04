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
?>
<form action="./editProduct.php" method="post" enctype="multipart/form-data" class="flex flex-col m-auto w-[500px] p-10 border border-slate-400 rounded-sm mt-10">
    <input type="text" name="name" placeholder="enter product name" class="mb-5 border-slate-400 hover:border-yellow-400 border px-3 py-1" value="<?= $p['name'] ?>">
    <input type="text" name="price" placeholder="enter product price" class="mb-5 border-slate-400 hover:border-yellow-400 border px-3 py-1" value="<?= $p['price'] ?>">
    <select name="category" id="" class="mb-5 border-slate-400 hover:border-yellow-400 border px-3 py-1">
        <option value="<?= $p['category'] ?>" selected><?= $p['category'] ?></option>
        <option value="main dish">main dish</option>
        <option value="fast food">fast food</option>
        <option value="drinks">drinks</option>
        <option value="desserts">desserts</option>
    </select>
    <img src="../project images/<?= $p['image'] ?>" alt="" class="w-1/2 object-cover">
    <input type="file" name="photo" class="mb-5 border-slate-400 hover:border-yellow-400 border">
    <input type="submit" value="submit" name="submit" class="px-5 py-1 rounded-md bg-yellow-400 text-white hover:bg-yellow-500 hover:text-slate-200 transition-all">
</form>