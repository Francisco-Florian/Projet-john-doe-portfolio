<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ab84100d84.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Portfolio</title>
</head>

<body>

    <header id="header" class="container_1440">
        <div id="headerTitle">
            <a href="index.php">
                <h2>John Doe</h2>
            </a>
            <p>Développeur Web et Web Mobile</p>
        </div>
        <nav id="headerNav">
            <a id="closeBtn" href="#" class="close">&times;</a>
            <ul>
                <li>
                    <a class="active" href="index.php">Acceuil</a>
                </li>
                <li>
                    <a href="#">Qui suis-je ?</a>
                </li>
                <li>
                    <a href="maFormation.php">Ma formation</a>
                </li>
                <li>
                    <a href="#">Mes compétences</a>
                </li>
                <li>
                    <a href="mesProjet.php">Mes projets</a>
                </li>
                <li>
                    <a class="contact" id="openModalBtn" href="#modalHeaderOverlay">Contactez-moi</a>
                    <div id="modalHeaderOverlay">
                        <div id="modalHeader">
                            <a href="#" class="close-modal">&times;</a>
                            <form action="#">
                                <h2>Me contacter</h2>
                                <label for="name2">Votre nom:</label>
                                <input type="text" id="name2" name="name" placeholder="Votre nom" required>
                                <label for="email2">Votre email:</label>
                                <input type="email" id="email2" name="email" placeholder="Votre email" required>
                                <label for="message2">Votre message:</label>
                                <textarea id="message2" name="message" placeholder="Votre message" required></textarea>
                                <button type="submit" class="modalEnvoi">Envoyer la demande</button>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <i class="fa-solid fa-bars burgerMenu"></i>
    </header>

    <main>
        <section id="section1Main" class="container_1440">
            <article id="section1MainArticle">
                <h1>John Doe - Développeur web et web mobile</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores</p>
                <p>molestiae adipisci nulla saepe, ipsa earum, corrupti necessitatibus libero ut nobis sed magni facere
                    blanditiis assumenda. Enim vero perspiciatis beatae animi!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias</p>
                <p>temporibus corrupti blanditiis aliquid, quod a expedita eligendi soluta libero voluptate sit, maiores
                    consequatur minus perspiciatis perferendis porro? Consectetur, laborum quo!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias</p>
                <p>temporibus corrupti blanditiis aliquid, quod a expedita eligendi soluta libero voluptate sit, maiores
                    consequatur minus perspiciatis perferendis porro? Consectetur, laborum quo!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias</p>
                <p>temporibus corrupti blanditiis aliquid, quod a expedita eligendi soluta libero voluptate sit, maiores
                    consequatur minus perspiciatis perferendis porro? Consectetur, laborum quo!</p>
                <a href="#modalSectionOverlay" href="section1MainArticle">Contactez-moi</a>
                <div id="modalSectionOverlay">
                    <div id="modalSection">
                        <a href="#" class="close-modal">&times;</a>
                        <form action="#">
                            <h2>Me contacter</h2>
                            <label for="name">Votre nom:</label>
                            <input type="text" id="name" name="name" placeholder="Votre nom" required>
                            <label for="email">Votre email:</label>
                            <input type="email" id="email" name="email" placeholder="Votre email" required>
                            <label for="message">Votre message:</label>
                            <textarea id="message" name="message" placeholder="Votre message" required></textarea>
                            <button type="submit" class="modalEnvoi">Envoyer la demande</button>
                        </form>
                    </div>
                </div>
            </article>
            <img id="imgAnimation" src="img/moi.png" alt="moi">
        </section>

        <section id="section2Main">
            <h2>Ma formation</h2>
            <div id="section2MainDiv1">
                <img src="img/dev-a-la-carte.png" alt="dev à la carte">
                <article>
                    <h3>Formation développement à la carte</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <p>adipisicing elit. Reiciendis sint quam quo eveniet placeat distinctio recusandae nihil
                        praesentium fugiat natus, ducimus assumenda! Blanditiis, fugit laboriosam? Libero sunt explicabo
                        facilis laboriosam?</p>
                    <p>adipisicing elit. Recusandae cum nihil placeat cupiditate tempore vel, labore eos tenetur qui
                        provident blanditiis commodi magni animi at dicta dolore! Tempora, magni consequatur?</p>
                    <a class="savoirPlus" href="#">En savoir plus</a>
                </article>
            </div>
            <div id="section2MainDiv2">
                <article>
                    <h3>Formation Développeur Web et Web Mobile</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <p>adipisicing elit. Reiciendis sint quam quo eveniet placeat distinctio recusandae nihil
                        praesentium fugiat natus, ducimus assumenda! Blanditiis, fugit laboriosam? Libero sunt explicabo
                        facilis laboriosam?</p>
                    <p>adipisicing elit. Recusandae cum nihil placeat cupiditate tempore vel, labore eos tenetur qui
                        provident blanditiis commodi magni animi at dicta dolore! Tempora, magni consequatur?</p>
                    <a class="savoirPlus" href="#">En savoir plus</a>
                </article>
                <img src="img/dwwm.png" alt="dwwm">
            </div>
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
    <script src="js/script.js"></script>
</body>

</html>