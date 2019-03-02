Drop table if exists activities_adherents;
Drop table if exists adherents;
Drop table if exists users;
Drop table if exists activities;
Drop table if exists establishments;
Drop table if exists invoices;

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

Create table if not exists activities(
	id int auto_increment,
    nom varchar(255),
    heures int(3),
    minutes int (3),
	dateDebut Date,
    dateFin Date,
    jour varchar(255),
    prix double,
    typeSeance varchar(50),
    divers text,
    primary key(id)
);

Create table if not exists activities_adherents(
	id int auto_increment,
    adherent_id int,
    activity_id int,
    primary key(id),
    KEY adherent_id (adherent_id),
    KEY activity_id (activity_id)
);

Create table if not exists establishments(
	id int auto_increment,
    nom varchar(255),
    adresse varchar(255),
    codePostal varchar(255),
	ville varchar(255),
    nomDirecteur varchar(255),
    tel varchar(255),
    primary key(id)
);

Create table if not exists invoices(
	id int auto_increment,
    nom varchar(255),
    etat varchar(255),
	adherent_id int,
    primary key (id),
    key adherent_id (adherent_id)
);
   
select * from users;
select * from adherents;
select * from invoices;
select * from establishments;
select * from activities;
select * from activities_adherents;

 

