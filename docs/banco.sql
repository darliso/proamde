
CREATE  TABLE IF NOT EXISTS responsavel (
  id INTEGER NOT NULL AUTOINCREMENT ,
  cpf VARCHAR(45) NOT NULL ,
  nome VARCHAR(45) NOT NULL ,
  telefone VARCHAR(45) NULL)
;


CREATE  TABLE IF NOT EXISTS pessoa (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  nome VARCHAR(250) NOT NULL ,
  cpf INTEGER NOT NULL ,
  data_de_nascimento DATE NOT NULL ,
  rg INTEGER NOT NULL ,
  genero VARCHAR(45) NOT NULL ,
  naturalidade VARCHAR(45) NOT NULL ,
  endereco VARCHAR(250) NOT NULL ,
  cep INTEGER NOT NULL ,
  telefone VARCHAR(45) NULL ,
  celular VARCHAR(45) NULL ,
  email VARCHAR(250) NULL ,
  escolaridade VARCHAR(45) NULL DEFAULT 'Outros' ,
  rede_ensino VARCHAR(45) NULL DEFAULT 'Outros')
;


CREATE  TABLE IF NOT EXISTS polo (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  nome VARCHAR(45) NOT NULL ,
  UNIQUE INDEX nome_UNIQUE (nome ASC) )
;


