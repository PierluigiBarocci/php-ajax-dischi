var $ = require('jquery');

$(document).ready(function(){

    var template_html = $("#template").html();
    var template_function = Handlebars.compile(template_html);

    $.ajax({
        'url': 'public/data/data.php',
        'method': 'GET',
        'success': function(data){
            var lista = JSON.parse(data);
            for (var i = 0; i < lista.length; i++) {
                var disco = lista[i];
                var properties = {
                    'cover': disco.poster,
                    'author': disco.author,
                    'title': disco.title,
                    'year': disco.year,
                    'genre': disco.genre
                };
                var final = template_function(properties);
                $('.cds-container.container').append(final);
            }
        },
        'error': function(){
            alert('error');
        }
    });

});
