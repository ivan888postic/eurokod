
/*
    Create table Vlasnik
*/
CREATE TABLE `eurokod`.`vlasnici` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `naziv` VARCHAR(50) NOT NULL , 
    `opis` TEXT NULL , 
    `direktor_id` INT NOT NULL ,  
    `adresa` VARCHAR(50) NOT NULL , 
    `mjesto` VARCHAR(30) NOT NULL , 
    `postanski_broj` VARCHAR(5) NOT NULL , 
    `telefon` VARCHAR(20) NULL , 
    `fax` VARCHAR(20) NULL , 
    `ziroracun` VARCHAR(50) NULL , 
    `dnevnica_kn` INT NOT NULL , 
    `dnevnica_eur` INT NOT NULL , 
    `benzin_kn` INT NOT NULL , 
    `benzin_eur` INT NOT NULL , 
    `tecaj_kn_euro` INT NOT NULL , 
    PRIMARY KEY (`id`)
)

/*
    Create table Automobili
*/
CREATE TABLE `eurokod`.`automobili` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `naziv` VARCHAR(30) NOT NULL ,
    `reg_oznaka` VARCHAR(10) NOT NULL ,
    `km` INT NOT NULL ,
    PRIMARY KEY (`id`)
) 


/*
    Create table Djelatnici
*/
CREATE TABLE `eurokod`.`djelatnici` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `naziv` VARCHAR(30) NOT NULL , 
    `titula` VARCHAR(30) NOT NULL , 
    `posao` VARCHAR(30) NOT NULL , 
    `adresa` VARCHAR(50) NOT NULL , 
    `opcina_preb_id` INT NOT NULL , 
    `opcina_rad_id` INT NOT NULL , 
    PRIMARY KEY (`id`)
)

/*
    Create table Opcine
*/
CREATE TABLE `eurokod`.`opcine` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `naziv` VARCHAR(30) NOT NULL , 
    `sifra` VARCHAR(5) NOT NULL , 
    PRIMARY KEY (`id`)
)


CREATE TABLE `eurokod`.`troskovi` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `nalog_id` INT NOT NULL AUTO_INCREMENT , `opis` VARCHAR(30) NOT NULL , `iznos` DECIMAL(11,2) NOT NULL , PRIMARY KEY (`id`, `nalog_id`))