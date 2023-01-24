<?php

$user = 'root';
$pass = '';
$db = new PDO ('mysql:host=localhost;dbname=effectif', $user, $pass);

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
                <li class = "active" ><a href="effectif.html">Effectif</a></li>
                <li><a href="JS Drag and drop - V2 Terrain/index.html">XI de Légendes</a></li>
            </ul>
        </div>
        <img src = "CSS/menu.png" class = "menu-hamburger">
    </nav>
        <div style = "overflow-x:auto;">
                <table class = "tab">
                    <tr>
                        <td class = "categorie">Gardiens</td>
                    </tr>
                </table>
                <table class = "tab tabanim">
                    <tr>
                        <td><a  href = "Joueurs/samba.html"><img class = "joueurs" src = "CSS/samba.png"></a></td>
                        <td><img class = "joueurs" src = "CSS/leca.png"></td>
                        <td><img class = "joueurs" src = "CSS/farinez.png"></td>
                        <td><img class = "joueurs" src = "CSS/pandor.png"></td>
                    </tr>
                </table>
             
                <table class = "tab tabanim">
                    <tr>
                        <td  class = "categorie">Défenseurs</td>
                    </tr>
                </table>
                <table class = "tab tabanim">
                    <tr>
                        <td><a href = "Joueurs/medina.html"><img class = "joueurs" src = "CSS/medina.png"></a></td>
                        <td><img class = "joueurs" src = "CSS/danso.png"></td>
                        <td><img class = "joueurs" src = "CSS/gradit.png"></td>
                        <td><img class = "joueurs" src = "CSS/haidara.png"></td>
                    </tr>
                </table>
                <table class = "tab tabanim">
                    <tr>
                        <td><img class = "joueurs" src = "CSS/louveau.png"></td>
                        <td><img class = "joueurs" src = "CSS/fortes.png"></td>
                        <td><img class = "joueurs" src = "CSS/machado.png"></td>
                        <td><img class = "joueurs" src = "CSS/boura.png"></td>
                    </tr>
                </table>
                <table class = "tab tabanim">
                    <tr>
                        <td  class = "categorie">Milieux</td>
                    </tr>
                </table>
                <table class = "tab tabanim">
                    <tr>
                        <td><img class = "joueurs" src = "CSS/samed.png"></td>
                        <td><img class = "joueurs" src = "CSS/fofana.png"></td>
                        <td><img class = "joueurs" src = "CSS/poreba.png"></td>
                        <td><img class = "joueurs" src = "CSS/frankowski.png"></td>
                    </tr>
                </table>
                <table class = "tab tabanim">
                    <tr>
                        <td><img class = "joueurs" src = "CSS/onana.png"></td>
                        <td><img class = "joueurs" src = "CSS/cabot.png"></td>
                        <td><img class = "joueurs" src = "CSS/dacosta.png"></td>
                        <td><img class = "joueurs" src = "CSS/claudemaurice.png"></td>
                    </tr>
                </table>
                <table class = "tab tabanim">
                    <tr>
                        <td  class = "categorie">Attaquants</td>
                    </tr>
                </table>
                <table class = "tab tabanim">
                    <tr>      
                        <td><img class = "joueurs" src = "CSS/said.png"></td>
                        <td><img class = "joueurs" src = "CSS/openda.png"></td>
                        <td><img class = "joueurs" src = "CSS/sotoca.png"></td>
                        <td><img class = "joueurs" src = "CSS/buksa.png"></td>
                    </tr>
                </table>
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