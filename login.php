<?php include 'includes/header.php'; ?>
<div class="row">
    <div class="col-6 mx-auto my-5">
        <?php
            if (isset($_POST['pass'])) {
                if ($_POST['pass'] !== $pass) {
                    echo ' <div class="alert alert-danger" role="alert">Mot de passe incorrect</div>';
                } elseif ($_POST['pass'] == $pass) {
                    header('Location: index.php');
                }
            }
            if (empty($_POST['pseudo']) && isset($_POST['pseudo'])) {
                echo 'erreur';
            }

        ?>
        <form method="post" action="">
            <div class="form-group">
                <label for="pseudo">Pseudo</label>
                <input type="text" class="form-control" id="pseudo" name="pseudo" required pattern=".*\S+.*">
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" id="pass" name="pass">
                <small id="passHelp" class="form-text text-muted"><a href="#">mot de passe oublié</a></small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<?php include 'includes/footer.php'; ?>