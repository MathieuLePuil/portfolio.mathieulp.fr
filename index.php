<!--ssh mmi21b12@mmi21b12.mmi-troyes.fr ./pullrequest.sh-->

<?php
require("debut.inc.php");
require("header.inc.php")
?>
<title>Portfolio - Mathieu Le Puil</title>
</head>
<body>
<header>
    <div class="logotxt logo">
        <img src="assets/LOGO.png" alt="Logo de l'ATP" id="logohg" width="50" height="50">
    </div>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa-solid fa-bars"></i>
        </label>
        <a href="index.php">
            <label class="logo">MathieuLP</label></a>
        <ul>
            <li><a href="index.php" class="active anav">Accueil</a></li>
            <li><a href="travaux.php" class="anav">Travaux</a></li>
            <li><a href="portfolio.php" class="anav">Portfolio</a></li>
            <li><a href="contact.php" class="anav">Contact</a></li>
        </ul>
    </nav>
</header>

<main>
    <section id="presentation">
        <h1 class="titre-page">En travaux</h1>
    </section>
</main>



<?php
require("footer.inc.php");
require("fin.inc.php");
?>