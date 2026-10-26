# MVC y Testing en el Desarrollo de Aplicaciones Web Distribuidas

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender qué es el patrón MVC (Modelo Vista Controlador).
- Entender por qué es importante separar responsabilidades dentro de una aplicación.
- Identificar las funciones del Modelo, la Vista y el Controlador.
- Comprender qué es el testing y por qué es una parte fundamental del desarrollo de software.
- Diferenciar entre requisitos funcionales y no funcionales.
- Entender qué son los errores o bugs.
- Conocer cuándo se realizan las pruebas durante el desarrollo de software.
- Identificar quién participa en el proceso de testing.
- Comprender qué es un caso de prueba (Test Case) y qué información contiene.
- Entender la importancia de la documentación de pruebas.

---

# Introducción

Cuando una aplicación web crece y comienza a tener muchas funcionalidades, mantener el código organizado se vuelve cada vez más importante.

Imagina una tienda online. Tiene clientes, productos, pedidos, formularios, páginas web y reglas de negocio. Si todo se desarrolla mezclado en un único lugar, el sistema se vuelve difícil de mantener, corregir y ampliar.

Para resolver este problema se utilizan patrones de diseño como MVC (Modelo Vista Controlador), que ayudan a organizar la aplicación en partes claramente diferenciadas.

Además, una aplicación debe funcionar correctamente antes de entregarse a los usuarios. Para comprobarlo se realiza un proceso llamado testing o pruebas, cuyo objetivo es detectar errores y garantizar que el sistema cumple lo que se espera de él.

En esta sesión aprenderemos cómo MVC ayuda a organizar una aplicación y cómo el testing ayuda a garantizar su calidad.

---

# Conceptos teóricos

## ¿Qué es MVC?

MVC significa:

- Modelo (Model)
- Vista (View)
- Controlador (Controller)

Es una forma de organizar una aplicación dividiéndola en partes independientes.

El objetivo principal es que cada parte tenga una responsabilidad específica.

Esto facilita:

- El mantenimiento del sistema.
- La ampliación de funcionalidades.
- La corrección de errores.
- El trabajo en equipo.

---

## ¿Qué es la separación de responsabilidades?

La separación de responsabilidades consiste en asignar una tarea concreta a cada parte de la aplicación.

En lugar de tener todo mezclado, cada componente se encarga únicamente de una función determinada.

Por ejemplo:

| Componente | Responsabilidad |
|------------|----------------|
| Modelo | Gestionar los datos |
| Vista | Mostrar información al usuario |
| Controlador | Coordinar las acciones |

Esta organización hace que el sistema sea más fácil de entender.

---

## ¿Qué es el Modelo (Model)?

El Modelo representa la información y las reglas de negocio de la aplicación.

Contiene los datos con los que trabaja el sistema.

Por ejemplo:

- Clientes.
- Productos.
- Pedidos.
- Empleados.
- Libros de una biblioteca.

### ¿Para qué sirve?

Sirve para:

- Guardar información.
- Recuperar información.
- Modificar información.
- Aplicar reglas de negocio.

### Ejemplo

Supongamos una tienda online.

Un producto puede tener:

- Nombre.
- Precio.
- Stock.

El modelo se encarga de gestionar esos datos.

```python
producto = {
    "nombre": "Portátil",
    "precio": 750,
    "stock": 10
}
```

Explicación:

- `nombre` almacena el nombre del producto.
- `precio` almacena su valor.
- `stock` indica cuántas unidades quedan disponibles.

---

## ¿Qué es la Vista (View)?

La Vista es la parte que ve el usuario.

Su función principal es mostrar información.

### ¿Para qué sirve?

Sirve para:

- Mostrar datos.
- Mostrar formularios.
- Mostrar resultados.
- Mostrar mensajes.

### Ejemplo

Una vista podría mostrar:

```text
Producto: Portátil
Precio: 750€
Stock disponible: 10
```

