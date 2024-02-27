CREATE DATABASE urquiza;

# CREACION DE TABLAS

CREATE TABLE Comisiones (
    id INT PRIMARY KEY,
    anio INT,
    division INT,
    carrera ENUM('DS', 'ITI', 'AF'),
    fecha_creacion DATETIME,
    fecha_modificacion DATETIME
);

CREATE TABLE Alumnos (
    dni VARCHAR(255) PRIMARY KEY,
    nombre VARCHAR(255),
    apellido VARCHAR(255),
    email VARCHAR(255),
    contrasenia VARCHAR(255),
    id_comision INT,
    fecha_creacion DATETIME,
    fecha_modificacion DATETIME,
    FOREIGN KEY (id_comision) REFERENCES Comisiones(id)
);

CREATE TABLE Bedelias (
    dni VARCHAR(255) PRIMARY KEY,
    nombre VARCHAR(255),
    apellido VARCHAR(255),
    email VARCHAR(255),
    contrasenia VARCHAR(255),
    fecha_creacion DATETIME,
    fecha_modificacion DATETIME
);

CREATE TABLE Administradores (
    dni VARCHAR(255) PRIMARY KEY,
    nombre VARCHAR(255),
    apellido VARCHAR(255),
    email VARCHAR(255),
    contrasenia VARCHAR(255),
    fecha_creacion DATETIME,
    fecha_modificacion DATETIME
);

CREATE TABLE Aulas (
    id INT PRIMARY KEY,
    nombre VARCHAR(255),
    laboratorio BOOLEAN,
    capacidad INT,
    fecha_creacion DATETIME,
    fecha_modificacion DATETIME
);

CREATE TABLE Horarios (
    id INT PRIMARY KEY,
    inicio TIME,
    fin TIME,
    dia ENUM('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'),
    fecha_creacion DATETIME,
    fecha_modificacion DATETIME
);

CREATE TABLE Materias (
    id INT PRIMARY KEY,
    nombre VARCHAR(255),
    tipo ENUM('Cuatri 1', 'Cuatri 2', 'Anual'),
    horas_semanales INT,
    horas_anuales INT,
    Modalidad ENUM('Taller', 'Materia', 'Proyecto', 'Laboratorio'),
    id_comision INT,
    id_aula INT,
    id_horario INT,
    fecha_creacion DATETIME,
    fecha_modificacion DATETIME,
    FOREIGN KEY (id_comision) REFERENCES Comisiones(id),
    FOREIGN KEY (id_aula) REFERENCES Aulas(id),
    FOREIGN KEY (id_horario) REFERENCES Horarios(id)
);

CREATE TABLE Declaraciones_Juradas (
    id INT PRIMARY KEY,
    cod_cargo VARCHAR(255),
    cargo VARCHAR(255),
    establecimiento VARCHAR(255),
    prestacion ENUM('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'),
    posesion DATE,
    turno ENUM('Alterado', 'Completo', 'Intermedio', 'Matutino', 'Noche', 'Sin Turno', 'Tarde', 'Vespertino'),
    situacion ENUM('Titular', 'Interino', 'Reemplazante'),
    observaciones VARCHAR(255),
    fecha_creacion DATETIME,
    fecha_modificacion DATETIME
);

CREATE TABLE Docentes (
    dni VARCHAR(255) PRIMARY KEY,
    nombre VARCHAR(255),
    apellido VARCHAR(255),
    email VARCHAR(255),
    contrasenia VARCHAR(255),
    horas_catedras_externas INT,
    horas_catedras_locales INT,
    id_declaracionJ INT,
    fecha_creacion DATETIME,
    fecha_modificacion DATETIME,
    FOREIGN KEY (id_declaracionJ) REFERENCES Declaraciones_Juradas(id)
);

CREATE TABLE Cambio_Docente (
    id INT PRIMARY KEY,
    docente_pedido VARCHAR(255),
    docente_cambia VARCHAR(255),
    fecha_creacion DATETIME,
    fecha_modificacion DATETIME,
    FOREIGN KEY (docente_pedido) REFERENCES Docentes(dni),
    FOREIGN KEY (docente_cambia) REFERENCES Docentes(dni)
);

CREATE TABLE Disponibilidades (
    id INT PRIMARY KEY,
    dni_docente VARCHAR(255),
    id_horario INT,
    fecha_creacion DATETIME,
    fecha_modificacion DATETIME,
    FOREIGN KEY (dni_docente) REFERENCES Docentes(dni),
    FOREIGN KEY (id_horario) REFERENCES Horarios(id)
);

CREATE TABLE Docente_Materias (
    id INT PRIMARY KEY,
    dni_docente VARCHAR(255),
    id_materia INT,
    fecha_creacion DATETIME,
    fecha_modificacion DATETIME,
    FOREIGN KEY (dni_docente) REFERENCES Docentes(dni),
    FOREIGN KEY (id_materia) REFERENCES Materias(id)
);

CREATE TABLE Historiales (
    id INT PRIMARY KEY,
    dni_docente VARCHAR(255),
    ultimo_cargo INT,
    FOREIGN KEY (dni_docente) REFERENCES Docentes(dni),
    FOREIGN KEY (ultimo_cargo) REFERENCES Materias(id)
);

CREATE TABLE PlanillaHoraria (
    id INT PRIMARY KEY,
    semana ENUM('Semana 1', 'Semana 2'),
    tipo_clase ENUM('Virtual', 'Presencial'),
    id_horario INT,
    id_materia INT,
    id_comision INT,
    dni_docente VARCHAR(255),
    id_aula INT,
    fecha_creacion DATETIME,
    fecha_modificacion DATETIME,
    FOREIGN KEY (id_horario) REFERENCES Horarios(id),
    FOREIGN KEY (id_materia) REFERENCES Materias(id),
    FOREIGN KEY (id_comision) REFERENCES Comisiones(id),
    FOREIGN KEY (dni_docente) REFERENCES Docentes(dni),
    FOREIGN KEY (id_aula) REFERENCES Aulas(id)
);





