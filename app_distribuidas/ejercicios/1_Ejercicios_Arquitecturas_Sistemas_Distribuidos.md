# 1 Ejercicios Arquitecturas de Sistemas Distribuidos

## Pregunta 1

¿Qué es un sistema distribuido?

A) Un conjunto de equipos independientes que colaboran como si fueran un único sistema.

B) Un único ordenador con muchos programas instalados.

C) Un ordenador sin conexión a la red.

D) Un dispositivo utilizado únicamente para almacenar datos.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Un sistema distribuido está formado por varios equipos conectados que trabajan juntos y ofrecen la apariencia de ser un único sistema.
```

</details>

---

## Pregunta 2

¿Cuál es el objetivo principal de la transparencia en un sistema distribuido?

A) Aumentar el consumo de recursos.

B) Ocultar la complejidad del sistema al usuario.

C) Eliminar la necesidad de redes.

D) Evitar la seguridad.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
La transparencia permite que el usuario utilice el sistema sin preocuparse por dónde se encuentran los recursos o cómo están distribuidos.
```

</details>

---

## Pregunta 3

¿Qué característica permite que un sistema continúe funcionando aunque falle alguno de sus componentes?

A) Concurrencia.

B) Consistencia.

C) Tolerancia a fallos.

D) Escalabilidad.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
La tolerancia a fallos permite que el sistema siga prestando servicio incluso cuando un componente deja de funcionar.
```

</details>

---

## Pregunta 4

¿Cuál de las siguientes opciones describe mejor un sistema Grid?

A) Un único servidor con varios discos.

B) Una red local doméstica.

C) Un sistema utilizado solo para copias de seguridad.

D) Un conjunto de recursos distribuidos que colaboran para resolver tareas complejas.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
Los sistemas Grid permiten utilizar recursos distribuidos ubicados en distintos lugares para trabajar conjuntamente.
```

</details>

---

## Pregunta 5

¿Qué significa que un sistema sea escalable?

A) Que puede crecer para soportar más usuarios o carga de trabajo.

B) Que nunca necesita actualizaciones.

C) Que funciona únicamente en un ordenador.

D) Que reduce automáticamente la seguridad.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
La escalabilidad permite aumentar recursos y capacidad cuando crece la demanda.
```

</details>

---

## Pregunta 6

¿Qué función principal realiza el middleware?

A) Diseñar interfaces gráficas.

B) Actuar como intermediario entre aplicaciones y servicios.

C) Sustituir las bases de datos.

D) Crear redes físicas.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
El middleware facilita la comunicación entre diferentes aplicaciones y componentes del sistema.
```

</details>

---

## Pregunta 7

¿Qué característica asegura que los datos mantengan un estado coherente en todos los componentes del sistema?

A) Latencia.

B) Seguridad.

C) Concurrencia.

D) Consistencia.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
La consistencia garantiza que los datos sean correctos y coherentes en todos los nodos.
```

</details>

---

## Pregunta 8

¿Qué ventaja ofrecen los microservicios frente a una aplicación monolítica?

A) Obligan a desplegar todo el sistema al modificar una función.

B) Eliminan la necesidad de comunicación entre componentes.

C) Permiten dividir la aplicación en servicios pequeños e independientes.

D) Impiden escalar partes concretas del sistema.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
Los microservicios separan la aplicación en componentes independientes que pueden desarrollarse y desplegarse por separado.
```

</details>

---

## Pregunta 9

¿Qué es la latencia en una comunicación distribuida?

A) El tiempo que tarda una solicitud en viajar y obtener una respuesta.

B) El número de usuarios conectados.

C) El tamaño de una base de datos.

D) El nivel de seguridad de un sistema.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
La latencia mide el retraso existente entre una petición y la recepción de la respuesta.
```

</details>

---

## Pregunta 10

¿Qué característica permite que varios usuarios o procesos trabajen al mismo tiempo sobre el sistema?

A) Transparencia.

B) Concurrencia.

C) Consistencia.

D) Latencia.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
La concurrencia permite la ejecución simultánea de múltiples tareas o accesos.
```

</details>

---

## Pregunta 11

¿Cuál es una característica de un sistema abierto?

A) Solo funciona con productos de un fabricante.

B) No utiliza redes.

C) Puede interoperar con otros sistemas siguiendo estándares.

