# Protocolos de la Capa de Transporte y Familia de Protocolos TCP/IP

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender qué es la capa de transporte dentro de una red.
- Diferenciar entre los protocolos TCP y UDP.
- Entender qué son los puertos y los sockets.
- Comprender cómo se establece y finaliza una conexión TCP.
- Entender cómo TCP garantiza que los datos lleguen correctamente.
- Conocer el mecanismo de control de flujo mediante ventanas (windowing).
- Reconocer los principales protocolos de la familia TCP/IP y sus puertos más habituales.
- Identificar situaciones en las que conviene utilizar TCP o UDP.

---

## Introducción

Cuando dos aplicaciones se comunican a través de Internet o de una red local, es necesario que exista algún mecanismo que permita enviar y recibir información correctamente.

Por ejemplo:

- Cuando visitas una página web.
- Cuando envías un correo electrónico.
- Cuando realizas una videollamada.
- Cuando juegas online.

Todos estos servicios necesitan protocolos de comunicación.

Un protocolo es un conjunto de reglas que indica cómo deben comunicarse dos dispositivos.

Dentro de la arquitectura TCP/IP existe una capa llamada **capa de transporte**, cuya misión es llevar la información de una aplicación a otra.

Los dos protocolos más importantes de esta capa son:

- TCP (Transmission Control Protocol)
- UDP (User Datagram Protocol)

Cada uno tiene características diferentes y se utiliza en situaciones distintas.

---

# Conceptos teóricos

## ¿Qué es la capa de transporte?

La capa de transporte es la encargada de transportar información entre programas que se ejecutan en diferentes dispositivos.

Su objetivo principal es:

- Llevar los datos desde una aplicación origen hasta una aplicación destino.
- Garantizar la entrega cuando sea necesario.
- Controlar errores.
- Organizar el tráfico de información.

Por ejemplo:

Un navegador web y un servidor web necesitan intercambiar información.

La capa de transporte se encarga de que esos datos lleguen a la aplicación correcta.

---

## TCP (Transmission Control Protocol)

### ¿Qué es TCP?

TCP es un protocolo orientado a conexión.

Esto significa que antes de intercambiar información los dos equipos deben establecer una conexión.

TCP se utiliza cuando es importante que los datos lleguen correctamente.

### ¿Para qué sirve?

Sirve para:

- Navegación web.
- Envío de correos electrónicos.
- Transferencia de archivos.
- Aplicaciones bancarias.
- Sistemas de gestión empresarial.

### ¿Cuándo se utiliza?

Cuando perder información no es aceptable.

Por ejemplo:

- Al realizar una compra online.
- Al transferir dinero.
- Al descargar un documento.

---

## Multiplexación

### ¿Qué es?

Un ordenador puede ejecutar varias aplicaciones al mismo tiempo.

Por ejemplo:

- Navegador web.
- Correo electrónico.
- Aplicación de chat.

Todas utilizan la red simultáneamente.

La multiplexación permite que TCP identifique a qué aplicación pertenece cada mensaje.

### ¿Para qué sirve?

Permite compartir una única conexión de red entre múltiples aplicaciones.

---

## Puertos

### ¿Qué es un puerto?

Un puerto es un número que identifica un servicio o aplicación dentro de un dispositivo.

Podemos imaginar un ordenador como un edificio.

- La dirección IP sería la dirección del edificio.
- El puerto sería el número de oficina.

La información llega al edificio (IP) y luego se entrega en la oficina correcta (puerto).

### Ejemplos de puertos

| Servicio | Puerto |
|-----------|---------|
| HTTP | 80 |
| HTTPS | 443 |
| FTP | 21 |
| SMTP | 25 |
| POP3 | 110 |
| DNS | 53 |
| SSH | 22 |
| TELNET | 23 |
| SMB | 445 |

---

## Sockets

### ¿Qué es un socket?

