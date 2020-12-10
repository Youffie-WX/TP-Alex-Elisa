<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Bonjour</title>
</head>

<body>

    <form action="trombi.php" method="get">
        <div>
            <label for="table">Recherche ton super héro</label>
            <input type="text" name="who">
        </div>

        <div>
            <input type="submit">
        </div>
    </form>


    <?php
    $trombi = [
        ['photo' => './imgTrombi/emmafrost', 'prénom' => 'Elisa', 'nom' => 'Freezy Frosty', 'age' => 26],
        ['photo' => './imgTrombi/drStrange', 'prénom' => 'Alexis', 'nom' => 'Dr Ternaire', 'age' => 25],
        ['photo' => './imgTrombi/hawkeye', 'prénom' => 'Rémi', 'nom' => 'Hackeye', 'age' => 18],
        ['photo' => './imgTrombi/flash', 'prénom' => 'Alexandre', 'nom' => 'Slash', 'age' => 29],
        ['photo' => './imgTrombi/heimdall', 'prénom' => 'Florian', 'nom' => 'Heimdall', 'age' => 23],
        ['photo' => './imgTrombi/Thor', 'prénom' => 'Romain', 'nom' => 'Tor', 'age' => 29],
        ['photo' => './imgTrombi/batman', 'prénom' => 'Hugo', 'nom' => 'Byteman', 'age' => 30],
        ['photo' => './imgTrombi/Deadpool', 'prénom' => 'Khang', 'nom' => 'Deadscreen', 'age' => 28],
        ['photo' => './imgTrombi/Groot', 'prénom' => 'Jérôme', 'nom' => 'Root', 'age' => 30],
        ['photo' => './imgTrombi/Storm', 'prénom' => 'Patricia', 'nom' => 'StormBits', 'age' => 40],
        ['photo' => './imgTrombi/catwoman', 'prénom' => 'Corinne', 'nom' => 'Catcoco', 'age' => 32],
        ['photo' => '', 'prénom' => 'test', 'nom' => 'test'],
    ];


    function afficherStudent($student)
    {
        foreach ($student as $key => $value)
            if ($key == 'photo')
                echo "<img src='$value' style='width:68px;height:auto'>";
            elseif ($key == 'age')
                echo $value . ' ans';
            else echo $value . ' ';
        echo '<br>';
    }


    $z = 0;

    foreach ($trombi as $student) {
        if ($_GET['who'] == '')
            afficherStudent($student);
        elseif (stripos($student['prénom'], $_GET['who']) !== false) {
            afficherStudent($student);
        } elseif (stripos($student['nom'], $_GET['who']) !== false) {
            afficherStudent($student);
        } else $z++;
    }

    if ($z == count($trombi)) echo '<p>pas de réponse</p>';







    //     foreach ($student as $key => $value)
    //         if (stripos($value, $_GET['who']) === true) //stripos ($pTextToSearchIn, $pTextToFind)
    //         {
    //             foreach ($student as $key => $value)
    //                 if ($key == 'photo')
    //                     echo "<img src='$value' style='width:68px;height:auto'>";
    //                 elseif ($key == 'age')
    //                     echo $value . ' ans';
    //                 else echo $value . ' ';
    //             echo '<br>';
    //         }
    // }








    // foreach ($trombi as $student) {
    //     foreach ($student as $key => $value)
    //         if (stripos($value, $_GET['who']) === true) //stripos ($pTextToSearchIn, $pTextToFind)
    //         {
    //             foreach ($student as $key => $value)
    //                 if ($key == 'photo')
    //                     echo "<img src='$value' style='width:68px;height:auto'>";
    //                 elseif ($key == 'age')
    //                     echo $value . ' ans';
    //                 else echo $value . ' ';
    //             echo '<br>';
    //         }
    // }






    // function searchStudent ($pPetitTableau)
    // {        
    //         foreach ($pPetitTableau => $value)
    //             if ($key == 'photo')
    //                 echo "<img src='$value' style='width:68px;height:auto'>";
    //             elseif ($key == 'age')
    //                 echo $value . ' ans';    
    //             else echo $value . ' ';
    //         echo '<br>';

    // }


    // function showStudent ($pGrosTableau)
    // {
    //     foreach($pGrosTableau as $student)
    //     {
    //         foreach($student as $key => $value)
    //         {
    //             echo $value . " ";
    //         }
    //         echo "ans \n" ;
    //         echo "<br><br>";
    //     }
    // }
    //showStudent($trombi);
    ?>

</body>

</html>