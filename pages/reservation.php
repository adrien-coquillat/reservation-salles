<?php
session_start();
include('../src/component/header.php');
require_once('../src/config/classReservations.php');
setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');
$date = new DateTime('now');
$currentDate = $date->getTimestamp();
setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<h2>Vous souhaitez reserver cette salle le <?php setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');
                                            echo  $jour = date("l d", utf8_encode(ucfirst(strtotime($_GET['day&hour'])))); ?></h2>
<form method="POST" action="">
    <?php
    $heure = date("H", strtotime($_GET['day&hour']));
    for ($i = 0; isset($_SESSION['heure'][$i]); $i++) {
        $tableau = strftime($_SESSION['heure'][$i]);
        if ($heure <= $tableau) {
            $debutresa = $_SESSION['heure'][$i];
            break;
        }
    }
    ?>
    <input type="text" name="datedebut" value="<?= $debutresa ?>">
    <span>jusqu'à</span>
    <select name="datefin">
        <?php
        for ($i = 0; isset($_SESSION['heure'][$i]); $i++) {
            $tableau = strftime($_SESSION['heure'][$i]);
            if ($heure + 1 <= $tableau) {
                echo  '<option name="datefin">' . $_SESSION['heure'][$i] . '</option>';
            }
        }
        ?>
    </select>
    <input type="text" name="titre" id="titre" placeholder="Titre de votre évenement">
    <input type="text" name="description" id="description" placeholder="Description de votre évenement">
    <input type="submit" name="submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $datedebut = date('Y-m-d H:i:s', strtotime($_GET['day&hour']));
    $jour = date('Y-m-d', strtotime($datedebut));
    $heurefin = $_POST['datefin'];
    $datefin = date('Y-m-d H:i:s', strtotime($jour . ' ' . $heurefin));
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $newresa = new reservation;
    $msg = $newresa->createResa($titre, $description, $datedebut, $datefin, $_SESSION['user']['id']);
    echo $msg;
}

?>