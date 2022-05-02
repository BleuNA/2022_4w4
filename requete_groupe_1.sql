SELECT `post_title` FROM `wp_posts`

SELECT `post_title` FROM `wp_posts` WHERE `post_title` LIKE '___-___%'

// 582-1W1 Mise en page Web
SELECT SUBSTR(`post_title`, 5) FROM `wp_posts` WHERE `post_title` LIKE '___-___%'

UPDATE table_name
SET column1 = value1, column2 = value2, ...
WHERE condiation;

// 582-1W1 Mise en page Web
// 1W1Mise en page Web
UPDATE `wp_posts`
SET `post_title` =  CONCAT (SUBSTR(`post_title`,5, 3), SUBSTR(`post_title`, 8))
WHERE `post_title` LIKE '___-___%'

// 582-1W1 Mise en page Web
// 1W1Mise en page Web
UPDATE `sgu_posts`
SET `post_title` =  CONCAT (SUBSTR(`post_title`,5, 3), SUBSTR(`post_title`, 8))
WHERE `post_title` LIKE '___-___%'