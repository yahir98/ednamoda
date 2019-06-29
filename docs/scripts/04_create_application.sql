CREATE TABLE `application`(
  `idapplication` INT NOT NULL AUTO_INCREMENT,
  `idapplicationname` VARCHAR(45) NULL,
  `idapplicationversion` DECIMAL(4,2) NULL,
  `idapplicationdescription`VARCHAR(1024) NULL,
  `idapplicationcuenta`VARCHAR(45) NULL,
  `idapplicationauthor` VARCHAR(45) NULL,
  `idapplicationemail` VARCHAR(45) NULL,
   PRIMARY KEY (`idapplication`));
