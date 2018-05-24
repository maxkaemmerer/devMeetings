CREATE DATABASE MYDB COLLATE utf8_general_ci;
CREATE TABLE MYDB.greetings
(
  greeting text
) COLLATE utf8_general_ci;
INSERT INTO MYDB.greetings (greeting) values ('World'), ('Düsseldorf'), ('Stuhr');