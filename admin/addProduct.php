<?php
require "../component/header.php";
?>
<form action="addProduct.php" method="post" enctype="multipart/form-data"
    class="flex flex-col m-auto w-fit p-10 border border-slate-400 rounded-sm mt-10">
    <input type="text" name="name" placeholder="enter product name"
        class="mb-5 border-slate-400 hover:border-yellow-400 hover:border-2 border px-3 py-1">
    <input type="text" name="price" placeholder="enter product price"
        class="mb-5 border-slate-400 hover:border-yellow-400 hover:border-2 border px-3 py-1">
    <select name="category" id="" class="mb-5 border-slate-400 hover:border-yellow-400 hover:border-2 border px-3 py-1">
        <option value="" selected>select category--</option>
        <option value="main dish">main dish</option>
        <option value="fast food">fast food</option>
        <option value="drinks">drinks</option>
        <option value="desserts">desserts</option>
    </select>
    <input type="file" name="photo" class="mb-5 border-slate-400 hover:border-yellow-400 hover:border-2 border">
</form>