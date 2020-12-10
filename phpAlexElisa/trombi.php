<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trombi Dev'Enger</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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


//programe de recherche
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

?>


<!-- appelle script bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

</body>


</html>