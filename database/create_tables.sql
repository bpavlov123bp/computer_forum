CREATE DATABASE forum CHARACTER SET utf8;

USE forum;
CREATE TABLE users(
user_id INT(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
user_name VARCHAR(30) NOT NULL,
user_pass VARCHAR(255) NOT NULL,
user_email VARCHAR(255) NOT NULL,
user_date DATETIME NOT NULL,
user_level INT(8) NOT NULL,
UNIQUE INDEX user_name_unique(user_name)
);

CREATE TABLE categories(
cat_id INT(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
cat_name VARCHAR(255) NOT NULL,
cat_description VARCHAR(255) NOT NULL,
UNIQUE INDEX cat_name_unique(cat_name)
);

CREATE TABLE topics(
topic_id INT(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
topic_subject VARCHAR(255) NOT NULL,
topic_date DATETIME NOT NULL,
topic_cat INT(8) NOT NULL,
topic_by INT(8) NOT NULL
);

CREATE TABLE posts(
post_id INT(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
post_content TEXT NOT NULL,
post_date DATETIME NOT NULL,
post_topic INT(8) NOT NULL,
post_by INT(8) NOT NULL
);