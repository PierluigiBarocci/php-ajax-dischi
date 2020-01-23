<?php
// Replichiamo l'esercizio dei dischi musicali, questa volta però gestendo noi i dati.
// Creiamo un array di array che rappresentano dei dischi musicali. Se volete, potete usare gli stessi dati che trovate sulla api di boolean: https://flynn.boolean.careers/exercises/api/array/music facendo attenzione però che qui i dati sono in formato json!
// Dobbiamo quindi stampare a schermo i dischi musicali in due modi diversi:
// utilizzando solo php: facciamo include del file php con i dati e stampiamo le card con un foreach
// utilizzando ajax: al caricamento della pagina facciamo una chiamata ajax al file php che contiene i dati e stampiamo le card con handlebars.
// Potete riciclare buona parte del codice che avete scritto nella versione precedente dell'esercizio, magari sforzatevi un pochino di tradurre un po' di css in sass :innocent:
// C'è poi un BONUS: aggiungiamo una select con i generi musicali e quando l'utente effettua una scelta, filtriamo gli album per genere, attraverso un'altra chiamata ajax.
include 'data.php'
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" href="public/css/app.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
        <script src="public/js/app.js" charset="utf-8"></script>
        <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <header>
            <div class="container">
                <img src="logo.png" alt="logo" />
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
                <?php echo "Hello World" ?>
                <?php var_dump($data) ?>
            </div>
        </main>
        <script id="template" type="text/x-handlebars-template">
            <div class="cd" data-genre="{{ genre }}">
                <img src="{{ cover }}" alt="{{author}} - {{title}}">
                <h3>{{ title }}</h3>
                <span class="author">{{ author }}</span>
                <span class="year">{{ year }}</span>
            </div>
        </script>
    </body>
</html>
