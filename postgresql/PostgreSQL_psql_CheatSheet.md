# PostgreSQL psql Cheat Sheet

## Conexión

```bash
psql -h servidor -p 5432 -U usuario -d base_datos
```

Variables de entorno:

```bash
PGHOST=tecweb.postgres.database.azure.com
PGUSER=admintecweb
PGPORT=5432
PGDATABASE=postgres
PGPASSWORD=mi_password
```

---

## Metacomandos más usados de psql

### Ayuda

```sql
?          -- Ayuda general
\?         -- Ayuda de metacomandos
\h         -- Ayuda SQL
\h CREATE TABLE
```

### Conexión

```sql
\conninfo      -- Información de la conexión actual
\c basedatos   -- Cambiar de base de datos
\q             -- Salir de psql
```

### Bases de datos

```sql
\l      -- Listar bases de datos
\l+     -- Más detalles
```

### Esquemas

```sql
\dn     -- Listar esquemas
\dn+    -- Detalles de esquemas
```

### Tablas

```sql
\dt         -- Listar tablas
\dt *.*     -- Todas las tablas
\dt+        -- Información ampliada
\d tabla    -- Estructura de una tabla
```

### Vistas

```sql
\dv
\dv+
```

### Secuencias

```sql
\ds
\ds+
```

### Índices

```sql
\di
\di+
```

### Usuarios y roles

```sql
\du
\du+
```

### Funciones y procedimientos

```sql
\df
\df+
```

### Permisos

```sql
\z
\dp
```

### Consultas

```sql
\x        -- Modo expandido ON/OFF
\timing   -- Mostrar tiempo de ejecución
\e        -- Abrir editor externo
\p        -- Mostrar consulta actual
\r        -- Limpiar buffer de consulta
```

### Importar y exportar

Exportar CSV:

```sql
\copy persona TO 'persona.csv' CSV HEADER
```

Importar CSV:

```sql
\copy persona FROM 'persona.csv' CSV HEADER
```

Ejecutar script SQL:

```sql
\i script.sql
```

### Información completa de objetos

```sql
\d objeto
\d+ objeto
```

Ejemplos:

```sql
\d persona
\d domicilios
\d+ persona
```

---

## Comandos SQL rápidos

### Bases de datos

```sql
CREATE DATABASE pruebas;
DROP DATABASE pruebas;
```

### Tablas

```sql
CREATE TABLE persona (
    dni VARCHAR(20) PRIMARY KEY,
    nombre VARCHAR(100),
    fecha_nacimiento DATE
);
```

```sql
CREATE TABLE domicilios (
    id SERIAL PRIMARY KEY,
    dni VARCHAR(20) REFERENCES persona(dni),
    direccion TEXT,
    municipio VARCHAR(100)
);
```

### Consultas

```sql
SELECT * FROM persona;
```

```sql
SELECT p.nombre, d.direccion
FROM persona p
JOIN domicilios d ON p.dni = d.dni;
```

---

## Truco para Azure PostgreSQL

```cmd
set PGHOST=tecweb.postgres.database.azure.com
set PGUSER=admintecweb
set PGPORT=5432
set PGDATABASE=postgres
set PGPASSWORD=TU_PASSWORD

psql -h %PGHOST% -p %PGPORT% -U %PGUSER% %PGDATABASE%
```
