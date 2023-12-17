<!DOCTYPE html>
<html lang="en">
<?php
session_start()    ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<nav class="border border-black p-4">
    <div class="container mx-auto flex justify-around items-center">
        <div class="font-semibold text-xl">ADMIN <span class="text-purple-500">PANEL</span></div>
        <div class="space-x-6">
            <a href="../project/index.php" class="font-semibold text-lg hover:text-yellow-300 hover:tracking-widest transition-all">Home</a>
            <a href="../project/about.php" class="font-semibold text-lg hover:text-yellow-300 hover:tracking-widest transition-all">Proudcts</a>
            <a href="../project/menu.php" class="font-semibold text-lg hover:text-yellow-300 hover:tracking-widest transition-all">Orders</a>
            <a href="#" class="font-semibold text-lg hover:text-yellow-300 hover:tracking-widest transition-all">Admins</a>
            <a href="../project/contact.php" class="font-semibold text-lg hover:text-yellow-300 hover:tracking-widest transition-all">User</a>
            <a href="../project/contact.php" class="font-semibold text-lg hover:text-yellow-300 hover:tracking-widest transition-all">Messages</a>
        </div>
        <div>
            <i class="cursor-pointer user-btn fa-user fa-solid text-2xl mr-2"></i>

        </div>
    </div>

</nav>

</html>