CREATE  TABLE IF NOT EXISTS funcionario (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  pessoa_id INTEGER NOT NULL ,
  polo_id INTEGER NOT NULL ,
  pis_pasep VARCHAR(45) NOT NULL ,
  tipo VARCHAR(45) NOT NULL ,
  horario VARCHAR(45) NOT NULL ,
  curso_formacao VARCHAR(250) NULL ,
  instituicao_ensino VARCHAR(250) NULL ,
  observacao VARCHAR(250) NULL ,
  INDEX fk_funcionario_pessoa1_idx (pessoa_id ASC) ,
  INDEX fk_funcionario_local1_idx (polo_id ASC) ,
  CONSTRAINT fk_funcionario_pessoa1
    FOREIGN KEY (pessoa_id )
    REFERENCES pessoa (id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_funcionario_local1
    FOREIGN KEY (polo_id )
    REFERENCES polo (id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


CREATE  TABLE IF NOT EXISTS aluno (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  responsavel_id INTEGER NOT NULL ,
  pessoa_id INTEGER NOT NULL ,
  atendente_id INTEGER NOT NULL ,
  foto VARCHAR(250) NOT NULL ,
  renda_familiar DOUBLE NOT NULL ,
  nome_pai VARCHAR(250) NOT NULL ,
  nome_mae VARCHAR(250) NOT NULL ,
  situacao_escolar VARCHAR(45) NOT NULL ,
  certidao_numero VARCHAR(45) NULL ,
  certidao_folha VARCHAR(45) NULL ,
  certidao_livro VARCHAR(45) NULL ,
  certidao_cartorio VARCHAR(45) NULL ,
  tipo_sanguineo VARCHAR(45) NULL DEFAULT 'Não Sabe' ,
  estado_civil VARCHAR(45) NULL DEFAULT 'Solteiro' ,
  profissao VARCHAR(45) NULL DEFAULT 'Outros' ,
  bairro VARCHAR(250) NULL ,
  zona VARCHAR(45) NULL ,
  ponto_referencia VARCHAR(250) NULL ,
  ocupacao_imovel VARCHAR(45) NULL DEFAULT 'Outros' ,
  tipo_habitacao VARCHAR(45) NULL DEFAULT 'Outros' ,
  hidraulica VARCHAR(45) NULL DEFAULT 'Outros' ,
  eletrica VARCHAR(45) NULL DEFAULT 'Outros' ,
  telefone_pai VARCHAR(45) NULL ,
  telefone_mae VARCHAR(45) NULL ,
  nome_escola VARCHAR(250) NULL ,
  zona_escola VARCHAR(45) NULL ,
  inicio_deficiencia DATE NULL ,
  alunocol VARCHAR(45) NULL ,
  observacao VARCHAR(250) NULL ,
  INDEX fk_portador_responsavel_idx (responsavel_id ASC) ,
  INDEX fk_portador_pessoa1_idx (pessoa_id ASC) ,
  INDEX fk_aluno_funcionario1_idx (atendente_id ASC) ,
  CONSTRAINT fk_portador_responsavel
    FOREIGN KEY (responsavel_id )
    REFERENCES responsavel (id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_portador_pessoa1
    FOREIGN KEY (pessoa_id )
    REFERENCES pessoa (id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_aluno_funcionario1
    FOREIGN KEY (atendente_id )
    REFERENCES funcionario (id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


CREATE  TABLE IF NOT EXISTS tbl_user (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  username VARCHAR(45) NOT NULL ,
  password VARCHAR(20) NOT NULL ,
  email VARCHAR(128) NOT NULL
  funcionario_id INTEGER NULL ,
  INDEX fk_usuario_funcionario1_idx (funcionario_id ASC) ,
  UNIQUE INDEX login_UNIQUE (login ASC) ,
  CONSTRAINT fk_usuario_funcionario1
    FOREIGN KEY (funcionario_id )
    REFERENCES funcionario (id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


CREATE  TABLE IF NOT EXISTS classe (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  nome VARCHAR(45) NOT NULL ,
  descricao VARCHAR(250) NULL  )
;


CREATE  TABLE IF NOT EXISTS caracteristica (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  nome VARCHAR(45) NOT NULL ,
  descricao VARCHAR(45) NULL )
;


CREATE  TABLE IF NOT EXISTS classe_has_caracteristica (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  classe_id INTEGER NOT NULL ,
  caracteristica_id INTEGER NOT NULL ,
  INDEX fk_classe_has_caracteristica_caracteristica1_idx (caracteristica_id ASC) ,
  INDEX fk_classe_has_caracteristica_classe1_idx (classe_id ASC) ,
  CONSTRAINT fk_classe_has_caracteristica_classe1
    FOREIGN KEY (classe_id )
    REFERENCES classe (id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_classe_has_caracteristica_caracteristica1
    FOREIGN KEY (caracteristica_id )
    REFERENCES caracteristica (id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


CREATE  TABLE IF NOT EXISTS pergunta (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  pergunta VARCHAR(250) NOT NULL )
;


CREATE  TABLE IF NOT EXISTS classe_has_pergunta (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  classe_id INTEGER NOT NULL ,
  pergunta_id INTEGER NOT NULL ,
  INDEX fk_classe_has_pergunta_pergunta1_idx (pergunta_id ASC) ,
  INDEX fk_classe_has_pergunta_classe1_idx (classe_id ASC) ,
  CONSTRAINT fk_classe_has_pergunta_classe1
    FOREIGN KEY (classe_id )
    REFERENCES classe (id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_classe_has_pergunta_pergunta1
    FOREIGN KEY (pergunta_id )
    REFERENCES pergunta (id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


CREATE  TABLE IF NOT EXISTS turma (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  classe_id INTEGER NOT NULL ,
  polo_id INTEGER NOT NULL ,
  nome VARCHAR(45) NOT NULL ,
  ano DATE NOT NULL ,
  vagas INTEGER NOT NULL ,
  unique TINYINT(1) NOT NULL DEFAULT true ,
  INDEX fk_table1_classe1_idx (classe_id ASC) ,
  INDEX fk_turma_local1_idx (polo_id ASC) ,
  CONSTRAINT fk_table1_classe1
    FOREIGN KEY (classe_id )
    REFERENCES classe (id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_turma_local1
    FOREIGN KEY (polo_id )
    REFERENCES polo (id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table turma_has_aluno
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS turma_has_aluno (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  turma_int INTEGER NOT NULL ,
  aluno_id INTEGER NOT NULL ,
  data_avaliacao1 DATE NULL ,
  data_avaliacao2 DATE NULL ,
  INDEX fk_turma_has_aluno_aluno1_idx (aluno_id ASC) ,
  INDEX fk_turma_has_aluno_turma1_idx (turma_int ASC) ,
  CONSTRAINT fk_turma_has_aluno_turma1
    FOREIGN KEY (turma_int )
    REFERENCES turma (id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_turma_has_aluno_aluno1
    FOREIGN KEY (aluno_id )
    REFERENCES aluno (id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table avaliacao_diaria
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS avaliacao_diaria (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  data DATE NOT NULL ,
  texto VARCHAR(250) NOT NULL ,
  turma_has_aluno_id INTEGER NOT NULL ,
  INDEX fk_avaliacao_diaria_turma_has_aluno1_idx (turma_has_aluno_id ASC) ,
  CONSTRAINT fk_avaliacao_diaria_turma_has_aluno1
    FOREIGN KEY (turma_has_aluno_id )
    REFERENCES turma_has_aluno (id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table turma_has_funcionario
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS turma_has_funcionario (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  turma_int INTEGER NOT NULL ,
  funcionario_id INTEGER NOT NULL ,
  INDEX fk_turma_has_funcionario_funcionario1_idx (funcionario_id ASC) ,
  INDEX fk_turma_has_funcionario_turma1_idx (turma_int ASC) ,
  CONSTRAINT fk_turma_has_funcionario_turma1
    FOREIGN KEY (turma_int )
    REFERENCES turma (id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_turma_has_funcionario_funcionario1
    FOREIGN KEY (funcionario_id )
    REFERENCES funcionario (id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table aluno_has_caracteristica
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS aluno_has_caracteristica (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  aluno_id INTEGER NOT NULL ,
  caracteristica_id INTEGER NOT NULL ,
  INDEX fk_aluno_has_caracteristica_caracteristica1_idx (caracteristica_id ASC) ,
  INDEX fk_aluno_has_caracteristica_aluno1_idx (aluno_id ASC) ,
  CONSTRAINT fk_aluno_has_caracteristica_aluno1
    FOREIGN KEY (aluno_id )
    REFERENCES aluno (id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_aluno_has_caracteristica_caracteristica1
    FOREIGN KEY (caracteristica_id )
    REFERENCES caracteristica (id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table avaliacao
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS avaliacao (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  turma_has_aluno_id INTEGER NOT NULL ,
  pergunta_id INTEGER NOT NULL ,
  resposta1 VARCHAR(250) NULL ,
  resposta2 VARCHAR(250) NULL ,
  INDEX fk_turma_has_aluno_has_pergunta_pergunta1_idx (pergunta_id ASC) ,
  INDEX fk_turma_has_aluno_has_pergunta_turma_has_aluno1_idx (turma_has_aluno_id ASC) ,
  CONSTRAINT fk_turma_has_aluno_has_pergunta_turma_has_aluno1
    FOREIGN KEY (turma_has_aluno_id )
    REFERENCES turma_has_aluno (id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_turma_has_aluno_has_pergunta_pergunta1
    FOREIGN KEY (pergunta_id )
    REFERENCES pergunta (id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table historico
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS historico (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  pessoa_id INTEGER NOT NULL ,
  data_entrada DATE NULL ,
  data_saida DATE NULL ,
  observacao VARCHAR(250) NULL ,
  INDEX fk_historico_pessoa1_idx (pessoa_id ASC) ,
  CONSTRAINT fk_historico_pessoa1
    FOREIGN KEY (pessoa_id )
    REFERENCES pessoa (id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table triagem
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS triagem (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  aluno_id INTEGER NOT NULL ,
  descricao VARCHAR(250) NOT NULL ,
  resposta VARCHAR(45) NOT NULL ,
  observacao VARCHAR(250) NULL ,
  INDEX fk_triagem_aluno1_idx (aluno_id ASC) ,
  CONSTRAINT fk_triagem_aluno1
    FOREIGN KEY (aluno_id )
    REFERENCES aluno (id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;