Explicación:

- La vista únicamente presenta la información.
- No guarda datos.
- No toma decisiones de negocio.

---

## ¿Qué es el Controlador (Controller)?

El Controlador es el intermediario entre el usuario, la vista y el modelo.

Responde a los eventos que realiza el usuario.

### ¿Qué es un evento?

Un evento es una acción que ocurre dentro de la aplicación.

Por ejemplo:

- Pulsar un botón.
- Enviar un formulario.
- Hacer clic en un producto.

### ¿Para qué sirve el controlador?

Sirve para:

1. Recibir la acción del usuario.
2. Pedir datos al modelo.
3. Enviar resultados a la vista.

### Ejemplo

Un usuario pulsa "Ver productos".

El controlador:

1. Detecta el clic.
2. Solicita la lista de productos.
3. Envía la información a la vista.

```python
def ver_productos():
    productos = obtener_productos()
    mostrar_productos(productos)
```

Explicación:

- `ver_productos()` atiende la petición del usuario.
- `obtener_productos()` recupera la información.
- `mostrar_productos()` envía la información para ser mostrada.

---

## Escalabilidad y modularidad

### ¿Qué es la escalabilidad?

La escalabilidad es la capacidad de un sistema para crecer sin problemas.

Por ejemplo:

- Pasar de 10 clientes a 10.000 clientes.
- Pasar de 5 productos a 50.000 productos.

Una buena organización mediante MVC facilita este crecimiento.

---

### ¿Qué es la modularidad?

La modularidad consiste en dividir un sistema en módulos independientes.

Cada módulo puede modificarse sin afectar demasiado al resto de la aplicación.

Por ejemplo:

- Módulo de clientes.
- Módulo de productos.
- Módulo de pedidos.

---

# Testing

## ¿Qué es el testing?

El testing es el proceso de comprobar que una aplicación funciona correctamente.

Antes de entregar una aplicación se realizan pruebas para detectar problemas.

---

## ¿Cuál es el objetivo del testing?

El testing tiene dos objetivos principales:

### Verificar

Comprobar que el software ha sido desarrollado correctamente.

Pregunta principal:

> ¿Hemos construido el sistema correctamente?

---

### Validar

Comprobar que el sistema satisface las necesidades del usuario.

Pregunta principal:

> ¿Hemos construido el sistema correcto?

---

## ¿Qué es un bug?

Un bug es un error o fallo en el software.

Puede provocar comportamientos inesperados.

### Ejemplos

- Un producto muestra un precio incorrecto.
- Un pedido no se guarda.
- Un botón no funciona.

---

## Requisitos funcionales

Los requisitos funcionales describen qué debe hacer el sistema.

### Ejemplos

- Registrar clientes.
- Crear pedidos.
- Buscar productos.
- Gestionar empleados.

---

## Requisitos no funcionales

Los requisitos no funcionales describen cómo debe comportarse el sistema.

### Ejemplos

- Seguridad.
- Rendimiento.
- Facilidad de uso.
- Disponibilidad.

Por ejemplo:

> La aplicación debe responder en menos de 2 segundos.

---

## ¿Por qué es importante el testing?

El testing ayuda a:

- Detectar errores.
- Aumentar la calidad.
- Mejorar la confiabilidad.
- Reducir problemas futuros.
- Reducir costes a largo plazo.

Corregir un error cuando la aplicación ya está funcionando suele ser mucho más caro que detectarlo durante el desarrollo.

---

## ¿Cuándo se realiza el testing?

### Ciclo de vida tradicional

En los modelos tradicionales las pruebas suelen realizarse después del desarrollo.

Proceso simplificado:

1. Análisis.
2. Diseño.
3. Desarrollo.
4. Testing.
5. Entrega.

---

### Metodologías ágiles (SCRUM)

SCRUM es una metodología de trabajo basada en ciclos cortos llamados sprints.

