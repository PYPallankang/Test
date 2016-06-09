<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

    <script>
		var apikey = "6qvrmbehyspcu57hma2q222z";
		var baseUrl = "http://api.rottentomatoes.com/api/public/v1.0";

		// construct the uri with apikey
		var moviesSearchUrl = baseUrl + '/movies.json?apikey=' + apikey;
		var query = "red&green&blue&yellow";

		$(document).ready(function() {

			// send off the query
			$.ajax({
				url: moviesSearchUrl + '&q=' + encodeURI(query),
				dataType: "jsonp",
				success: searchCallback
			});
		});

		// callback for when we get back the results
		function searchCallback(data) {
			$(document.body).append('<h1>Found ' + data.total + ' results for ' + query +'</h1>');
			var movies = data.movies;
			$.each(movies, function(index, movie) {
				$(document.body).append('<img src="' + movie.posters.thumbnail + '" />');
				$(document.body).append('<h2 > Movie Tittle:<font color="red">' + movie.title + '</font></h2>');
				$(document.body).append('<h3> Year:' + movie.year + '  Runtime: '+ movie.runtime +'</h3> <br>');
  
			});
		}

    </script>

  </head>
  
  <body>
  
  </body>
  
</html>
