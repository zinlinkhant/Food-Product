<?php
include "../component/header.php";
include "../db/db.php";
?>
<div class="py-10 bg-gray-700 text-center">
    <h1 class="text-5xl font-bold text-white text-center">Our Menu</h1>
    <h3 class="text-center text-slate-300 text-2xl mt-3"><span class="text-yellow-400">home</span>/menu</h3>
</div>
<h1 class="text-center text-4xl my-3 tracking-wide py-2 underline underline-offset-8 font-semibold">LATEST DISHES
</h1>
<div class="my-5 text-center">
    <div class="w-4/6 grid grid-cols-3 gap-4 h-fit pb-20 m-auto ">
        <?php
        if (isset($_GET['category'])) {
            $category = $_GET['category'];
            $qry = $pdo->prepare('SELECT * FROM products WHERE category=:category');
            $qry->bindParam(":category", $category, PDO::PARAM_STR);
            $qry->execute();
            $products = $qry->fetchAll();
        } else if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $qry = $pdo->prepare('SELECT * FROM products WHERE name LIke :name');
            $qry->bindParam(":name", $search, PDO::PARAM_STR);
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
    --------------------------------------
</div>
<?php
include "../component/footer.php";
