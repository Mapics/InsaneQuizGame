CREATE TABLE users(
   id INT,
   pseudo VARCHAR(50) ,
   email VARCHAR(50) ,
   password VARCHAR(50) ,
   role INT,
   lp INT,
   xp INT,
   niveaux INT,
   PRIMARY KEY(id)
);

CREATE TABLE quizz(
   id INT,
   titre VARCHAR(50) ,
   difficulte INT,
   date_creation DATETIME,
   PRIMARY KEY(id)
);

CREATE TABLE question(
   id INT,
   intituléQuestion VARCHAR(50) ,
   difficulté VARCHAR(50) ,
   PRIMARY KEY(id)
);

CREATE TABLE choix(
   id VARCHAR(50) ,
   reponse VARCHAR(50) ,
   bonne_reponse BOOLEAN,
   PRIMARY KEY(id)
);

CREATE TABLE creer(
   id INT,
   id_1 INT,
   PRIMARY KEY(id, id_1),
   FOREIGN KEY(id) REFERENCES n(id),
   FOREIGN KEY(id_1) REFERENCES quizz(id)
);

CREATE TABLE jouer(
   id INT,
   id_1 INT,
   id_user INT,
   id_quizz INT,
   Score INT,
   PRIMARY KEY(id, id_1),
   FOREIGN KEY(id) REFERENCES n(id),
   FOREIGN KEY(id_1) REFERENCES quizz(id)
);

CREATE TABLE Asso_3(
   id INT,
   id_1 INT,
   PRIMARY KEY(id, id_1),
   FOREIGN KEY(id) REFERENCES quizz(id),
   FOREIGN KEY(id_1) REFERENCES question(id)
);

CREATE TABLE Asso_4(
   id INT,
   id_1 VARCHAR(50) ,
   PRIMARY KEY(id, id_1),
   FOREIGN KEY(id) REFERENCES question(id),
   FOREIGN KEY(id_1) REFERENCES choix(id)
);