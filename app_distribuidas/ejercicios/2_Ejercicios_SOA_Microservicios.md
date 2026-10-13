# Examen tipo test

## Pregunta 1

¿Cuál es el objetivo principal de una arquitectura SOA?

A) Almacenar información en una base de datos

B) Dividir una aplicación en servicios que puedan reutilizarse

C) Sustituir Internet por redes privadas

D) Evitar el uso de aplicaciones web

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
SOA organiza las funcionalidades en servicios independientes que pueden ser utilizados por diferentes aplicaciones.
```

</details>

---

## Pregunta 2

¿Qué principio de SOA permite que un mismo servicio sea utilizado por varias aplicaciones?

A) Independencia

B) Comunicación por red

C) Contrato definido

D) Reutilización

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
La reutilización permite que una funcionalidad desarrollada una vez pueda utilizarse desde varios sistemas.
```

</details>

---

## Pregunta 3

En una arquitectura SOA, ¿quién utiliza un servicio para obtener información o ejecutar una función?

A) Consumidor del servicio

B) Proveedor del servicio

C) ESB

D) BPM

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
El consumidor es la aplicación o sistema que utiliza un servicio ofrecido por otro componente.
```

</details>

---

## Pregunta 4

¿Qué elemento de SOA actúa como intermediario entre aplicaciones y servicios?

A) Controller

B) ESB

C) Validator

D) API Gateway

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
El ESB (Enterprise Service Bus) facilita la comunicación entre los distintos servicios.
```

</details>

---

## Pregunta 5

¿Qué significa BPM?

A) Base Process Management

B) Business Program Manager

C) Business Process Management

D) Business Platform Model

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
BPM significa Business Process Management y se centra en gestionar y mejorar procesos de negocio.
```

</details>

---

## Pregunta 6

¿Cuál de las siguientes es una ventaja de SOA?

A) Reutilización de servicios

B) Eliminación de la red

C) Ausencia de mantenimiento

D) Eliminación de la complejidad

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Una de las principales ventajas de SOA es reutilizar funcionalidades desde distintas aplicaciones.
```

</details>

---

## Pregunta 7

¿Cuál de las siguientes puede considerarse una desventaja de SOA?

A) Menor flexibilidad

B) Dependencia de la red

C) Imposibilidad de integrar sistemas

D) No permite reutilizar código

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
Al depender de comunicaciones entre servicios, los problemas de red pueden afectar al sistema.
```

</details>

---

## Pregunta 8

¿Por qué surgieron los microservicios?

A) Para eliminar completamente Internet

B) Para evitar el uso de servidores

C) Para afrontar retos como alta demanda y alta complejidad

D) Para sustituir las bases de datos

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
Los microservicios ayudan a gestionar aplicaciones modernas con muchos usuarios y gran complejidad.
```

</details>

---

## Pregunta 9

¿Cuál es uno de los requisitos fundamentales de un microservicio?

A) Cumplir una sola función

B) Gestionar todas las funciones de la empresa

C) Compartir toda su información con otros servicios

D) Depender de muchos sistemas externos

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Cada microservicio debe estar especializado en una única responsabilidad.
```

</details>

---

## Pregunta 10

¿Qué componente recibe las solicitudes externas en un microservicio?

A) Validator

B) Data Access

C) Business Logic

D) Controller

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
El Controller recibe las peticiones que llegan al microservicio desde otros sistemas o usuarios.
```

</details>

---

## Pregunta 11

¿Cuál es la función principal de un Validator?

A) Guardar datos en la base de datos

B) Validar los datos recibidos

C) Crear nuevos microservicios

D) Gestionar servidores

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
El Validator comprueba que la información recibida sea correcta antes de procesarla.
```

</details>

---

## Pregunta 12

¿Dónde se encuentran normalmente las reglas del negocio?

A) Controller

B) Validator

C) API Gateway

D) Business Logic

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
La Business Logic contiene las normas y decisiones propias del funcionamiento del negocio.
```

</details>

---

## Pregunta 13

¿Qué componente se encarga de acceder a los datos almacenados?

A) Data Access

B) Controller

C) Validator

D) Endpoint

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Data Access es la capa responsable de consultar, guardar o modificar información.
```

</details>

---

## Pregunta 14

¿Cuál es uno de los objetivos principales de la arquitectura hexagonal?

A) Aumentar el número de servidores

B) Eliminar los microservicios

C) Separar la lógica de negocio de la infraestructura

D) Reemplazar el API Gateway

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
La arquitectura hexagonal busca que la lógica de negocio sea independiente de tecnologías externas como bases de datos, APIs o interfaces.
```

</details>

---

## Pregunta 15

En la arquitectura hexagonal, ¿qué elemento conecta el sistema con componentes externos como bases de datos o APIs?

A) Controller

B) Puerto

C) Adaptador

D) Validator

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
Los adaptadores permiten comunicar la aplicación con elementos externos.
```

</details>

---

## Pregunta 16

¿Qué representa la letra "S" del acrónimo SOLID?

A) Service

B) Separation

C) Security

D) Single Responsibility Principle

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
La S corresponde a Single Responsibility Principle, que indica que cada componente debe tener una única responsabilidad.
```

</details>

---

## Pregunta 17

¿Cuál es la función principal de un API Gateway?

A) Actuar como punto único de entrada a los microservicios

B) Sustituir la lógica de negocio

C) Almacenar todos los datos

D) Reemplazar el Controller

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
El API Gateway centraliza el acceso a los distintos microservicios.
```

</details>

---

## Pregunta 18

¿Qué significa Serverless?

A) No existen servidores físicos

B) El programador debe administrar todos los servidores

C) Los servidores son gestionados por el proveedor de infraestructura

D) Las aplicaciones funcionan sin conexión

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
En Serverless los servidores siguen existiendo, pero la gestión la realiza el proveedor cloud.
```

</details>

---

## Pregunta 19

¿Qué principio de SOA garantiza que todos sepan qué datos recibe y devuelve un servicio?

A) Independencia

B) Contrato definido

C) Reutilización

D) Comunicación por red

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
El contrato definido especifica exactamente cómo debe utilizarse un servicio.
```

</details>

---

## Pregunta 20

¿Por qué se recomienda que los microservicios estén aislados?

A) Para impedir el acceso a la red

B) Para eliminar la reutilización

C) Para que necesiten más dependencias

D) Para reducir el impacto de los cambios sobre otros servicios

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
El aislamiento permite modificar un microservicio minimizando los efectos sobre el resto del sistema.
```

</details>

---

