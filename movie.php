<?php 
    require 'data/datas.php';
     
    
    
    $erreur = true;
    if(isset($_GET["id"]) && !empty($_GET["id"])){
        $key=array_search($_GET["id"],array_column($movies,"id"));
        if($key!==false){
        $movie = $movies[$key];
        $erreur = false;
        }
    }    
    
    
?>
<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Mr Bidule - <?=!$erreur?$movie["title"] : "Film inexistant" ?></title>
</head>

    

<body>
    <!-- NAVBAR   -->

    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand" href="index.php">Mr Bidule</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../admin/">Admin</a>
                </li>
            </ul>
        </div>
        </nav>

    <!-- FIN NAVBAR -->
    
        <div class="container">
            <div class="row mt-5">

            <!-- FILM  -->
                     <div class="col-9">
                        <article>
                             <?php if(!$erreur): ?>
                            <h1><?= $movie["title"] ?></h1> 
                            <hr>
                            <div class="article__content">
                                <span>Genres : </span><?=$movie["type"]?>
                                <span>Année : </span><?=$movie["year"]?>
                                <span>Réalisateur :</span><?=$movie["director"]?>
                                <p><?=$movie["synopsis"]?></p>
                            </div>
                            <?php else: ?>
                            <h3>Ce Film n'existe pas !  <a href="index.php">retour</a></h3>
                            <?php endif; ?>
                        </article>
                </div> 
            <!-- FIN FILM  -->

            <!-- SECOND NAV GENRE -->
                <div class="col-3">
                    <aside>
                        <h1>Genres</h1>
                        <hr>
                        <ul>
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Aventure</a></li>
                            <li><a href="#">Drame</a></li>
                            <li><a href="#">Fantastique</a></li>
                            <li><a href="#">Horreur</a></li>
                            <li><a href="#">Science-fiction</a></li>      
                        </ul>
                    </aside>
                </div>
            <!-- FIN SECOND NAV GENRE  -->

            </div>
        </div>
    <!-- FOOTER -->
        <footer>
            <p>Copyright MrBidule</p>
        </footer>
    <!-- FIN FOOTER -->

<!-- SCRIPT JAVASCRIPT -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- FIN SCRIPT JAVASCRIPT -->  

</body>
</html>