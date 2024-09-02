CREATE TABLE websites (
  webId int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  siteName varchar(100) NOT NULL,
  sitePage varchar(100) NOT NULL,
  siteUrl varchar(100) NOT NULL,
  tags varchar(50) NOT NULL
);

INSERT INTO websites (siteName, sitePage, siteURL, tags) VALUES ('COSC349 Cloud computing', 'Paper info', 'https://cosc349.cspages.otago.ac.nz/', 'Uni');
INSERT INTO websites (siteName, sitePage, siteURL, tags) VALUES ('Otago University', 'Main page', 'https://www.otago.ac.nz/', 'Uni');
INSERT INTO websites (siteName, sitePage, siteURL, tags) VALUES ('Otago University', 'Student page', 'https://www.otago.ac.nz/students/', 'Uni');
INSERT INTO websites (siteName, siteURL, tags) VALUES ('The Useless Web', 'https://theuselessweb.com/', 'Fun')


