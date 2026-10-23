# 4. DNS, Firewall y Proxy: Fundamentos de Comunicación y Seguridad en Redes

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender qué es DNS y por qué es necesario para navegar por Internet.
- Entender qué son los dominios y los servidores DNS.
- Identificar los principales registros DNS y su función.
- Comprender qué es un firewall y cómo protege una red.
- Diferenciar entre firewall hardware y firewall software.
- Entender qué son las reglas y políticas de seguridad.
- Conocer el concepto de seguridad perimetral.
- Comprender qué es un proxy y para qué se utiliza.
- Identificar las principales funciones de un proxy.
- Relacionar todos estos elementos con situaciones cotidianas.

---

# Introducción

Cuando utilizamos Internet para visitar una página web, enviar un correo o acceder a una aplicación, ocurren muchas acciones de forma automática detrás de la pantalla.

Para que la comunicación funcione correctamente y de forma segura, intervienen varios componentes importantes:

- DNS, que ayuda a localizar los sitios web.
- Firewall, que protege equipos y redes frente a accesos no autorizados.
- Proxy, que actúa como intermediario entre usuarios e Internet.

Estos elementos trabajan juntos para permitir una comunicación rápida, organizada y segura.

---

# Conceptos teóricos

## ¿Qué es DNS?

DNS significa **Domain Name System** (Sistema de Nombres de Dominio).

Su función es traducir los nombres de las páginas web que las personas pueden recordar en direcciones IP que los ordenadores utilizan para comunicarse.

Por ejemplo, es mucho más fácil recordar:

```text
www.biblioteca.es
```

que recordar:

```text
192.168.10.15
```

El DNS realiza automáticamente esta traducción.

### ¿Para qué sirve?

Sirve para:

- Encontrar servidores en Internet.
- Permitir que los usuarios utilicen nombres fáciles de recordar.
- Evitar que tengamos que memorizar direcciones IP.

### ¿Cuándo se utiliza?

Se utiliza cada vez que:

- Abrimos una página web.
- Enviamos un correo electrónico.
- Accedemos a una aplicación en Internet.

---

## Dominios

Un dominio es el nombre identificativo de un sitio web.

Ejemplos:

```text
amazon.com
microsoft.com
biblioteca.es
empresa.net
```

### Estructura de un dominio

Un dominio suele estar formado por varias partes.

Ejemplo:

```text
www.empresa.com
```

Donde:

- `www` → Subdominio.
- `empresa` → Nombre principal.
- `com` → Extensión o dominio de nivel superior.

### ¿Para qué sirven?

Sirven para identificar de forma única un sitio web en Internet.

---

## Servidores DNS

Un servidor DNS es un equipo especializado que almacena información sobre dominios y direcciones IP.

Cuando escribimos:

```text
www.tiendaonline.com
```

el navegador pregunta a un servidor DNS:

> "¿Qué dirección IP corresponde a este nombre?"

El servidor responde con la dirección correcta y la conexión puede realizarse.

### Ejemplo simplificado

1. Usuario escribe una web.
2. El navegador pregunta al DNS.
3. DNS devuelve la dirección IP.
4. El navegador conecta con el servidor.

---

## Registros DNS

Los registros DNS son datos almacenados dentro de un servidor DNS.

Cada registro tiene una función específica.

### Registro A

Relaciona un dominio con una dirección IP.

Ejemplo:

```text
tienda.com → 192.168.1.20
```

---

### Registro CNAME

Permite crear alias.

Ejemplo:

```text
www.tienda.com → tienda.com
```

Ambos nombres apuntan al mismo sitio.

---

### Registro MX

Indica qué servidor recibe los correos electrónicos de un dominio.

Ejemplo:

```text
empresa.com → servidor de correo
```

---

### Registro TXT

Almacena información de texto.

Se utiliza habitualmente para:

- Validaciones de seguridad.
- Configuración de servicios externos.

---

## ¿Qué es un Firewall?

Un firewall es un sistema de seguridad que controla el tráfico de red que entra y sale de un equipo o una organización.

Su función principal es permitir comunicaciones seguras y bloquear aquellas que puedan representar un riesgo.

### ¿Para qué sirve?

Sirve para:

- Bloquear accesos no autorizados.
- Evitar ataques externos.
- Proteger servidores y equipos.
- Controlar las comunicaciones.

### ¿Cuándo se utiliza?

Prácticamente siempre que existe una conexión de red o Internet.

---

## Tipos de Firewall

### Firewall Hardware (Appliance)

Es un dispositivo físico especializado en seguridad.

