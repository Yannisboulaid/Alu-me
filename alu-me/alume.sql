--
-- MySql ver: 5.7.14
-- Database: alume   		creator: ITOP
--
-- --------------------------------------------------------

drop database if exists alume;
create database alume;
	use alume;

-- --------------------------------------------------------

create table usines
	(
		Numero_usine 				int 	(4)not null	,
		Nom_usine 					varchar (42)not null,
		Ca_annuel_usine 			float 	(10.2),
		Departement_usine 			varchar (42)not null,
		Ville_usine 				varchar (42),
		Cp_usine 					char 	(5),
		Adresse_usine 				varchar (42),
		Directeur_usine 			varchar (42),
		primary key (Numero_usine)
	);

-- --------------------------------------------------------

create table clients
	(
		Numero_client 				int 	(4) not null,
		Nom_client 					varchar (42)not null,
		Raison_sociale_client 		varchar (42),
		Pays_client 				varchar (42),
		Departement 				varchar (42),
		Ville_client 				varchar (42),
		Adresse_client 				varchar (42),
		Cp_client 					char 	(5),
		primary key (Numero_client)
	);

-- --------------------------------------------------------

create table utilisateurs
	(
		Id 							int 	(5)not null auto_increment,
		Pseudonyme 					varchar (42)not null,
		Mot_de_passe 				varchar (42)not null,
		Adresse_mail 				varchar (42),
		droit_projet				enum('oui','non') default'non',
		droit_modo					enum('oui','non') default'non',
		droit_admin					enum('oui','non') default'non',
		primary key (Id)
	);

insert into utilisateurs values
	(null, "SUPERADMIN", "kqlyozadf8c9kli", null, 'oui', 'oui', 'oui');

select * from utilisateurs;

-- --------------------------------------------------------

create table topics
	(
		idTop						int(6)not null auto_increment,
		nomTop						varchar(42)not null,
		primary key	(idTop)
	);

insert into topics values
	(null, "Regles du forum");

select * from topics;

-- --------------------------------------------------------

create table messages
	(
		idMess						int(12)not null auto_increment,
		idTop						int(6)not null,
		contenuMess					varchar(254)not null,
		dateMess					date,
		heureMess					time,
		primary key (idMess)
	);

insert into messages values
	(null, 1, "Ce forum suit des regles precises a respecter. (Texte a modifier avec le compte SUPERADMIN)", '2017-03-09', '08:31:24');

select * from messages;

-- --------------------------------------------------------

create table machines
	(
		Numero_machine 				int 	(4)not null,
		Nom_machine 				varchar (42),
		Type_machine 				varchar (42),
		Duree_amortissement_machine varchar (42),
		Date_achat_machine 			date 	   not null,
		Reference_constructeur 		varchar (42),
		primary key (Numero_machine)
	);

-- --------------------------------------------------------

create table Projet
	(
		Numero_projet 				int 	(4)not null,
		Nom_projet 					varchar (42),
		Chef_de_projet 				varchar	(42),
		Cout_previsionnel 			float 	(4,2),
		Date_echeance 				date,
		Penalites 					varchar (42),
		Debut_de_realisation 		date not null,
		Fin_de_realisation 			date,
		Numero_client 				int 	(4)not null,
		primary key (Numero_projet),
		foreign key (Numero_client) references clients (Numero_client)
	);

-- --------------------------------------------------------

create table Fonction
	(
		Numero_fonction				int 	(4)not null,
		Nom_fonction 				varchar (42),
		Indice_debut_carriere		varchar	(42),
		Indice_fin_carriere			varchar	(42),
		primary key (Numero_fonction)
	);

-- --------------------------------------------------------

create table Salarie
	(
		Numero_salarie 				int 	(4)not null,
		Indice_salarie				varchar (42),
		Salaire_salarie				float 	(4,2),
		commission_annuelle			float 	(4,2),
		Numero_fonction				int 	(4)not null,
		Numero_usine 				int 	(4)not null,
		primary key (Numero_salarie),
		foreign key (Numero_fonction) references Fonction (Numero_fonction),
		foreign key (Numero_usine) references usines (Numero_usine)
	);

-- --------------------------------------------------------