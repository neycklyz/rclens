<?php

function afficheJoueur($effectif_data, $joueur) {
    echo "<div><a href ='joueur.php?ref=".$joueur."'><img class = 'joueurs' src =".$effectif_data[$joueur]['tete']."></a></div>";
}

function afficheLegende($tab, $legende){
    echo "<img src='legendes/".$tab[$legende]['name'].".png' class='".$tab[$legende]['class']."' id='".$legende."' draggable='true'>";
}

function afficheQuestion($quiz_data, $question){
   
    echo "<ol>
    <li>
        <h3>".$quiz_data[$question]['quest']."</h3>
        <div id='reponse'>
            <input type='radio' name='question-1-answers' id='question-1-answers-A' value='A' />
            <label for='question-1-answers-A'>A) ".$quiz_data[$question]['reponseA']."</label>
        </div>
        
        <div id='reponse'>
            <input type='radio' name='question-1-answers' id='question-1-answers-B' value='B' />
            <label for='question-1-answers-B'>B) ".$quiz_data[$question]['reponseB']."</label>
        </div>
        
        <div id='reponse'>
            <input type='radio' name='question-1-answers' id='question-1-answers-C' value='C' />
            <label for='question-1-answers-C'>C) ".$quiz_data[$question]['reponseC']."</label>
        </div>
        
        <div id='reponse'>
            <input type='radio' name='question-1-answers' id='question-1-answers-D' value='D' />
            <label for='question-1-answers-D'>D) ".$quiz_data[$question]['reponseD']."</label>
        </div>   
    </li>
</ol>

<input type='submit' value='Submit' name='submit' class='submitbtn' />";

}

?>