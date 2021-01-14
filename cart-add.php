<?php
    include 'includes/header.php';

    if (isset($_GET['id'])) {
        $cart->add($_GET['id']);
    }
    header('Location: cart.php');
