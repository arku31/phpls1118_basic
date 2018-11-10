INSERT INTO users (name, email, password, gender) VALUES ('Mashanka', 'asd@aaads.ru', '123123', 1);


SELECT * from users WHERE name LIKE "%sh%";

SELECT name, email FROM users WHERE email = 'asd@ads.ru' AND name = 'Igor'


UPDATE users SET password = '123123123' WHERE id > 2;

DELETE FROM users Where id > 2


SELECT users.id as user_id, posts.id as post_id, posts.title, posts.content, users.name FROM users LEFT JOIN posts ON (users.id = posts.user_id)
SELECT COUNT(*) as posts_count FROM users LEFT JOIN posts ON (users.id = posts.user_id)

