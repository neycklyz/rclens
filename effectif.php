<?php
session_start();
include('effectifHelper.php');

error_reporting(E_ALL); // check all errors
ini_set('display_errors',1); // display errors
$conn = mysqli_connect('localhost','root','','effectif');//database connection code

$effectif_data = array(); // create an empty array

if($conn){
 $prod = mysqli_query($conn,"SELECT * FROM joueurs");
    while ($all = mysqli_fetch_array($prod)) {        
        $effectif_data[] = array('role'=>$all['role'], 'prenom'=>$all['prenom'],
        'nom'=>$all['nom'], 'age'=>$all['age'], 'description'=>$all['description'], 'numero'=>$all['numero'],
        'img'=>$all['img'], 'ref'=>$all['ref'], 'tete'=>$all['tete']); // assignment
    }
    // echo "<pre/>";var_dump($effectif_data); // print product_data array
}else{

  echo mysqli_connect_error(); // show what problem occur in database connectivity
}

$refs = [];
foreach($effectif_data as $joueur => $val){
    $refs[$effectif_data[$joueur]['nom'] ] =  $effectif_data[$joueur];
}

$effectif_data = $refs;

// var_dump($refs);
// var_dump($effectif_data);


mysqli_close($conn); // close connection
// echo $effectif_data[7]['prenom'];


?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RCLens</title>
    <link rel="stylesheet" href="style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">  
</head>
    
<body>

    <nav class="navbar">
        <a href = "index.html"><img src="CSS/blason.svg" class = "blason"></a>
        <div class="nav-links">
            <ul>
                <li><a href="index.html">Accueil</a></li>
                <li class = "active" ><a href="effectif.php">Effectif</a></li>
                <li><a href="JS Drag and drop - V2 Terrain/index.php">XI de Légendes</a></li>
            </ul>
        </div>
        <img src = "CSS/menu.png" class = "menu-hamburger">
    </nav>
       
                
    <div class="tab">            
    <div class = "role">Gardiens</div>
        <div id="gardiens">
            <?php
            foreach($effectif_data as $joueur => $val){
                if($effectif_data[$joueur]['role']=='gardien'){
                    afficheJoueur($effectif_data, $joueur);  
                    }
                }
            ?>
         </div>
                       
    <div class = "role">Défenseurs</div>
        <div id="defenseurs">
            <?php
                $count = 0;
                foreach($effectif_data as $joueur => $k){
                    if($effectif_data[$joueur]['role']=='defenseur'){
                        afficheJoueur($effectif_data, $joueur);
                        $count++;
                    }
                    if($count == 4){
                        $count = 0;
                        echo '</div> <div id="defenseurs">';
                        
                    }
                }
            ?>
        </div>

        <div class = "role">Milieux</div>
            <div id="milieux">
                <?php
                    $count = 0;
                    foreach($effectif_data as $joueur => $k){
                        if($effectif_data[$joueur]['role']=='milieu'){
                            afficheJoueur($effectif_data, $joueur);
                            $count++;
                        }
                        if($count == 4){
                            $count = 0;
                            echo '</div> <div id="milieux">';
                            
                        }
                    }
                ?>
        </div>
               
        <div class = "role">Attaquants</div>
            <div id="attaquants">
                <?php
                    $count = 0;
                    foreach($effectif_data as $joueur => $k){
                        if($effectif_data[$joueur]['role']=='attaquant'){
                            afficheJoueur($effectif_data, $joueur);
                            $count++;
                        }
                        if($count == 4){
                            $count = 0;
                            echo '</div> <div id="attaquants">';
                            
                        }
                    }
                ?>
        </div>
        </div>  

</body>

        <script>
            const menuHamburger = document.querySelector(".menu-hamburger")
            const navLinks = document.querySelector(".nav-links")
            
            menuHamburger.addEventListener('click',()=>{
            navLinks.classList.toggle('mobile-menu')
            })
        </script>
        
</html>