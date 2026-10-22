# Ejercicios Protocolos Capa Transporte y Familia de Protocolos TCP/IP

## Pregunta 1

¿Cuál es la función principal de la capa de transporte?

A) Crear páginas web

B) Gestionar la comunicación entre aplicaciones de distintos dispositivos

C) Diseñar bases de datos

D) Crear direcciones IP

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
La capa de transporte permite que las aplicaciones de distintos equipos intercambien información correctamente.
```

</details>

---

## Pregunta 2

¿Qué característica distingue principalmente a TCP de UDP?

A) TCP garantiza la entrega de los datos

B) TCP solo funciona en redes locales

C) TCP no utiliza puertos

D) TCP es más rápido porque no verifica errores

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
TCP es un protocolo confiable que verifica la recepción de los datos y puede reenviarlos si se pierden.
```

</details>

---

## Pregunta 3

¿Qué es un puerto?

A) Una dirección IP

B) Un cable de red

C) Un número que identifica una aplicación o servicio

D) Un tipo de servidor

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
Los puertos permiten identificar qué aplicación debe recibir los datos dentro de un dispositivo.
```

</details>

---

## Pregunta 4

¿Qué protocolo se utiliza habitualmente para navegar por páginas web no seguras?

A) FTP

B) SMTP

C) DNS

D) HTTP

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
HTTP es el protocolo utilizado para transferir páginas web.
```

</details>

---

## Pregunta 5

¿Para qué sirve la multiplexación?

A) Permitir que varias aplicaciones utilicen la red al mismo tiempo

B) Convertir nombres de dominio en IP

C) Compartir archivos entre equipos

D) Crear puertos automáticamente

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
La multiplexación permite que varias aplicaciones compartan la misma conexión de red.
```

</details>

---

## Pregunta 6

¿Qué información forma parte de un socket?

A) Nombre del usuario y contraseña

B) Dirección IP y puerto

C) Dirección MAC y memoria RAM

D) Sistema operativo y aplicación

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
Un socket identifica un extremo de comunicación mediante una dirección IP y un puerto.
```

</details>

---

## Pregunta 7

¿Qué ocurre durante el Three Way Handshake?

A) Se traduce un nombre DNS

B) Se transfieren archivos

C) Se establece una conexión TCP

D) Se cierra una conexión TCP

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
El Three Way Handshake es el proceso utilizado por TCP para iniciar una conexión.
```

</details>

---

## Pregunta 8

¿Cuál es el primer mensaje enviado durante el Three Way Handshake?

A) ACK

B) FIN

C) SYN + ACK

D) SYN

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
La conexión comienza cuando el cliente envía un mensaje SYN al servidor.
```

</details>

---

## Pregunta 9

¿Por qué TCP asigna números de secuencia a los segmentos?

A) Para poder reorganizar los datos si llegan desordenados

B) Para cifrar la información

C) Para convertir IP en nombres

D) Para aumentar la velocidad del procesador

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Los números de secuencia permiten reconstruir correctamente el orden original de los datos.
```

</details>

---

## Pregunta 10

¿Qué significa ACK en TCP?

A) Error de conexión

B) Confirmación de recepción

C) Inicio de conexión

D) Cierre de conexión

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
ACK indica que un segmento ha sido recibido correctamente.
```

</details>

---

## Pregunta 11

¿Qué mecanismo utiliza TCP para evitar que un receptor se sature de datos?

A) DNS

B) Segmentación

C) Windowing

D) Multiplexación

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
Windowing controla cuántos datos pueden enviarse antes de recibir confirmación.
```

</details>

---

## Pregunta 12

¿Qué afirmación describe correctamente a UDP?

A) Es orientado a conexión

B) Garantiza la entrega de datos

C) Utiliza siempre ACK

D) No es confiable

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
UDP no verifica si los datos llegan correctamente ni los reenvía en caso de pérdida.
```

</details>

---

## Pregunta 13

¿En cuál de las siguientes situaciones suele ser más adecuado UDP?

A) Una videollamada en tiempo real

B) Una transferencia bancaria

C) La descarga de una factura

D) El envío de un contrato

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
En una videollamada se prioriza la velocidad sobre la recuperación de pequeños errores.
```

</details>

---

## Pregunta 14

¿Qué protocolo se utiliza para enviar correos electrónicos?

A) POP3

B) SMTP

C) SSH

D) SMB

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
SMTP es el protocolo encargado del envío de correos electrónicos.
```

</details>

---

## Pregunta 15

¿Qué protocolo traduce nombres de dominio en direcciones IP?

A) HTTP

B) RIP

C) DNS

D) FTP

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
DNS permite localizar la dirección IP asociada a un nombre de dominio.
```

</details>

---

## Pregunta 16

¿Cuál de los siguientes protocolos se utiliza para administración remota segura?

A) POP3

B) TELNET

C) RIP

D) SSH

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
SSH permite administrar equipos remotamente de forma segura.
```

</details>

---

## Pregunta 17

¿Qué protocolo se utiliza para transferir archivos entre equipos?

A) FTP

B) DNS

C) SSH

D) SMTP

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
FTP está diseñado para el intercambio y transferencia de archivos.
```

</details>

---

## Pregunta 18

¿Cuál es el puerto asociado habitualmente a HTTPS?

A) 21

B) 443

C) 110

D) 22

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
HTTPS utiliza el puerto 443 para comunicaciones web seguras.
```

</details>

---

## Pregunta 19

¿Qué protocolo suele utilizarse para compartir archivos e impresoras en una red?

A) RIP

B) POP3

C) SMB

D) SMTP

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
SMB permite compartir recursos como carpetas e impresoras dentro de una red.
```

</details>

---

## Pregunta 20

¿Qué proceso utiliza TCP para cerrar correctamente una conexión?

A) Three Way Handshake

B) Multiplexación

C) Windowing

D) Four Way Handshake

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
El Four Way Handshake es el mecanismo utilizado para finalizar una conexión TCP de forma ordenada.
```

</details>

---
