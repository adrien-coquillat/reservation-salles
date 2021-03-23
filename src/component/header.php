<header>
    <?php
    require_once('../src/config/userclass.php');
    if (isset($_GET['d'])) {
        session_destroy();
        header('Location: index.php');
    }

    ?>
    <?php
    if (!isset($_SESSION['user'])) { ?>
        <a href="../index.php">Accueil</a>
        <a href="inscription.php">Inscription</a>
        <a href="connexion.php">Connexion</a>
        <a href="reservationencours.php">Reservation en cours</a>
    <?php } else {
    ?>
        <a href="../index.php">Accueil</a>
        <a href="modifiersonprofil.php">modifier</a>

        <a href="planning.php">Planning</a>
        <a href="reservationencours.php">Reservation en cours</a>
        <a href="?d">Disconnect</a>
        </br>
        </br>
        <?= 'Bienvenue à toi ' . $_SESSION['user']['login']; ?>;

    <?php }

    ?>
</header>