# Historia de Internet y Modelo OSI: Cómo se Comunican los Dispositivos en la Red

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender cómo surgió Internet y por qué se creó.
- Diferenciar entre conmutación de circuitos y conmutación de paquetes.
- Entender cómo viaja la información de un dispositivo a otro a través de Internet.
- Conocer las capas del modelo OSI y la función de cada una.
- Identificar conceptos fundamentales como dirección IP, MAC, Router, Switch, TCP, UDP y Socket.
- Comprender qué son las cabeceras y por qué son necesarias en las comunicaciones.

---

## Introducción

Actualmente utilizamos Internet para navegar por páginas web, enviar mensajes, realizar videollamadas, utilizar redes sociales o acceder a aplicaciones empresariales. Aunque estas tareas parecen simples para el usuario, detrás existe una compleja infraestructura de comunicaciones que permite que millones de dispositivos intercambien información de forma organizada.

Antes de aprender a desarrollar aplicaciones web distribuidas, es fundamental comprender cómo funciona Internet y cómo se transportan los datos desde un dispositivo hasta otro.

En esta sesión estudiaremos los conceptos básicos de las comunicaciones en red y aprenderemos el recorrido que realiza la información cuando utilizamos una aplicación web.

---

## Conceptos teóricos

### Historia de Internet

#### ¿Qué es Internet?

Internet es una red mundial formada por millones de dispositivos conectados entre sí que pueden intercambiar información.

Podemos imaginar Internet como una enorme red de carreteras que conecta ciudades de todo el mundo. En lugar de circular coches, circulan datos.

#### ¿Por qué se creó?

Durante los años 60 surgió la necesidad de conectar ordenadores situados en diferentes lugares para compartir información y recursos.

El objetivo principal era construir una red resistente que siguiera funcionando incluso si alguna de sus partes fallaba.

Con el paso de los años, esa red evolucionó hasta convertirse en el Internet actual.

#### ¿Para qué sirve?

Internet permite:

- Compartir información.
- Acceder a páginas web.
- Enviar correos electrónicos.
- Realizar videollamadas.
- Utilizar aplicaciones empresariales.
- Compartir archivos.

---

### Conmutación de Circuitos

#### ¿Qué es?

La conmutación de circuitos es un sistema de comunicación en el que se establece una conexión exclusiva entre dos dispositivos antes de comenzar el intercambio de información.

#### ¿Para qué sirve?

Garantiza que exista siempre un camino reservado para la comunicación.

#### ¿Cuándo se utilizaba?

Era habitual en la telefonía tradicional.

#### Ejemplo

Cuando realizamos una llamada telefónica clásica, se reserva una línea para los dos interlocutores durante toda la conversación.

Aunque nadie hable durante unos segundos, la línea sigue ocupada.

---

### Conmutación de Paquetes

#### ¿Qué es?

La conmutación de paquetes es el método utilizado por Internet para transmitir información.

Los datos se dividen en pequeños bloques llamados **paquetes**.

#### ¿Para qué sirve?

Permite compartir eficientemente las comunicaciones entre muchos usuarios al mismo tiempo.

#### ¿Cuándo se utiliza?

Prácticamente en todas las comunicaciones de Internet.

#### Ejemplo

Supongamos que queremos enviar un libro.

En lugar de enviar el libro completo, lo dividimos en numerosos sobres numerados.

Cada sobre puede seguir una ruta diferente hasta llegar al destino.

Finalmente, el destinatario los ordena para reconstruir el libro original.

---

### El Modelo OSI

#### ¿Qué es?

El modelo OSI (Open Systems Interconnection) es un modelo de referencia que divide las comunicaciones de red en siete capas.

Cada capa tiene una responsabilidad concreta.

#### ¿Para qué sirve?

Permite comprender cómo se comunican los dispositivos y facilita el diseño de redes y aplicaciones.

#### Las siete capas

1. Aplicación
2. Presentación
3. Sesión
4. Transporte
5. Red
6. Enlace de Datos
7. Física

---

### Flujo de información entre dispositivos

Cuando un usuario abre una página web ocurre el siguiente proceso:

1. El navegador genera una petición.
2. La información baja por las capas del modelo OSI.
3. Los datos se transmiten por la red.
4. Llegan al servidor.
5. El servidor genera una respuesta.
6. La respuesta regresa al usuario.
7. El navegador muestra la información solicitada.

---

### Capa de Aplicación

#### ¿Qué es?

Es la capa más cercana al usuario.

Aquí se ejecutan las aplicaciones que utilizamos diariamente.

#### ¿Para qué sirve?

Permite que los programas intercambien información.

#### Protocolos principales

##### HTTP

Protocolo utilizado para acceder a páginas web.

##### HTTPS

Versión segura de HTTP que protege la información.

##### DNS

Sistema que traduce nombres de dominio en direcciones IP.

##### FTP

Protocolo utilizado para transferir archivos.

#### Ejemplo

Cuando escribimos:

```text
www.biblioteca.com
```

DNS busca la dirección IP correspondiente y HTTP solicita la página web.

---

