# Verificación de Aplicaciones Web

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender qué significa verificar una aplicación web.
- Entender por qué las pruebas son imprescindibles antes de poner una aplicación en producción.
- Conocer las fases de un proceso de pruebas.
- Identificar los principales tipos de pruebas que se realizan en una aplicación web.
- Comprender qué es una prueba de caja negra.
- Entender la importancia de la seguridad, el rendimiento y la calidad de los datos.
- Conocer qué es PHPUnit y para qué se utiliza.

---

## Introducción

Cuando desarrollamos una aplicación web es normal cometer errores. Incluso los programadores con muchos años de experiencia los cometen.

Imagina que una tienda online permite comprar productos. Si existe un error, podría ocurrir que:

- El cliente no pueda iniciar sesión.
- El precio aparezca incorrectamente.
- Los pedidos no se guarden.
- La página se vuelva muy lenta cuando haya muchos usuarios conectados.

Por este motivo es necesario realizar pruebas antes de publicar una aplicación.

La verificación de aplicaciones web es el proceso que nos permite comprobar que la aplicación funciona correctamente, cumple los requisitos definidos y ofrece una buena experiencia al usuario.

El objetivo es encontrar errores antes de que los encuentren los usuarios.

---

# Conceptos teóricos

## ¿Qué es la verificación de una aplicación web?

La verificación consiste en comprobar que una aplicación funciona según lo esperado.

Antes de entregar una aplicación al cliente debemos asegurarnos de que:

- Hace lo que debe hacer.
- No hace cosas incorrectas.
- Gestiona adecuadamente los errores.
- Protege la información.
- Funciona con rapidez.
- Es fácil de utilizar.

---

## ¿Por qué son importantes las pruebas?

Las pruebas permiten:

- Detectar errores antes de publicar la aplicación.
- Mejorar la calidad del software.
- Reducir costes de mantenimiento.
- Aumentar la confianza de clientes y usuarios.
- Evitar problemas de seguridad.
- Garantizar que los datos se almacenan correctamente.

Cuanto antes se detecta un error, más barato resulta corregirlo.

---

## Características de un proceso de pruebas

Un proceso de pruebas suele seguir varias etapas.

### 1. Diseño de las pruebas

Es la fase en la que se planifica qué se va a comprobar.

Preguntas que debemos responder:

- ¿Qué funcionalidades vamos a probar?
- ¿Qué resultados esperamos obtener?
- ¿Qué herramientas vamos a utilizar?

---

### 2. Generación de casos de prueba

Un caso de prueba es un documento que describe una prueba concreta.

Por ejemplo:

**Objetivo:** comprobar que un cliente puede iniciar sesión.

**Datos de entrada:**

- Usuario: juan
- Contraseña: 1234

**Resultado esperado:**

- Acceso correcto al sistema.

---

### 3. Definición de procedimientos de prueba

Describe los pasos que debemos seguir.

Ejemplo:

1. Abrir la página web.
2. Pulsar en "Iniciar sesión".
3. Introducir usuario.
4. Introducir contraseña.
5. Pulsar el botón de acceso.

---

### 4. Ejecución de la prueba

Consiste en realizar realmente los pasos definidos.

Durante esta fase observamos:

- Si la aplicación funciona correctamente.
- Si aparecen errores.
- Si los resultados coinciden con lo esperado.

---

### 5. Realización del informe de prueba

Una vez terminadas las pruebas se documentan los resultados.

El informe suele incluir:

- Pruebas realizadas.
- Problemas detectados.
- Pruebas superadas.
- Pruebas fallidas.
- Recomendaciones de mejora.

---

# Tipos de pruebas

## Pruebas funcionales

Comprueban que las funcionalidades funcionan correctamente.

Se centran en responder una pregunta sencilla:

**¿La aplicación hace lo que debe hacer?**

Ejemplos:

- Registrar usuarios.
- Crear pedidos.
- Buscar productos.
- Modificar clientes.

---

## Pruebas estructurales

Analizan el funcionamiento interno del programa.

Los desarrolladores revisan:

- Código.
- Condiciones.
- Bucles.
- Funciones.

