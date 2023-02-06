<?php

session_start();
include("effectifHelper.php");

error_reporting(E_ALL); // check all errors
ini_set('display_errors',1); // display errors
$conn = mysqli_connect('localhost','root','','effectif');//database connection code

$quiz_data = array(); // create an empty array

if($conn){
 $prod = mysqli_query($conn,"SELECT * FROM quiz");
    while ($all = mysqli_fetch_array($prod)) {        
        $quiz_data[] = array('id'=>$all['id'], 'quest'=>$all['question'], 'reponseA'=>$all['reponseA'],
        'reponseB'=>$all['reponseB'], 'reponseC'=>$all['reponseC'], 'reponseD'=>$all['reponseD'], 'bonnereponse'=>$all['bonnereponse']);
    }
}else{

  echo mysqli_connect_error(); // show what problem occur in database connectivity
}

$num = [];
foreach($quiz_data as $quest => $val){
    $num[$quiz_data[$quest]['id']] =  $quiz_data[$quest];
}

$quiz_data = $num;



?>

<!DOCTYPE html>


<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RCLens</title>
    <link rel="stylesheet" href="style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <script src="script.js"></script>
</head>
    <body id = "body-accueil">

        <nav class="navbar" id = "nav-accueil">
            <a href = "index.html" id="edr">
            <img src="CSS/edr.png" id="edrlogo" alt="logo"></a>
                <div class="nav-links">
                    <ul>
                        <li><a href="index.html">Accueil</a></li>
                        <li><a href="effectif.php">Effectif</a></li>
                        <li><a href="JS Drag and drop - V2 Terrain/index.php">XI de Légendes</a></li>
                        <li><a href="quiz.php">Quiz</a></li>
                    </ul>
                </div>
            <img src = "CSS/menu.png" class = "menu-hamburger">
            <div id="officiel"><a href="https://www.rclens.fr/fr">
                <p>Site officiel du Racing Club de Lens</p>
                <img src="CSS/blason.svg" style="width:2rem;" alt=""></a></div>
        </nav>
     
		<form action="quiz.php" method="post" id="quiz">
		<h1>Connais-tu <span style="text-transform: uppercase;">vraiment</span> le Racing ?</h1>

            <?php

            $tab = [];
            $count = 1;
            foreach($quiz_data as $q){
                $tab[] = $count;
                $count++;
            }
            
            $random = range(1, count($tab));
            shuffle($random);

            $question = $random[0];
            
            if(isset($_POST['nouvelle-question'])){
                $_SESSION['q'] = $question;
                echo afficheQuestion($quiz_data, $_SESSION['q']);
            }

            $bonne = $quiz_data[$_SESSION['q']]['bonnereponse'];
           
            if(isset($_POST['submit'])){
                if(isset($_POST['question-1-answers'])){
                    if($_POST['question-1-answers'] == $bonne){
                        echo "<div>Bonne réponse !</div>";
                        // $v++;
                    }
                    else{
                        echo "<div>Mauvaise réponse...</div>";
                        // $f++;
                    }
                }else{
                    echo "Veuillez sélectionner une réponse";
                }
            }
         
                

            // $v = 0;
            // $f = 0;
            // $_SESSION['v'] = $v;
            // $_SESSION['f'] = $f;
            // echo afficheScore($v, $f);
            // function afficheScore($v, $f){
            //     $total = $v + $f;
            //     if($total !=0){
            //         $score = 100*$v/$total;
            //         echo $score."%";
            //         }
            //     }
            // if(isset($_POST['nouvelle-question'])){
            //     $affiche = rand(1,2);
            //     for($i=0;$i<count($tab);$i++){
            //         if($tab[$i] == $affiche){
            //             echo afficheQuestion($quiz_data, $tab[$i]);
            //             unset($tab[$i]);
            //         }
            //     }
            // }
            mysqli_close($conn);
            ?>

            <input type="submit" name="nouvelle-question"
                value="Nouvelle question" class="submitbtn"/>
		
		</form>
	
 
 
</body>
 
</html>