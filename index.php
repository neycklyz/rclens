<!DOCTYPE html>


<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enfants du Racing</title>
    <link rel="stylesheet" href="style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <script src="JS Drag and drop - V2 Terrain/script.js"></script>
</head>
    <body id = "body-accueil">

        <nav class="navbar" id = "nav-accueil">
            <a href = "index.php" id="edr">
            <img src="CSS/edr.png" id="edrlogo" alt="logo"></a>
                <div class="nav-links">
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="effectif.php">Effectif</a></li>
                        <li><a href="JS Drag and drop - V2 Terrain/index.php">XI de Légendes</a></li>
                        <li><a href="quiz.php">Quiz</a></li>
                    </ul>
                </div>
            <img src = "CSS/menu.png" class = "menu-hamburger">
            <div id="officiel"><a href="https://www.rclens.fr/fr" target="_blank">
                <p>Site officiel du Racing Club de Lens</p>
                <img src="CSS/blason.svg" style="width:2rem;" alt="blason"></a></div>
        </nav>

        <header>
            <div>
            <h1 class="titre">BIENVENUE</h1>
            <img src="CSS/lampe.png" alt="lampe">
                <div id = "text-accueil-mobile"><p>
                    Bienvenue sur "Enfants du Racing", le site
                    non-officiel du RC Lens
                </p>
            </div>
        </div>
            <a href="#presentation">
                <i class="fleche bas"></i></a>
        </header>

        <section id="presentation">
            <h1>Présentation du projet</h1>
            <p id="explication">&Eacutetudiant de 18 ans, j'ai décidé de développer mon projet "Enfants Du Racing" pour mobiliser l'ensemble des compétences
                acquises dans les domaines qui me passionnent. 
            </p>
            <div class="portfolio">
                <div class="categorie"><img src="CSS/dev.svg" id="dev"><p>J'ai découvert le domaine du web à l'occasion de ma première année d'études. C'est ma source
                    de motivation pour ce projet et la principale compétence développée à travers EDR.
                </p></div>
                <div class="categorie"><img src="CSS/graphisme.svg"><p>Passionné par l'infographie depuis maintenant 3 ans, j'ai développé cette compétence à travers
                    un apprentissage autodidacte. J'ai notamment utilisé Photoshop et Illustrator pour la partie graphique du projet.
                </p></div>
                <div class="categorie"><img src="CSS/blason.svg" id="blason"><p>Grand supporter du Racing depuis l'enfance, j'ai décidé d'articuler mon projet autour
                    du club à travers plusieurs pages que vous pouvez dès à présent visiter en naviguant sur EDR.
                </p></div>
            </div>
        </section>

        <main class="main-accueil">
            <p class="main-text">Créez votre 11 de <br>légendes !</p>
                <a href="JS Drag and drop - V2 Terrain/index.php">
                    <img src="JS Drag and drop - V2 Terrain/legendes/presentation.png" id="stade">
                </a>
        </main>

        <footer>
            <div class="container">
                <div>
                    <p class="footer-text">Retrouvez moi sur les réseaux sociaux</p>
                </div>

                <div class="footer-logos">
                    <a href="https://www.instagram.com/neycklyz" target="_blank"><img src="CSS/insta.svg" alt="instagram" id="insta"></a>
                    <a href="https://twitter.com/neycklyz" target="_blank"><img src="CSS/twitter.svg" alt="twitter" id="twitter"></a>
                    <p id="arobase">@neycklyz</p>
                </div>
            </div>
        </footer>
    </body>
    <script>
        const menuHamburger = document.querySelector(".menu-hamburger")
        const navLinks = document.querySelector(".nav-links")
        
        menuHamburger.addEventListener('click',()=>{
        navLinks.classList.toggle('mobile-menu')
        })
        window.onload = function() {
        document.location.hash = "";
    }
    </script>
    
</html>