Estas pruebas suelen ser realizadas por programadores.

---

## Pruebas de integración con sistemas externos

Una aplicación web rara vez trabaja sola.

A menudo se conecta con:

- Bases de datos.
- Servicios de pago.
- APIs externas.
- Aplicaciones de terceros.

Estas pruebas verifican que todas las conexiones funcionan correctamente.

Ejemplo:

Una tienda online debe conectarse con una plataforma de pago para cobrar una compra.

---

## Pruebas de usabilidad y accesibilidad

### Usabilidad

La usabilidad mide la facilidad de uso.

Una aplicación con buena usabilidad:

- Es fácil de aprender.
- Tiene menús claros.
- Resulta intuitiva.

### Accesibilidad

La accesibilidad permite que personas con diferentes capacidades puedan utilizar la aplicación.

Por ejemplo:

- Personas con dificultades visuales.
- Personas que utilizan lectores de pantalla.
- Personas con movilidad reducida.

---

## Pruebas de detección de errores (Caja negra)

Las pruebas de caja negra consisten en probar la aplicación sin conocer el código interno.

El probador solo observa:

- Lo que introduce.
- Lo que obtiene como resultado.

Es como conducir un coche sin saber cómo funciona el motor.

Ejemplo:

Introducir un usuario incorrecto y comprobar si aparece el mensaje adecuado.

---

## Pruebas de seguridad

Verifican que la aplicación esté protegida frente a ataques.

Buscan problemas como:

- Robo de contraseñas.
- Acceso no autorizado.
- Modificación de datos.
- Fugas de información.

El objetivo es proteger a usuarios y empresas.

---

## Pruebas de rendimiento

Miden la velocidad y la capacidad de respuesta del sistema.

Preguntas habituales:

- ¿La página carga rápidamente?
- ¿Qué ocurre si se conectan 100 usuarios?
- ¿Qué ocurre si se conectan 1.000 usuarios?

### Pruebas de carga

Simulan muchos usuarios utilizando la aplicación simultáneamente.

### Pruebas de estrés

Intentan llevar el sistema hasta su límite para descubrir cuándo deja de funcionar correctamente.

---

## Pruebas de integridad de datos

Comprueban que los datos almacenados sean correctos.

Por ejemplo:

Un pedido debe guardar:

- Cliente correcto.
- Fecha correcta.
- Importe correcto.

La información no debe perderse ni modificarse accidentalmente.

---

## PHPUnit

### ¿Qué es PHPUnit?

PHPUnit es una herramienta utilizada para automatizar pruebas en aplicaciones desarrolladas con PHP.

Permite comprobar automáticamente que determinadas funcionalidades continúan funcionando correctamente.

Gracias a PHPUnit podemos repetir miles de pruebas de forma rápida sin realizarlas manualmente.

---

### ¿Para qué sirve PHPUnit?

Sirve para:

- Automatizar pruebas.
- Detectar errores rápidamente.
- Comprobar cambios en el código.
- Mejorar la calidad del software.

---

# Analogía del mundo real

Imagina que una aplicación web es un automóvil recién fabricado.

Antes de venderlo se realizan múltiples comprobaciones:

- Se prueba el motor.
- Se prueban los frenos.
- Se prueban las luces.
- Se comprueba el consumo.
- Se verifica la seguridad.

Si un coche se entregara sin realizar pruebas podrían producirse accidentes.

Con las aplicaciones ocurre exactamente lo mismo.

Las pruebas permiten detectar problemas antes de que lleguen a los usuarios.

---

# Ejemplos prácticos

## Ejemplo 1: Prueba funcional

Supongamos que tenemos una página para registrar clientes.

```text
Nombre: Ana
Email: ana@email.com
Botón: Guardar
```

### Explicación

- El usuario introduce un nombre.
- El usuario introduce un correo electrónico.
- Pulsa el botón guardar.
- Esperamos que el cliente quede registrado.

Si el registro se realiza correctamente, la prueba se considera superada.

---

## Ejemplo 2: Prueba de caja negra

Supongamos una pantalla de acceso.

