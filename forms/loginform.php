<?php
require_once('../src/config/userclass.php');
$msg = "";
if (isset($_POST['submit'])) {
    foreach ($_POST as $key => $values) {
        if ($key == 'login') {
            $login = $values;
        }
        if ($key == 'password') {
            $password = $values;
        }
    }
    if ($password == $_POST['cpassword']) {
        $newuser = new user();
        $msg = "";

        if ($_SESSION['isCreate'] === true) {
            // $newuser->register($login, $password);
            $msg = $newuser->register($_POST['login'], $_POST['password']);
        } else {
            // $newuser->update($login, $password);
            $msg = $newuser->update($_POST['login'], $_POST['password']);
        }
        if ($msg == '') {
            $_SESSION['user']['login'] = $newuser->getLogin();
            header('Location: ../index.php');
        }
    }
}
?>
<div class='conteneur-inscription'>
    <form method='post' class=''>
        <div class='ligneform'>
            <label for="login">Login:</label>
            <input type="text" id="login" name="login">
        </div>
        <div class='ligneform'>
            <label for="mdp">Mot de passe:</label>
            <input type="password" id="mdp" name="password">
        </div>
        <div class='ligneform'>
            <label for="mdp">Confirmation du mot de passe:</label>
            <input type="password" id="cmdp" name="cpassword">
        </div>
        <input type="submit" name="submit">
        <?php
        if ($msg != '') {
            echo '<p style="color: red;">' . $msg . '</p>';
        }
        ?>
    </form>
</div>