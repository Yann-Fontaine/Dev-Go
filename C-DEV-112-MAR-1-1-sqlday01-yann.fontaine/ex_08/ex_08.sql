SELECT * FROM movies INNER JOIN genres ON genres.id=movies.genre_id WHERE genres.name='action' OR genres.name='romance';