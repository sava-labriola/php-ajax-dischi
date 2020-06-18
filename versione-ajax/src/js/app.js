const $ = require('jquery');

var template_html = $('#song').html();

var template_function = Handlebars.compile(template_html);

$(document).ready(function () {
    ajax();
});

function ajax() {
    $.ajax({
        'url': 'partials/database.php',
        'method': 'GET',
        'success': function(data) {
            disegna_card(data);
        },
        'error': function() {
            alert('si è verificato un errore');
        }
    });
}

function disegna_card(array) {
    for (var i = 0; i < array.length; i++) {
        var poster = array[i].poster;
        var title = array[i].title;
        var author = array[i].author;
        var genre = array[i].genre;
        var year = array[i].year;
        var placeholder = {
            'image' : poster,
            'title' : title,
            'author' : author,
            'genre' : genre,
            'year' : year
        }
        var html_finale = template_function(placeholder);
        $('.container').append(html_finale);

    }
}
