
DROP TABLE IF EXISTS bribe;
CREATE TABLE bribe (
  id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  payment int NOT NULL
) engine=innodb CHARACTER SET utf8 COLLATE utf8_unicode_ci;

INSERT INTO bribe (id, name, payment) VALUES
(1, 'Adrien', '1000'),
(2, 'Zoé', '5000');
(3, 'police', '15000');
(4, 'maire', '25000');
(5, 'yougo', '7000');
