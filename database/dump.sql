CREATE TABLE `user`
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    token text NOT NULL
);

CREATE TABLE `post` 
(
    post_id INT PRIMARY KEY AUTO_INCREMENT,
    post text NOT NULL,
    `date` DATE,
    userId INT,
    FOREIGN KEY (userId) REFERENCES `user`(id)
);

CREATE TABLE `comment` 
(
    comment_id INT PRIMARY KEY AUTO_INCREMENT,
    post text NOT NULL,
    userId INT,
 	postId INT,
    FOREIGN KEY (userId) REFERENCES `user`(id),
  	FOREIGN KEY (postId) REFERENCES `post`(post_id)
);