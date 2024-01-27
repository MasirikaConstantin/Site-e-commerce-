
CREATE TABLE `blog`.`commentaire`(
	`id`	INTEGER NOT NULL,
	`iduser`	INTEGER,
	`idpost`	INTEGER,
	`commentaire`	TEXT,
	PRIMARY KEY(`id` AUTOINCREMENT),
	CONSTRAINT `post` FOREIGN KEY(`idpost`) REFERENCES `post`(`idpost`),
	CONSTRAINT `user` FOREIGN KEY(`iduser`) REFERENCES `user`(`id`)
);

CREATE TABLE IF NOT EXISTS `post` (
	`idpost`	INTEGER,
	`post`	TEXT,
	`iduser`	INTEGER,
	`idtype`	INTEGER,
	`photo`	TEXT,
	`stype`	INTEGER,
	`date`	TEXT,
	`heur`	TEXT,
	PRIMARY KEY(`idpost` AUTOINCREMENT),
	CONSTRAINT `id` FOREIGN KEY(`iduser`) REFERENCES `user`(`id`),
	CONSTRAINT `type` FOREIGN KEY(`idtype`) REFERENCES `type`(`id`),
	CONSTRAINT `Soustype` FOREIGN KEY(`stype`) REFERENCES `stype`(`id`)
);
CREATE TABLE IF NOT EXISTS `stype` (
	`id`	INTEGER,
	`id_type`	INTEGER,
	`nom`	TEXT,
	PRIMARY KEY(`id` AUTOINCREMENT),
	CONSTRAINT `id_type` FOREIGN KEY(`id_type`) REFERENCES `type`(`id`)
);
CREATE TABLE IF NOT EXISTS `type` (
	`id`	INTEGER NOT NULL,
	`nom`	TEXT,
	`contenue`	TEXT,
	PRIMARY KEY(`id` AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS `user` (
	`id`	INTEGER NOT NULL UNIQUE,
	`nom`	TEXT,
	`prenom`	TEXT,
	`sexe`	TEXT,
	`daten`	TEXT,
	`email`	TEXT,
	`contact`	TEXT,
	`photo`	TEXT,
	`mdp`	TEXT,
	`etat`	NUMERIC,
	PRIMARY KEY(`id` AUTOINCREMENT)
);

CREATE TABLE `blog`.`vf` (`id` INT NOT NULL AUTO_INCREMENT , `nom` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;



INSERT INTO `commentaire` (`id`,`iduser`,`idpost`,`commentaire`) 
INSERT INTO `post` (`idpost`,`post`,`iduser`,`idtype`,`photo`,`stype`,`date`,`heur`) 
INSERT INTO `stype` (`id`,`id_type`,`nom`) 

INSERT INTO `type` (`id`,`nom`,`contenue`) 

INSERT INTO `user` (`id`,`nom`,`prenom`,`sexe`,`daten`,`email`,`contact`,`photo`,`mdp`,`etat`) 