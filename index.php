<?php


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
        <?php echo "Hello World" ?>
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
