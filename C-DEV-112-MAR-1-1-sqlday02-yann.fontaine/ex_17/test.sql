SELECT DISTINCT producer_id FROM movies 
JOIN producers ON movies.producer_id=producers.id 
WHERE producer_id IS NOT NULL AND producers.name LIKE '%film' 
GROUP BY producer_id
ORDER BY COUNT(*) LIMIT 1;