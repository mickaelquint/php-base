-- On va ajouter quelques acteurs
-- Al Pacino (25 04 1940)
-- Marlon Brando (3 04 1924)
-- Robert de Niro (17 08 1943)
-- Bruce Willis (19 03 1955)
-- Ray Liotta (18 12 1954)
-- Wesley Snipes (31 07 1962)
-- Sylvester Stalone (6 07 1946)
-- Edward Norton (18 08 1969)
-- Kevin Spacey (26 07 1959)
-- Val Kilmer (31 12 1959)

INSERT INTO actor (`name`, `firstname`, `birthday`) VALUES
('Pacino', 'Al', '1940-04-25'),
('Brando', 'Marlon', '1924-04-03'),
('de Niro', 'Robert', '1943-08-17'),
('Willis', 'Bruce', '1955-03-19'),
('Liotta', 'Ray', '1954-12-18'),
('Snipes', 'Wesley', '1962-07-31'),
('Stalone', 'Sylvester', '1946-07-06'),
('Norton', 'Edward', '1969-08-18'),
('Spacey', 'Kevin', '1959-07-26'),
('Kilmer', 'Val', '1959-12-31');


-- il faut ajouter les relation dans la table "movie_has_actor"
-- movies_id | actor_id
--         1 |        1
--         1 |        2
--         2 |        1
--         3 |        3
--         3 |        5
--         4 |        3
--         5 |        4
--         6 |        6

INSERT INTO movie_has_actor (movie_id,actor_id) VALUES
(1,1),(1,2),
(2,1),
(3,3),(3,5),
(4,1),(4,3),(4,10),
(5,4),
(6,6),
(9,7),
(19,7),
(20,9),
(21,8);

-- on veut afficher l'âge des acteurs
--YEAR(NOW())renvoie 2019
SELECT firstname ,name , YEAR(NOW())- YEAR (birthday) as age FROM actor;


-- on veut récupérer les films dans lesquels Al Pacino a joué
SELECT * FROM movie_has_actor 
INNER JOIN movie ON movie_id = movie_has_actor.movie_id
WHERE actor_id = 1;

-- on veut récupérer tous les acteurs du film Heat 
SELECT * FROM movie_has_actor
INNER JOIN actor ON actor_id = movie_has_actor.actor_id
INNER JOIN movie ON movie_id = movie_has_actor.movie_id
WHERE movie.name= 'Heat' ;


-- on veut savoir dans quel film Al Pacino et De Niro ont joués
