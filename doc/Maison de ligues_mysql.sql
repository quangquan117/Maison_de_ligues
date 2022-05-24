CREATE TABLE `CLIENT` (
  `id` INT,
  `nom` VARCHAR(50),
  `prenom` VARCHAR(50),
  `age` VARCHAR(50),
  `email` VARCHAR(50),
  `password` VARCHAR(50),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `CONSULTER` (
  `id_CLIENT` INT,
  `date_modification` DATE,
  `id_EVENEMENT` INT,
  PRIMARY KEY (`id_CLIENT`, `date_modification`, `id_EVENEMENT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*
CREATE TABLE `HISTORIQUE_CLIENT` (
  `date_modification` VARCHAR(42),
  PRIMARY KEY (`date_modification`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
*/

CREATE TABLE `EVENEMENT` (
  `id` INT,
  `nom` VARCHAR(50),
  `description` VARCHAR(1000),
  `date_creation` DATE,
  `date_modification` DATE,
  `image` VARCHAR(255),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `CONSULTER` ADD FOREIGN KEY (`id_EVENEMENT`) REFERENCES `EVENEMENT` (`id`);
-- ALTER TABLE `CONSULTER` ADD FOREIGN KEY (`date_modification`) REFERENCES `HISTORIQUE_CLIENT` (`date_modification`);
ALTER TABLE `CONSULTER` ADD FOREIGN KEY (`id_CLIENT`) REFERENCES `CLIENT` (`id`);