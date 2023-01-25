<?php

session_start();
include('../effectifHelper.php');

error_reporting(E_ALL); // check all errors
ini_set('display_errors',1); // display errors
$conn = mysqli_connect('localhost','root','','effectif');//database connection code

$legendes_data = array(); // create an empty array

if($conn){
 $prod = mysqli_query($conn,"SELECT * FROM legendes");
    while ($all = mysqli_fetch_array($prod)) {
        $legendes_data[] = array('id'=>$all['id'], 'name'=>$all['name'],
        'class'=>$all['class']); // assignment
    }
    // echo "<pre/>";var_dump($legendes_data); // print product_data array
}else{

  echo mysqli_connect_error(); // show what problem occur in database connectivity
}
mysqli_close($conn); // close connection


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta charset="UTF-8">
    <script src="script.js" defer></script>
    <script src="DragDropTouch.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Drag and drop</title>
</head>
<body id="capture">
<h1>RC LENS LEGENDS</h1>
<img src="img/blason.svg" alt="blason" id="blason"> 
<div><img src="img/terrain.svg" alt="terrain" id="terrain"></div>
    <div class="retour"><a href="javascript:history.back()"><img src="../Joueurs/Images/fleche.png" class="fleche"></a></div>
    <button onClick="window.location.reload()" id="refresh"><img src="../CSS/refresh.svg" alt="refresh"></button>
    <section id="zone">
            <div class="container2">
                
                <div ondragover="return over(event)"
                ondrop="return drop(event)" ondragleave="leave(event)" 
                ondragstart="start(event)" id="BU1"></div>

                    <div id="pointBU1" class="color"></div>
                    

                <div ondragover="return over(event)"
                ondrop="return drop(event)" ondragleave="leave(event)" 
                ondragstart="start(event)" id="BU2"></div>

                    <div id="pointBU2" class="color"></div>

                
                <div ondragover="return over(event)"
                    ondrop="return drop(event)" ondragleave="leave(event)" 
                    ondragstart="start(event)" id="MOC"></div>
        
                    <div id="pointMOC" class="color"></div>


                <div ondragover="return over(event)"
                    ondrop="return drop(event)" ondragleave="leave(event)" 
                    ondragstart="start(event)" id="MCG"></div>


                    <div id="pointMCG" class="color"></div>

                <div ondragover="return over(event)"
                    ondrop="return drop(event)" ondragleave="leave(event)" 
                    ondragstart="start(event)" id="MCD"></div>


                    <div id="pointMCD" class="color"></div>

                <div ondragover="return over(event)"
                    ondrop="return drop(event)" ondragleave="leave(event)" 
                    ondragstart="start(event)" id="MDC"></div>


                    <div id="pointMDC" class="color"></div>

                <span ondragover="return over(event)"
                    ondrop="return drop(event)" ondragleave="leave(event)" 
                    ondragstart="start(event)" id="DD"></span>


                    <span id="pointDD" class="color"></span>

                <div ondragover="return over(event)"
                    ondrop="return drop(event)" ondragleave="leave(event)" 
                    ondragstart="start(event)" id="DG"></div>


                    <div id="pointDG" class="color"></div>

                <div ondragover="return over(event)"
                    ondrop="return drop(event)" ondragleave="leave(event)" 
                    ondragstart="start(event)" id="DCG"></div>


                    <div id="pointDCG" class="color"></div>

                <div ondragover="return over(event)"
                    ondrop="return drop(event)" ondragleave="leave(event)" 
                    ondragstart="start(event)" id="DCD"></div>


                    <div id="pointDCD" class="color"></div>

                <div ondragover="return over(event)"
                    ondrop="return drop(event)" ondragleave="leave(event)" 
                    ondragstart="start(event)" id="G"></div>


                    <div id="pointG" class="color"></div>

            </div>

            <div class="container1" ondragstart="start(event)"
            ondragover="return over2(event)"
            ondrop="return drop2(event)" ondragleave="leave2(event)">

                <?php
                    foreach($legendes_data as $legende => $k){
                        afficheLegende($legendes_data, $legende);  
                    }
                ?>
                    
            </div>
    
                
    </section>
</body>
</html>