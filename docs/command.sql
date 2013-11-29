
CREATE  TABLE IF NOT EXISTS responsavel (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  cpf VARCHAR(45) NOT NULL ,
  nome VARCHAR(250) NOT NULL ,
  endereco VARCHAR (250) NOT NULL,
  identidade INTEGER NOT NULL,
  bairro VARCHAR (250) NOT NULL,
  cidade VARCHAR (250) NOT NULL,
  estado VARCHAR (250) NOT NULL,
  estado_civil VARCHAR(45) NOT NULL,
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
  nome VARCHAR(45) NOT NULL )
;


CREATE  TABLE IF NOT EXISTS funcionario (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  pessoa_id INTEGER NOT NULL CONSTRAINT fk_funcionario_pessoa1 REFERENCES pessoa (id ),
  polo_id INTEGER NOT NULL CONSTRAINT fk_funcionario_polo1 REFERENCES polo (id ),
  pis_pasep VARCHAR(45) NOT NULL ,
  tipo VARCHAR(45) NOT NULL ,
  horario VARCHAR(45) NOT NULL ,
  curso_formacao VARCHAR(250) NULL ,
  instituicao_ensino VARCHAR(250) NULL ,
  observacao VARCHAR(250) NULL )
;


CREATE  TABLE IF NOT EXISTS aluno (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  responsavel_id INTEGER NOT NULL CONSTRAINT responsavel_aluno1 REFERENCES responsavel (id ),
  pessoa_id INTEGER NOT NULL  CONSTRAINT pessoa_aluno1 REFERENCES pessoa (id ),
  atendente_id INTEGER NOT NULL CONSTRAINT funcionario_aluno1 REFERENCES funcionario (id ),
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
  observacao VARCHAR(250) NULL );


CREATE  TABLE IF NOT EXISTS tbl_user (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  username VARCHAR(45) NOT NULL ,
  password VARCHAR(20) NOT NULL ,
  email VARCHAR(128) NOT NULL,
  funcionario_id INTEGER NULL CONSTRAINT user_funcionario1 REFERENCES funcionario (id ));


CREATE  TABLE IF NOT EXISTS classe (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  nome VARCHAR(45) NOT NULL ,
  descricao VARCHAR(250) NULL  );


CREATE  TABLE IF NOT EXISTS caracteristica (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  nome VARCHAR(45) NOT NULL ,
  descricao VARCHAR(45) NULL );


CREATE  TABLE IF NOT EXISTS classe_has_caracteristica (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  classe_id INTEGER NOT NULL CONSTRAINT cr_classe1 REFERENCES classe (id ),
  caracteristica_id INTEGER NOT NULL CONSTRAINT cr_caracteristica1 REFERENCES caracteristica (id ));


CREATE  TABLE IF NOT EXISTS pergunta (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  pergunta VARCHAR(250) NOT NULL );


CREATE  TABLE IF NOT EXISTS classe_has_pergunta (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  classe_id INTEGER NOT NULL CONSTRAINT cp_classe1 REFERENCES classe (id ),
  pergunta_id INTEGER NOT NULL CONSTRAINT cp_pergunta1 REFERENCES pergunta (id ));


CREATE  TABLE IF NOT EXISTS turma (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  classe_id INTEGER NOT NULL CONSTRAINT turma_classe1 REFERENCES classe (id ),
  polo_id INTEGER NOT NULL CONSTRAINT turma_polo REFERENCES polo (id ),
  nome VARCHAR(45) NOT NULL ,
  ano DATE NOT NULL ,
  vagas INTEGER NOT NULL );


CREATE  TABLE IF NOT EXISTS turma_has_aluno (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  turma_int INTEGER NOT NULL CONSTRAINT ta_turma1 REFERENCES turma (id ),
  aluno_id INTEGER NOT NULL  CONSTRAINT ta_aluno1 REFERENCES aluno (id ),
  data_avaliacao1 DATE NULL ,
  data_avaliacao2 DATE NULL );


CREATE  TABLE IF NOT EXISTS avaliacao_diaria (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  data DATE NOT NULL ,
  texto VARCHAR(250) NOT NULL ,
  turma_has_aluno_id INTEGER NOT NULL CONSTRAINT ad_ta1 REFERENCES turma_has_aluno (id ));


CREATE  TABLE IF NOT EXISTS turma_has_funcionario (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  turma_int INTEGER NOT NULL ,
  funcionario_id INTEGER NOT NULL CONSTRAINT thf_funcionario1 REFERENCES funcionario (id ));


CREATE  TABLE IF NOT EXISTS aluno_has_caracteristica (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  aluno_id INTEGER NOT NULL CONSTRAINT ahc_aluno1 REFERENCES aluno (id ),
  caracteristica_id INTEGER NOT NULL CONSTRAINT ahc_caracteristica1 REFERENCES  caracteristica (id ));


CREATE  TABLE IF NOT EXISTS avaliacao (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  turma_has_aluno_id INTEGER NOT NULL CONSTRAINT avaliacao_tha1 REFERENCES turma_has_aluno (id ),
  pergunta_id INTEGER NOT NULL  CONSTRAINT avaliacao_pergunta1 REFERENCES pergunta (id ),
  resposta1 VARCHAR(250) NULL ,
  resposta2 VARCHAR(250) NULL );


CREATE  TABLE IF NOT EXISTS historico (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT ,
  pessoa_id INTEGER NOT NULL CONSTRAINT historico_pessoa1 REFERENCES pessoa (id),
  data_entrada DATE NULL ,
  data_saida DATE NULL ,
  observacao VARCHAR(250) NULL );


CREATE  TABLE IF NOT EXISTS triagem (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  aluno_id INTEGER NOT NULL CONSTRAINT triagem_aluno1 REFERENCES aluno (id),
  descricao VARCHAR(250) NOT NULL ,
  resposta VARCHAR(45) NOT NULL ,
  observacao VARCHAR(250) NULL );
