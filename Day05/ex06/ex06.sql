SELECT title, summary FROM film
WHERE summary LIKE '%vincent%' COLLATE utf8_general_ci ORDER BY id_film ASC;
