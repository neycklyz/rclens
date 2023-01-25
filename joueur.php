<?php

session_start();

error_reporting(E_ALL); // check all errors
ini_set('display_errors',1); // display errors
$conn = mysqli_connect('localhost','root','','effectif');//database connection code

$effectif_data = array(); // create an empty array

if($conn){
 $prod = mysqli_query($conn,"SELECT * FROM joueurs");
    while ($all = mysqli_fetch_array($prod)) {
        $effectif_data[] = array('role'=>$all['role'], 'prenom'=>$all['prenom'],
        'nom'=>$all['nom'], 'age'=>$all['age'], 'description'=>$all['description'], 'numero'=>$all['numero'],
        'img'=>$all['img'], 'ref'=>$all['ref'], 'tete'=>$all['tete'], 'credits'=>$all['credits']); // assignment
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

mysqli_close($conn); // close connection
// echo $effectif_data[7]['prenom'];

$ref = $_GET["ref"];
// echo $ref;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href = "Joueurs/joueurs.css">
    <?php echo "<title>".$effectif_data[$ref]['nom']."</title>"; ?>
</head>

    <?php
    echo 
    "<body style = background-image:url(".$effectif_data[$ref]['img'].")> 
    <div  class = 'retour'><a href='javascript:history.back()'><img class = 'fleche' src ='Joueurs/Images/fleche.png'></a></div>
    <p id='credits'>".$effectif_data[$ref]['credits']."</p>
        <div class = 'description'>
            <p><div class = 'nom'>".$effectif_data[$ref]['prenom']." <span class='color' style = text-transform:uppercase>".$effectif_data[$ref]['nom']." </span>
            <span id = 'numero'>".$effectif_data[$ref]['numero']."</span></div><br>
            <span class = 'texte'>".$effectif_data[$ref]['description']."</span></p>
        </div>
    </body>";
    ?>
</html>