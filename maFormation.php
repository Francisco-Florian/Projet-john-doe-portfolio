<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ab84100d84.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Portfolio</title>
</head>

<body>

    <?php
        include_once 'header.php';
    ?>

    <main>
        <section id="section1MaFormation">
            <h1>Formation à la carte</h1>
            <p>4 mois de formation de découverte des métiers du développement</p>
        </section>

        <section id="section2MaFormation" class="container_1440">
            <article>
                <h2>Description de la formation</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum totam quas molestias</p>
                <p>doloribus dolore! Neque nulla blanditiis, suscipit voluptates vero quia qui tempora minima corporis quibusdam dolor eligendi fugit expedita. <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam praesentium blanditiis aliquam beatae eius pariatur cupiditate sapiente facere eveniet harum ducimus, vel ab numquam? Perspiciatis tenetur animi temporibus cumque molestias.
                </p>
            </article>
            <img src="img/dev-a-la-carte.png" alt="dev à la carte">
        </section>
    
        <section id="section3Main" class="container_1440">
            <h2>Mes compétences</h2>
            <div>
                <article class="section3MainArticle">
                    <ul class="section3UL">
                        <li>
                            <input type="checkbox" id="languageProg" hidden />
                            <label for="languageProg" class="labelLink">
                                Langages de programmation
                            </label>
                            <div class="sous-menu">
                                <ul>
                                    <li>HTML5</li>
                                    <li>CSS3</li>
                                    <li>JavaScript</li>
                                    <li>TypeScript</li>
                                    <li>PHP</li>
                                    <li>Python</li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <input type="checkbox" id="framework" hidden />
                            <label for="framework" class="labelLink">
                                Frameworks et bibliothèques
                            </label>
                            <div class="sous-menu">
                                <ul>
                                    <li>
                                        Front-end
                                        <ul>
                                            <li>React.js</li>
                                            <li>Angular</li>
                                            <li>Vue.js</li>
                                            <li>Jquery</li>
                                            <li>Bootstrap</li>
                                        </ul>
                                    </li>
                                    <li>
                                        back-end
                                        <ul>
                                            <li>Node.js</li>
                                            <li>Express.js</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <input type="checkbox" id="dataBase" hidden />
                            <label for="dataBase" class="labelLink">
                                Bases de données
                            </label>
                            <div class="sous-menu">
                                <ul>
                                    <li>MySQL</li>
                                    <li>MongoDB</li>
                                    <li>SQLite</li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <input type="checkbox" id="devTools" hidden />
                            <label for="devTools" class="labelLink">
                                Outils de développement
                            </label>
                            <div class="sous-menu">
                                <ul>
                                    <li>Git et Github</li>
                                    <li>Babel</li>
                                    <li>Visual Studio Code</li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </article>
                <article>
                    <ul class="section3UL">
                        <li>
                            <input type="checkbox" id="webConception" hidden />
                            <label for="webConception" class="labelLink">
                                Conception Web
                            </label>
                            <div class="sous-menu">
                                <ul>
                                    <li>Responsive Web Design</li>
                                    <li>Connaissance des principes UX/UI</li>
                                    <li>Adobe XD / Figma / Sketch</li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <input type="checkbox" id="webService" hidden />
                            <label for="webService" class="labelLink">
                                Services Web
                            </label>
                            <div class="sous-menu">
                                <ul>
                                    <li>APIs Rest</li>
                                    <li>GraphQL</li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <input type="checkbox" id="security" hidden />
                            <label for="security" class="labelLink">
                                Sécurité
                            </label>
                            <div class="sous-menu">
                                <ul>
                                    <li>Principes de sécurité web (OWASP)</li>
                                    <li>Gestion des sessions et des cookies</li>
                                    <li>Authentification et autorisation</li>
                                    <li>SSL/TLS</li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <input type="checkbox" id="otherSkills" hidden />
                            <label for="otherSkills" class="labelLink">
                                Autres compétences
                            </label>
                            <div class="sous-menu">
                                <ul>
                                    <li>Testing et débogage</li>
                                    <li>Performances et optimisations</li>
                                    <li>SEO (Search Engine Optimisation)</li>
                                    <li>Accessibilité Web (WCAG)</li>
                                    <li>Gestion de projet et collaboration en équipe</li>
                                    <li>Veille technologique et apprentissage continu</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </article>
            </div>
        </section>

        <section id="section4Main" class="container_1440">
            <div id="section4Title">
                <h2>Mes projets</h2>
                <a class="whiteBorderBox" href="#">Voir tout les projets</a>
            </div>
            <div id="section4Card">
                <article class="section4Card front-end">
                    <div>
                        <img src="img/projet1.PNG" alt="projet 1">
                        <div>
                            <h3>Home Key - Intégration HTML & CSS</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis laudantium iure,
                                autem
                                omnis dolorum, expedita officiis facilis soluta officia maiores nihil nisi repudiandae
                                suscipit nostrum commodi rem, repellendus explicabo eum...</p>
                        </div>
                    </div>
                    <a class="whiteBorderBox" href="#">Lire la suite</a>
                </article>
                <article class="section4Card front-end">
                    <div>
                        <img src="img/projet2.PNG" alt="projet 2">
                        <div>
                            <h3>Home Key - Intégration HTML & CSS</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis laudantium iure,
                                autem
                                omnis dolorum, expedita officiis facilis soluta officia maiores nihil nisi repudiandae
                                suscipit nostrum commodi rem, repellendus explicabo eum...</p>
                        </div>
                    </div>
                    <a class="whiteBorderBox" href="#">Lire la suite</a>
                </article>
                <article class="section4Card back-end">
                    <div>
                        <img src="img/projet3.PNG" alt="projet 3">
                        <div>
                            <h3>Home Key - Intégration HTML & CSS</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis laudantium iure,
                                autem
                                omnis dolorum, expedita officiis facilis soluta officia maiores nihil nisi repudiandae
                                suscipit nostrum commodi rem, repellendus explicabo eum...</p>
                        </div>
                    </div>
                    <a class="whiteBorderBox" href="#">Lire la suite</a>
                </article>
            </div>

        </section>
    </main>

    <?php
        include_once 'footer.php';
    ?>

</body>

</html>