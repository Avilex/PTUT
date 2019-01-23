Drop table if exists activites_adherents;
Drop table if exists adherents;
Drop table if exists users;
Drop table if exists activites;
Drop table if exists etablissements;
Drop table if exists factures;

Create table if not exists users(
	id int auto_increment,
	nom varchar(255),
    prenom varchar(255),
    password varchar(255),
    tel varchar(255),
    mail varchar(255),
    statut varchar(255),
    primary key(id)
);

Create table if not exists adherents(
	id int auto_increment,
    nom varchar(255),
    prenom varchar(255),
	tel varchar(255),
    mail varchar(255),
    dateNaissance date,
    handicap text,
    licence varchar(255),
    nomTuteur varchar(255),
    adresseTuteur varchar(255),
    telTuteur varchar(255),
    mailTuteur varchar(255),
    primary key(id)
);

Create table if not exists activites(
	id int auto_increment,
    nom varchar(255),
    duree double,
	date Date,
    jour varchar(255),
    prix double,
    typeSeance varchar(50),
    divers text,
    primary key(id)
);

Create table if not exists activites_adherents(
	id int auto_increment,
    adherent_id int,
    activite_id int,
    primary key(id),
    KEY adherent_id (adherent_id),
    KEY activite_id (activite_id)
);

Create table if not exists etablissements(
	id int auto_increment,
    nom varchar(255),
    adresse varchar(255),
    codePostal varchar(255),
	ville varchar(255),
    primary key(id)
);

Create table if not exists factures(
	id int auto_increment,
	adherent_id int,
    primary key (id),
    key adherent_id (adherent_id)
);
   
select * from users;
select * from adherents;
select * from etablissements;


