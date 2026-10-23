# 3 Ejercicios. Subnetting.

## Pregunta 1

¿Qué función tiene una dirección IP dentro de una red?

A) Identificar un dispositivo dentro de la red.

B) Aumentar la velocidad de Internet.

C) Crear copias de seguridad.

D) Dividir automáticamente una red.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Una dirección IP permite identificar de forma única un dispositivo para que pueda comunicarse con otros equipos.
```

</details>

---

## Pregunta 2

Cuando decimos que una dirección IP está formada por "Red + Host", ¿qué representa el host?

A) El nombre de la empresa.

B) El cable de red utilizado.

C) El dispositivo concreto dentro de la red.

D) La velocidad de conexión.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
La parte host identifica un dispositivo específico dentro de una red determinada.
```

</details>

---

## Pregunta 3

¿Para qué sirve una máscara de red?

A) Para aumentar la memoria del ordenador.

B) Para indicar qué parte de la IP corresponde a la red y cuál al host.

C) Para proteger la pantalla.

D) Para cambiar el nombre del dispositivo.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
La máscara permite diferenciar la parte de red y la parte de host dentro de una dirección IP.
```

</details>

---

## Pregunta 4

¿Qué es un dominio de broadcast?

A) Un tipo de servidor web.

B) Una dirección IP pública.

C) Un sistema de almacenamiento.

D) El conjunto de dispositivos que reciben mensajes broadcast.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
Todos los equipos que reciben un mensaje broadcast pertenecen al mismo dominio de broadcast.
```

</details>

---

## Pregunta 5

¿Qué técnica permite dividir una red grande en varias redes más pequeñas?

A) Subnetting

B) Broadcast

C) Hosting

D) Enrutamiento físico

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
El subnetting se utiliza para dividir una red en subredes más pequeñas y organizadas.
```

</details>

---

## Pregunta 6

¿Cuál es una ventaja importante del subnetting?

A) Elimina las direcciones IP.

B) Hace desaparecer las máscaras de red.

C) Obliga a usar una única red.

D) Reduce el tráfico innecesario de broadcast.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
Al dividir la red en subredes, disminuye la cantidad de dispositivos que reciben ciertos mensajes.
```

</details>

---

## Pregunta 7

¿Qué característica principal tiene FLSM?

A) No utiliza direcciones IP.

B) Todas las subredes tienen el mismo tamaño.

C) Elimina los dominios de broadcast.

D) Solo funciona en Internet.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
FLSM crea subredes con la misma cantidad de direcciones disponibles.
```

</details>

---

## Pregunta 8

¿Qué característica distingue a VLSM?

A) No utiliza máscaras.

B) Todas las subredes tienen exactamente el mismo tamaño.

C) Permite crear subredes de distintos tamaños.

D) Impide dividir redes.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
VLSM permite adaptar el tamaño de cada subred a las necesidades reales.
```

</details>

---

## Pregunta 9

¿Qué parte de la dirección IP identifica a qué red pertenece un dispositivo?

A) La parte de red.

B) La parte de host.

C) El dominio de broadcast.

D) La subred vecina.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
La parte de red indica el grupo o red al que pertenece el dispositivo.
```

</details>

---

## Pregunta 10

¿Cuál de las siguientes afirmaciones sobre los mensajes broadcast es correcta?

A) Solo los recibe un dispositivo.

B) Nunca generan tráfico.

C) No tienen relación con las redes.

D) Son recibidos por todos los dispositivos del dominio de broadcast.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
Los mensajes broadcast se envían a todos los dispositivos que pertenecen al mismo dominio de broadcast.
```

</details>

---

## Pregunta 11

Una empresa tiene departamentos con 50, 20 y 5 equipos. ¿Qué método suele aprovechar mejor las direcciones IP?

A) No utilizar subredes.

B) FLSM.

C) VLSM.

D) Broadcast.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
VLSM permite asignar tamaños distintos a cada subred según la necesidad de cada departamento.
```

</details>

---

## Pregunta 12

¿Cuál de los siguientes elementos es necesario para distinguir entre la parte de red y la parte de host?

A) Dominio de broadcast.

B) Máscara de red.

C) Nombre del usuario.

D) Sistema operativo.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
La máscara de red indica qué parte de la dirección IP corresponde a la red y cuál al host.
```

</details>

---

## Pregunta 13

¿Qué ocurre normalmente cuando una red tiene un dominio de broadcast muy grande?

A) Desaparecen las direcciones IP.

B) Los dispositivos dejan de comunicarse.

C) Se eliminan las máscaras de red.

D) Aumenta el tráfico innecesario.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
Un mayor número de dispositivos recibe los mensajes broadcast, generando más tráfico.
```

</details>

---

## Pregunta 14

¿Cuál es el principal objetivo del subnetting?

A) Organizar una red grande en subredes más pequeñas.

B) Eliminar las direcciones IP.

C) Convertir una red local en Internet.

D) Sustituir las máscaras de red.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
El subnetting permite dividir una red para mejorar su organización y rendimiento.
```

</details>

---

## Pregunta 15

¿Qué opción describe mejor una ventaja de VLSM frente a FLSM?

A) Todas las subredes son iguales.

B) No necesita máscaras de red.

C) Aprovecha mejor las direcciones IP disponibles.

D) Elimina los hosts.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
Al adaptar el tamaño de cada subred, se desperdician menos direcciones IP.
```

</details>

---

## Pregunta 16

¿Cuál de las siguientes afirmaciones es correcta?

A) El host identifica la red.

B) El host identifica un dispositivo dentro de una red.

C) El host reemplaza la máscara de red.

D) El host es un dominio de broadcast.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
La parte host sirve para identificar un equipo concreto dentro de la red.
```

</details>

---

## Pregunta 17

¿Qué problema ayuda a reducir el subnetting?

A) El exceso de tráfico broadcast.

B) La falta de ordenadores.

C) Los cortes eléctricos.

D) La velocidad del procesador.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Al dividir una red en varias subredes, los broadcasts afectan a menos dispositivos.
```

</details>

---

## Pregunta 18

Si una organización quiere que todas sus subredes tengan exactamente el mismo tamaño, ¿qué debería utilizar?

A) Broadcast.

B) VLSM.

C) Host dinámico.

D) FLSM.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
FLSM se basa precisamente en crear subredes de tamaño fijo.
```

</details>

---

## Pregunta 19

¿Por qué una máscara de red es importante?

A) Porque sustituye la dirección IP.

B) Porque ayuda a identificar qué parte de la IP pertenece a la red y cuál al host.

C) Porque elimina los broadcasts.

D) Porque crea dispositivos nuevos.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
Sin la máscara de red no sería posible interpretar correctamente la estructura de una dirección IP.
```

</details>

---

## Pregunta 20

¿Cuál de las siguientes situaciones representa mejor un uso adecuado de VLSM?

A) Crear una única red para toda la empresa.

B) Asignar el mismo tamaño a todas las subredes.

C) Asignar tamaños diferentes a las subredes según el número de equipos.

D) Eliminar las direcciones IP de la red.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
VLSM permite diseñar subredes de distintos tamaños para ajustarse a las necesidades reales de cada área.
```

</details>
