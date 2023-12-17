<?php
require "../db/db.php";
require "../component/header.php";
$error = '';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $s = $pdo->prepare('SELECT * FROM admin WHERE name=:name');
    $s->bindParam(":name", $name, PDO::PARAM_STR);
    $s->execute();
    $res = $s->fetch();
    if ($res) {
        $check = $password === $res['password'];
        if ($check) {
            $_SESSION['admin'] = $name;
            header("Location:index2.php");
        } else {
            $error = "The password is not correct";
            $class = 'bg-red-500';
        }
    } else {
        $error = "There is no admin with that name";
        $class = 'bg-red-500';
    }
} ?>

<form action="admin_login.php" method="post" class="bg-gray-100 flex items-top justify-center h-screen p-10">
    <div class="bg-white p-8 rounded shadow-md w-96 h-fit">
        <p class="text-lg <?= $class ?> text-white text-center px-5 py-2  -top-5 z-5"><?= $error ?></p>
        <h2 class="text-2xl font-bold mb-4">Login</h2>
        <!-- Name Input -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
            <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md">
        </div>
        <div class="mb-6">
            <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
            <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md">
        </div>
        <input type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        </input>
    </div>
</form>