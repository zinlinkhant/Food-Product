<?php
include "../component/header.php";
include "../db/db.php"
?>
<div class="w-full relative pt-10">
    <div class="user-box absolute top-5 right-24 w-fit h-fit bg-blue-50 border border-black p-5 hidden">
        <h3 class="text-center mb-3 font-semibold text-lg"><?php if (isset($_SESSION['user'])) : ?>
                <?= $_SESSION['user']; ?>
            <?php else :
            ?>
                user
            <?php endif ?>
        </h3>
        <div class="flex justify-center gap-5">
            <a href="./user_info.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4  items-center">Profile</a>
            <a href="./user_logout.php" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4  items-center">Logout</a>
        </div>
        <?php
        if (isset($_SESSION['user'])) : ?>
        <?php else :
        ?>
            <p class="text-center"><a href="./user_login.php" class="text-yellow-800 underline">Login</a> or <a href="./user_register.php" class="text-blue-800 underline">register</a> </p>
        <?php endif ?>

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
        <a href=" ./index.php?category=fast food"><img src="../images/cat-1.png" alt="" class="w-[100px] group-hover/cat1:invert">
            <h3 class="text-center font-semibold text-xl group-hover/cat1:text-white">Fast Food
        </a>
    </div>
    <div class="group/cat2 ml-10 p-10 border border-2 border-black hover:bg-black transition-all">
        <a href=" ./index.php?category=main dish">
            <img src="../images/cat-2.png" alt="" class="w-[100px] group-hover/cat2:invert">
            <h3 class="text-center font-semibold text-xl group-hover/cat2:text-white">Main Dishes</h3>
        </a>
    </div>
    <div class="group/cat3 ml-10 p-10 border border-2 border-black hover:bg-black transition-all">
        <a href=" ./index.php?category=drink">
            <img src="../images/cat-3.png" alt="" class="w-[100px] group-hover/cat3:invert">
            <h3 class="text-center font-semibold text-xl group-hover/cat3:text-white">Drinks</h3>
        </a>
    </div>
    <div class="group/cat4 ml-10 p-10 border border-2 border-black hover:bg-black transition-all">
        <a href=" ./index.php?category=desserts">
            <img src="../images/cat-4.png" alt="" class="w-[100px] group-hover/cat4:invert">
            <h3 class="text-center font-semibold text-xl group-hover/cat4:text-white">Desserts</h3>
        </a>
    </div>
</div>
<h1 class="text-center text-4xl my-10 tracking-wide py-5 underline underline-offset-8 font-semibold">LATEST DISHES
</h1>

<div class="dishes flex justify-center mb-20">
    <a href="#" class=" bg-yellow-300 px-5 py-2 hover:tracking-widest hover:px-6 transition-all">See Menus</a>
</div>
<div class="w-4/6 grid grid-cols-3 gap-4 h-fit pb-20 m-auto ">
    <?php
    if (isset($_GET['category'])) {
        $category = $_GET['category'];
        $qry = $pdo->prepare('SELECT * FROM products WHERE category=:category');
        $qry->bindParam(":category", $category, PDO::PARAM_STR);
        $qry->execute();
        $products = $qry->fetchAll();
    } else if (isset($_POST['search'])) {
        $search = $_POST['search'];
        $qry = $pdo->prepare('SELECT * FROM products WHERE name LIKE %:search%');
        $qry->bindParam(':search', $search, PDO::PARAM_STR);
        $qry->execute();
        $products = $qry->fetchAll();
    } else {
        $qry = $pdo->prepare('SELECT * FROM products');
        $qry->execute();
        $products = $qry->fetchAll();
    }
    ?>
    <?php foreach ($products as $products => $p) : ?>

        <div class="h-fit border border-black p-3">
            <img src="../project images/<?= $p['image'] ?>" alt="photo" class="bg-gray-100 h-2/3 w-full object-cover">
            <p class="text-lg text-gray-600"><?= $p['category']   ?></p>
            <p class="text-xl text-xl-900"><?= $p['name']   ?></p>
            <div class="flex justify-between h-full items-center">
                <p>$<?= $p['price'] ?></p>
                <form action="./order.php" method="post" class="">
                    <input type="hidden" name="username" value="<?= $_SESSION['user'] ?>">
                    <input type="hidden" name="productname" value="<?= $p['name'] ?>">
                    <input type="hidden" name="price" value="<?= $p['price'] ?>">
                    <input type="number" name="quantity" class="border w-[100px] px-5 py-2" placeholder="1">
                    <input type="submit" name="submit" value="order" class="bg-blue-500 py-2 px-3 text-white">
                </form>
            </div>
        </div>
    <?php endforeach ?>
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