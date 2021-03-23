SELECT * FROM movies 
INNER JOIN genres ON genres.id=movies.genre_id 
INNER JOIN producers ON producers.id=movies.producer_id
WHERE genres.name='western' AND producers.name='tartan movies' OR producers.name='lionsgate uk';