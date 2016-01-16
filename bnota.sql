create database SNotas;

use SNotas;

create table Alumno(
pkAlumno int PRIMARY KEY auto_increment,
nombre varchar(50) NOT NULL,
facultad varchar(50) NOT NULL,
codigo nchar(9) NOT NULL,
password varchar(15) NOT NULL,
email varchar(30) NOT NULL,
dni nchar(8) NOT NULL,
fnac nchar(10) NOT NULL,
sexo varchar(9)) CHARSET=utf8;

create table Curso(
  pkCurso int PRIMARY KEY auto_increment,
  codCurso nchar(5) NOT NULL,
  cicloCurso int not null,
  descCurso varchar(50) NOT NULL,
  creditos nchar(2) NOT NULL,
  preRequisito varchar(20)) CHARSET=utf8;

INSERT INTO Curso (codCurso,cicloCurso,descCurso,creditos,preRequisito) values('CB101',1,'GEOMETRIA ANALITICA','3','');
INSERT INTO Curso (codCurso,cicloCurso,descCurso,creditos,preRequisito) values('CB121',1,'CALCULO DIFERENCIAL','5','');
INSERT INTO Curso (codCurso,cicloCurso,descCurso,creditos,preRequisito) values('CB201',1,'QUIMICA GENERAL','4','');
INSERT INTO Curso (codCurso,cicloCurso,descCurso,creditos,preRequisito) values('CB501',1,'DIBUJO DE INGENIERIA','3','');
INSERT INTO Curso (codCurso,cicloCurso,descCurso,creditos,preRequisito) values('HS101',1,'DESARROLLO PERSONAL','2','');
INSERT INTO Curso (codCurso,cicloCurso,descCurso,creditos,preRequisito) values('HS111',1,'TECNICAS DE COMUNICACION','3','');
INSERT INTO Curso (codCurso,cicloCurso,descCurso,creditos,preRequisito) values('ST101',1,'INTRODUCCION A LA INGENIERIA DE SISTEMAS','3','');

create table Seccion(
  pkSeccion int PRIMARY KEY auto_increment,
  codSeccion nchar(1) NOT NULL) CHARSET=utf8;

  INSERT INTO Seccion (codSeccion) values('U');
  INSERT INTO Seccion (codSeccion) values('V');
  INSERT INTO Seccion (codSeccion) values('X');
  INSERT INTO Seccion (codSeccion) values('W');

  create table Profesor(
    pkProfesor int PRIMARY KEY auto_increment,
    nombrePro varchar(50) NOT NULL,
    facultadPro varchar(50) NOT NULL,
    codPro nchar(9) NOT NULL,
    password varchar(15) NOT NULL,
    emailPro varchar(30) NOT NULL,
    dniPro nchar(8) NOT NULL,
    fnacPro nchar(10) NOT NULL,
    sexoPro varchar(9) NOT NULL) CHARSET=utf8;

  create table ProfesorxCurso (
    pkProfesorxCurso int PRIMARY KEY auto_increment,
    fkCurso int not null,
    fkSeccion int not null,
    FOREIGN KEY (fkCurso) REFERENCES Curso (pkCurso),
    FOREIGN KEY (fkSeccion) REFERENCES Seccion (pkSeccion)) CHARSET=utf8;

create table NotaxAlumno(
  pkNotaxAlumno int PRIMARY KEY auto_increment,
  notaxAlumno varchar(2),
  fkAlumno int not null,
  fkCurso int not null,
  FOREIGN KEY (fkAlumno) REFERENCES Alumno (pkAlumno),
  FOREIGN KEY (fkCurso) REFERENCES Curso (pkCurso)) CHARSET=utf8;

create table Evaluacion (
  pkEvaluacion int PRIMARY KEY auto_increment,
  tipoEvaluacion varchar(20),
  descEvaluacion varchar(20)) CHARSET=utf8;


INSERT INTO Evaluacion (tipoEvaluacion,descEvaluacion) values('PRACTICA','1');
INSERT INTO Evaluacion (tipoEvaluacion,descEvaluacion) values('PRACTICA','2');
INSERT INTO Evaluacion (tipoEvaluacion,descEvaluacion) values('PRACTICA','3');
INSERT INTO Evaluacion (tipoEvaluacion,descEvaluacion) values('PRACTICA','4');
INSERT INTO Evaluacion (tipoEvaluacion,descEvaluacion) values('EXAMEN','PARCIAL');
INSERT INTO Evaluacion (tipoEvaluacion,descEvaluacion) values('EXAMEN','FINAL');
INSERT INTO Evaluacion (tipoEvaluacion,descEvaluacion) values('EXAMEN','SUSTITUTORIO');

create table AlumnoxCurso(
  pkAlumnoxCurso int PRIMARY KEY auto_increment,
  fkAlumno int not null,
  fkCurso int not null,
  FOREIGN KEY (fkAlumno) REFERENCES Alumno (pkAlumno),
  FOREIGN KEY (fkCurso) REFERENCES Curso (pkCurso)) CHARSET=utf8;

create table CuxSecxEva (
  pkCuSecEva int PRIMARY KEY auto_increment,
  fkCurso int not null,
  fkSeccion int not null,
  fkEvaluacion int not null,
  FOREIGN KEY (fkCurso) REFERENCES Curso (pkCurso),
  FOREIGN KEY (fkSeccion) REFERENCES Seccion (pkSeccion),
  FOREIGN KEY (fkEvaluacion) REFERENCES Evaluacion (pkEvaluacion)) CHARSET=utf8;


  --
  -- fkNotaxAlumno int not null,
  -- FOREIGN KEY (fkNotaxAlumno) REFERENCES NotaxAlumno (pkNotaxAlumno)) CHARSET=utf8;
