
    <?php

    
// Fonction afficher les student 
function afficherStudent($student)
{
    ?>
<!-- Je mets entre petite balise php juste quand j'ai besoin d'utiliser php  -->
    <div class='mt-2 col-sm-3 d-flex flex-row'>
        <a href="index.php?who=<?=$student['nom']?>"target='_blank'>
         <img class='mb-auto' src="<?=$student['photo']?>" style='width:120px;height:auto'>
            <div>
                <p><?=$student['prénom']?></p>
                <p><?=$student['age']?> ans</p>
                <p class='font-weight-bolder font-italic' style='font-size:1.5em'><?=$student['nom']?></p>
            </div>
        </a>
    </div>

    <?php
}

// Fonction afficher le header
function showheader()
{
    ?>

    <!DOCTYPE html>
    <html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Trombi Dev'Enger</title>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' integrity='sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2' crossorigin='anonymous'>
    </head>
    <body>
    <header class='bg-primary text-center py-2 container-fluid'>
    <h1>Trombi Dev'Engers</h1>
    </header>

    <?php
}


//  Fonction afficher le formulaire 
function showform()
{
    ?> 
    
    <div class='container'>
            <form class='bg-secondary text-center col-sm-4 offset-md-8 mt-2' action='index.php' method='get'>
            <div>
                <label for='table'>Qui cherchez-vous ?</label>
                <br>
                <input type='text' name='who'> <input type='submit'>
            </div>
        </form>
        <div class='container-fluid bg-warning d-flex flex-wrap justify-content-around'>
    
        <?php
    }


// Fonction afficher le footer et le bootstrap 
function showfooter()
{
    ?>

        <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx' crossorigin='anonymous'></script>
            </div>
        </div>
    </body>
</html>

    <?php
}
    
    ?>