### Capa de Presentación

#### ¿Qué es?

Es la capa encargada de preparar los datos para que puedan entenderse en ambos extremos de la comunicación.

#### Funciones principales

- Conversión de formatos.
- Compresión de información.
- Cifrado de datos.

#### Ejemplo

Cuando realizamos una compra online, los datos bancarios pueden cifrarse antes del envío.

---

### Capa de Sesión

#### ¿Qué es?

Gestiona las sesiones de comunicación entre dispositivos.

#### ¿Para qué sirve?

Permite iniciar, mantener y finalizar conversaciones entre aplicaciones.

#### Ejemplo

Cuando iniciamos sesión en una tienda online y permanecemos identificados durante varios minutos, existe una sesión activa.

---

### Capa de Transporte

#### ¿Qué es?

Se encarga de transportar los datos de forma fiable entre origen y destino.

#### TCP

TCP (Transmission Control Protocol) garantiza:

- Entrega correcta.
- Datos ordenados.
- Recuperación de errores.

#### UDP

UDP (User Datagram Protocol) prioriza la velocidad.

No verifica que toda la información llegue correctamente.

#### ¿Cuándo utilizar TCP?

- Navegación web.
- Correo electrónico.
- Transferencia de archivos.

#### ¿Cuándo utilizar UDP?

- Streaming.
- Videojuegos online.
- Videoconferencias.

#### Segmento

Los datos en esta capa se organizan en estructuras llamadas **segmentos**.

---

### Capa de Red

#### ¿Qué es?

Gestiona el encaminamiento de los datos entre redes.

#### Dirección IP

Una dirección IP identifica un dispositivo dentro de una red.

Ejemplo:

```text
192.168.1.15
```

Podemos compararla con la dirección postal de una vivienda.

#### Router

Un Router conecta varias redes y decide el mejor camino para enviar los paquetes.

#### Ejemplo

Al igual que una empresa de transporte decide la ruta de una mercancía, un router decide la ruta de los paquetes de datos.

---

### Capa de Enlace de Datos

#### ¿Qué es?

Permite la comunicación entre dispositivos conectados a la misma red física.

#### Dirección MAC

Cada tarjeta de red dispone de una dirección física única denominada MAC.

Ejemplo:

```text
00:1A:2B:3C:4D:5E
```

#### Subcapa LLC

LLC (Logical Link Control) controla aspectos lógicos de la comunicación.

#### Subcapa MAC

MAC (Media Access Control) controla el acceso al medio físico.

#### CSMA/CD

Mecanismo utilizado tradicionalmente en redes Ethernet para evitar colisiones entre dispositivos.

#### Switch

Un Switch conecta dispositivos dentro de la misma red local y envía los datos únicamente al destinatario correcto.

#### Trama

En esta capa los datos reciben el nombre de **tramas**.

---

### Capa Física

#### ¿Qué es?

Es la capa encargada de transportar físicamente los bits.

#### Medios físicos

- Cable de red.
- Fibra óptica.
- Redes inalámbricas.

#### Ejemplo

Si Internet fuera una red de carreteras, esta capa estaría formada por las propias carreteras.

---

### ¿Qué es un Socket?

#### Definición

Un Socket es un punto de comunicación que permite a dos aplicaciones intercambiar información a través de la red.

#### ¿Para qué sirve?

Permite que programas ubicados en equipos distintos puedan conectarse entre sí.

#### Ejemplo

Un navegador web utiliza un socket para comunicarse con un servidor web.

```text
Navegador <---- Socket ----> Servidor Web
```

#### Analogía

Podemos imaginar un socket como un teléfono.

Para que dos personas hablen, cada una necesita un teléfono. Los sockets serían esos teléfonos.

---

### ¿Qué son las Cabeceras?

#### Definición

Las cabeceras son datos adicionales que acompañan a la información durante la transmisión.

#### ¿Para qué sirven?

Indican información relevante como:

- Origen.
- Destino.
- Protocolo utilizado.
- Longitud de los datos.
- Número de secuencia.

#### Ejemplo

Cuando enviamos una carta:

- La carta representa los datos.
- El sobre representa la cabecera.

Sin el sobre, la carta no sabría dónde debe entregarse.

---

## Analogía del mundo real

Imaginemos una biblioteca.

Un usuario solicita un libro al bibliotecario.

1. El bibliotecario recibe la solicitud.
2. Busca la ubicación correcta.
3. Encuentra el libro.
4. Verifica que sea el libro adecuado.
5. Lo entrega al usuario.

Algo similar ocurre en Internet:

- El navegador solicita información.
- DNS localiza el destino.
- Los routers encuentran la ruta.
- TCP organiza la entrega.
- El servidor responde.
- El navegador muestra el resultado.

Cada capa del modelo OSI participa en una parte concreta del proceso.

---

## Ejemplos prácticos

### Ejemplo 1. Acceso a una página web

```text
https://www.biblioteca.com
```

**Explicación paso a paso**

