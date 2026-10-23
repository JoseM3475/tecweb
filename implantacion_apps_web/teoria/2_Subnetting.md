# Subnetting, Dominios de Broadcast y Organización de Redes IP

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender qué es una dirección IP y por qué es necesaria.
- Entender cómo una dirección IP se divide en parte de red y parte de host.
- Comprender qué es una máscara de red y cuál es su función.
- Entender qué es un dominio de broadcast.
- Conocer los problemas que pueden aparecer en redes demasiado grandes.
- Comprender qué es el subnetting y por qué se utiliza.
- Diferenciar entre FLSM y VLSM.
- Relacionar estos conceptos con situaciones reales de una empresa o una organización.

---

# Introducción

Cuando en una empresa hay muchos ordenadores, impresoras, servidores o dispositivos conectados, es necesario organizarlos adecuadamente para que puedan comunicarse de forma eficiente.

Imaginemos una ciudad donde todas las casas estuvieran en una única calle enorme. Encontrar una dirección concreta sería complicado y el tráfico sería caótico. En las redes informáticas ocurre algo parecido.

Por este motivo existen mecanismos que permiten organizar mejor las redes. Entre ellos destacan las direcciones IP, las máscaras de red, los dominios de broadcast y el subnetting.

Antes de aprender cómo se dividen las redes, primero debemos entender por qué es necesario hacerlo.

---

# Conceptos teóricos

## ¿Qué es una dirección IP?

Una dirección IP es un identificador único que permite reconocer un dispositivo dentro de una red.

Podemos compararla con la dirección postal de una vivienda.

Si queremos enviar una carta a una persona, necesitamos conocer su dirección. De la misma forma, para enviar información a un ordenador necesitamos conocer su dirección IP.

### ¿Para qué sirve?

Sirve para:

- Identificar dispositivos.
- Enviar información al destino correcto.
- Permitir la comunicación dentro de una red.

### ¿Cuándo se utiliza?

Siempre que dos dispositivos intercambian información:

- Al navegar por Internet.
- Al imprimir un documento.
- Al acceder a una aplicación web.
- Al consultar una base de datos.

### Ejemplo sencillo

```text
192.168.1.25
```

Esta dirección identifica a un dispositivo concreto dentro de una red.

---

## IP = Red + Host

Una dirección IP no solo identifica un dispositivo.

Está formada por dos partes:

- Parte de red.
- Parte de host.

### ¿Qué es la parte de red?

La parte de red identifica a qué red pertenece el dispositivo.

### ¿Qué es la parte de host?

La parte de host identifica a un dispositivo concreto dentro de esa red.

### Ejemplo

Supongamos la siguiente dirección IP:

```text
192.168.1.25
```

Y la siguiente máscara:

```text
255.255.255.0
```

Podemos interpretarla así:

```text
192.168.1 | 25
    Red   | Host
```

### ¿Qué significa?

Todos los dispositivos que comiencen por:

```text
192.168.1
```

pertenecen a la misma red.

El número:

```text
25
```

identifica a un dispositivo concreto.

### Ejemplo real

En una biblioteca:

- La sección "Historia" sería la red.
- El número de libro sería el host.

De esta forma sabemos en qué sección está el libro y cuál es exactamente.

---

## ¿Qué es una máscara de red?

La máscara de red es un valor que indica qué parte de una dirección IP corresponde a la red y qué parte corresponde al host.

### ¿Para qué sirve?

Permite:

- Saber qué dispositivos pertenecen a la misma red.
- Organizar redes de forma eficiente.
- Crear subredes.
- Facilitar la comunicación entre dispositivos.

### Ejemplo

Dirección IP:

```text
192.168.1.25
```

Máscara:

```text
255.255.255.0
```

Interpretación:

```text
192.168.1 | 25
    Red   | Host
```

### ¿Por qué es importante?

Sin la máscara, un dispositivo no sabría distinguir qué parte identifica la red y qué parte identifica al equipo.

---

## ¿Qué es un dominio de broadcast?

La palabra broadcast significa "enviar un mensaje a todos".

Un dominio de broadcast es el conjunto de dispositivos que reciben un mensaje enviado a toda la red.

### ¿Para qué sirve?

