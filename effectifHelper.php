<?php

function afficheJoueur($effectif, $joueur) {
    echo "<div><a href ='joueur.php?ref=".$joueur."'><img class = 'joueurs' src =".$effectif[$joueur]['tete']."></a></div>";
}

function afficheLegende($tab, $legende){
    echo "<img src='legendes/".$tab[$legende]['name'].".png' class='".$tab[$legende]['class']."' id='".$legende."' draggable='true'>";
}

?>