Se instala normalmente entre Internet y la red de la empresa.

Representación simplificada:

```text
Internet
    |
Firewall hardware
    |
Red de la empresa
```

### Ventajas

- Protege toda la red.
- Alto rendimiento.
- Administración centralizada.

---

### Firewall Software (Host)

Es un programa instalado directamente en un ordenador o servidor.

Ejemplos:

- Firewall de Windows.
- Firewall de Linux.

Representación:

```text
Ordenador
   |
Firewall software
   |
Programas y servicios
```

### Ventajas

- Protección individual.
- Fácil instalación.
- Coste reducido.

---

## Reglas de seguridad

Las reglas de seguridad indican qué comunicaciones están permitidas y cuáles deben bloquearse.

### Ejemplo

Permitir acceso web:

```text
Permitir tráfico al puerto 80
```

Bloquear acceso remoto:

```text
Bloquear tráfico al puerto 23
```

### ¿Por qué son importantes?

Porque permiten controlar exactamente qué puede hacer cada usuario o aplicación.

---

## Políticas de seguridad

Una política de seguridad es un conjunto de normas que define cómo debe protegerse una organización.

Ejemplos:

- Permitir únicamente páginas relacionadas con el trabajo.
- Bloquear descargas no autorizadas.
- Permitir acceso remoto solo a empleados autorizados.

Las políticas definen las reglas generales de seguridad.

---

## Seguridad perimetral

La seguridad perimetral consiste en proteger el límite entre la red interna de una organización e Internet.

Se puede imaginar como una muralla que protege una ciudad.

### Objetivos

- Detectar amenazas.
- Controlar accesos.
- Filtrar tráfico.
- Proteger recursos internos.

### Elementos habituales

- Firewalls.
- Proxys.
- Sistemas de detección de intrusiones.
- Sistemas antivirus.

---

## ¿Qué es un Proxy?

Un proxy es un intermediario que recibe una solicitud de un usuario y la envía al destino correspondiente.

En lugar de conectarse directamente a Internet, el usuario se comunica primero con el proxy.

Representación:

```text
Usuario
   |
Proxy
   |
Internet
```

### ¿Para qué sirve?

Sirve para:

- Controlar accesos.
- Mejorar el rendimiento.
- Aumentar la seguridad.
- Filtrar contenido.

---

## Funciones de un Proxy

### Control de acceso

Permite decidir qué páginas pueden visitar los usuarios.

Ejemplo:

```text
Permitido:
- biblioteca.es
- universidad.edu

Bloqueado:
- videojuegos.com
```

---

### Caché web

La caché es una copia temporal de información utilizada frecuentemente.

Si varios usuarios visitan la misma página:

1. El proxy la descarga una vez.
2. Guarda una copia.
3. Entrega la copia a los siguientes usuarios.

Esto mejora la velocidad.

---

### Filtrado de contenido

Permite bloquear determinados sitios web.

Ejemplo:

```text
Bloquear:
- Redes sociales
- Juegos online
- Sitios no autorizados
```

---

### Privacidad

El proxy puede ocultar parcialmente la identidad o dirección real del usuario durante la navegación.

Esto añade una capa adicional de privacidad.

---

### Función de Firewall

Muchos proxys también pueden analizar y bloquear tráfico peligroso.

Por ello complementan las funciones de un firewall tradicional.

---

# Analogía del mundo real

Imaginemos una gran biblioteca.

## DNS

El DNS sería el bibliotecario que conoce dónde está cada libro.

En lugar de memorizar la estantería exacta, preguntamos:

> "¿Dónde está el libro de Historia?"

Y el bibliotecario nos indica la ubicación.

---

## Firewall

El firewall sería el vigilante de seguridad de la entrada.

Decide:

- Quién puede entrar.
- Quién puede salir.
- Qué objetos están permitidos.

---

## Proxy

El proxy sería un empleado de ventanilla.

En lugar de que cada persona vaya directamente al almacén:

1. El usuario solicita el libro.
2. El empleado lo busca.
3. El empleado entrega el libro.

Además puede registrar quién solicitó cada libro y guardar copias de los documentos más consultados.

---

# Ejemplos prácticos

## Ejemplo 1: Resolución DNS

Un usuario quiere acceder a una tienda online.

```text
Usuario escribe:
www.mitienda.com
```

### Paso 1

El navegador detecta que necesita conocer la dirección IP.

### Paso 2

Pregunta al servidor DNS.

```text
www.mitienda.com
```

### Paso 3

El servidor DNS responde.

```text
203.0.113.20
```

### Paso 4

