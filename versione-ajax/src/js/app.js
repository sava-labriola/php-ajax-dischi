const $ = require('jquery');

var template_html = $('#song').html();

var template_function = Handlebars.compile(template_html);

$.ajax({
    'url': 'partials/database.php',
    'method': 'GET',
    'success': function(data) {
        for (var i = 0; i < data.length; i++) {
            var poster = data[i].poster;
            var title = data[i].title;
            var author = data[i].author;
            var genre = data[i].genre;
            var year = data[i].year;
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
    },
    'error': function() {
        alert('si è verificato un errore');
    }
});
