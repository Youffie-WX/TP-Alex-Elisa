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
        ['photo' => '', 'prénom' => 'Alexis', 'nom' => 'Dr Ternaire', 'age' => 25],
        ['photo' => '', 'prénom' => 'Rémi', 'nom' => 'Hackeye', 'age' => 18],
        ['photo' => '', 'prénom' => 'Alexandre', 'nom' => '', 'age' => 29],
        ['photo' => '', 'prénom' => 'Florian', 'nom' => '', 'age' => 23],
        ['photo' => './imgTrombi/Thor.webp', 'prénom' => 'Romain', 'nom' => 'Tor', 'age' => 29],
        ['photo' => './imgTrombi/batman.jpg', 'prénom' => 'Hugo', 'nom' => 'Byteman', 'age' => 30],
        ['photo' => './imgTrombi/Deadpool.jpg', 'prénom' => 'Khang', 'nom' => 'Deadscreen', 'age' => 28],
        ['photo' => './imgTrombi/Groot.jpg', 'prénom' => 'Jérôme', 'nom' => 'Root', 'age' => 30],
        ['photo' => './imgTrombi/Storm.jpg', 'prénom' => 'Patricia', 'nom' => 'StormBits', 'age' => 40],
        ['photo' => './imgTrombi/catwoman', 'prénom' => 'Corinne', 'nom' => 'Catcoco', 'age' => 32],
        ['photo' => '', 'prénom' => 'test', 'nom' => 'test'],
    ];

    echo stripos($trombi,$_GET['who']);

    foreach ($trombi as $key) {
        foreach ($key as $key => $value)
            if ($key == 'photo')
                echo "<img src='$value' style='width:68px;height:auto'>";
            elseif ($key == 'age')
                echo $value . ' ans';    
            else echo $value . ' ';
        echo '<br>';
    };


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