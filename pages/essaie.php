<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning</title>
</head>

<body>
    <h1> Agenda <?php echo utf8_encode(ucfirst(strftime("%B", $currentDate))) ?> </h1>
    <form action="" method="GET">
        <button name="prev" value="true" type="submit">
            previous week
        </button>
        <button name="next" value="true" type="submit">
            next week
        </button>
    </form>

    <table>
        <thead>
            <tr colspan="6">
                <?php
                // echo date("d", $currentDate);
                // setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');
                // for ($k = 0; $k < 5; $k++) {

                //     $date = date("l", strtotime(" Today +" . $k . "days"));
                //     echo "<th>$date</th>";
                // } 






                $week =  5;
                $dayofweek = ['lundi', 'mardi',  'mercredi', 'jeudi', 'vendredi'];
                echo '<th colspan="1">horraire</th>';

                for ($i = 0; isset($dayofweek[$i]); $i++) {
                    echo '<th colspan="1">  ' .  $dayofweek[$i] . ' <th>';
                }

                // var_dump($i);
                ?>
                <!-- <th>#</th>
                <th>Lundi</th>
                <th>Mardi</th>
                <th>Mercredi</th>
                <th>Jeudi</th>
                <th>Vendredi</th> -->




                <h2> Mois <?php echo utf8_encode(ucfirst(strftime("%m-%d-%G", $currentDate))) ?></h2>
                <h2> Semaine <?php echo date("W", $currentDate) ?></h2>
                <h2> Jour <?php echo date("l", $currentDate) ?></h2>
                <h2>
                    <?php
                    $timestamp = strtotime("+1 week", $currentDate);
                    echo strftime('%V', $timestamp);

                    ?>
                </h2>

            </tr>
        </thead>
        <tbody>

            <?php
            $heure = ['8H', '9H', '10H', '11H', '12H', '13H', '14H', '15H', '16H', '17H', '18H', '19H'];

            for ($j = 0; isset($heure[$j]); $j++) {

                echo " <tr colspan='12'>
                <th colspan='1'> $heure[$j]  </th> 
                <td colspan='1'><form action='' method='POST'> <button type='submit'>resa</button></form></td>
                <td colspan='1'><form action='' method='POST'> <button type='submit'>resa</button></form></td>
                <td colspan='1'><form action='' method='POST'> <button type='submit'>resa</button></form></td>
                <td colspan='1'><form action='' method='POST'> <button type='submit'>resa</button></form></td>
                <td colspan='1'><form action='' method='POST'> <button type='submit'>resa</button></form></td>   
                </tr>";
            }


            var_dump($j);

            ?>


        </tbody>
    </table>
</body>

</html>