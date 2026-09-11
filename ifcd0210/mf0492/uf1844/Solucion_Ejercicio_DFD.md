# Solución propuesta

## 1. Análisis del caso

El sistema descrito permite que un alumno se inscriba en un curso mediante una aplicación web.

El alumno introduce sus datos en un formulario.

La aplicación:

1. Recibe los datos.
2. Valida la información.
3. Guarda la inscripción.
4. Devuelve una confirmación al alumno.

---

## 2. Identificación de elementos del DFD

### Entidades Externas

#### Alumno

Es una entidad externa porque se encuentra fuera del sistema y envía o recibe información.

---

### Procesos

#### 1.0 Registrar inscripción

Recibe los datos del alumno, los procesa y gestiona el almacenamiento de la inscripción.

---

### Almacenes de Datos

#### D1 Inscripciones

Contiene las inscripciones registradas por la aplicación.

---

### Flujos de Datos

#### F1 Datos de inscripción

Información enviada por el alumno:

- Nombre
- Apellidos
- Correo electrónico
- Curso seleccionado

#### F2 Inscripción validada

Datos que el proceso almacena en la base de datos.

#### F3 Confirmación de inscripción

Mensaje enviado al alumno indicando que la inscripción se ha realizado correctamente.

---

## 3. DFD utilizando la notación de Yourdon

### Representación textual

```text
+-----------+
|  Alumno   |
+-----------+
      |
      | F1: Datos de inscripción
      v

  (1.0 Registrar
    inscripción)
      |
      | F2: Inscripción validada
      v

|| D1 Inscripciones ||

      ^
      |
      |
  (1.0 Registrar
    inscripción)
      |
      | F3: Confirmación
      v

+-----------+
|  Alumno   |
+-----------+