En SCRUM las pruebas se realizan continuamente.

Proceso simplificado:

1. Se desarrolla una pequeña parte.
2. Se prueba.
3. Se corrige.
4. Se mejora.
5. Se repite.

Esto permite detectar errores antes.

---

## ¿Quién realiza el testing?

### QA (Quality Assurance)

Son los profesionales especializados en calidad.

Su trabajo consiste en comprobar que el sistema funciona correctamente.

---

### Desarrolladores (DEV)

Los propios programadores también realizan pruebas.

Conocen el funcionamiento interno del sistema y pueden detectar errores tempranamente.

---

# Casos de prueba (Test Cases)

## ¿Qué es un caso de prueba?

Un caso de prueba es un documento que describe una prueba específica.

Indica:

- Qué se va a probar.
- Cómo se va a probar.
- Qué resultado se espera.

---

## Ejemplo sencillo

Supongamos un sistema que permite registrar clientes.

Queremos comprobar que un cliente puede registrarse correctamente.

---

### Datos de entrada

```text
Nombre: Ana
Correo: ana@email.com
```

Explicación:

- Son los datos que introducirá el usuario.

---

### Resultado esperado

```text
Cliente registrado correctamente
```

Explicación:

- Es el resultado que esperamos obtener.

---

## Elementos de un Test Case

### Identificador

Código único del caso de prueba.

Ejemplo:

```text
TC-001
```

---

### Precondiciones

Condiciones que deben cumplirse antes de ejecutar la prueba.

Ejemplo:

```text
El usuario debe encontrarse en la pantalla de registro.
```

---

### Datos de entrada

Información utilizada durante la prueba.

Ejemplo:

```text
Nombre: Ana
Correo: ana@email.com
```

---

### Pasos a seguir

Acciones que debe realizar el probador.

Ejemplo:

```text
1. Abrir formulario.
2. Introducir nombre.
3. Introducir correo.
4. Pulsar registrar.
```

---

### Resultado esperado

Resultado previsto.

Ejemplo:

```text
Cliente creado correctamente.
```

---

### Resultado obtenido

Resultado real tras ejecutar la prueba.

Ejemplo:

```text
Cliente creado correctamente.
```

---

### Estado

Indica si la prueba ha sido satisfactoria.

Ejemplo:

```text
PASADA
```

o

```text
FALLIDA
```

---

### Evidencia

Prueba que demuestra el resultado.

Ejemplos:

- Captura de pantalla.
- Documento PDF.
- Registro del sistema.

---

# Documento de testing

Un documento de testing reúne toda la información relacionada con las pruebas realizadas.

Normalmente contiene:

- Casos de prueba.
- Resultados.
- Evidencias.
- Errores detectados.
- Estado de las pruebas.

Este documento permite conocer el nivel de calidad del sistema.

---

# Analogía del mundo real

Imagina un restaurante.

### Modelo

Es la cocina.

Aquí se preparan los platos y se gestionan los ingredientes.

---

### Vista

Es la mesa del cliente.

Aquí se presenta la comida.

---

### Controlador

Es el camarero.

Recibe el pedido del cliente, lo lleva a la cocina y después entrega el plato.

---

### Testing

Antes de servir un plato, el chef comprueba:

- Que los ingredientes son correctos.
- Que está bien cocinado.
- Que cumple las normas de calidad.

Esto equivale al proceso de testing en una aplicación.

---

# Ejemplos prácticos

## Ejemplo 1: Consulta de productos

### Datos

```python
productos = ["Portátil", "Ratón", "Teclado"]
```

Explicación:

- Se almacena una lista con productos disponibles.

---

### Acción del usuario

```text
Ver catálogo
```

Explicación:

- El usuario solicita visualizar productos.

---

### Resultado mostrado

```text
Portátil
Ratón
Teclado
```

Explicación:

- La vista muestra los datos obtenidos.

---

