create database if not exists `equip431_impacto`;

use `equip431_impacto`;

-- ---------------------------------------------------------------------------
-- CRIA TABELA `equip431_impacto`.`usuario`
-- ---------------------------------------------------------------------------
create table `equip431_impacto`.`usuario` (
    `id`                    int(11) not null primary key auto_increment,
    `nome`                  varchar(255) not null,
    `imagem`                varchar(255) not null default 'user/default.png',
    `cpf`                   char(8) not null,
    `rg`                    varchar(25) not null,
    `data_nascimento`       timestamp null,
    `genero`                char(1) not null,
    `cep`                   varchar(9) not null,
    `numero`                int(11) not null,
    `complemento`           varchar(255) null,
    `logradouro`            varchar(125) null,
    `endereco`              varchar(255) null,
    `bairro`                varchar(125) null,
    `cidade`                varchar(125) null,
    `estado`                char(2) null,
    `pais`                  varchar(125) null,
    `telefone`              varchar(20) null,
    `ceular`                varchar(20) null,
    `necessidade_especial`  char(1) not null default 'n',
    -- Informações da conta
    `hash`                  char(40) not null,
    `salt`                  char(40) not null,
    `activation_token`      char(40) not null,
    `activated_at`          timestamp null,
    `deactivated_at`        timestamp null,
    `ativo`                 char(1) not null default 'n',
    `data_cadastro`         timestamp not null default current_timestamp
);

-- ---------------------------------------------------------------------------
-- CRIA TABELA `equip431_impacto`.`categoria`
-- ---------------------------------------------------------------------------
create table `equip431_impacto`.`categoria` (
    `id`                    int(11) not null primary key auto_increment,
    `nome`                  varchar(125) not null,
    `imagem`                varchar(125) not null default 'categorias/default.png',
    `ativo`                 char(1) not null default 's',
    `data_cadastro`         timestamp not null default current_timestamp
);

-- ---------------------------------------------------------------------------
-- CRIA TABELA `equip431_impacto`.`curso`
-- ---------------------------------------------------------------------------
create table `equip431_impacto`.`curso` (
    `id`                    int(11) not null primary key auto_increment,
    `nome`                  varchar(125) not null,
    `imagem`                varchar(255) not null default 'treinamentos/default.png',
    `duracao`               int(11) not null,
    `descricao`             text null,
    `pre_requisito`         text null,
    `conteudo_programatico` text null,
    `valor`                 numeric(10, 2) not null,
    `parcelas`              int(11) null default 5,
    `categoria`             int(11) null,
    `ativo`                 char(1) not null default 's',
    `data_cadastro`         timestamp not null default current_timestamp,
    constraint `fk_treinamento_categoria_categoria`
        foreign key (`categoria`) references `categoria`(`id`)
);

-- ---------------------------------------------------------------------------
-- CRIA TABELA `equip431_impacto`.`treinamento`
-- ---- Períodos
-- ---- ---- 1 - Manhã
-- ---- ---- 2 - Tarde
-- ---- ---- 3 - Noite
-- ---- ---- 4 - Madrugada
-- ---- Dias da semana
-- ---- ---- 1 - Seg à Sexta
-- ---- ---- 2 - Seg à Quinta
-- ---- ---- 3 - Terça à Sexta
-- ---- ---- 4 - Domingo
-- ---- ---- 5 - Sábado
-- ---- Unidades
-- ---- ---- 1 - Central
-- ---------------------------------------------------------------------------
create table `equip431_impacto`.`treinamento` (
    `id`                    int(11) not null primary key auto_increment,
    `curso`                 int(11) not null,
    `inicio`                timestamp null,
    `termino`               timestamp null,
    `carga_horaria`         time not null,
    `dias_da_semana`        int(11) not null,
    `vagas`                 int(11) not null default 40,
    `periodo`               int(11) not null,
    `promocao`              char(1) null default 'n',
    `unidade`               int(11) not null default 1,
    `sala`                  int(11) null,
    `valor_promocional`     numeric(10, 2) null,
    `ativo`                 char(1) not null default 's',
    `data_cadastro`         timestamp not null default current_timestamp,
    constraint `fk_treinamento_curso`
        foreign key (`curso`) references `curso`(`id`),
    constraint `ck_treinamento_curso`
        check (`periodo` in (1, 2, 3, 4))
);

-- ---------------------------------------------------------------------------
-- CRIA TABELA `equip431_impacto`.`certificacao`
-- ---------------------------------------------------------------------------
create table `equip431_impacto`.`certificacao` (
    `id`                    int(11) not null primary key auto_increment,
    `nome`                  varchar(125)  not null,
    `descricao`             text null,
    `ativo`                 char(1) not null default 's',
    `data_cadastro`         timestamp not null default current_timestamp,
);

-- ---------------------------------------------------------------------------
-- CRIA TABELA `equip431_impacto`.`certificacao_curso`
-- ---------------------------------------------------------------------------
create table `equip431_impacto`.`certificacao_categoria` (
    `certicacao`            int(11) not null,
    `categoria`             int(11) not null,
    `ativo`                 char(1) not null default 's',
    `data_cadastro`         timestamp not null default current_timestamp,
    primary key(`certificao`, `categoria`),
    constraint `fk_certificacao_categoria_categoria`
        foreign key (`categoria`) references `categoria`(`id`),
    constraint `fk_certificacao_categoria_certificao`
        foreign key (`certificacao`) references `certificacao`(`id`)
);

-- ---------------------------------------------------------------------------
-- CRIA TABELA `equip431_impacto`.`certificacao_curso`
-- ---------------------------------------------------------------------------
create table `equip431_impacto`.`certificacao_curso` (
    `certificao`            int(11) not null,
    `curso`                 int(11) not null,
    `ativo`                 char(1) not null default 's',
    `data_cadastro`         timestamp not null default current_timestamp,
    constraint `fk_certificao_curso_curso`
        foreign key (`curso`) references `curso`(`id`),
    constraint `fk_certificao_curso_certificao`
        foreign key (`certificao`) references `certificao`(`id`)
);

