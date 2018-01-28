<?php
include "../libs/bootstrap.php";
use Library\Configuration;
$root=Configuration::root();
$http=Configuration::http();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <?php include "$root/views/layouts/links.php" ?>
    <?php include "$root/views/layouts/head_scripts.php"?>

    <title>Home - Library</title>
</head>
<body>
    <?php include "$root/views/layouts/user_bar.php"?>
    <?php include "$root/views/layouts/nav.php" ?>

    <div class="container">
        <section class="row">

        </section>
    </div>


    <?php include "$root/views/layouts/footer.php" ?>
    <?php include "$root/views/layouts/body_scripts.php"?>
</body>
</html>