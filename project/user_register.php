<?php
require "../db/db.php";
require "../component/header.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $s = $pdo->prepare('INSERT INTO users (name,email,number,address,password) VALUES(:name,:email,:number,:address,:password)');
    $s->bindParam(":name", $name, PDO::PARAM_STR);
    $s->bindParam(":email", $email, PDO::PARAM_STR);
    $s->bindParam(":number", $phone, PDO::PARAM_STR);
    $s->bindParam(":address", $address, PDO::PARAM_STR);
    $s->bindParam(":password", $password, PDO::PARAM_STR);
    $s->execute();
} ?>

<form action="user_register.php" method="post" class="bg-gray-100 flex items-top justify-center h-screen p-10">

    <div class="bg-white p-8 rounded shadow-md w-96 h-fit">
        <h2 class="text-2xl font-bold mb-4">Register</h2>

        <!-- Name Input -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
            <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <!-- Email Input -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md">
        </div>
        <!-- Email Input -->
        <div class="mb-4">
            <label for="phone" class="block text-sm font-medium text-gray-600">Phone</label>
            <input type="num" id="phone" name="phone" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
            <label for="address" class="block text-sm font-medium text-gray-600">address</label>
            <textarea id="address" name="address" class="mt-1 p-2 w-full border rounded-md"></textarea>
        </div>

        <!-- Password Input -->
        <div class="mb-6">
            <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
            <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <!-- Registration Button -->
        <input type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        </input>
    </div>
</form>