Permite localizar dispositivos y compartir cierta información necesaria para el funcionamiento de la red.

### Ejemplo sencillo

Un ordenador puede preguntar:

```text
¿Quién tiene la IP 192.168.1.20?
```

Todos los dispositivos de la red reciben esa pregunta.

Después, únicamente responderá el dispositivo que tenga esa dirección.

---

## Problemas de los dominios de broadcast grandes

Los mensajes broadcast son útiles, pero también consumen recursos.

Cuando una red crece demasiado:

- Hay más dispositivos escuchando.
- Se generan más comunicaciones innecesarias.
- La red se vuelve menos eficiente.

### Ejemplo

Supongamos una empresa con:

```text
500 ordenadores
```

Cada vez que se envía un broadcast:

```text
500 equipos reciben el mensaje
```

Aunque la mayoría de ellos no necesiten esa información.

Esto genera tráfico innecesario.

---

## ¿Qué es el subnetting?

Subnetting significa dividir una red grande en varias redes más pequeñas llamadas subredes.

### ¿Por qué se utiliza?

Porque las redes grandes pueden resultar difíciles de administrar y generar demasiado tráfico broadcast.

Dividirlas permite:

- Mejor organización.
- Mayor rendimiento.
- Menos tráfico innecesario.
- Mayor seguridad.

### ¿Cuándo se utiliza?

Por ejemplo:

- Empresas con varios departamentos.
- Universidades con distintas facultades.
- Hospitales con diferentes áreas.
- Bibliotecas con múltiples secciones.

### Ejemplo sencillo

Sin subnetting:

```text
Red única
192.168.1.0
```

Todos los dispositivos comparten la misma red.

Con subnetting:

```text
192.168.1.0  Administración
192.168.2.0  Ventas
192.168.3.0  Recursos Humanos
```

Ahora cada departamento dispone de su propia subred.

---

## ¿Qué es FLSM?

FLSM significa:

```text
Fixed Length Subnet Mask
```

o

```text
Máscara de Subred de Longitud Fija
```

Consiste en dividir una red en subredes del mismo tamaño.

### ¿Para qué sirve?

Se utiliza cuando todas las áreas de la organización necesitan aproximadamente la misma cantidad de dispositivos.

### Ejemplo

Una empresa divide su red en cuatro subredes:

```text
Subred A → 50 equipos
Subred B → 50 equipos
Subred C → 50 equipos
Subred D → 50 equipos
```

Todas tienen exactamente la misma capacidad.

### Ventajas

- Fácil de diseñar.
- Fácil de administrar.
- Fácil de calcular.

### Desventajas

- Puede desperdiciar direcciones IP.

---

## ¿Qué es VLSM?

VLSM significa:

```text
Variable Length Subnet Mask
```

o

```text
Máscara de Subred de Longitud Variable
```

Permite crear subredes de tamaños diferentes.

### ¿Para qué sirve?

Sirve para aprovechar mejor las direcciones IP disponibles.

### Ejemplo

Supongamos una empresa con:

```text
Administración → 50 equipos
Ventas → 20 equipos
Dirección → 5 equipos
```

Con VLSM:

- Administración recibe una subred grande.
- Ventas recibe una subred mediana.
- Dirección recibe una subred pequeña.

Cada departamento obtiene únicamente el espacio que necesita.

### Ventajas

- Aprovecha mejor las direcciones IP.
- Reduce el desperdicio.
- Es más eficiente.

### Desventajas

- Requiere una planificación más cuidadosa.

---

# Analogía del mundo real

Imaginemos una biblioteca muy grande.

La biblioteca completa representa una red.

Las distintas secciones representan las subredes:

- Historia
- Literatura
- Ciencia
- Infantil

Cada sección contiene sus propios libros.

La dirección IP sería la ubicación completa de un libro.

La parte de red indicaría la sección.

La parte de host indicaría el libro concreto.

Los avisos por megafonía serían los broadcasts.

Si cada anuncio se emitiera para toda la biblioteca, incluso cuando solo afecta a una sección, se generaría mucho ruido.

Por eso es mejor dividir la biblioteca en zonas independientes, exactamente igual que ocurre con el subnetting.

---

# Ejemplos prácticos

## Ejemplo 1: Identificar red y host

Tenemos la siguiente IP:

