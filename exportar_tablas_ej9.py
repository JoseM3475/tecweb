import pandas as pd
import re

def extraer_tablas(md_file):
    with open(md_file, "r", encoding="utf-8") as f:
        contenido = f.read()

    # Detecta bloques tipo:
    # ## Tabla X
    # |col1|col2|...
    bloques = re.findall(r"## Tabla (.*?)\n\n(\|.*?)(?=\n\n##|\Z)", contenido, re.S)

    tablas = []
    for nombre, tabla_md in bloques:
        filas = tabla_md.strip().split("\n")

        # Encabezados
        columnas = [c.strip() for c in filas[0].split("|")[1:-1]]

        # Filas
        datos = []
        for fila in filas[2:]:
            valores = [v.strip() for v in fila.split("|")[1:-1]]
            datos.append(valores)

        df = pd.DataFrame(datos, columns=columnas)
        tablas.append((nombre.strip(), df))

    return tablas


# Ruta del archivo del ejercicio 9
archivo_md = "sql_curso/practica/9_Ejercicios_Indices.md"

tablas = extraer_tablas(archivo_md)

for nombre, df in tablas:
    archivo = f"{nombre.lower()}.txt"
    df.to_csv(archivo, sep="\t", index=False)
    print(f"✔ Exportado: {archivo}")
