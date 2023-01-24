<?php

function afficheJoueur($effectif, $joueur) {
    echo"<div><a href ='joueur.php?ref=".$joueur."'><img class = 'joueurs' src =".$effectif[$joueur]['tete']."></a></div>";
}

?>