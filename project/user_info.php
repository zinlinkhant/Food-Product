<?php
include "../component/header.php";
include "../db/db.php";
?>

<div class="p-10 flex">
    <div class="border rounded-md border-black w-fit py-10 px-5">
        <?php
        $qry = $pdo->prepare("SELECT * FROM users WHERE name=:name");
        $qry->bindParam(":name", $_SESSION['name'], PDO::PARAM_STR);
        $qry->execute();
        $user = $qry->fetch();
        ?>
        <label for="name" class="">Name</label>
        <input type="text" name="name" class="text-2xl">
        <p class="text-2xl"><?= $user['email'] ?></p>
        <p class="text-2xl"><?= $user['number'] ?></p>
        <p class="text-2xl"><?= $user['address'] ?></p>
    </div>
</div>