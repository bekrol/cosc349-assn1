CREATE TABLE websites (
  webId int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  siteName varchar(20) NOT NULL,
  sitePage varchar(20),
  siteUrl varchar(50) NOT NULL,
);

INSERT INTO websites VALUES ('COSC349 Cloud computing', 'Paper info', 'https://cosc349.cspages.otago.ac.nz/');
INSERT INTO websites VALUES ('Otago University', 'Main page', 'https://www.otago.ac.nz/');
INSERT INTO websites VALUES ('Otago University', 'Student page', 'https://www.otago.ac.nz/students/');


