<?php
include "../component/header.php";
include "../db/db.php"
?>
<div class="w-full relative pt-10">
    <div class="user-box absolute top-5 right-24 w-fit h-fit bg-blue-50 border border-black p-5 hidden">
        <h3 class="text-center mb-3 font-semibold text-lg">User</h3>
        <div class="flex justify-center gap-5">
            <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4  items-center">Profile</a>
            <a href="" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4  items-center">Logout</a>
        </div>
        <p class="text-center"><a href="#" class="text-yellow-800 underline">Login</a> or <a href="#" class="text-blue-800 underline">register</a> </p>
    </div>
    <div class="flex flex-wrap shadow-lg w-fit mx-auto p-10">
        <div class="flex flex-cols justify-center items-center flex-1 mr-20">
            <div>
                <h4 class="text-2xl font-bold text-slate-400">order online</h4>
                <h1 class="text-6xl mb-5">Delicious Pizza</h1>
                <a href="#" class=" bg-yellow-300 px-5 py-2 hover:tracking-widest hover:px-6 transition-all">See
                    Menus</a>
            </div>
        </div>
        <div class="flex justify-center items-center flex-1">
            <img src="../images/home-img-1.png" alt="" class="w-[500px]">
        </div>
    </div>
</div>
<h1 class="text-center text-4xl my-10 tracking-wide py-5 underline underline-offset-8 font-semibold">FOOD CATEGORY
</h1>
<div class="flex justify-center mb-20">
    <div class="group/cat1 ml-10 p-10 border border-2 border-black hover:bg-black transition-all">
        <img src="../images/cat-1.png" alt="" class="w-[100px] group-hover/cat1:invert">
        <h3 class="text-center font-semibold text-xl group-hover/cat1:text-white">Fast Food</h3>
    </div>
    <div class="group/cat2 ml-10 p-10 border border-2 border-black hover:bg-black transition-all">
        <img src="../images/cat-2.png" alt="" class="w-[100px] group-hover/cat2:invert">
        <h3 class="text-center font-semibold text-xl group-hover/cat2:text-white">Main Dishes</h3>
    </div>
    <div class="group/cat3 ml-10 p-10 border border-2 border-black hover:bg-black transition-all">
        <img src="../images/cat-3.png" alt="" class="w-[100px] group-hover/cat3:invert">
        <h3 class="text-center font-semibold text-xl group-hover/cat3:text-white">Drinks</h3>
    </div>
    <div class="group/cat4 ml-10 p-10 border border-2 border-black hover:bg-black transition-all">
        <img src="../images/cat-4.png" alt="" class="w-[100px] group-hover/cat4:invert">
        <h3 class="text-center font-semibold text-xl group-hover/cat4:text-white">Desserts</h3>
    </div>
</div>
<h1 class="text-center text-4xl my-10 tracking-wide py-5 underline underline-offset-8 font-semibold">LATEST DISHES
</h1>
<div class="dishes flex justify-center mb-20">
    <a href="#" class=" bg-yellow-300 px-5 py-2 hover:tracking-widest hover:px-6 transition-all">See Menus</a>
</div>
<?php
include "../component/footer.php"; ?>
<script>
    $(document).ready(function() {
        $('.user-btn').click(
            function() {
                $('.user-box').toggleClass('hidden')
            }
        )
    });
</script>