<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" href="public/css/app.css">
        <script src="public/js/app.js" charset="utf-8"></script>
        <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Versione Ajax</title>
    </head>
    <body>
        <header>
            <div class="container">
                <img src="public/images/logo.png" alt="logo" />
            </div>
        </header>
        <main>
            <select id="selector">
                <option value="">Scegliere il genere</option>
                <option value="pop">Pop</option>
                <option value="rock">Rock</option>
                <option value="metal">Metal</option>
                <option value="jazz">Jazz</option>
            </select>
            <div class="cds-container container">

            </div>
        </main>
        <script id="template" type="text/x-handlebars-template">
            <div class="cd">
                <img src="{{ cover }}" alt="{{author}} - {{title}}">
                <h3>{{ title }}</h3>
                <span class="author">{{ author }}</span>
                <span class="year">{{ year }}</span>
            </div>
        </script>
    </body>
</html>
