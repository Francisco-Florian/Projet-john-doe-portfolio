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
        include_once 'projects.php';
    ?>

    <main>
        <section id="section1MesProjets">
            <h1>Mes Projets</h1>
            <p>Retrouvez ici tous les projets que j'ai réalisé</p>
        </section>

        <section id="section4Main" class="container_1440">
            <div id="section4Card2">

                <?php
                    foreach ($projects as $project) {
                ?>
                <article class="section4Card2 front-end">
                    <div>
                        <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
                        <div>
                            <h3><?php echo $project['title']; ?></h3>
                            <p><?php echo $project['description']; ?></p>
                        </div>
                    </div>
                    <a class="whiteBorderBox" href="#">Lire la suite</a>
                </article>
                <?php
                    }
                ?>

                <?php
                    foreach ($projects as $project) {
                ?>
                <article class="section4Card2 front-end">
                    <div>
                        <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
                        <div>
                            <h3><?php echo $project['title']; ?></h3>
                            <p><?php echo $project['description']; ?></p>
                        </div>
                    </div>
                    <a class="whiteBorderBox" href="#">Lire la suite</a>
                </article>
                <?php
                    }
                ?>
                
                <?php
                    foreach ($projects as $project) {
                ?>
                <article class="section4Card2 front-end">
                    <div>
                        <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
                        <div>
                            <h3><?php echo $project['title']; ?></h3>
                            <p><?php echo $project['description']; ?></p>
                        </div>
                    </div>
                    <a class="whiteBorderBox" href="#">Lire la suite</a>
                </article>
                <?php
                    }
                ?>
            </div>
            <div id="suivant">
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">Suivant</a>
            </div>

        </section>
    </main>

    <?php
        include_once 'footer.php';
    ?>

</body>

</html>