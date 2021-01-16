<?php
  include 'includes/header.php';
 ?>

<div class="row justify-content-between">
  <?php
    for ($i = 0; $i < 6; $i++) {
        showCards($myProducts[$i]);
    }
  ?>
  <a href="list.php" class="btn mt-5">Voir tout les bonnets</a>
</div>

<?php include 'includes/footer.php'; ?>