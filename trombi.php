
    <?php
require_once "./modele.php";
require_once "./index.php";
    ?>

        <!-- Fonction afficher le header -->

    <?php
function showheader(){
    echo "<header class='bg-primary text-center py-2 container-fluid'>
    <h1>Trombi Dev'Engers</h1>
    </header>";
}
    ?>
        <!-- Fonction afficher le formulaire -->
                    <?php
            function showform(){
                        echo "<div class='container'>
                        <form class='bg-secondary text-center col-sm-4 offset-md-8 mt-2' action='index.php' method='get'>
                        <div>
                            <label for='table'>Qui cherchez-vous ?</label>
                            <br>
                            <input type='text' name='who'> <input type='submit'>
                        </div>
                    </form>
                    <div class='container-fluid bg-warning d-flex flex-wrap justify-content-around'>";
                }
                ?>


                <!-- Programme de recherche dans le tableau Trombi -->
                <?php
                function recherche2($trombi){
                $z = 0;
                // stripos recherche dans chaque ligne de personne une valeur correspondant à la clé de chaque boucle
                foreach ($trombi as $student) {
                    if ($_GET['who'] == '') 
                        afficherStudent($student);
                    else
                    {
                        if (recherche($student['prénom']) || recherche($student['nom'])) {
                            afficherStudent($student);
                        }
                        else $z++;
                    } 
                }
                // la variable Z passe sur chaques lignes du tableau si il ne voit rien alors afficher pas de réponse
                if ($z == count($trombi)) echo '<p>pas de réponse</p>';
                }

                ?>
                <!-- fin programme de recherche -->


                <!-- Fonction afficher les student -->
                <?php
                    function afficherStudent($student)
                    {
                    echo"<div class='mt-2 col-sm-3 d-flex flex-row'>\n
                            <a href='index.php?who={$student['nom']}'target='_blank'> <img class='mb-auto' src='{$student['photo']}' style='width:120px;height:auto'>
                                <div>
                                    <p>{$student['prénom']}</p>
                                    <p>{$student['age']} ans</p>
                                    <p class='font-weight-bolder font-italic' style='font-size:1.5em'>{$student['nom']}</p>
                                </div>
                            </a>
                        </div>";
                    }
                ?>

            <!-- Fonction afficher le footer et le bootstrap -->
            <?php
            function showfooter()
            {
                echo " <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
                <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx' crossorigin='anonymous'></script>
                     </div>";
            }
        ?>  