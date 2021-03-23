<!DOCTYPE html>
<html lang="fr">
<?php
session_start();
include('../src/component/header.php');

// selon le serveur c'est fr ou fr_FR ou fr_FR.ISO8859-1 qui est correct.
setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');
$date = new DateTime('now');
$currentDate = $date->getTimestamp();

?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>
    <h1> Agenda <?php echo utf8_encode(ucfirst(strftime("%B", $currentDate))) ?> </h1>

    <table>
        <thead>
            <tr>
                <?php
                // echo date("d", $currentDate);
                // setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');
                // for ($k = 0; $k < 5; $k++) {

                //     $date = date("l", strtotime(" Today +" . $k . "days"));
                //     echo "<th>$date</th>";
                // }





                $aujourdhui = utf8_encode(ucfirst(strftime("%Y-%m-%d", $currentDate)));
                $unjourenplus =  strtotime("+1 day");
                $unjourenplus = strftime("%Y-%m-%d", $unjourenplus);
                $deuxjourenplus = strtotime("+2 day", $currentDate);
                $deuxjourenplus = strftime("%Y-%m-%d", $deuxjourenplus);
                $troisjourenplus = strtotime("+3 day", $currentDate);
                $troisjourenplus = strftime("%Y-%m-%d", $troisjourenplus);
                $quatrejourenplus = strtotime("+4 day", $currentDate);
                $quatrejourenplus = strftime("%Y-%m-%d", $quatrejourenplus);


                $week =  5;
                $dayofweek = [$aujourdhui, $unjourenplus,  $deuxjourenplus,  $troisjourenplus, $quatrejourenplus];
                $_SESSION['dayofweek'] = $dayofweek;
                echo '<th colspan="1">horraire</th>';

                for ($i = 0; isset($dayofweek[$i]); $i++) {
                    echo '<th scope="row">' .  $dayofweek[$i] . '<th>';
                }


                ?>







            </tr>
        </thead>
        <tbody>

            <?php
            $heure = ['08:00:00', '09:00:00', '10:00:00', '11:00:00', '12:00:00', '13:00:00', '14:00:00', '15:00:00', '16:00:00', '17:00:00', '18:00:00', '19:00:00'];
            $_SESSION['heure'] = $heure;
            // $lastMonday = strtotime("Monday");
            // $lastMonday = date("m/d/Y", $lastMonday);
            // echo $lastMonday;
            // $lastTuesday = strtotime("last Tuesday");
            // $lastTuesday = date("m/d/Y", $lastTuesday);
            // $lastWednesday = strtotime("last Wednesday");
            // $lastWednesday = date("m/d/Y", $lastWednesday);
            // $lastThursday  = strtotime("last Thursday");
            // $lastThursday = date("m/d/Y", $lastThursday);
            // $lastFriday = strtotime("last Friday");
            // $lastFriday = date("m/d/Y", $lastFriday);
            // echo $lastFriday;
            for ($j = 0; isset($heure[$j]); $j++) {


                echo " <tr colspan='6'>
                <th scope='col'> $heure[$j]  </th> 
                <td colspan='2'><form action='reservation.php' method='GET'><button name='day&hour' value='$dayofweek[0] $heure[$j]' type='submit'>resa</button></form></td>
                <td colspan='2'><form action='reservation.php' method='GET'><button name='day&hour' value='$dayofweek[1] $heure[$j]'type='submit'>resa</button></form></td>
                <td colspan='2'><form action='reservation.php' method='GET'><button name='day&hour' value='$dayofweek[2] $heure[$j]'type='submit'>resa</button></form></td>
                <td colspan='2'><form action='reservation.php' method='GET'><button name='day&hour' value='$dayofweek[3] $heure[$j]'type='submit'>resa</button></form></td>
                <td colspan='2'><form action='reservation.php' method='GET'><button name='day&hour' value='$dayofweek[4] $heure[$j]' type='submit'>resa</button></form></td>
                </tr>";
            }




            ?>


        </tbody>
    </table>


</body>

</html>