```text
Usuario: admin
Contraseña: 1234
```

### Explicación

- Introducimos usuario y contraseña.
- Pulsamos acceder.
- Observamos el resultado.

No necesitamos conocer el código interno.

Simplemente comprobamos que la aplicación responde correctamente.

---

## Ejemplo 3: Prueba de integración

Una tienda online envía pedidos a una empresa de transporte.

```text
Pedido creado
↓
Sistema de transporte recibe el pedido
↓
Se genera el envío
```

### Explicación

- El cliente realiza una compra.
- La aplicación envía la información.
- El sistema externo recibe el pedido.
- Se crea el envío.

La prueba verifica que ambos sistemas se comunican correctamente.

---

## Ejemplo 4: Prueba de rendimiento

Supongamos una biblioteca online.

```text
Usuario 1 consulta un libro
Usuario 2 consulta un libro
...
Usuario 500 consulta un libro
```

### Explicación

- Simulamos cientos de usuarios.
- Medimos el tiempo de respuesta.
- Comprobamos que la aplicación sigue funcionando correctamente.

---

# Errores frecuentes

## Pensar que una aplicación funciona porque se ha probado una vez

Una única prueba nunca es suficiente.

Deben probarse muchos casos diferentes.

---

## Solo probar situaciones normales

También deben probarse situaciones incorrectas.

Por ejemplo:

- Campos vacíos.
- Contraseñas erróneas.
- Fechas inválidas.

---

## No documentar los resultados

Si no se registran los resultados, será difícil saber qué problemas aparecieron.

---

## Ignorar las pruebas de seguridad

Una aplicación puede funcionar perfectamente y aun así ser vulnerable a ataques.

---

## No repetir pruebas después de una corrección

Al corregir un error pueden aparecer otros nuevos.

Siempre es recomendable volver a probar la aplicación.

---

# Resumen

- La verificación permite comprobar que una aplicación funciona correctamente.
- El proceso de pruebas incluye diseño, creación de casos, definición de procedimientos, ejecución e informe.
- Las pruebas funcionales verifican que las funcionalidades cumplen los requisitos.
- Las pruebas estructurales analizan el funcionamiento interno del código.
- Las pruebas de integración validan la comunicación con sistemas externos.
- Las pruebas de usabilidad y accesibilidad mejoran la experiencia del usuario.
- Las pruebas de caja negra evalúan entradas y salidas sin conocer el código interno.
- Las pruebas de seguridad buscan vulnerabilidades.
- Las pruebas de rendimiento miden velocidad y capacidad de respuesta.
- Las pruebas de integridad garantizan que los datos sean correctos.
- PHPUnit permite automatizar pruebas en aplicaciones PHP.

---

# Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| Verificación | Comprobación de que una aplicación funciona correctamente. |
| Caso de prueba | Documento que describe una prueba concreta. |
| Prueba funcional | Verifica que una funcionalidad cumple su objetivo. |
| Prueba estructural | Analiza el funcionamiento interno del código. |
| Integración | Comprobación de la comunicación con sistemas externos. |
| Usabilidad | Facilidad de uso de una aplicación. |
| Accesibilidad | Capacidad de utilización por personas con diferentes capacidades. |
| Caja negra | Prueba basada en entradas y salidas sin analizar el código. |
| Seguridad | Protección frente a accesos o acciones no autorizadas. |
| Rendimiento | Medida de velocidad y capacidad de respuesta. |
| Integridad de datos | Garantía de que los datos son correctos y consistentes. |
| PHPUnit | Herramienta para automatizar pruebas en PHP. |

---

# Ejercicios de reflexión

1. ¿Por qué es importante realizar pruebas antes de publicar una aplicación web?

2. ¿Cuál es la diferencia principal entre una prueba funcional y una prueba de integración?

3. ¿Qué ventajas ofrece una prueba de caja negra frente a otras pruebas?

4. ¿Qué problemas podrían aparecer si una aplicación no supera las pruebas de rendimiento?

5. ¿Por qué una aplicación puede funcionar correctamente y aun así necesitar pruebas de seguridad?