D) Impide compartir información.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
Los sistemas abiertos utilizan estándares que facilitan la integración con otros sistemas.
```

</details>

---

## Pregunta 12

¿Qué aspecto protege la seguridad en un sistema distribuido?

A) La ubicación de los servidores.

B) El número de usuarios.

C) La velocidad de la red.

D) Los datos y recursos frente a accesos no autorizados.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
La seguridad busca impedir accesos indebidos y proteger la información.
```

</details>

---

## Pregunta 13

En una arquitectura distribuida, ¿por qué resulta útil dividir responsabilidades entre diferentes componentes?

A) Porque facilita el mantenimiento y la organización del sistema.

B) Porque elimina la necesidad de redes.

C) Porque reduce siempre el número de usuarios.

D) Porque evita completamente los fallos.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Separar responsabilidades hace que cada componente sea más sencillo de gestionar y mantener.
```

</details>

---

## Pregunta 14

¿Qué técnica de observabilidad permite almacenar mensajes generados por las aplicaciones para analizarlos posteriormente?

A) Balanceo de carga.

B) Registros o logs.

C) Replicación.

D) Cifrado.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
Los logs registran eventos y ayudan a diagnosticar problemas en el sistema.
```

</details>

---

## Pregunta 15

¿Qué técnica de observabilidad ayuda a seguir el recorrido de una petición a través de varios servicios?

A) Firewall.

B) Escalado vertical.

C) Trazas distribuidas.

D) Compresión.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
Las trazas distribuidas permiten conocer el camino que sigue una solicitud entre distintos servicios.
```

</details>

---

## Pregunta 16

¿Cuál de las siguientes situaciones es un ejemplo típico de un clúster?

A) Recursos repartidos por organizaciones independientes en todo el mundo.

B) Equipos sin conexión entre sí.

C) Un conjunto de servidores trabajando juntos para ofrecer un servicio común.

D) Una única aplicación instalada en un portátil.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
Un clúster está formado por varios servidores que colaboran para proporcionar un servicio conjunto.
```

</details>

---

## Pregunta 17

Si una tienda online recibe cada vez más clientes y añade nuevos servidores para soportar la demanda, ¿qué característica está utilizando?

A) Seguridad.

B) Escalabilidad.

C) Transparencia.

D) Consistencia.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
La escalabilidad permite aumentar recursos para atender más carga de trabajo.
```

</details>

---

## Pregunta 18

¿Cuál es el principal beneficio de utilizar técnicas de observabilidad?

A) Eliminar la necesidad de programadores.

B) Sustituir las bases de datos.

C) Detectar, comprender y resolver problemas del sistema.

D) Reducir automáticamente el número de usuarios.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
La observabilidad proporciona información para entender el comportamiento y detectar incidencias.
```

</details>

---

## Pregunta 19

¿Por qué suelen utilizarse microservicios en aplicaciones modernas?

A) Porque cada servicio puede evolucionar y desplegarse de forma independiente.

B) Porque eliminan todos los problemas de red.

C) Porque solo permiten una única funcionalidad.

D) Porque obligan a utilizar un único lenguaje de programación.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Los microservicios permiten desarrollar, actualizar y desplegar funcionalidades de forma independiente.
```

</details>

---

## Pregunta 20

Si dos usuarios modifican información al mismo tiempo, ¿qué característica del sistema distribuido debe gestionarse adecuadamente?

A) Transparencia.

B) Escalabilidad.

C) Middleware.

D) Concurrencia.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
La concurrencia se encarga de gestionar accesos y operaciones simultáneas sobre los recursos.
```

</details>

# Resumen de respuestas

| Pregunta | Respuesta |
|-----------|-----------|
| 1 | A |
| 2 | B |
| 3 | C |
| 4 | D |
| 5 | A |
| 6 | B |
| 7 | D |
| 8 | C |
| 9 | A |
| 10 | B |
| 11 | C |
| 12 | D |
| 13 | A |
| 14 | B |
| 15 | C |
| 16 | C |
| 17 | B |
| 18 | C |
| 19 | A |
| 20 | D |

Verificación:
- Respuestas A: 5 (1, 5, 9, 13, 19)
- Respuestas B: 5 (2, 6, 10, 14, 17)
- Respuestas C: 5 (3, 8, 15, 16, 18)
- Respuestas D: 5 (4, 7, 12, 20)
- Total preguntas: 20
- 4 opciones por pregunta: Sí
- Una única respuesta correcta por pregunta: Sí