## Ejemplo 2: Registro de un cliente

### Entrada

```text
Nombre: Carlos
```

Explicación:

- El usuario introduce su nombre.

---

### Resultado esperado

```text
Cliente registrado
```

Explicación:

- El sistema confirma el registro.

---

## Ejemplo 3: Caso de prueba

### Objetivo

Comprobar que un pedido puede crearse correctamente.

### Pasos

```text
1. Seleccionar producto.
2. Pulsar comprar.
3. Confirmar pedido.
```

Explicación:

- Estas acciones simulan el comportamiento del usuario.

### Resultado esperado

```text
Pedido creado correctamente.
```

Explicación:

- Si el sistema muestra este mensaje, la prueba es correcta.

---

# Errores frecuentes

## Confundir Modelo y Vista

Error:

Pensar que la vista debe guardar datos.

Corrección:

La vista solamente muestra información.

---

## Mezclar responsabilidades

Error:

Colocar toda la lógica en una única parte.

Corrección:

Cada componente debe realizar únicamente su función.

---

## No realizar pruebas

Error:

Pensar que el programa funciona porque compila.

Corrección:

Siempre deben realizarse pruebas.

---

## No documentar los casos de prueba

Error:

Realizar pruebas sin registrar resultados.

Corrección:

Documentar siempre los resultados obtenidos.

---

## Probar solamente casos positivos

Error:

Comprobar únicamente situaciones correctas.

Corrección:

También deben probarse situaciones incorrectas o inesperadas.

---

# Resumen

- MVC divide una aplicación en Modelo, Vista y Controlador.
- La separación de responsabilidades mejora la organización del software.
- El Modelo gestiona los datos y reglas de negocio.
- La Vista muestra información al usuario.
- El Controlador responde a eventos y coordina la aplicación.
- MVC favorece la escalabilidad y la modularidad.
- El testing verifica y valida el funcionamiento del software.
- Un bug es un error dentro de la aplicación.
- Existen requisitos funcionales y no funcionales.
- Las pruebas ayudan a garantizar calidad y confiabilidad.
- El testing puede realizarse tanto en modelos tradicionales como en metodologías ágiles.
- QA y desarrolladores participan en las pruebas.
- Los casos de prueba documentan cómo verificar una funcionalidad.
- La documentación de testing permite controlar la calidad del sistema.

---

# Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| MVC | Patrón que divide una aplicación en Modelo, Vista y Controlador |
| Modelo | Gestiona los datos y las reglas de negocio |
| Vista | Muestra información al usuario |
| Controlador | Coordina las acciones entre usuario, modelo y vista |
| Evento | Acción realizada por el usuario o por el sistema |
| Escalabilidad | Capacidad de crecer sin perder rendimiento |
| Modularidad | División del sistema en partes independientes |
| Testing | Proceso de comprobar el correcto funcionamiento del software |
| Verificación | Comprobar que el sistema está construido correctamente |
| Validación | Comprobar que el sistema satisface las necesidades del usuario |
| Bug | Error o fallo en la aplicación |
| Requisito funcional | Describe lo que el sistema debe hacer |
| Requisito no funcional | Describe cómo debe comportarse el sistema |
| QA | Profesional encargado del aseguramiento de la calidad |
| Test Case | Documento que describe una prueba concreta |
| Evidencia | Prueba que demuestra el resultado obtenido |

---

# Ejercicios de reflexión

1. En una tienda online, ¿qué tareas realizaría el Modelo y cuáles realizaría la Vista?

2. ¿Por qué resulta útil separar una aplicación en Modelo, Vista y Controlador en lugar de colocar todo el código junto?

3. ¿Cuál es la diferencia entre verificar y validar una aplicación?

4. Imagina que el botón "Comprar" no funciona. ¿Se trata de un bug? Explica por qué.

5. ¿Qué información debería incluir un caso de prueba para comprobar el registro de un nuevo cliente?