El navegador se conecta al servidor correcto.

---

## Ejemplo 2: Regla de Firewall

Una empresa desea permitir navegación web.

```text
Permitir puerto 80
Permitir puerto 443
```

### Explicación

- Puerto 80 → páginas web HTTP.
- Puerto 443 → páginas web HTTPS seguras.

Si un atacante intenta utilizar otro puerto bloqueado, el firewall impedirá la comunicación.

---

## Ejemplo 3: Proxy con caché

Tres empleados consultan una misma página.

### Primera solicitud

```text
Empleado 1 → Página web
```

El proxy descarga la información.

### Segunda solicitud

```text
Empleado 2 → Misma página
```

El proxy utiliza la copia guardada.

### Resultado

La página carga más rápido y se consume menos ancho de banda.

---

## Ejemplo 4: Filtrado de contenido

Una biblioteca quiere evitar el acceso a determinadas páginas.

Configuración simplificada:

```text
Permitir:
- biblioteca.es
- editoriales.com

Bloquear:
- juegosonline.com
```

### Resultado

Los usuarios únicamente podrán navegar por los sitios autorizados.

---

# Errores frecuentes

## Confundir dominio con dirección IP

Error:

Pensar que son lo mismo.

Realidad:

- Dominio → nombre fácil de recordar.
- Dirección IP → dirección utilizada por los equipos.

---

## Pensar que DNS almacena páginas web

Error:

Creer que el DNS contiene el contenido de las páginas.

Realidad:

El DNS solo indica dónde está el servidor.

---

## Creer que un firewall elimina todos los riesgos

Error:

Pensar que un firewall hace imposible sufrir ataques.

Realidad:

Solo añade una capa importante de protección.

---

## Configurar reglas demasiado permisivas

Error:

Permitir cualquier conexión.

Realidad:

Reduce significativamente la seguridad.

---

## Pensar que un proxy y un firewall son exactamente iguales

Error:

Considerarlos el mismo sistema.

Realidad:

Tienen funciones relacionadas, pero objetivos diferentes.

---

# Resumen

- DNS traduce nombres de dominio a direcciones IP.
- Los dominios permiten identificar sitios web mediante nombres fáciles de recordar.
- Los servidores DNS almacenan información sobre dominios.
- Los registros DNS contienen configuraciones específicas como direcciones IP o servidores de correo.
- Un firewall controla el tráfico de red y protege sistemas frente a accesos no autorizados.
- Existen firewalls hardware y software.
- Las reglas de seguridad determinan qué comunicaciones están permitidas.
- Las políticas de seguridad definen las normas generales de protección.
- La seguridad perimetral protege la frontera entre Internet y la red interna.
- Un proxy actúa como intermediario entre usuarios e Internet.
- Los proxys permiten control de acceso, caché, filtrado de contenido, privacidad y funciones adicionales de seguridad.

---

# Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| DNS | Sistema que traduce nombres de dominio en direcciones IP. |
| Dominio | Nombre identificativo de un sitio web. |
| Dirección IP | Identificador numérico de un equipo o servidor en una red. |
| Servidor DNS | Equipo que almacena información de dominios e IPs. |
| Registro DNS | Configuración almacenada dentro de un DNS. |
| Registro A | Asocia un dominio con una dirección IP. |
| Registro CNAME | Crea un alias para otro dominio. |
| Registro MX | Define el servidor encargado del correo electrónico. |
| Firewall | Sistema que controla y protege el tráfico de red. |
| Firewall Hardware | Dispositivo físico de protección para toda la red. |
| Firewall Software | Programa instalado en un equipo para protegerlo. |
| Regla de seguridad | Instrucción que permite o bloquea comunicaciones. |
| Política de seguridad | Conjunto de normas de protección de una organización. |
| Seguridad perimetral | Protección del borde entre Internet y la red interna. |
| Proxy | Intermediario entre usuarios e Internet. |
| Caché web | Copia temporal de páginas para mejorar velocidad. |
| Filtrado de contenido | Restricción del acceso a determinados sitios web. |

---

# Ejercicios de reflexión

1. ¿Por qué sería complicado navegar por Internet si no existiera DNS?

2. ¿Cuál es la diferencia principal entre un dominio y una dirección IP?

3. ¿Qué ventajas ofrece un firewall dentro de una empresa?

4. ¿Cómo ayuda un proxy a mejorar la velocidad de navegación mediante la caché?

5. Si una biblioteca quiere impedir el acceso a determinadas páginas web, ¿utilizarías un firewall, un proxy o ambos? Explica por qué.
