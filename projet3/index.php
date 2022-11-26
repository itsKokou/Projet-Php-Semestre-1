<?php 
require_once('model/biblio.model.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="index.php?view=1">Ouvrages</a></li>
            <li><a href="index.php?view=2">Auteurs</a></li>
            <li><a href="index.php?view=3">Rayons</a></li>
            <li><a href="index.php?view=4">Exemplaires</a></li>
            <li><a href="index.php?view=5">Details oeuvres disponibles </a></li>
            <li><a href="index.php?view=6">Demande de prêt</a></li>
            <li><a href="index.php?view=7">Prêts des adhérent</a></li>
            <li><a href="index.php?view=8">Prêts en cours</a></li>
            <li><a href="index.php?view=9">Prêts adhérents retardataires</a></li>
        </ul>
    </div>
    <?php 
        if(isset($_GET['view'])){
            extract($_GET);
            if($view==1){
                require_once('views/ouvrage.html.php');
            }elseif($view==2){
                require_once('views/auteur.html.php');
            }elseif($view==3){
                require_once('views/rayon.html.php');
            }elseif($view==4){
                require_once('views/exemplaire.html.php');
            }elseif($view==5){
                require_once('views/detailsoeuvre.html.php');//pas encore
            }elseif($view==6){
                require_once('views/demandepret.html.php');
            }elseif($view==7){
                require_once('views/pret.html.php');
            }elseif($view==8){
                require_once('views/pretencours.html.php');
            }elseif($view==9){
                require_once('views/pretretard.html.php');
            }else{
                require_once('views/ouvrage.html.php');
            }
        }
    ?>
</body>
</html>