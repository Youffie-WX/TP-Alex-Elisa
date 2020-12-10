    <!-- Création tableau et fonction -->
    <?php
    $trombi = [
        ['photo' => './imgTrombi/emmafrost', 'prénom' => 'Elisa', 'age' => 26, 'nom' => 'Freezy Frosty'],
        ['photo' => './imgTrombi/drStrange', 'prénom' => 'Alexis',  'age' => 25, 'nom' => 'Dr Ternaire',],
        ['photo' => './imgTrombi/hawkeye', 'prénom' => 'Rémi', 'age' => 18, 'nom' => 'Hackeye'],
        ['photo' => './imgTrombi/flash', 'prénom' => 'Alexandre', 'age' => 29, 'nom' => 'Slash'],
        ['photo' => './imgTrombi/heimdall', 'prénom' => 'Florian', 'age' => 23, 'nom' => 'Heimdall'],
        ['photo' => './imgTrombi/Thor', 'prénom' => 'Romain', 'age' => 29, 'nom' => 'Tor'],
        ['photo' => './imgTrombi/batman', 'prénom' => 'Hugo', 'age' => 30, 'nom' => 'Byteman'],
        ['photo' => './imgTrombi/Deadpool', 'prénom' => 'Khang', 'age' => 28, 'nom' => 'Deadscreen'],
        ['photo' => './imgTrombi/Groot', 'prénom' => 'Jérôme', 'age' => 30, 'nom' => 'Root'],
        ['photo' => './imgTrombi/Storm', 'prénom' => 'Patricia', 'age' => 40, 'nom' => 'StormBits'],
        ['photo' => './imgTrombi/catwoman', 'prénom' => 'Corinne', 'age' => 32, 'nom' => 'Catcoco'],
    ];




    function afficherStudent($student)
    {
    echo"<div class='mt-2 col-sm-3 d-flex flex-row'>\n
            <img class='mb-auto' src='{$student['photo']}' style='width:120px;height:auto'>
            <div>
                <p>{$student['prénom']}</p>
                <p>{$student['age']} ans</p>
                <p class='font-weight-bolder font-italic' style='font-size:1.5em'>{$student['nom']}</p>
            </div>
        </div>";
    }



    ?>
    <!-- fin Création tableau et fonction -->

    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trombi Dev'Enger</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>

    <body>




        <!-- début du site -->
        <header class="bg-primary text-center py-2 container-fluid">

            <h1>Trombi Dev'Engers</h1>

        </header>

        <div class="container">

            <form class="bg-secondary text-center col-sm-4 offset-md-8 mt-2" action="trombi.php" method="get">
                <div>
                    <label for="table">Qui cherchez-vous ?</label>
                    <br>
                    <input type="text" name="who"> <input type="submit">
                </div>

            </form>


            <div class="container-fluid bg-warning d-flex flex-wrap justify-content-around">

                <!-- programme de recherche -->
                <?php

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
                <!-- fin programme de recherche -->


            </div>

            <!-- appelle script bootstrap -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


        </div>
    </body>




    </html>