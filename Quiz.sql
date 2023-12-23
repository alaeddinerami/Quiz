CREATE TABLE Themes(
    idtheme int AUTO_INCREMENT PRIMARY KEY,
    nomtheme varchar(255),
    description varchar(255)
);

CREATE TABLE Questions(
    idQuestion int AUTO_INCREMENT PRIMARY KEY,
    Question varchar(255),
	description varchar(255) );
   
CREATE TABLE Reponse(
    idReponse int AUTO_INCREMENT PRIMARY key,
    textReponse varchar(255),
    statusReponse int);
    
ALTER TABLE `themes`
ADD CONSTRAINT FK_ThemeReponse
FOREIGN KEY (`idReponse`) REFERENCES `reponses`(`idReponse`);

