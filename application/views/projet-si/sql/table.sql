CREATE TABLE genre (
  idgenre SERIAL PRIMARY KEY,
  description TEXT
);
-- Table: Inscription
CREATE TABLE utilisateur (
  idutilisateur SERIAL PRIMARY KEY,
  nom_utilisateur VARCHAR,
  mail VARCHAR,
  mdp VARCHAR,
  dtn DATE,
  idgenre integer, 
  date_insert date DEFAULT now(), 
  FOREIGN KEY (idgenre) REFERENCES genre(idgenre)
);

-- Table: Objectif
CREATE TABLE objectif (
  idobjectif SERIAL PRIMARY KEY,
  description TEXT,
  operation varchar
);

-- Table: Complétion du profil de l'utilisateur
CREATE TABLE sport (
  idsport SERIAL PRIMARY KEY,
  nom_sport VARCHAR, 
  idobjectif integer references objectif(idobjectif)
);



CREATE TABLE type_sport (
  idtype_sport SERIAL PRIMARY KEY,
  frequence_semaine INTEGER,
  duree_exercice NUMERIC, 
  description varchar
);


CREATE TABLE liste_sport (
  idtype_sport INT,
  idsport INT,
  FOREIGN KEY (idtype_sport) REFERENCES type_sport(idtype_sport),
  FOREIGN KEY (idsport) REFERENCES sport(idsport)
);

CREATE TABLE completion_utilisateur (
  idcompletion SERIAL PRIMARY KEY,
  idutilisateur INT,
  taille NUMERIC,
  poids NUMERIC,
  date_insertion TIMESTAMP DEFAULT NOW(),
  FOREIGN KEY (idutilisateur) REFERENCES utilisateur(idutilisateur)
  );



-- Table: Code
CREATE TABLE code (
  idcode SERIAL PRIMARY KEY,
  numero varchar,
  montant NUMERIC
);

CREATE TABLE code_utilisateur (
  idcode_utilisateur SERIAL PRIMARY KEY,
  idutilisateur integer references utilisateur(idutilisateur),
  idcode INTEGER,
  estValide integer default 0, 
  FOREIGN KEY (idcode) REFERENCES code(idcode)
);

-- Table: Porte monnaie
CREATE TABLE mouvement_argent (
  idmouvement_argent SERIAL PRIMARY KEY,
  idutilisateur INT,
  montant NUMERIC,
  date_insertion TIMESTAMP DEFAULT now(),
  FOREIGN KEY (idutilisateur) REFERENCES utilisateur(idutilisateur)
);



create table objectif_utilisateur(
    idobjectif_utilisateur serial PRIMARY KEY,
    idutilisateur integer references utilisateur(idutilisateur),
    poidsobjectif numeric,
    idobjectif integer,
    date_insertion date DEFAULT now(),
    FOREIGN KEY (idobjectif) REFERENCES objectif(idobjectif)
);

-- Table: Régime
CREATE TABLE imc (
  idimc SERIAL PRIMARY KEY,
  valeur_min NUMERIC,
  valeur_sup NUMERIC,
  description VARCHAR
);

CREATE TABLE temp_plat (
  idtemp_plat SERIAL PRIMARY KEY,
  nom_temp VARCHAR
);


create table ingredients (
  idingredient serial PRIMARY key, 
  nom_ingredient varchar 
); 


CREATE TABLE plat (
  idplat SERIAL PRIMARY KEY,
  idtemp_plat INT,
  nom_plat VARCHAR,
  energie NUMERIC,
  matieres_grasses NUMERIC,
  glucide NUMERIC,
  proteine NUMERIC,
  image varchar,
  FOREIGN KEY (idtemp_plat) REFERENCES temp_plat(idtemp_plat)
);

create table plat_ingredient (
  idingredient integer references ingredients(idingredient), 
  idplat integer  references plat(idplat)
);
CREATE TABLE regime (
  idregime SERIAL PRIMARY KEY,
  idobjectif INT,
  nom_regime VARCHAR,
  idimc INT,
  duree INTEGER,
  idtype_sport INT,
  kcalmin numeric,
  kcalmax numeric,
  poids NUMERIC,
  prix NUMERIC,
  image varchar, 
  
  FOREIGN KEY (idobjectif) REFERENCES objectif(idobjectif),
  FOREIGN KEY (idimc) REFERENCES imc(idimc),
  FOREIGN KEY (idtype_sport) REFERENCES type_sport(idtype_sport)
);

CREATE TABLE programme_regime (
  idprogramme_regime SERIAL PRIMARY KEY,
  idregime INT,
  idutilisateur INT,
  date_insertion TIMESTAMP DEFAULT NOW(),
  FOREIGN KEY (idregime) REFERENCES regime(idregime),
  FOREIGN KEY (idutilisateur) REFERENCES utilisateur(idutilisateur)
);

CREATE TABLE details_programme (
  idprogramme_regime INT,
  numero_jour INTEGER,
  matin INT,
  midi INT,
  soir INT,
  FOREIGN KEY (idprogramme_regime) REFERENCES programme_regime(idprogramme_regime),
  FOREIGN KEY (matin) REFERENCES plat(idplat),
  FOREIGN KEY (midi) REFERENCES plat(idplat),
  FOREIGN KEY (soir) REFERENCES plat(idplat)
);

create table marge  (
  valeur numeric, 
  date_insertion date default now()
);

create table admin (
    id_admin serial primary key, 
    nom_admin varchar, 
    email varchar, 
    mdp varchar
);


