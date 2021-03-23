<?php
require_once('../src/config/userclass.php');
session_start();
include('../src/component/header.php');
$page = 'connexion';
$newuser = new user();

$msg = '';

if (isset($_POST['btn_login'])) {
    $msg = $newuser->connect($_POST['login'], $_POST['password']);

    if ($msg == '') {
        $_SESSION['user']['id'] = $newuser->getId();
        $_SESSION['user']['login'] = $newuser->getLogin();
        var_dump($_SESSION['user']);
        header('Location: index.php');
    }
}

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<div class='conteneur-connexion'>
    <form method='post' class=''>
        <div class='ligneform'>
            <label for="login">Login:</label>
            <input type="text" id="login" name="login">
        </div>
        <div class='ligneform'>
            <label for="mdp">Mot de passe:</label>
            <input type="password" id="mdp" name="password">
        </div>
        <input type="submit" name="btn_login">
    </form>
    <?php
    if ($msg != '') {
        echo '<p style="color: red;">' . $msg . '</p>';
    }
    ?>
</div>