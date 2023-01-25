<?php

function afficheJoueur($effectif_data, $joueur) {
    echo "<div><a href ='joueur.php?ref=".$joueur."'><img class = 'joueurs' src =".$effectif_data[$joueur]['tete']."></a></div>";
}

function afficheLegende($tab, $legende){
    echo "<img src='legendes/".$tab[$legende]['name'].".png' class='".$tab[$legende]['class']."' id='".$legende."' draggable='true'>";
}

?>