Un socket es un punto de comunicación entre dos aplicaciones.

Está formado principalmente por:

- Dirección IP
- Puerto

Por ejemplo:

```text
192.168.1.10:80
```

Explicación:

- 192.168.1.10 es la dirección IP.
- 80 es el puerto del servicio web.

El socket permite identificar exactamente quién envía y quién recibe información.

---

## Establecimiento de conexión TCP

### ¿Por qué es necesario?

Antes de enviar información, ambos equipos deben asegurarse de que están preparados para comunicarse.

Para ello TCP utiliza el proceso denominado:

### Three Way Handshake

Significa "saludo en tres pasos".

#### Paso 1

El cliente solicita iniciar una conexión.

```text
Cliente → Servidor : SYN
```

Explicación:

El cliente pregunta:

"¿Estás disponible para comunicarte?"

#### Paso 2

El servidor responde.

```text
Servidor → Cliente : SYN + ACK
```

Explicación:

El servidor responde:

"Sí, estoy disponible y he recibido tu solicitud."

#### Paso 3

El cliente confirma.

```text
Cliente → Servidor : ACK
```

Explicación:

El cliente responde:

"Perfecto, comenzamos la comunicación."

A partir de este momento puede intercambiarse información.

---

## Terminación de conexión TCP

Cuando finaliza la comunicación debe cerrarse correctamente.

TCP utiliza un proceso denominado:

### Four Way Handshake

Significa "despedida en cuatro pasos".

#### Paso 1

```text
Cliente → Servidor : FIN
```

El cliente indica que desea terminar la conexión.

#### Paso 2

```text
Servidor → Cliente : ACK
```

El servidor confirma la recepción.

#### Paso 3

```text
Servidor → Cliente : FIN
```

El servidor también indica que desea cerrar.

#### Paso 4

```text
Cliente → Servidor : ACK
```

El cliente confirma y la conexión queda cerrada.

---

## Transferencia ordenada de datos

### ¿Cuál es el problema?

Internet no garantiza que los paquetes viajen por la misma ruta.

Algunos pueden:

- Llegar antes.
- Llegar después.
- Llegar duplicados.
- Perderse.

### ¿Cómo lo soluciona TCP?

TCP divide la información en fragmentos llamados segmentos.

Cada segmento tiene un número de secuencia.

Por ejemplo:

```text
Segmento 1
Segmento 2
Segmento 3
Segmento 4
```

Aunque lleguen desordenados:

```text
Segmento 3
Segmento 1
Segmento 4
Segmento 2
```

TCP los reorganiza antes de entregarlos a la aplicación.

---

## Recuperación de errores y confiabilidad

### ¿Qué significa que TCP sea confiable?

Significa que intenta garantizar que la información llegue correctamente.

### Confirmaciones (ACK)

Cada vez que se recibe un segmento correctamente se envía una confirmación.

```text
Cliente → Datos
Servidor → ACK
```

Explicación:

ACK significa:

"Acknowledgement" o "confirmación de recepción".

### Reenvío de datos

Si una confirmación no llega en un tiempo determinado:

```text
Cliente → Datos
(No llega ACK)
Cliente → Reenvía datos
```

TCP vuelve a enviarlos.

Gracias a este mecanismo se minimiza la pérdida de información.

---

## Control de flujo

### ¿Cuál es el problema?

Un dispositivo rápido podría enviar datos más rápido de lo que el receptor puede procesarlos.

Como consecuencia:

- El receptor podría saturarse.
- Parte de la información podría perderse.

---

## Windowing (Ventanas)

TCP utiliza un mecanismo llamado ventana o window.

La ventana indica cuántos datos puede recibir el destinatario sin saturarse.

Ejemplo:

Si el receptor indica:

```text
Ventana = 4 segmentos
```

El emisor podrá enviar:

```text
Segmento 1
Segmento 2
Segmento 3
Segmento 4
```

y deberá esperar confirmación antes de continuar.

