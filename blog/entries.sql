DROP TABLE IF EXISTS entries;

CREATE TABLE entries (
	id INT NOT NULL AUTO_INCREMENT, 
    blog_title text, 
    blog_textField text, 
    blog_tags text, 
    PRIMARY KEY (id));