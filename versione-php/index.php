<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" href="public/css/app.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Versione Include PHP</title>
    </head>
    <body>
        <header>
            <div class="container">
                <img src="public/images/logo.png" alt="logo" />
            </div>
        </header>
        <main>
            <!-- <select id="selector">
                <option value="">Scegliere il genere</option>
                <option value="pop">Pop</option>
                <option value="rock">Rock</option>
                <option value="metal">Metal</option>
                <option value="jazz">Jazz</option>
            </select> -->
            <div class="cds-container container">
                <?php

                include 'public/data/data.php';

                foreach ($data as $album) { ?>
                    <div class="cd" data-genre="<?php echo $album['genre'] ?>">
                        <img src="<?php echo $album['poster']; ?>" alt="">
                        <h3><?php echo $album['title']?></h3>
                        <span class="author"><?php echo $album['author'] ?></span>
                        <span class="year"><?php echo $album['year']?></span>
                    </div>
                <?php
                } ?>
            </div>
        </main>
    </body>
</html>
