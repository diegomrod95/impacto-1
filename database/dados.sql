-- ----------------------------------------------------------------------------
-- CATEGORIAS
-- ----------------------------------------------------------------------------
insert into `categoria`(`nome`) values ('Arte & Design');
insert into `categoria`(`nome`) values ('Desenvolvimento');
insert into `categoria`(`nome`) values ('Office');
insert into `categoria`(`nome`) values ('Redes');
insert into `categoria`(`nome`) values ('Hardware');
insert into `categoria`(`nome`) values ('Planejamento & Gestão');

-- ----------------------------------------------------------------------------
-- CERTIFICAÇÕES
-- ----------------------------------------------------------------------------
insert into `certificacao` (`nome`, `descricao`) values ('Fotografia', '');
insert into `certificacao` (`nome`, `descricao`) values ('Photoshop', '');
insert into `certificacao` (`nome`, `descricao`) values ('Designer Grafico', '');
insert into `certificacao` (`nome`, `descricao`) values ('Infografia', '');
insert into `certificacao` (`nome`, `descricao`) values ('Web Designer', '');
insert into `certificacao` (`nome`, `descricao`) values ('Adobe Ilustrator', '');

insert into `certificacao` (`nome`, `descricao`) values ('.NET C#', '');
insert into `certificacao` (`nome`, `descricao`) values ('.NET VB', '');
insert into `certificacao` (`nome`, `descricao`) values ('Java', '');
insert into `certificacao` (`nome`, `descricao`) values ('PHP', '');
insert into `certificacao` (`nome`, `descricao`) values ('HTML5 Developer', '');
insert into `certificacao` (`nome`, `descricao`) values ('Google App Engine', '');

insert into `certificacao` (`nome`, `descricao`) values ('Excel Avançado', '');
insert into `certificacao` (`nome`, `descricao`) values ('VBA Developer', '');
insert into `certificacao` (`nome`, `descricao`) values ('Access Avançado', '');
insert into `certificacao` (`nome`, `descricao`) values ('Office Completo', '');

insert into `certificacao` (`nome`, `descricao`) values ('Oracle', '');
insert into `certificacao` (`nome`, `descricao`) values ('Básico em Redes', '');
insert into `certificacao` (`nome`, `descricao`) values ('Redes Avançado', '');

insert into `certificacao` (`nome`, `descricao`) values ('Hardware Esentials', '');

insert into `certificacao` (`nome`, `descricao`) values ('Project Manager', '');

-- ----------------------------------------------------------------------------
-- RELAÇÃO CATEGORIA - CERTIFICAÇÕES
-- ----------------------------------------------------------------------------
insert into `certificacao_categoria` (`categoria`, `certificacao`) values (1, 1);
insert into `certificacao_categoria` (`categoria`, `certificacao`) values (1, 2);
insert into `certificacao_categoria` (`categoria`, `certificacao`) values (1, 3);
insert into `certificacao_categoria` (`categoria`, `certificacao`) values (1, 4);
insert into `certificacao_categoria` (`categoria`, `certificacao`) values (1, 5);
insert into `certificacao_categoria` (`categoria`, `certificacao`) values (1, 6);

insert into `certificacao_categoria` (`categoria`, `certificacao`) values (2, 7);
insert into `certificacao_categoria` (`categoria`, `certificacao`) values (2, 8);
insert into `certificacao_categoria` (`categoria`, `certificacao`) values (2, 9);
insert into `certificacao_categoria` (`categoria`, `certificacao`) values (2, 10);
insert into `certificacao_categoria` (`categoria`, `certificacao`) values (2, 11);
insert into `certificacao_categoria` (`categoria`, `certificacao`) values (2, 12);

insert into `certificacao_categoria` (`categoria`, `certificacao`) values (3, 13);
insert into `certificacao_categoria` (`categoria`, `certificacao`) values (3, 14);
insert into `certificacao_categoria` (`categoria`, `certificacao`) values (3, 15);
insert into `certificacao_categoria` (`categoria`, `certificacao`) values (3, 16);

insert into `certificacao_categoria` (`categoria`, `certificacao`) values (4, 17);
insert into `certificacao_categoria` (`categoria`, `certificacao`) values (4, 18);
insert into `certificacao_categoria` (`categoria`, `certificacao`) values (4, 19);

insert into `certificacao_categoria` (`categoria`, `certificacao`) values (5, 20);

insert into `certificacao_categoria` (`categoria`, `certificacao`) values (6, 21);


