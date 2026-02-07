CREATE DATABASE superscent_db DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;

USE superscent_db;

CREATE TABLE `felhasznalo` (
    `id` INT AUTO_INCREMENT NOT NULL ,
    `email` VARCHAR(255)  NOT NULL ,
    `jelszo` VARCHAR(255)  NOT NULL ,
    `telefonszam` VARCHAR(20)  NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

CREATE TABLE `cim` (
    `id` INT AUTO_INCREMENT NOT NULL ,
    `vezeteknev` VARCHAR(255)  NOT NULL ,
    `keresztnev` VARCHAR(255)  NOT NULL ,
    `varos` VARCHAR(255)  NOT NULL ,
    `ir_szam` VARCHAR(5)  NOT NULL ,
    `utca_hazszam` VARCHAR(255)  NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

CREATE TABLE `rendelt_termek` (
    `id` INT AUTO_INCREMENT NOT NULL ,
    `rendeles_id` CHAR(7)  NOT NULL ,
    `SKU` VARCHAR(255)  NOT NULL ,
    `mennyiseg` TINYINT UNSIGNED NOT NULL ,
    `ar` MEDIUMINT  NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

CREATE TABLE `termek_peldany` (
    `SKU` VARCHAR(255)  NOT NULL ,
    `parfum_nev_id` INT  NOT NULL ,
    `kategoria_id` INT  NOT NULL ,
    `meret` ENUM('3','10')  NOT NULL ,
    `ar` MEDIUMINT  NOT NULL ,
    PRIMARY KEY (
        `SKU`
    )
);

CREATE TABLE `termek_kategoria` (
    `id` INT AUTO_INCREMENT NOT NULL ,
    `nev` VARCHAR(255)  NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

CREATE TABLE `rendeles` (
    `id` CHAR(7) NOT NULL,
    `felhasznalo_id` INT  NOT NULL ,
    `kontakt` VARCHAR(255)  NOT NULL ,
    `datum` TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL ,
    `szamlazasi_cim_id` INT  NOT NULL ,
    `szallitasi_cim_id` INT  NOT NULL ,
    `osszeg` INT  NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

CREATE TABLE `parfum_nev` (
    `id` INT AUTO_INCREMENT NOT NULL ,
    `nev` VARCHAR(255)  NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

CREATE TABLE `kerdes` (
    `id` INT AUTO_INCREMENT NOT NULL ,
    `szoveg` TEXT  NOT NULL ,
    `felhasznalo_id` INT  NOT NULL ,
    `datum` TIMESTAMP  NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

ALTER TABLE `rendelt_termek` ADD CONSTRAINT `fk_rendelt_termek_rendeles_id` FOREIGN KEY(`rendeles_id`)
REFERENCES `rendeles` (`id`);

ALTER TABLE `rendelt_termek` ADD CONSTRAINT `fk_rendelt_termek_SKU` FOREIGN KEY(`SKU`)
REFERENCES `termek_peldany` (`SKU`);

ALTER TABLE `termek_peldany` ADD CONSTRAINT `fk_termek_peldany_parfum_nev_id` FOREIGN KEY(`parfum_nev_id`)
REFERENCES `parfum_nev` (`id`);

ALTER TABLE `termek_peldany` ADD CONSTRAINT `fk_termek_peldany_kategoria_id` FOREIGN KEY(`kategoria_id`)
REFERENCES `termek_kategoria` (`id`);

ALTER TABLE `rendeles` ADD CONSTRAINT `fk_rendeles_felhasznalo_id` FOREIGN KEY(`felhasznalo_id`)
REFERENCES `felhasznalo` (`id`);

ALTER TABLE `rendeles` ADD CONSTRAINT `fk_rendeles_szamlazasi_cim_id` FOREIGN KEY(`szamlazasi_cim_id`)
REFERENCES `cim` (`id`);

ALTER TABLE `rendeles` ADD CONSTRAINT `fk_rendeles_szallitasi_cim_id` FOREIGN KEY(`szallitasi_cim_id`)
REFERENCES `cim` (`id`);

ALTER TABLE `kerdes` ADD CONSTRAINT `fk_kerdes_felhasznalo_id` FOREIGN KEY(`felhasznalo_id`)
REFERENCES `felhasznalo` (`id`);

-- -------------------------------------------------- INSERT ----------------------------------------------------------------------

INSERT INTO felhasznalo(id, email, jelszo, telefonszam) VALUES(1, 'admin', '$2y$12$smkEjn5PWoY0nJzHGl4BduzLEtqLurSQbuUBL.iLsAxrDZsZblGtm', '0'); -- ADMIN 

INSERT INTO parfum_nev VALUES(1, "Lattafa - Khamrah");
INSERT INTO parfum_nev VALUES(2, "Armaf - Club de Nuit Intense Man");
INSERT INTO parfum_nev VALUES(3, "Lattafa - Asad");
INSERT INTO parfum_nev VALUES(4, "Rasasi - Hawas");
INSERT INTO parfum_nev VALUES(5, "Afnan - Turathi Blue");
INSERT INTO parfum_nev VALUES(6, "Lattafa - Nebras");

INSERT INTO termek_kategoria VALUES(1,"Férfias");
INSERT INTO termek_kategoria VALUES(2,"Uniszex");
INSERT INTO termek_kategoria VALUES(3,"Nőies");

INSERT INTO termek_peldany VALUES("lattafa_khamrah-3", 1, 2, '3', 1495);
INSERT INTO termek_peldany VALUES("lattafa_khamrah-10", 1, 2, '10', 3795);

INSERT INTO termek_peldany VALUES("armaf_cdnim-3", 2, 1, '3', 1195);
INSERT INTO termek_peldany VALUES("armaf_cdnim-10", 2, 1, '10', 2895);

INSERT INTO termek_peldany VALUES("lattafa_asad-3", 3, 1, '3', 895);
INSERT INTO termek_peldany VALUES("lattafa_asad-10", 3, 1, '10', 1995);

INSERT INTO termek_peldany VALUES("rasasi_hawas-3", 4, 1, '3', 1495);
INSERT INTO termek_peldany VALUES("rasasi_hawas-10", 4, 1, '10', 3795);

INSERT INTO termek_peldany VALUES("afnan_turathi_blue-3", 5, 1, '3', 1195);
INSERT INTO termek_peldany VALUES("afnan_turathi_blue-10", 5, 1, '10', 2895);

INSERT INTO termek_peldany VALUES("lattafa_nebras-3", 6, 3, '3', 1495);
INSERT INTO termek_peldany VALUES("lattafa_nebras-10", 6, 3, '10', 3795);