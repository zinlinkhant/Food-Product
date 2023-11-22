<?php
include "./component/header.php"; ?>
<nav class="border border-black p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="font-semibold text-xl">Yum-yum 😋</div>
        <div class="space-x-6">
            <a href="#" class="font-semibold text-lg hover:text-green-300 hover:tracking-widest transition-all">Home</a>
            <a href="#" class="font-semibold text-lg hover:text-green-300 hover:tracking-widest transition-all">About</a>
            <a href="#" class="font-semibold text-lg hover:text-green-300 hover:tracking-widest transition-all">Services</a>
            <a href="#" class="font-semibold text-lg hover:text-green-300 hover:tracking-widest transition-all">Contact</a>
        </div>
        <div>
            <input type="text" id="search" class="hidden border border-black mr-2 pl-3" placeholder="search">
            <i class="fa-solid fa-magnifying-glass text-2xl mr-2" onclick="show"></i>
            <i class="fa-user fa-solid text-2xl mr-2"></i>
            <i class="fas fa-shopping-cart text-2xl mr-2"></i>
        </div>
    </div>
    <script>
        $(document).ready(
            function show() {
                $('#search').toggleClass('hidden');
            }
        )
    </script>
</nav>