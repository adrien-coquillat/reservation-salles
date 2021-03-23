<?php

class reservation
{
    public $id;
    public $titre;
    public $description;
    public $debut;
    public $fin;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=reservationsalles', 'root', '');
    }



    public function createResa($titre, $description, $debut, $fin, $id_utilisateur)
    {

        // Invalid parameter number: parameter was not defined ligne 41
        $msg = '';
        $titre = htmlspecialchars(trim($titre));
        $description = htmlspecialchars(trim($description));
        $debut = htmlspecialchars(trim($debut));
        $fin = htmlspecialchars(trim($fin));

        $sth = $this->db->prepare("SELECT debut FROM reservations WHERE debut = :debut");
        $sth->bindParam(":debut", $debut, PDO::PARAM_INT);
        $sth->execute();
        $checkdebut = $sth->rowCount();
        var_dump($checkdebut);
        if ($checkdebut === 0) {
            $sth = $this->db->prepare("SELECT fin FROM reservations WHERE fin = :fin");
            $sth->bindParam(":fin", $fin, PDO::PARAM_INT);
            $sth->execute();
            $checkfin = $sth->rowCount();
            if ($checkfin === 0) {
                $sth = $this->db->prepare("INSERT INTO reservations (titre, description, debut, fin, id_utilisateur) VALUES (:titre, :description, :debut, :fin, :id_utilisateur)");
                $sth->bindParam(":titre", $titre, PDO::PARAM_STR);
                $sth->bindParam(":description", $description);
                $sth->bindParam(":debut", $debut);
                $sth->bindParam(":fin", $fin);
                $sth->bindParam(":id_utilisateur", $id_utilisateur, PDO::PARAM_INT);
                $sth->execute();
                $msg = "Réservation réussi";
                return $msg;
            }
            $msg = 'Date non disponible';
            return $msg;
        }
        $msg = 'Date non disponible';
        return $msg;
    }

    public function tableauresa()
    {
        $sth = $this->db->prepare("SELECT * FROM reservations");
        $result = $sth->execute();

        $resultat = $sth->fetchAll();
        foreach ($resultat as $key => $value) {
            echo "<div class='col-8'>" . $value[0] . "</div><div class='d-flex'><div class='col-4'> <p> Titre de l'évenement</div><div class='col-4'>" . $value[1] . "</p> </div></div>
            <div class='d-flex'><div class='col-4'> <p> Description de l'évenement</div><div class='col-4'>" . $value[2] . "</p> </div></div>
            <div class='d-flex'><div class='col-4'> <p> Heure début de l'évenement</div><div class='col-4'>" . $value[3] . "</p> </div></div>
            <div class='d-flex mb-5'><div class='col-4'> <p> Heure fin de l'évenement</div><div class='col-4'>" . $value[4] . "</p> </div></div>";
        }

        return $result;
    }
}
