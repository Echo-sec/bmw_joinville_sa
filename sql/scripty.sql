create database BMW;
USE BMW;

CREATE TABLE IF NOT EXISTS `BMW`.`usuarios` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `nomeUsuario` VARCHAR(45) NOT NULL,
  `senha` CHAR(32) NOT NULL,
  `nivel` TINYINT NOT NULL COMMENT '1- Diretor / 2- Vendedor / 3- Fechador',
  `nomeCompleto` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BMW`.`carros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BMW`.`carros` (
  `idCarro` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `ano` INT(4) NOT NULL,
  `modelo` VARCHAR(45) NOT NULL,
  `chassi` VARCHAR(255) NOT NULL,
  `placa` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCarro`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BMW`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BMW`.`clientes` (
  `idCliente` INT NOT NULL AUTO_INCREMENT,
  `nomeCompleto` VARCHAR(255) NOT NULL,
  `cpf` BIGINT(11) NOT NULL,
  `cep` INT NOT NULL,
  `numero` INT(6) NOT NULL,
  `dataNascimento` DATE NOT NULL,
  `telefone` VARCHAR(11) NOT NULL,
  PRIMARY KEY (`idCliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BMW`.`agendamentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BMW`.`agendamentos` (
  `idAgendamento` INT NOT NULL AUTO_INCREMENT,
  `data` DATE NOT NULL,
  `hora` TIME NOT NULL,
  `clientes_idCliente` INT NOT NULL,
  `usuarios_idUsuario` INT NOT NULL,
  `carros_idCarro` INT NOT NULL,
  `detalhes` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idAgendamento`),
  INDEX `fk_agendamentos_clientes_idx` (`clientes_idCliente` ASC) ,
  INDEX `fk_agendamentos_usuarios1_idx` (`usuarios_idUsuario` ASC) ,
  INDEX `fk_agendamentos_carros1_idx` (`carros_idCarro` ASC) ,
  CONSTRAINT `fk_agendamentos_clientes`
    FOREIGN KEY (`clientes_idCliente`)
    REFERENCES `BMW`.`clientes` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_agendamentos_usuarios1`
    FOREIGN KEY (`usuarios_idUsuario`)
    REFERENCES `BMW`.`usuarios` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_agendamentos_carros1`
    FOREIGN KEY (`carros_idCarro`)
    REFERENCES `BMW`.`carros` (`idCarro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BMW`.`fechamentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BMW`.`fechamentos` (
  `idFechamento` INT NOT NULL AUTO_INCREMENT,
  `status` TINYINT NOT NULL COMMENT '1- aprovado\n2 - não aprovado',
  `valor` DECIMAL(8,2) NOT NULL,
  `observacao` VARCHAR(255) NOT NULL,
  `agendamentos_idAgendamento` INT NOT NULL,
  `fechador` INT NOT NULL,
  PRIMARY KEY (`idFechamento`),
  INDEX `fk_fechamentos_agendamentos1_idx` (`agendamentos_idAgendamento` ASC) ,
  INDEX `fk_fechamentos_usuarios1_idx` (`fechador` ASC) ,
  CONSTRAINT `fk_fechamentos_agendamentos1`
    FOREIGN KEY (`agendamentos_idAgendamento`)
    REFERENCES `BMW`.`agendamentos` (`idAgendamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_fechamentos_usuarios1`
    FOREIGN KEY (`fechador`)
    REFERENCES `BMW`.`usuarios` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
