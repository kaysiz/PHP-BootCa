INSERT INTO ft_table(`login`, `group`, `creation_date`)
SELECT last_name, 'other', DATE(birthdate) FROM user_card ORDER BY last_name ASC;
WHERE last_name LIKE '%a%' AND CHAR_LENGTH(last_name) < 9 LIMIT 10;
