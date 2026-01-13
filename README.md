//TODO coisas que cadastra pelo super admin:
filiais


//TODO coisas que cadastra por ti de cada filial:
calendario escolar
credenciamento
cursos
detalhe_curso
dirigentes
filiais
informacao
mapa_salas
paginas
servicos
usuarios


//TODO - Melhor estilização de mural e admin

//TODO - MUDAR NAVEGAÇÃO NAS PÁGINAS DO PAINEL ADMINISTRATIVO

//TESTE 


//CRIAÇÃO DE INSERTS
//====INSERT CURSOS PARA SETELAGOAS
INSERT INTO cursos (filial_id, title, subtitle)
VALUES (6, 'MEDICINA', 'Curso Graduação');

INSERT INTO cursos (filial_id, title, subtitle)
VALUES (6, 'ODONTOLOGIA', 'Curso Graduação');

//====INSERT CURSOS PARA VALENCA
INSERT INTO cursos (filial_id, title, subtitle)
VALUES (4, 'MEDICINA', 'Curso Graduação');

//====INSERT CURSOS PARA SORISSO
INSERT INTO cursos (filial_id, title, subtitle)
VALUES (3, 'MEDICINA', 'Curso Graduação');

//====INSERT CURSOS PARA PORTO SEGURO
INSERT INTO cursos (filial_id, title, subtitle)
VALUES (5, 'MEDICINA', 'Curso Graduação');

//====INSERT CURSOS PARA PASSOS
INSERT INTO cursos (filial_id, title, subtitle)
VALUES (2, 'ENFERMAGEM', 'Curso Graduação');

INSERT INTO cursos (filial_id, title, subtitle)
VALUES (2, 'FARMÁCIA', 'Curso Graduação');

INSERT INTO cursos (filial_id, title, subtitle)
VALUES (2, 'MEDICINA', 'Curso Graduação');

INSERT INTO cursos (filial_id, title, subtitle)
VALUES (2, 'ODONTOLOGIA', 'Curso Graduação');



//====INSERT CURSOS PARA PARACATU
INSERT INTO cursos (filial_id, title, subtitle)
VALUES (1, 'ADMINISTRAÇÃO', 'Curso Graduação');

INSERT INTO cursos (filial_id, title, subtitle)
VALUES (1, 'AGRONOMIA', 'Curso Graduação');

INSERT INTO cursos (filial_id, title, subtitle)
VALUES (1, 'DIREITO', 'Curso Graduação');

INSERT INTO cursos (filial_id, title, subtitle)
VALUES (1, 'EDUCAÇÃO FÍSICA BACHARELADO', 'Curso Graduação');

INSERT INTO cursos (filial_id, title, subtitle)
VALUES (1, 'EDUCAÇÃO FÍSICA LICENCIATURA', 'Curso Graduação');

INSERT INTO cursos (filial_id, title, subtitle)
VALUES (1, 'EDUCAÇÃO FÍSICA LICENCIATURA', 'Curso Graduação');

INSERT INTO cursos (filial_id, title, subtitle)
VALUES (1, 'ENFERMAGEM', 'Curso Graduação');

INSERT INTO cursos (filial_id, title, subtitle)
VALUES (1, 'MEDICINA', 'Curso Graduação');

INSERT INTO cursos (filial_id, title, subtitle)
VALUES (1, 'MEDICINA VETERINARIA', 'Curso Graduação');

INSERT INTO cursos (filial_id, title, subtitle)
VALUES (1, 'NUTRIÇÃO', 'Curso Graduação');

INSERT INTO cursos (filial_id, title, subtitle)
VALUES (1, 'ODONTOLOGIA', 'Curso Graduação');

INSERT INTO cursos (filial_id, title, subtitle)
VALUES (1, 'PSICOLOGIA', 'Curso Graduação');

INSERT INTO cursos (filial_id, title, subtitle)
VALUES (1, 'SISTEMAS DE INFORMAÇÃO', 'Curso Graduação');

INSERT INTO cursos (filial_id, title, subtitle)
VALUES (1, 'EAD UNIATENAS', 'Curso Graduação');

//=======
    CADASTRAR OS CURSOS PARA SORRISO
//========

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (3,4,'CADASTRAR EM DETALHES PARA CADA CURSO','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (3,4,'PORTARIA','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (3,4,'CORPO DOCENTE','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (3,4,'MATRIZ CURRICULAR','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (3,4,'DESEMPENHO COORDENADOR','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (3,4,'PLANO DE AÇÃO COORDENADOR','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (3,4,'PPC','http://loclhost:8000/pksj.pdf');


//=======
    CADASTRAR OS CURSOS PARA VALENÇA
//========
INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (4,3,'CADASTRAR EM DETALHES PARA CADA CURSO','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (4,3,'PORTARIA','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (4,3,'CORPO DOCENTE','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (4,3,'MATRIZ CURRICULAR','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (4,3,'DESEMPENHO COORDENADOR','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (4,3,'PLANO DE AÇÃO COORDENADOR','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (4,3,'PPC','http://loclhost:8000/pksj.pdf');



//=======
    CADASTRAR OS CURSOS PARA PORTO SEGURO
//========
INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (5,5,'CADASTRAR EM DETALHES PARA CADA CURSO','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (5,5,'PORTARIA','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (5,5,'CORPO DOCENTE','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (5,5,'MATRIZ CURRICULAR','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (5,5,'DESEMPENHO COORDENADOR','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (5,5,'PLANO DE AÇÃO COORDENADOR','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (5,5,'PPC','http://loclhost:8000/pksj.pdf');



//=======
    CADASTRAR OS CURSOS PARA SETELAGOAS
//========
--MEDICINA
INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (6,1,'CADASTRAR EM DETALHES PARA CADA CURSO','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (6,1,'PORTARIA','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (6,1,'CORPO DOCENTE','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (6,1,'MATRIZ CURRICULAR','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (6,1,'DESEMPENHO COORDENADOR','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (6,1,'PLANO DE AÇÃO COORDENADOR','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (6,1,'PPC','http://loclhost:8000/pksj.pdf');


INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (6,2,'CADASTRAR EM DETALHES PARA CADA CURSO','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (6,2,'PORTARIA','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (6,2,'CORPO DOCENTE','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (6,2,'MATRIZ CURRICULAR','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (6,2,'DESEMPENHO COORDENADOR','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (6,2,'PLANO DE AÇÃO COORDENADOR','http://loclhost:8000/pksj.pdf');

INSERT INTO detalhe_curso (filial_id, curso_id, title, url_pdf)
VALUES (6,2,'PPC','http://loclhost:8000/pksj.pdf');



#Criar docker 
docker-compose up -d --build

#Instale as dependências (se necessário):
docker exec -it laravel_app composer install