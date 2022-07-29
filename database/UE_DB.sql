use UE_DB;


create table maestros(
cod_maestro int auto_increment not null,
nombre varchar(50) not null,
apellidos varchar(50) not null
)

create table alumnos(
cod_alumno int auto_increment not null,
cod_tutor int not null,
cod_curso int not null,
nombre varchar(50) not null,
apellidos varchar(50) not null
)

create table tutores(
cod_tutor int auto_increment not null,
nombre varchar(50) not null,
apellidos varchar(50) not null
)