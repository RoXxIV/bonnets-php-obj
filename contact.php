<?php include 'includes/header.php';
    
    $_SESSION['contact'] = [];
    //verif sujet

    if (isset($_POST['sujet'])) {
        if (strlen(trim($_POST['sujet'])) >= 3) {
            $_SESSION['contact']['sujet'] = $_POST['sujet'];
        }
        if (strlen(trim($_POST['sujet'])) < 3) {
            echo ' <div class="alert alert-primary" role="alert"> sujet invalide</div>';
        }
    }

    //verif mail
    /*
    if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        var_dump($_POST['mail']);
    }*/
    
    if (isset($_POST['mail'])) {
        if (preg_match($regex, $_POST['mail'])) {
            $_SESSION['contact']['mail'] = $_POST['mail'];
        }
        if (!preg_match($regex, $_POST['mail'])) {
            echo ' <div class="alert alert-primary" role="alert"> mail invalide</div>';
        }
    }

    //verif message
    if (isset($_POST['message'])) {
        if (strlen(trim($_POST['message'])) >= 10) {
            $_SESSION['contact']['message'] = $_POST['message'];
            var_dump($_SESSION['contact']);
        }
        if (strlen(trim($_POST['message'])) < 10) {
            echo ' <div class="alert alert-primary" role="alert"> Message trop court</div>';
        }
    }



?>
<div class="row">
    <div id="contact" class="col-md-8 mx-auto">
        <form method="POST" action="">
            <div class="form-group">
                <label for="sujet">Sujet</label>
                <input type="text" class="form-control" id="sujet" name="sujet" >
            </div>
            <hr>
            <div class="form-group">
                <label for="mail">Mail</label>
                <input type="" class="form-control" id="mais" name="mail">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>