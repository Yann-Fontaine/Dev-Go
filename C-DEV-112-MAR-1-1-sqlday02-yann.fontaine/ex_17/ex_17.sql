UPDATE movies SET producer_id=
(
SELECT DISTINCT producer_id FROM (SELECT * FROM movies) AS movie
JOIN producers ON movie.producer_id=producers.id 
WHERE producer_id IS NOT NULL AND producers.name LIKE '%film' 
GROUP BY producer_id
ORDER BY COUNT(*) ASC LIMIT 1
) 
WHERE producer_id IS NULL;