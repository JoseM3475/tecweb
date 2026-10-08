# Arquitecturas de Sistemas Distribuidos

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Entender qué es un sistema distribuido.
- Comprender por qué se utilizan los sistemas distribuidos en aplicaciones modernas.
- Diferenciar los tipos de sistemas distribuidos: Cluster y Grid.
- Conocer las principales características de los sistemas distribuidos.
- Entender qué es una arquitectura distribuida y cómo se organiza.
- Comprender el papel del middleware en una aplicación distribuida.
- Conocer qué son los microservicios y por qué son tan utilizados actualmente.
- Entender qué es la latencia y cómo afecta al rendimiento de una aplicación.
- Conocer las técnicas de observabilidad para supervisar aplicaciones distribuidas.

---

## Introducción

Cuando utilizamos aplicaciones como tiendas online, plataformas de vídeo o aplicaciones bancarias, parece que todo funciona desde un único ordenador. Sin embargo, la realidad es que suelen intervenir muchos equipos trabajando conjuntamente.

A este conjunto de equipos cooperando para ofrecer un servicio se le denomina **sistema distribuido**.

Los sistemas distribuidos permiten repartir el trabajo entre varios ordenadores conectados por una red. Gracias a ello, las aplicaciones pueden atender a muchos usuarios, procesar grandes cantidades de información y seguir funcionando incluso cuando algún equipo presenta problemas.

---

## Conceptos teóricos

### ¿Qué es un Sistema Distribuido?

Un sistema distribuido es un conjunto de ordenadores independientes que colaboran para funcionar como si fueran un único sistema.

Aunque internamente existan varios equipos realizando diferentes tareas, el usuario percibe una única aplicación.

### ¿Para qué sirve?

Los sistemas distribuidos permiten:

- Repartir el trabajo entre varias máquinas.
- Mejorar el rendimiento.
- Incrementar la disponibilidad del servicio.
- Reducir el impacto de los fallos.

### ¿Cuándo se utilizan?

Se utilizan cuando:

- Hay muchos usuarios conectados.
- Existen grandes cantidades de datos.
- Se necesita un servicio disponible las 24 horas.
- Una sola máquina no es suficiente.

### Ejemplo sencillo

Imaginemos una tienda online:

- Un servidor muestra los productos.
- Otro procesa los pedidos.
- Otro almacena los datos.

Todos trabajan juntos para ofrecer una experiencia única al cliente.

---

### Tipos de Sistemas Distribuidos

#### Cluster

Un **Cluster** es un conjunto de ordenadores que trabajan juntos como si fueran una única máquina.

Sus características habituales son:

- Equipos similares.
- Misma ubicación o centro de datos.
- Conexiones rápidas entre ellos.

#### ¿Para qué sirve?

Permite:

- Repartir la carga de trabajo.
- Mejorar el rendimiento.
- Mantener el servicio funcionando aunque falle una máquina.

#### Ejemplo

Una tienda online recibe miles de visitas.

En lugar de utilizar un único servidor web, utiliza varios servidores idénticos para repartir las peticiones.

---

#### Grid

Un **Grid** es un conjunto de ordenadores distribuidos en diferentes ubicaciones que colaboran para resolver tareas complejas.

Los equipos pueden pertenecer a distintas organizaciones y tener características diferentes.

#### ¿Para qué sirve?

Se utiliza para:

- Investigaciones científicas.
- Procesamiento masivo de datos.
- Simulaciones complejas.

#### Ejemplo

Una universidad necesita analizar millones de datos.

En lugar de utilizar un único ordenador, utiliza cientos de equipos repartidos por diferentes edificios para colaborar en el procesamiento.

---

### Características de los Sistemas Distribuidos

#### Transparencia

La transparencia significa que el usuario no necesita conocer dónde se ejecuta cada parte de la aplicación.

Para el usuario, todo parece un único sistema.

**Ejemplo:** Cuando realizamos una compra online no sabemos qué servidor procesa nuestro pedido.

---

#### Tolerancia a fallos

Es la capacidad del sistema para seguir funcionando cuando se produce un error en alguno de sus componentes.

**Ejemplo:** Si un servidor deja de funcionar, otro puede continuar realizando su trabajo.

---

#### Sistemas Abiertos

Un sistema abierto puede comunicarse fácilmente con otros sistemas mediante estándares comunes.

**Ejemplo:** Una tienda online que se conecta a una empresa de transporte y a una plataforma de pago.

---

#### Escalabilidad

Es la capacidad del sistema para crecer cuando aumenta la carga de trabajo.

**Ejemplo:** Durante una campaña de rebajas se añaden más servidores para soportar más usuarios.

---