Esto permite una comunicación más eficiente y segura.

---

## UDP (User Datagram Protocol)

### ¿Qué es UDP?

UDP es un protocolo no orientado a la conexión.

No necesita establecer conexión antes de enviar datos.

### Características

#### 1. No orientado a la conexión

No existe Three Way Handshake.

La información se envía directamente.

#### 2. No confiable

UDP:

- No comprueba que los datos lleguen.
- No reorganiza datos.
- No reenvía información perdida.
- No confirma recepciones.

### ¿Por qué existe entonces?

Porque es mucho más rápido que TCP.

### ¿Cuándo se utiliza?

Cuando la velocidad es más importante que la precisión.

Por ejemplo:

- Videollamadas.
- Streaming en directo.
- Juegos online.
- Telefonía IP.

Perder un pequeño fragmento de audio suele ser menos grave que esperar varios segundos para recuperarlo.

---

## Familia de protocolos TCP/IP

La familia TCP/IP es un conjunto de protocolos que permiten el funcionamiento de Internet y de muchas redes empresariales.

Cada protocolo tiene una función concreta.

---

## HTTP

### Función

Transferir páginas web.

### Puerto

```text
80
```

### Ejemplo

Cuando visitas una página web.

---

## HTTPS

### Función

Versión segura de HTTP.

### Puerto

```text
443
```

### Ejemplo

Compras online o banca electrónica.

---

## FTP

### Función

Transferencia de archivos.

### Puerto

```text
21
```

### Ejemplo

Subir archivos a un servidor.

---

## SMTP

### Función

Enviar correos electrónicos.

### Puerto

```text
25
```

### Ejemplo

Cuando envías un email.

---

## POP3

### Función

Recibir correos electrónicos.

### Puerto

```text
110
```

### Ejemplo

Descargar correos desde un servidor.

---

## SNMP

### Función

Monitorización y gestión de dispositivos de red.

### Puerto

```text
161
```

### Ejemplo

Supervisar routers o switches.

---

## TELNET

### Función

Administración remota.

### Puerto

```text
23
```

### Problema

La información viaja sin cifrar.

Actualmente casi no se utiliza.

---

## SSH

### Función

Administración remota segura.

### Puerto

```text
22
```

### Ejemplo

Gestionar servidores Linux de forma segura.

---

## DNS

### Función

Traducir nombres a direcciones IP.

### Puerto

```text
53
```

### Ejemplo

Convertir:

```text
www.biblioteca.com
```

en

```text
192.168.10.25
```

---

## RIP

### Función

Intercambio de información entre routers.

### Puerto

```text
520
```

### Ejemplo

Ayuda a determinar rutas dentro de una red.

---

## SMB

### Función

Compartición de archivos e impresoras.

### Puerto

```text
445
```

### Ejemplo

Acceder a documentos compartidos dentro de una empresa.

---

# Analogía del mundo real

Imagina una empresa de mensajería.

- La dirección de una casa sería la dirección IP.
- El número de apartamento sería el puerto.
- TCP sería un servicio certificado que requiere firma.
- UDP sería dejar el paquete en el buzón sin pedir confirmación.

Si envías un contrato importante:

- Utilizarías TCP.

Si retransmites un partido de fútbol por radio:

- Utilizarías UDP.

La prioridad ya no es que llegue cada palabra exacta, sino que la transmisión sea rápida.

---

# Ejemplos prácticos

## Ejemplo 1: Acceder a una página web

```text
Cliente → HTTP → Puerto 80 → Servidor Web
```

Explicación:

- El navegador actúa como cliente.
- Busca un servidor web.
- Utiliza HTTP.
- Se comunica mediante el puerto 80.

---

## Ejemplo 2: Acceso seguro a una tienda online

```text
Cliente → HTTPS → Puerto 443 → Servidor Web
```

Explicación:

