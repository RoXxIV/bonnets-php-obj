<?php
    session_start();
    session_destroy();
    include 'includes/header.php';
?>
<?php
    echo ' <div class="alert alert-primary" role="alert"> Vous êtes bien déconnecté</div>';
?>
<?php include 'includes/footer.php'; ?>