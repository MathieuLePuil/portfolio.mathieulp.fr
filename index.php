<!--ssh mmi21b12@mmi21b12.mmi-troyes.fr ./pullrequest.sh-->

<?php
require("debut.inc.php");
require("header.inc.php")
?>

<section id="home">
    <div class="home">
        <div class="name">
            <h1 class="no-background-txt">MATHIEU</h1>
            <h1 class="background-txt">LE PUIL</h1>
            <a href="" id="typingmoins"><img src="https://readme-typing-svg.herokuapp.com?size=15&color=FFFFFF&center=true&lines=%C3%89tudiant+en+B.U.T+MMI;D%C3%A9veloppeur+Full+Stack;D%C3%A9veloppeur+Python"></a>
            <a href="" id="typingplus"><img src="https://readme-typing-svg.herokuapp.com?size=30&color=FFFFFF&lines=%C3%89tudiant+en+B.U.T+MMI;D%C3%A9veloppeur+Full+Stack;D%C3%A9veloppeur+Python"></a>
        </div>
        <div class="img-fullstack-dev">
            <img src="assets/full-stack-developer.png">
        </div>
    </div>
</section>

<section id="about">
    <div class="about-left">
        <img src="assets/pdp.png" alt="photo" id="pdp">
    </div>
    <div class="about-right">
        <div class="txt-presentation">
            <p>Je suis <b>Mathieu Le Puil</b>, j’ai 19 ans et je suis en <b>B.U.T Métiers du Multimédia et de l’internet</b>. J’ai commencé à apprendre le développement lors du premier confinement de 2020. <br> <br>  J’ai tout d’abord commencé à apprendre le <b>Python</b> afin de développer des Bots Discord. J’ai ensuite appris à utiliser des <b>bases de données</b> ou encore le <b>JSON</b>. <br> <br>  C’est en arrivant en M.M.I que j’ai appris le développement Web avec les outils <b>HTML/CSS</b>, <b>PHP</b> et <b>JavaScript</b>. J’ai par la suite créé plusieurs sites, que ce soit dans le cursus ou dans mon temps personnel. Vous pouvez les retrouver ci-dessous.</p>
        </div>
        <br>
        <br>
        <div class="media-link">
            <a href="assets/CV.pdf" target="_blank"><img src="assets/CV.png" alt="CV"></a>
            <a href="https://github.com/MathieuLePuil" target="_blank"><img src="assets/GITHUB.png" alt="Github"></a>
            <a href="https://www.linkedin.com/in/mathieulepuil/" target="_blank"><img src="assets/LINKEDIN.png" alt="Linkedin"></a>
        </div>
    </div>
</section>

<section id="portfolio">
    <div class="scaryshopfr">
        <h2 class="pf-titre">scaryshop.fr</h2>
        <a href="https://scaryshop.fr/" target="_blank"><img src="assets/scaryshop.fr.png" alt="scaryshop.fr" class="pf-img"></a>
        <p class="pf-texte">Le site du ScaryShop a été créé avant tout pour m’entrainer, mais aussi pour promouvoir mon serveur Discord. Il s’agit d’un serveur où nous vendons les objets d’un jeu contre de la monnaie virtuelle.</p>
    </div>
    <div class="mathieulpfr">
        <h2 class="pf-titre">mathieulp.fr</h2>
        <a href="https://mathieulp.fr/" target="_blank"><img src="assets/mathieulp.fr.png" alt="mathieulp.fr" class="pf-img"></a>
        <p class="pf-texte">Ce site est tout simplement mon univers de travail MMI. On y retrouve mes différents travaux des semestres, mes réalisations ainsi qu’un portfolio spécialement conçu pour le cursus.</p>
    </div>
</section>
<section id="portfolio2">
    <div class="mmiple">
        <h2 class="pf-titre">MMiple</h2>
        <a href="https://portfolio.mathieulp.fr/#portfolio"><img src="assets/mmiple.png" alt="mmiple" class="pf-img"></a>
        <p class="pf-texte">MMiple est un site de jeu développé lors de mon cursus MMI. L’objectif était de découvrir les sessions PHP et les bases de données. Nous avons donc créé une boutique complète.</p>
    </div>
    <div class="portfoliofr">
        <h2 class="pf-titre">portfolio.mathieulp.fr</h2>
        <a href="https://portfolio.mathieulp.fr/" target="_blank"><img src="assets/portfolio.mathieulp.fr.png" alt="portfolio.mathieulp.fr" class="pf-img"></a>
        <p class="pf-texte">Vous avez sûrement déjà vu ce site quelque part. Probablement parce que vous êtes dessus. Il s’agit de mon portfolio et site professionnel. Toutes mes activités sont dessus.</p>
    </div>
</section>

<section id="contact">
    <form method="post" action="envoyer_mail.php">
        <div class="contactform">
            <div class="container">
                <h2>Me contacter</h2>
                <div class="row100">
                    <div class="col">
                        <div class="inputBox">
                            <input type="text" name="prenom" id="prenom" required="required">
                            <input type="text" name="title" id="title" class="hidden">
                            <span class="text">Prénom</span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inputBox">
                            <input type="text" name="nom" id="nom" required="required">
                            <span class="text">Nom</span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
                <div class="row100">
                    <div class="col">
                        <div class="inputBox">
                            <input type="text" name="email" id="email" required="required">
                            <span class="text">E-mail</span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
                <div class="row100">
                    <div class="col">
                        <div class="inputBox textarea">
                            <textarea name="message" id="message" required="required"></textarea>
                            <span class="text">Votre message :</span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
                <div class="row100">
                    <div class="col">
                        <div class="inputBox">
                            <button type="submit">Envoyer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

<script src="script/app.js"></script>

<?php
require("footer.inc.php");
require("fin.inc.php");
?>