#### Seguridad

La seguridad protege la información frente a accesos no autorizados.

**Ejemplo:** Los datos bancarios de los clientes deben protegerse mediante mecanismos de seguridad.

---

#### Consistencia

La consistencia garantiza que todos los servidores trabajen con la misma información.

**Ejemplo:** Si se vende el último producto disponible, todos los servidores deben saber que ya no queda stock.

---

#### Concurrencia

La concurrencia permite que varios usuarios utilicen el sistema al mismo tiempo.

**Ejemplo:** Cientos de clientes pueden realizar pedidos simultáneamente.

---

### Arquitectura de Sistemas Distribuidos

La arquitectura describe cómo se organizan y comunican los diferentes componentes de un sistema distribuido.

#### Componentes habituales

- Cliente.
- Servidor.
- Base de datos.
- Red de comunicaciones.
- Servicios especializados.

#### Funcionamiento básico

1. El cliente realiza una petición.
2. El servidor recibe la solicitud.
3. Se consulta la información necesaria.
4. Se procesa la respuesta.
5. El cliente recibe el resultado.

---

### Middleware

#### ¿Qué es?

El **Middleware** es un software que actúa como intermediario entre diferentes aplicaciones o componentes.

Facilita la comunicación y el intercambio de información.

#### ¿Para qué sirve?

Permite que distintos sistemas colaboren aunque hayan sido desarrollados por equipos diferentes.

#### ¿Cuándo se utiliza?

Cuando varios programas necesitan comunicarse entre sí.

#### Ejemplo

Una tienda online debe comunicarse con:

- El sistema de pagos.
- La base de datos.
- El sistema de envíos.

El middleware ayuda a coordinar toda esta comunicación.

---

### Microservicios

#### ¿Qué son?

Los **Microservicios** son una forma de diseñar aplicaciones mediante pequeños servicios independientes.

Cada microservicio realiza una tarea específica.

#### ¿Para qué sirven?

Permiten:

- Facilitar el mantenimiento.
- Escalar de forma independiente.
- Actualizar partes concretas de la aplicación.

#### ¿Cuándo se utilizan?

Cuando una aplicación crece y resulta demasiado grande para gestionarla como un único bloque.

#### Ejemplo

Una tienda online puede dividirse en:

- Servicio de clientes.
- Servicio de productos.
- Servicio de pedidos.
- Servicio de pagos.
- Servicio de envíos.

Cada servicio se desarrolla y mantiene de forma independiente.

---

### Latencia

#### ¿Qué es?

La latencia es el tiempo que tarda una petición en viajar desde un punto hasta otro y regresar con una respuesta.

#### ¿Para qué es importante?

Porque afecta directamente a la velocidad percibida por el usuario.

#### Ejemplo

Cuando un usuario pulsa un botón:

1. La solicitud viaja al servidor.
2. El servidor procesa la petición.
3. La respuesta vuelve al navegador.

Todo ese tiempo forma parte de la latencia.

#### Consecuencias de una latencia elevada

- Aplicaciones lentas.
- Mala experiencia de usuario.
- Mayor tiempo de espera.

---

### Técnicas de Observabilidad

#### ¿Qué es la observabilidad?

La observabilidad es la capacidad de conocer qué está ocurriendo dentro de una aplicación distribuida.

Ayuda a detectar errores y analizar el comportamiento del sistema.

#### ¿Por qué es importante?

Cuando existen muchos servidores y servicios resulta difícil localizar problemas sin herramientas de supervisión.

---

#### Logs (Registros)

Los logs almacenan información sobre los eventos que ocurren en una aplicación.

**Ejemplos:**

- Inicio de sesión de usuarios.
- Creación de pedidos.
- Errores de la aplicación.

---

#### Métricas

Las métricas son datos numéricos que permiten medir el estado del sistema.

**Ejemplos:**

- Número de usuarios conectados.
- Uso de memoria.
- Uso de CPU.
- Tiempo de respuesta.

---

#### Trazas

Las trazas permiten seguir el recorrido completo de una petición entre diferentes servicios.

**Ejemplo:**

Un pedido puede pasar por:

1. Servicio de clientes.
2. Servicio de productos.
3. Servicio de pagos.
4. Servicio de envíos.

La traza permite conocer exactamente qué ocurrió en cada paso.

---

## Analogía del mundo real

Imaginemos una biblioteca grande.

Existen diferentes departamentos:

- Recepción.
- Préstamos.
- Catalogación.
- Devoluciones.
- Atención al usuario.

Cada departamento realiza una tarea específica.

Cuando llega un visitante:

1. Es atendido en recepción.
2. Se consulta el catálogo.
3. Se localiza el libro.
4. Se registra el préstamo.

