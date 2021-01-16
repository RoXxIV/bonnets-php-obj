 <?php
    include 'includes/header.php';

    if (isset($_GET['id'])) {
        // On passe l'id de notre objet, puisque (pour le moment), c'est la seule information que l'on utilise
        $cart->remove($_GET['id']);
        $cart->remove($_GET['id']);
    }

    header('Location: cart.php');
