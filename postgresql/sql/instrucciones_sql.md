# Instrucciones SQL

## Listar bases de datos disponibles

```sql
SELECT datname
FROM pg_database;
```
## Crear una base de datos

```sql
CREATE DATABASE phptecweb;
```
## Eliminar una base de datos
```sql
DROP DATABASE phptecweb;
```

## Crear tabla PERSONA
```sql
-- Crear tabla PERSONA
CREATE TABLE persona (
    dni CHAR(9) NOT NULL,
    nombre VARCHAR(100),
    apellido_1 VARCHAR(200),
    apellido_2 VARCHAR(200),
    fecha_nacimiento DATE,
    CONSTRAINT pk_persona PRIMARY KEY (dni),
    CONSTRAINT chk_dni_length CHECK (LENGTH(dni) = 9)
);
```
## Insertar datos de ejemplo:
```sql
INSERT INTO persona (dni, nombre, apellido_1, apellido_2, fecha_nacimiento) VALUES
('12345678A', 'Juan',      'Garcia',    'Lopez',      '1990-05-12'),
('23456789B', 'Maria',     'Fernandez', 'Martinez',   '1988-08-21'),
('34567890C', 'Pedro',     'Sanchez',   'Ruiz',       '1995-02-17'),
('45678901D', 'Laura',     'Perez',     'Jimenez',    '1992-11-03'),
('56789012E', 'Ana',       'Gomez',     'Moreno',     '1987-07-14'),
('67890123F', 'Carlos',    'Diaz',      'Hernandez',  '1991-01-09'),
('78901234G', 'Lucia',     'Torres',    'Vazquez',    '1998-06-25'),
('89012345H', 'David',     'Romero',    'Castro',     '1985-09-18'),
('90123456I', 'Elena',     'Navarro',   'Molina',     '1993-04-08'),
('11223344J', 'Javier',    'Ortega',    'Serrano',    '1989-12-27'),
('22334455K', 'Carmen',    'Gil',       'Delgado',    '1996-03-11'),
('33445566L', 'Alejandro', 'Martin',    'Reyes',      '1994-10-22'),
('44556677M', 'Sofia',     'Nuñez',     'Prieto',     '1997-07-30'),
('55667788N', 'Miguel',    'Iglesias',  'Calvo',      '1986-02-13'),
('66778899O', 'Paula',     'Leon',      'Mendez',     '2000-05-19'),
('77889900P', 'Alberto',   'Cruz',      'Santos',     '1991-08-07'),
('88990011Q', 'Natalia',   'Flores',    'Vega',       '1999-01-15'),
('99001122R', 'Diego',     'Herrera',   'Ramos',      '1984-11-29'),
('10111213S', 'Marta',     'Fuentes',   'Cortes',     '1992-09-05'),
('12131415T', 'Roberto',   'Medina',    'Blanco',     '1988-04-24');
```
## Comprobar que los datos se han insertado
```sql
SELECT COUNT(*) AS total_personas
FROM persona;
```
## Mostrar todos los registros
```sql
SELECT *
FROM persona;
```

## Mostrar ordenados por apellido y nombre
```sql
SELECT dni,
       nombre,
       apellido_1,
       apellido_2,
       fecha_nacimiento
FROM persona
ORDER BY apellido_1, apellido_2, nombre;
```
## Crear un usuario con solo derecho de lectura en una tabla de una base de datos
```sql
-- Crear el usuario
CREATE USER php_prueba WITH PASSWORD 'TuPasswordSegura';

-- Permitir que se conecte a la base de datos
GRANT CONNECT ON DATABASE phptecweb TO php_prueba;

GRANT USAGE ON SCHEMA public TO php_prueba;

GRANT CREATE ON SCHEMA public TO php_prueba;

-- Permitir el uso del esquema
GRANT USAGE ON SCHEMA public TO php_prueba;

-- Dar permisos solo sobre una tabla
GRANT SELECT ON TABLE persona TO php_prueba;

GRANT INSERT ON TABLE persona TO php_prueba;

GRANT UPDATE ON TABLE persona TO php_prueba;
```

## Verificar los permisos
```sql
SELECT grantee, privilege_type
FROM information_schema.role_table_grants
WHERE table_name = 'persona';
```