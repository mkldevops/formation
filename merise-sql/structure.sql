CREATE TABLE competence(
   id INT,
   nom VARCHAR(50),
   PRIMARY KEY(id)
);

CREATE TABLE categorie(
   id INT,
   nom VARCHAR(50),
   PRIMARY KEY(id)
);

CREATE TABLE equipe_travail(
   id INT,
   nom VARCHAR(50),
   couleur VARCHAR(50),
   PRIMARY KEY(id)
);

CREATE TABLE profil(
   immatriculation INT,
   nom VARCHAR(50),
   prenom VARCHAR(50),
   date_naissance DATE,
   PRIMARY KEY(immatriculation)
);

CREATE TABLE employe(
   profil_immatriculation INT,
   dateEntree DATE,
   equipe_travail_id INT NOT NULL,
   competence_id INT NOT NULL,
   PRIMARY KEY(profil_immatriculation),
   FOREIGN KEY(profil_immatriculation) REFERENCES profil(immatriculation),
   FOREIGN KEY(equipe_travail_id) REFERENCES equipe_travail(id),
   FOREIGN KEY(competence_id) REFERENCES competence(id)
);

CREATE TABLE poste_travail(
   code VARCHAR(50),
   intitule VARCHAR(50),
   description TEXT,
   disponible BOOLEAN,
   categorie_id INT NOT NULL,
   PRIMARY KEY(code),
   FOREIGN KEY(categorie_id) REFERENCES categorie(id)
);

CREATE TABLE stagiaire(
   profil_immatriculation INT,
   PRIMARY KEY(profil_immatriculation),
   FOREIGN KEY(profil_immatriculation) REFERENCES profil(immatriculation)
);

CREATE TABLE responsable(
   employe_immatriculation INT,
   equipe_travail_id INT NOT NULL,
   PRIMARY KEY(employe_immatriculation),
   UNIQUE(equipe_travail_id),
   FOREIGN KEY(employe_immatriculation) REFERENCES employe(profil_immatriculation),
   FOREIGN KEY(equipe_travail_id) REFERENCES equipe_travail(id)
);

CREATE TABLE affecter(
   employe_immatriculation INT,
   poste_travail_code VARCHAR(50),
   debut DATETIME,
   fin DATETIME,
   PRIMARY KEY(employe_immatriculation, poste_travail_code),
   FOREIGN KEY(employe_immatriculation) REFERENCES employe(profil_immatriculation),
   FOREIGN KEY(poste_travail_code) REFERENCES poste_travail(code)
);

CREATE TABLE travailler(
   employe_immatriculation INT,
   employe_immatriculation_partenaire INT,
   PRIMARY KEY(employe_immatriculation, employe_immatriculation_partenaire),
   FOREIGN KEY(employe_immatriculation) REFERENCES employe(profil_immatriculation),
   FOREIGN KEY(employe_immatriculation_partenaire) REFERENCES employe(profil_immatriculation)
);

CREATE TABLE occuper(
   poste_travail_code VARCHAR(50),
   stagiaire_immatriculation INT,
   debut DATE,
   fin DATE,
   PRIMARY KEY(poste_travail_code, stagiaire_immatriculation),
   FOREIGN KEY(poste_travail_code) REFERENCES poste_travail(code),
   FOREIGN KEY(stagiaire_immatriculation) REFERENCES stagiaire(profil_immatriculation)
);
