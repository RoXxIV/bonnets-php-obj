<?php
session_start();
require_once('classes/Bonnet.php');
require_once('classes/Cart.php');

require_once('var.php');
require_once('function.php');


if (!empty($_POST['pseudo']) && $_POST['pass'] == $pass) {
    $_SESSION['pseudo'] = $_POST['pseudo'];
}
if (isset($_SESSION['pseudo'])) {
    $connection =  "<a href='logout.php'>logout</a>";
} else {
    $connection =  "<a href='login.php'>login</a>";
}
$cart = new Cart();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/base.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Bonnet</title>
</head>

<body>
    <header class="text-white">
        <nav class="navbar justify-content-sm-between">
            <!--logo-->
            <a id="logo" class="navbar-brand text-center col-12 col-sm-3" href="index.php">Bon<span>net</span></a>
            <!--liens-->
            <div class="col-12 col-sm-5">
                <ul class="nav justify-content-center justify-content-md-end">
                    <!--AAA-->
                    <li>
                        <a href="list.php">Voir tout les bonnets</a>
                    </li>
                    <!--BBB-->
                    <li class="mx-5">
                        <?php
                        echo $connection
                        ?>
                    </li>
                    <!--CCC-->
                    <li>
                        <?php if (isset($_SESSION['pseudo'])) {
                            echo $_SESSION['pseudo'];
                        } else {
                            echo "invité";
                        } ?>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container">