1. El usuario escribe la dirección en el navegador.
2. El navegador consulta el servidor DNS para averiguar la dirección IP.
3. Se establece una conexión TCP con el servidor.
4. Se envía una petición HTTP.
5. El servidor procesa la petición.
6. El servidor devuelve la página solicitada.
7. El navegador muestra la página al usuario.

### Ejemplo 2. Envío de un mensaje

```text
Hola Marta
```

**Explicación paso a paso**

1. El mensaje se crea en la aplicación.
2. La capa de transporte lo divide en segmentos.
3. Cada segmento recibe información adicional en las cabeceras.
4. Los routers encaminan los paquetes.
5. El dispositivo receptor recibe los datos.
6. TCP reconstruye el mensaje original.
7. El destinatario puede leer el mensaje.

### Ejemplo 3. Dirección IP y Dirección MAC

```text
IP: 192.168.1.20
MAC: 00:1A:2B:3C:4D:5E
```

**Explicación paso a paso**

- La IP indica dónde localizar el dispositivo dentro de la red.
- La MAC identifica físicamente la tarjeta de red.
- El switch utiliza la dirección MAC para encontrar el equipo dentro de la red local.
- El router utiliza la dirección IP para enviar la información hacia otras redes.

### Ejemplo 4. TCP y UDP

```text
Descargar una factura PDF -> TCP

Realizar una videollamada -> UDP
```

**Explicación paso a paso**

- Una factura debe llegar completa y sin errores.
- Por ese motivo se utiliza TCP.
- En una videollamada es más importante la velocidad.
- Si se pierde un pequeño fragmento de audio o vídeo normalmente la conversación continúa.
- Por este motivo suele utilizarse UDP.

---

## Errores frecuentes

### Confundir Internet con la Web

Internet es la infraestructura de comunicación.

La Web es uno de los servicios que utilizan Internet.

### Pensar que los datos viajan completos

La información normalmente se divide en múltiples paquetes antes de ser enviada.

### Confundir IP y MAC

La IP identifica una ubicación lógica en la red.

La MAC identifica físicamente una tarjeta de red.

### Creer que TCP y UDP son iguales

TCP garantiza la entrega correcta.

UDP prioriza la velocidad.

### Pensar que Router y Switch realizan la misma función

El Router conecta redes distintas.

El Switch conecta dispositivos dentro de una misma red local.

### Creer que una página web está almacenada en el ordenador del usuario

La página normalmente se encuentra en un servidor remoto y se descarga cuando es solicitada.

---

## Resumen

- Internet es una red mundial formada por millones de dispositivos conectados.
- La conmutación de circuitos reserva una conexión exclusiva durante toda la comunicación.
- La conmutación de paquetes divide la información en pequeños fragmentos llamados paquetes.
- Internet funciona gracias a la conmutación de paquetes.
- El modelo OSI divide las comunicaciones en siete capas.
- Cada capa realiza una función específica.
- HTTP, HTTPS, DNS y FTP pertenecen a la capa de aplicación.
- TCP garantiza una comunicación fiable.
- UDP prioriza la velocidad.
- Las direcciones IP identifican dispositivos dentro de una red.
- Las direcciones MAC identifican físicamente las tarjetas de red.
- Los routers conectan redes diferentes.
- Los switches conectan dispositivos de una misma red local.
- Los sockets permiten que dos aplicaciones intercambien información.
- Las cabeceras contienen información necesaria para el transporte de los datos.

---

## Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| Internet | Red mundial de dispositivos conectados |
| Conmutación de Circuitos | Reserva una conexión exclusiva durante la comunicación |
| Conmutación de Paquetes | Divide la información en múltiples paquetes |
| Modelo OSI | Modelo de referencia de siete capas |
| HTTP | Protocolo utilizado para páginas web |
| HTTPS | Versión segura de HTTP |
| DNS | Traduce nombres de dominio en direcciones IP |
| FTP | Protocolo de transferencia de archivos |
| TCP | Protocolo fiable orientado a conexión |
| UDP | Protocolo rápido sin confirmación de entrega |
| Segmento | Unidad de datos de la capa de transporte |
| Router | Dispositivo que conecta redes |
| Dirección IP | Identificador lógico de un equipo |
| Dirección MAC | Identificador físico de una tarjeta de red |
| Switch | Dispositivo que conecta equipos de una red local |
| Trama | Unidad de datos de la capa de enlace |
| Socket | Punto de comunicación entre dos aplicaciones |
| Cabecera | Información adicional que acompaña a los datos |

---

## Ejercicios de reflexión

1. ¿Por qué Internet utiliza conmutación de paquetes en lugar de conmutación de circuitos?
2. ¿Qué función realiza DNS cuando escribimos una dirección web en el navegador?
3. ¿Cuál es la diferencia principal entre TCP y UDP?
4. ¿Qué diferencia existe entre una dirección IP y una dirección MAC?
5. ¿Qué papel desempeña un router cuando visitamos una página web alojada en otro país?
6. ¿Por qué son necesarias las cabeceras durante la transmisión de datos?
7. ¿Cómo colaborarían un Switch y un Router para enviar información desde un ordenador de una empresa hasta un servidor en Internet?
