SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`responsavel`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`responsavel` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `cpf` VARCHAR(45) NOT NULL ,
  `nome` VARCHAR(45) NOT NULL ,
  `telefone` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pessoa`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`pessoa` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(250) NOT NULL ,
  `cpf` BIGINT NOT NULL ,
  `data_de_nascimento` DATE NOT NULL ,
  `rg` BIGINT NOT NULL ,
  `genero` VARCHAR(45) NOT NULL ,
  `naturalidade` VARCHAR(45) NOT NULL ,
  `endereco` VARCHAR(250) NOT NULL ,
  `cep` BIGINT NOT NULL ,
  `telefone` VARCHAR(45) NULL ,
  `celular` VARCHAR(45) NULL ,
  `email` VARCHAR(250) NULL ,
  `escolaridade` VARCHAR(45) NULL DEFAULT 'Outros' ,
  `rede_ensino` VARCHAR(45) NULL DEFAULT 'Outros' ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`polo`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`polo` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`funcionario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`funcionario` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `pessoa_id` INT NOT NULL ,
  `polo_id` INT NOT NULL ,
  `pis_pasep` VARCHAR(45) NOT NULL ,
  `tipo` VARCHAR(45) NOT NULL ,
  `horario` VARCHAR(45) NOT NULL ,
  `curso_formacao` VARCHAR(250) NULL ,
  `instituicao_ensino` VARCHAR(250) NULL ,
  `observacao` VARCHAR(250) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_funcionario_pessoa1_idx` (`pessoa_id` ASC) ,
  INDEX `fk_funcionario_local1_idx` (`polo_id` ASC) ,
  CONSTRAINT `fk_funcionario_pessoa1`
    FOREIGN KEY (`pessoa_id` )
    REFERENCES `mydb`.`pessoa` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_funcionario_local1`
    FOREIGN KEY (`polo_id` )
    REFERENCES `mydb`.`polo` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`aluno`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`aluno` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `responsavel_id` INT NOT NULL ,
  `pessoa_id` INT NOT NULL ,
  `atendente_id` INT NOT NULL ,
  `foto` VARCHAR(250) NOT NULL ,
  `renda_familiar` DOUBLE NOT NULL ,
  `nome_pai` VARCHAR(250) NOT NULL ,
  `nome_mae` VARCHAR(250) NOT NULL ,
  `situacao_escolar` VARCHAR(45) NOT NULL ,
  `certidao_numero` VARCHAR(45) NULL ,
  `certidao_folha` VARCHAR(45) NULL ,
  `certidao_livro` VARCHAR(45) NULL ,
  `certidao_cartorio` VARCHAR(45) NULL ,
  `tipo_sanguineo` VARCHAR(45) NULL DEFAULT 'Não Sabe' ,
  `estado_civil` VARCHAR(45) NULL DEFAULT 'Solteiro' ,
  `profissao` VARCHAR(45) NULL DEFAULT 'Outros' ,
  `bairro` VARCHAR(250) NULL ,
  `zona` VARCHAR(45) NULL ,
  `ponto_referencia` VARCHAR(250) NULL ,
  `ocupacao_imovel` VARCHAR(45) NULL DEFAULT 'Outros' ,
  `tipo_habitacao` VARCHAR(45) NULL DEFAULT 'Outros' ,
  `hidraulica` VARCHAR(45) NULL DEFAULT 'Outros' ,
  `eletrica` VARCHAR(45) NULL DEFAULT 'Outros' ,
  `telefone_pai` VARCHAR(45) NULL ,
  `telefone_mae` VARCHAR(45) NULL ,
  `nome_escola` VARCHAR(250) NULL ,
  `zona_escola` VARCHAR(45) NULL ,
  `inicio_deficiencia` DATE NULL ,
  `alunocol` VARCHAR(45) NULL ,
  `observacao` VARCHAR(250) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_portador_responsavel_idx` (`responsavel_id` ASC) ,
  INDEX `fk_portador_pessoa1_idx` (`pessoa_id` ASC) ,
  INDEX `fk_aluno_funcionario1_idx` (`atendente_id` ASC) ,
  CONSTRAINT `fk_portador_responsavel`
    FOREIGN KEY (`responsavel_id` )
    REFERENCES `mydb`.`responsavel` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_portador_pessoa1`
    FOREIGN KEY (`pessoa_id` )
    REFERENCES `mydb`.`pessoa` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_aluno_funcionario1`
    FOREIGN KEY (`atendente_id` )
    REFERENCES `mydb`.`funcionario` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `login` VARCHAR(45) NOT NULL ,
  `senha` VARCHAR(20) NOT NULL ,
  `funcionario_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_usuario_funcionario1_idx` (`funcionario_id` ASC) ,
  UNIQUE INDEX `login_UNIQUE` (`login` ASC) ,
  CONSTRAINT `fk_usuario_funcionario1`
    FOREIGN KEY (`funcionario_id` )
    REFERENCES `mydb`.`funcionario` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`classe`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`classe` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NOT NULL ,
  `descricao` VARCHAR(250) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`caracteristica`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`caracteristica` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NOT NULL ,
  `descricao` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`classe_has_caracteristica`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`classe_has_caracteristica` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `classe_id` INT NOT NULL ,
  `caracteristica_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_classe_has_caracteristica_caracteristica1_idx` (`caracteristica_id` ASC) ,
  INDEX `fk_classe_has_caracteristica_classe1_idx` (`classe_id` ASC) ,
  CONSTRAINT `fk_classe_has_caracteristica_classe1`
    FOREIGN KEY (`classe_id` )
    REFERENCES `mydb`.`classe` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_classe_has_caracteristica_caracteristica1`
    FOREIGN KEY (`caracteristica_id` )
    REFERENCES `mydb`.`caracteristica` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pergunta`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`pergunta` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `pergunta` VARCHAR(250) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`classe_has_pergunta`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`classe_has_pergunta` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `classe_id` INT NOT NULL ,
  `pergunta_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_classe_has_pergunta_pergunta1_idx` (`pergunta_id` ASC) ,
  INDEX `fk_classe_has_pergunta_classe1_idx` (`classe_id` ASC) ,
  CONSTRAINT `fk_classe_has_pergunta_classe1`
    FOREIGN KEY (`classe_id` )
    REFERENCES `mydb`.`classe` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_classe_has_pergunta_pergunta1`
    FOREIGN KEY (`pergunta_id` )
    REFERENCES `mydb`.`pergunta` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`turma`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`turma` (
  `int` INT NOT NULL ,
  `classe_id` INT NOT NULL ,
  `polo_id` INT NOT NULL ,
  `nome` VARCHAR(45) NOT NULL ,
  `ano` DATE NOT NULL ,
  `vagas` INT NOT NULL ,
  `unique` TINYINT(1) NOT NULL DEFAULT true ,
  PRIMARY KEY (`int`) ,
  INDEX `fk_table1_classe1_idx` (`classe_id` ASC) ,
  INDEX `fk_turma_local1_idx` (`polo_id` ASC) ,
  CONSTRAINT `fk_table1_classe1`
    FOREIGN KEY (`classe_id` )
    REFERENCES `mydb`.`classe` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_turma_local1`
    FOREIGN KEY (`polo_id` )
    REFERENCES `mydb`.`polo` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`turma_has_aluno`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`turma_has_aluno` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `turma_int` INT NOT NULL ,
  `aluno_id` INT NOT NULL ,
  `data_avaliacao1` DATE NULL ,
  `data_avaliacao2` DATE NULL ,
  INDEX `fk_turma_has_aluno_aluno1_idx` (`aluno_id` ASC) ,
  INDEX `fk_turma_has_aluno_turma1_idx` (`turma_int` ASC) ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_turma_has_aluno_turma1`
    FOREIGN KEY (`turma_int` )
    REFERENCES `mydb`.`turma` (`int` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_turma_has_aluno_aluno1`
    FOREIGN KEY (`aluno_id` )
    REFERENCES `mydb`.`aluno` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`avaliacao_diaria`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`avaliacao_diaria` (
  `int` INT NOT NULL AUTO_INCREMENT ,
  `data` DATE NOT NULL ,
  `texto` VARCHAR(250) NOT NULL ,
  `turma_has_aluno_id` INT NOT NULL ,
  PRIMARY KEY (`int`) ,
  INDEX `fk_avaliacao_diaria_turma_has_aluno1_idx` (`turma_has_aluno_id` ASC) ,
  CONSTRAINT `fk_avaliacao_diaria_turma_has_aluno1`
    FOREIGN KEY (`turma_has_aluno_id` )
    REFERENCES `mydb`.`turma_has_aluno` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`turma_has_funcionario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`turma_has_funcionario` (
  `id` BIGINT NOT NULL AUTO_INCREMENT ,
  `turma_int` INT NOT NULL ,
  `funcionario_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_turma_has_funcionario_funcionario1_idx` (`funcionario_id` ASC) ,
  INDEX `fk_turma_has_funcionario_turma1_idx` (`turma_int` ASC) ,
  CONSTRAINT `fk_turma_has_funcionario_turma1`
    FOREIGN KEY (`turma_int` )
    REFERENCES `mydb`.`turma` (`int` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_turma_has_funcionario_funcionario1`
    FOREIGN KEY (`funcionario_id` )
    REFERENCES `mydb`.`funcionario` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`aluno_has_caracteristica`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`aluno_has_caracteristica` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `aluno_id` INT NOT NULL ,
  `caracteristica_id` INT NOT NULL ,
  INDEX `fk_aluno_has_caracteristica_caracteristica1_idx` (`caracteristica_id` ASC) ,
  INDEX `fk_aluno_has_caracteristica_aluno1_idx` (`aluno_id` ASC) ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_aluno_has_caracteristica_aluno1`
    FOREIGN KEY (`aluno_id` )
    REFERENCES `mydb`.`aluno` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_aluno_has_caracteristica_caracteristica1`
    FOREIGN KEY (`caracteristica_id` )
    REFERENCES `mydb`.`caracteristica` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`avaliacao`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`avaliacao` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `turma_has_aluno_id` INT NOT NULL ,
  `pergunta_id` INT NOT NULL ,
  `resposta1` VARCHAR(250) NULL ,
  `resposta2` VARCHAR(250) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_turma_has_aluno_has_pergunta_pergunta1_idx` (`pergunta_id` ASC) ,
  INDEX `fk_turma_has_aluno_has_pergunta_turma_has_aluno1_idx` (`turma_has_aluno_id` ASC) ,
  CONSTRAINT `fk_turma_has_aluno_has_pergunta_turma_has_aluno1`
    FOREIGN KEY (`turma_has_aluno_id` )
    REFERENCES `mydb`.`turma_has_aluno` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_turma_has_aluno_has_pergunta_pergunta1`
    FOREIGN KEY (`pergunta_id` )
    REFERENCES `mydb`.`pergunta` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`historico`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`historico` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `pessoa_id` INT NOT NULL ,
  `data_entrada` DATE NULL ,
  `data_saida` DATE NULL ,
  `observacao` VARCHAR(250) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_historico_pessoa1_idx` (`pessoa_id` ASC) ,
  CONSTRAINT `fk_historico_pessoa1`
    FOREIGN KEY (`pessoa_id` )
    REFERENCES `mydb`.`pessoa` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`triagem`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`triagem` (
  `id` INT NOT NULL ,
  `aluno_id` INT NOT NULL ,
  `descricao` VARCHAR(250) NOT NULL ,
  `resposta` VARCHAR(45) NOT NULL ,
  `observacao` VARCHAR(250) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_triagem_aluno1_idx` (`aluno_id` ASC) ,
  CONSTRAINT `fk_triagem_aluno1`
    FOREIGN KEY (`aluno_id` )
    REFERENCES `mydb`.`aluno` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `mydb` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