Aunque intervienen varias personas, el usuario percibe un único servicio.

Un sistema distribuido funciona de forma muy similar.

---

## Ejemplos prácticos

### Ejemplo 1: Sistema centralizado

```text
Usuario
   |
Servidor
   |
Base de Datos
```

#### Explicación

- Todo el trabajo se realiza en una sola máquina.
- Es sencillo de administrar.
- Si el servidor falla, todo el sistema deja de funcionar.

---

### Ejemplo 2: Sistema distribuido con Cluster

```text
          Usuarios
              |
      Balanceador
         /     \
        /       \
Servidor 1   Servidor 2
        \       /
         \     /
      Base de Datos
```

#### Explicación paso a paso

1. Los usuarios acceden a la aplicación.
2. El balanceador reparte las peticiones.
3. Los servidores procesan las solicitudes.
4. La base de datos almacena la información.
5. El sistema soporta más carga de trabajo.

---

### Ejemplo 3: Arquitectura basada en Microservicios

```text
Cliente
   |
------------------------------------------------
|         |          |           |             |
Clientes Productos Pedidos      Pagos       Envíos
------------------------------------------------
```

#### Explicación paso a paso

1. El usuario consulta productos.
2. El servicio de productos responde.
3. El usuario crea un pedido.
4. El servicio de pedidos registra la compra.
5. El servicio de pagos procesa el cobro.
6. El servicio de envíos gestiona la entrega.

Cada servicio realiza una única tarea.

---

## Errores frecuentes

### Confundir Cluster y Grid

Un Cluster normalmente utiliza equipos similares y cercanos.

Un Grid puede utilizar equipos diferentes distribuidos geográficamente.

---

### Pensar que más servidores siempre solucionan los problemas

Añadir servidores ayuda, pero una mala configuración puede seguir generando cuellos de botella.

---

### Ignorar la latencia

Una aplicación con muchos servidores puede seguir siendo lenta si la comunicación entre ellos no es eficiente.

---

### No preparar la tolerancia a fallos

Si no existen servidores de respaldo, una avería puede detener el servicio completo.

---

### Crear demasiados microservicios

Dividir excesivamente una aplicación puede aumentar su complejidad y dificultar su mantenimiento.

---

## Resumen

- Un sistema distribuido está formado por varios ordenadores que colaboran entre sí.
- Permite mejorar el rendimiento y la disponibilidad de una aplicación.
- Los Clusters agrupan máquinas similares para trabajar conjuntamente.
- Los Grids utilizan equipos distribuidos para resolver grandes tareas.
- Las características principales son transparencia, tolerancia a fallos, escalabilidad, seguridad, consistencia y concurrencia.
- El middleware facilita la comunicación entre aplicaciones.
- Los microservicios dividen una aplicación en servicios pequeños e independientes.
- La latencia mide el tiempo de comunicación entre sistemas.
- La observabilidad ayuda a detectar y analizar problemas.

---

## Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| Sistema Distribuido | Conjunto de ordenadores que colaboran para ofrecer un único servicio. |
| Cluster | Grupo de máquinas que trabajan juntas como si fueran una sola. |
| Grid | Conjunto de equipos distribuidos que colaboran para resolver tareas complejas. |
| Transparencia | El usuario no percibe la complejidad interna del sistema. |
| Tolerancia a fallos | Capacidad de seguir funcionando aunque aparezcan errores. |
| Escalabilidad | Capacidad para crecer y soportar más carga de trabajo. |
| Concurrencia | Posibilidad de atender varios usuarios simultáneamente. |
| Consistencia | Garantía de que todos los nodos poseen la misma información. |
| Seguridad | Protección de los datos y recursos del sistema. |
| Middleware | Software intermediario entre aplicaciones. |
| Microservicio | Servicio independiente que realiza una única función. |
| Latencia | Tiempo que tarda una petición en obtener respuesta. |
| Observabilidad | Capacidad de supervisar y comprender el comportamiento del sistema. |
| Logs | Registros de eventos generados por una aplicación. |
| Métricas | Valores numéricos que describen el estado del sistema. |
| Trazas | Seguimiento completo de una petición entre servicios. |

---

## Ejercicios de reflexión

1. ¿Por qué una aplicación con miles de usuarios suele necesitar un sistema distribuido?

2. ¿Qué diferencia principal existe entre un Cluster y un Grid?

3. ¿Cómo ayuda la tolerancia a fallos a mantener una aplicación disponible?

4. ¿Qué ventajas tiene dividir una aplicación en microservicios?

5. ¿Qué problemas puede provocar una latencia elevada en una aplicación web?
