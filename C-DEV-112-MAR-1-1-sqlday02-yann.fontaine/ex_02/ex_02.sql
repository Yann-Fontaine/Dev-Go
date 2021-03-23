SELECT zipcode AS "Zip Codes" FROM profiles GROUP BY zipcode HAVING COUNT(*) >1 ORDER BY zipcode ASC;
