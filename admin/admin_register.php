<?php
require "../db/db.php";
require "../component/header.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $s = $pdo->prepare('INSERT INTO admin (name,password) VALUES(:name,:password)');
    $s->bindParam(":name", $name, PDO::PARAM_STR);
    $s->bindParam(":password", $password, PDO::PARAM_STR);
    $s->execute();
} ?>

<form action="admin_register.php" method="post" class="bg-gray-100 flex items-top justify-center h-screen p-10">

    <div class="bg-white p-8 rounded shadow-md w-96 h-fit">
        <h2 class="text-2xl font-bold mb-4">Register</h2>

        <!-- Name Input -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
            <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md">
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