CREATE TABLE eleve(
eleve_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
Nom : VARCHAR(255) NOT NULL;
Prenom: VARCHAR(255) NOT NULL;
age : NUMBER NOT NULL;
dateNaissance: DATE NOT NULL;
actif : BOOLEAN;
);

INSERT INTO eleve (nom, prenom, classe, age, date_naissance, actif) VALUES
('Dupont', 'Alice', '3A', 15, '2009-03-12', true),
('Martin', 'Léo', '4B', 16, '2008-07-21', true),
('Nguyen', 'Linh', '5C', 17, '2007-11-30', false),
('Kouyaté', 'Moussa', '3A', 15, '2009-01-05', true),
('Bernard', 'Julie', '4B', 16, '2008-09-17', false),
('Lemoine', 'Clara', '3A', 15, '2009-06-08', true),
('Fernandez', 'Luis', '5C', 17, '2007-02-19', false),
('Morel', 'Sophie', '4B', 16, '2008-05-23', true),
('Diallo', 'Ibrahim', '3A', 15, '2009-09-15', true),
('Petit', 'Laura', '5C', 17, '2007-12-01', false),
('Ahmed', 'Karim', '3A', 15, '2009-04-02', true),
('Leroy', 'Chloé', '4B', 16, '2008-10-10', true),
('Marchand', 'Nathan', '5C', 17, '2007-07-04', false),
('Schmitt', 'Emma', '3A', 15, '2009-03-25', true),
('Ben Saïd', 'Yasmine', '4B', 16, '2008-06-13', false),
('Noir', 'Baptiste', '5C', 17, '2007-11-02', true),
('Rossi', 'Giulia', '3A', 15, '2009-02-27', true),
('Cissé', 'Amadou', '4B', 16, '2008-08-08', true),
('Gonzalez', 'Lucia', '5C', 17, '2007-04-30', false),
('Fontaine', 'Arthur', '3A', 15, '2009-01-16', true),
('Leclerc', 'Camille', '4B', 16, '2008-12-22', false),
('Meyer', 'Jules', '5C', 17, '2007-06-06', true),
('Robert', 'Elsa', '3A', 15, '2009-05-10', false),
('Kim', 'Minho', '4B', 16, '2008-09-09', true),
('Haddad', 'Sarah', '5C', 17, '2007-03-28', true),
('Zhang', 'Mei', '3A', 15, '2009-10-11', true),
('Durand', 'Hugo', '4B', 16, '2008-11-18', false),
('Bakayoko', 'Nina', '5C', 17, '2007-05-02', true),
('Lopez', 'Mateo', '3A', 15, '2009-06-19', true),
('Faure', 'Lucie', '4B', 16, '2008-07-27', true),
('Dubois', 'Rayan', '5C', 17, '2007-08-31', false),
('Traoré', 'Awa', '3A', 15, '2009-09-05', true),
('Carvalho', 'Enzo', '4B', 16, '2008-02-03', false),
('Girard', 'Léna', '5C', 17, '2007-01-20', true),
('Ben Ali', 'Sami', '3A', 15, '2009-11-14', true);