```text
192.168.10.35
```

Y la siguiente máscara:

```text
255.255.255.0
```

Interpretación:

```text
192.168.10 | 35
```

### Explicación línea a línea

```text
192.168.10
```

Identifica la red.

```text
35
```

Identifica el dispositivo dentro de la red.

---

## Ejemplo 2: Organización de una empresa

Empresa:

```text
Administración
Ventas
Almacén
```

Sin subnetting:

```text
192.168.1.0
```

Todos los equipos están mezclados.

Con subnetting:

```text
192.168.1.0 Administración
192.168.2.0 Ventas
192.168.3.0 Almacén
```

### Explicación línea a línea

```text
192.168.1.0 Administración
```

Red utilizada por Administración.

```text
192.168.2.0 Ventas
```

Red utilizada por Ventas.

```text
192.168.3.0 Almacén
```

Red utilizada por Almacén.

---

## Ejemplo 3: FLSM

Una organización crea tres subredes:

```text
Subred 1 → 50 equipos
Subred 2 → 50 equipos
Subred 3 → 50 equipos
```

### Explicación

Todas las subredes tienen el mismo tamaño.

Esto simplifica la administración.

---

## Ejemplo 4: VLSM

Una organización crea:

```text
Administración → 50 equipos
Ventas → 20 equipos
Dirección → 5 equipos
```

### Explicación

Cada departamento recibe únicamente las direcciones necesarias.

Se aprovechan mejor los recursos disponibles.

---

# Errores frecuentes

## Pensar que una dirección IP solo identifica un dispositivo

Además de identificar un dispositivo, la dirección IP contiene información sobre la red a la que pertenece.

---

## Creer que la máscara de red es opcional

Sin la máscara no podemos determinar qué parte de la IP corresponde a la red y cuál al host.

---

## Confundir red con host

La red identifica un grupo de dispositivos.

El host identifica un dispositivo concreto dentro de ese grupo.

---

## Pensar que el subnetting solo sirve para tener más direcciones

También sirve para:

- Mejorar el rendimiento.
- Reducir tráfico broadcast.
- Organizar departamentos.
- Incrementar la seguridad.

---

## Creer que todas las subredes deben tener el mismo tamaño

Eso solo ocurre con FLSM.

VLSM permite tamaños diferentes según las necesidades.

---

# Resumen

- Una dirección IP identifica dispositivos dentro de una red.
- Toda IP está formada por una parte de red y una parte de host.
- La máscara de red permite diferenciar ambas partes.
- Un broadcast es un mensaje enviado a todos los dispositivos de una red.
- Los dominios de broadcast demasiado grandes pueden generar tráfico innecesario.
- El subnetting permite dividir una red grande en varias subredes más pequeñas.
- FLSM crea subredes del mismo tamaño.
- VLSM permite crear subredes de tamaños diferentes.
- Dividir correctamente una red mejora la organización y el rendimiento.

---

# Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| Dirección IP | Identificador único de un dispositivo dentro de una red. |
| Red | Conjunto de dispositivos que pueden comunicarse entre sí. |
| Host | Dispositivo individual dentro de una red. |
| IP = Red + Host | Una dirección IP contiene información de la red y del dispositivo. |
| Máscara de Red | Valor que indica qué parte de una IP es red y qué parte es host. |
| Broadcast | Mensaje enviado a todos los dispositivos de una red. |
| Dominio de Broadcast | Conjunto de dispositivos que reciben un mensaje broadcast. |
| Subred | División de una red más grande. |
| Subnetting | Técnica para dividir una red en subredes más pequeñas. |
| FLSM | Método que crea subredes con el mismo tamaño. |
| VLSM | Método que crea subredes con tamaños diferentes. |

---

# Ejercicios de reflexión

1. ¿Por qué una dirección IP necesita una máscara de red para poder interpretarse correctamente?

2. ¿Cuál es la diferencia entre la parte de red y la parte de host de una dirección IP?

3. ¿Qué problemas pueden aparecer cuando un dominio de broadcast contiene cientos de dispositivos?

4. ¿Qué ventajas obtiene una empresa al dividir su red mediante subnetting?

5. ¿En qué situación sería más recomendable utilizar VLSM en lugar de FLSM?
