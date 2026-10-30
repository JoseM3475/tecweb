# Examen tipo test

## Pregunta 1

¿Qué permite hacer principalmente Docker?

A) Crear documentos de texto

B) Ejecutar aplicaciones dentro de contenedores

C) Diseñar páginas web

D) Crear hojas de cálculo

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
Docker permite ejecutar aplicaciones dentro de contenedores aislados para que funcionen igual en distintos equipos.
```

</details>

---

## Pregunta 2

¿Qué opción permite ejecutar un contenedor en segundo plano?

A) -d

B) -p

C) -v

D) --name

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
La opción -d (detached) permite que el contenedor continúe ejecutándose sin ocupar la terminal.
```

</details>

---

## Pregunta 3

¿Qué comando se utiliza para visualizar los contenedores que están funcionando actualmente?

A) docker logs

B) docker stop

C) docker ps

D) docker attach

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
docker ps muestra los contenedores que se encuentran en ejecución en ese momento.
```

</details>

---

## Pregunta 4

¿Por qué se utiliza la opción --name al crear un contenedor?

A) Para asignarle una dirección IP

B) Para aumentar su velocidad

C) Para guardar datos

D) Para darle un nombre fácil de recordar

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
Asignar un nombre facilita la administración posterior del contenedor.
```

</details>

---

## Pregunta 5

En el comando siguiente:

```bash
docker run -p 8080:80 nginx
```

¿Qué representa el número 8080?

A) El puerto del ordenador anfitrión

B) El identificador del contenedor

C) El puerto interno de Docker

D) El número de la imagen

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
El primer puerto corresponde al equipo anfitrión y es el que utilizarán los usuarios para conectarse.
```

</details>

---

## Pregunta 6

¿Qué opción se utiliza para definir una variable de entorno?

A) -v

B) -e

C) -p

D) -d

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
La opción -e permite enviar variables de configuración a la aplicación.
```

</details>

---

## Pregunta 7

¿Qué comando permite detener un contenedor de forma ordenada?

A) docker ps

B) docker logs

C) docker stop

D) docker attach

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
docker stop solicita al contenedor que finalice correctamente su ejecución.
```

</details>

---

## Pregunta 8

¿Qué ocurre cuando se utiliza la opción --rm?

A) Se reinicia automáticamente el contenedor

B) El contenedor se elimina cuando termina

C) Borra todos los volúmenes

D) Cambia el nombre del contenedor

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
La opción --rm elimina automáticamente el contenedor cuando deja de ejecutarse.
```

</details>

---

## Pregunta 9

¿Cuál es el objetivo principal del mapeo de puertos?

A) Ahorrar memoria RAM

B) Eliminar contenedores

C) Permitir acceder a la aplicación desde fuera del contenedor

D) Crear imágenes nuevas

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
El mapeo de puertos conecta el exterior con la aplicación que se ejecuta dentro del contenedor.
```

</details>

---

## Pregunta 10

¿Qué comando permite ver los mensajes y registros generados por una aplicación?

A) docker exec

B) docker stop

C) docker ps

D) docker logs

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
docker logs muestra la información registrada por la aplicación durante su ejecución.
```

</details>

---

## Pregunta 11

¿Qué ventaja principal aporta un volumen Docker?

A) Mantener los datos aunque el contenedor desaparezca

B) Reiniciar el contenedor automáticamente

C) Cambiar la imagen utilizada

D) Mostrar registros

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Los volúmenes permiten conservar la información independientemente de la vida del contenedor.
```

</details>

---

## Pregunta 12

¿Qué comando permite ejecutar comandos dentro de un contenedor ya existente?

A) docker logs

B) docker exec

C) docker stop

D) docker container prune

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
docker exec permite ejecutar comandos y abrir una terminal dentro del contenedor.
```

</details>

---

## Pregunta 13

¿Qué comando muestra también los contenedores detenidos?

A) docker attach

B) docker logs

C) docker ps -a

D) docker stop

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
La opción -a (all) muestra tanto los contenedores activos como los detenidos.
```

</details>

---

## Pregunta 14

¿Qué comando se utiliza para eliminar todos los contenedores detenidos?

A) docker logs

B) docker exec

C) docker stop

D) docker container prune

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
docker container prune elimina los contenedores que ya no están en ejecución.
```

</details>

---

## Pregunta 15

¿Qué opción permite cargar variables desde un archivo?

A) --env-file

B) --name

C) -v

D) -d

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
--env-file lee automáticamente las variables definidas en un archivo.
```

</details>

---

## Pregunta 16

Si una aplicación se detiene inesperadamente y queremos que Docker la vuelva a arrancar sola, ¿qué opción debemos utilizar?

A) -p

B) --restart

C) --rm

D) -e

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
La política --restart permite reiniciar automáticamente los contenedores cuando sea necesario.
```

</details>

---

## Pregunta 17

¿Cuál de los siguientes comandos permite conectarse al proceso principal de un contenedor?

A) docker stop

B) docker ps

C) docker logs

D) docker attach

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
docker attach conecta la terminal al proceso principal que se está ejecutando en el contenedor.
```

</details>

---

## Pregunta 18

¿Cuál sería una consecuencia de no utilizar mapeo de puertos en una aplicación web?

A) La aplicación ocupará más espacio

B) Docker no podrá iniciar el contenedor

C) Será difícil acceder a la aplicación desde fuera del contenedor

D) Se eliminarán los registros

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
Sin mapear puertos, la aplicación puede funcionar internamente pero no será accesible desde el exterior.
```

</details>

---

## Pregunta 19

¿Qué opción se utiliza para asociar un volumen al contenedor?

A) -v

B) -p

C) -d

D) --restart

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
La opción -v permite conectar un volumen para almacenar datos persistentes.
```

</details>

---

## Pregunta 20

¿Por qué es útil asignar nombres personalizados a los contenedores?

A) Porque reduce el consumo de memoria

B) Porque permite crear más imágenes

C) Porque cambia el sistema operativo del contenedor

D) Porque facilita su identificación y administración

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
Los nombres personalizados facilitan localizar y gestionar los contenedores mediante comandos Docker.
```

</details>
