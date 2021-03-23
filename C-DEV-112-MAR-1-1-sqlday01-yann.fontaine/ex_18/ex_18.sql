SELECT 
CONCAT(CONCAT(CONCAT(UPPER(SUBSTRING(lastname, 1, 1)),lower(SUBSTRING(lastname, 2)),'-')), CONCAT(UPPER(SUBSTRING(firstname, 1, 1)),lower(SUBSTRING(firstname, 2)))) AS 'Full name'
FROM profiles ORDER BY birthdate ASC;