- Se utiliza HTTPS.
- La comunicación está protegida.
- Los datos personales viajan de forma más segura.

---

## Ejemplo 3: Envío de un correo electrónico

```text
Cliente → SMTP → Puerto 25 → Servidor de correo
```

Explicación:

- El usuario redacta un mensaje.
- SMTP lo envía al servidor.
- El servidor lo distribuye al destinatario.

---

## Ejemplo 4: Resolución DNS

```text
www.tienda.com
↓
DNS
↓
203.0.113.10
```

Explicación:

- El usuario escribe un nombre fácil de recordar.
- DNS encuentra la dirección IP correspondiente.
- La conexión puede comenzar.

---

## Ejemplo 5: Conexión TCP

```text
Cliente → SYN
Servidor → SYN + ACK
Cliente → ACK
```

Explicación:

- Se inicia la comunicación.
- Ambas partes verifican que están disponibles.
- La conexión queda preparada.

---

# Errores frecuentes

1. Confundir dirección IP con puerto.

   - La IP identifica el dispositivo.
   - El puerto identifica la aplicación.

2. Pensar que TCP y UDP hacen lo mismo.

   - TCP prioriza confiabilidad.
   - UDP prioriza velocidad.

3. Creer que HTTP y HTTPS son iguales.

   - HTTPS añade seguridad mediante cifrado.

4. Pensar que DNS almacena páginas web.

   - DNS únicamente traduce nombres a direcciones IP.

5. Suponer que UDP corrige errores.

   - UDP no garantiza entrega ni recuperación de datos.

---

# Resumen

- La capa de transporte permite comunicar aplicaciones.
- TCP establece conexión antes de transmitir.
- UDP envía información sin establecer conexión.
- Los puertos identifican servicios dentro de un dispositivo.
- Los sockets identifican extremos de comunicación.
- TCP utiliza Three Way Handshake para iniciar conexiones.
- TCP utiliza Four Way Handshake para finalizar conexiones.
- TCP reorganiza segmentos y recupera errores.
- TCP controla la velocidad mediante ventanas (windowing).
- UDP es más rápido pero menos fiable.
- La familia TCP/IP incluye protocolos especializados para distintos servicios de red.

---

# Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| TCP | Protocolo confiable orientado a conexión. |
| UDP | Protocolo rápido no orientado a conexión. |
| Puerto | Número que identifica una aplicación o servicio. |
| Socket | Punto de comunicación formado por IP y puerto. |
| Multiplexación | Uso simultáneo de la red por varias aplicaciones. |
| Three Way Handshake | Proceso de establecimiento de una conexión TCP. |
| Four Way Handshake | Proceso de cierre de una conexión TCP. |
| Segmento | Fragmento de datos enviado por TCP. |
| ACK | Confirmación de recepción de datos. |
| Windowing | Mecanismo de control de flujo de TCP. |
| HTTP | Protocolo para páginas web. |
| HTTPS | Versión segura de HTTP. |
| FTP | Protocolo para transferencia de archivos. |
| SMTP | Protocolo para envío de correos electrónicos. |
| POP3 | Protocolo para recepción de correos electrónicos. |
| SNMP | Protocolo de monitorización de dispositivos de red. |
| SSH | Protocolo de administración remota segura. |
| TELNET | Protocolo de administración remota sin cifrado. |
| DNS | Traduce nombres de dominio a direcciones IP. |
| RIP | Protocolo de intercambio de rutas entre routers. |
| SMB | Compartición de archivos e impresoras en red. |

---

# Ejercicios de reflexión

1. ¿Por qué una compra online debería utilizar TCP en lugar de UDP?

2. ¿Qué diferencia existe entre una dirección IP y un puerto?

3. ¿Qué ocurriría si TCP no numerara los segmentos de datos?

4. ¿Por qué DNS es necesario para navegar por Internet?

5. ¿En qué situaciones reales elegirías UDP en lugar de TCP y por qué?
