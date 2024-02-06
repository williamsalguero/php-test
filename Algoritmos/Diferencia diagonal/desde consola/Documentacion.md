## Diferencia en Diagonal de una Matriz Cuadrada desde Archivos TXT

Este código PHP lee dos matrices cuadradas desde archivos de texto, calcula la diferencia absoluta entre las sumas de sus diagonales y muestra los resultados.

### Funciones

1. `leerMatrizDesdeArchivo($nombreArchivo)`: Esta función lee una matriz cuadrada desde un archivo de texto y la almacena en un array multidimensional. Cada línea del archivo representa una fila de la matriz, donde los elementos están separados por espacios. La función convierte los elementos en enteros.

2. `diferenciaDiagonal($matriz)`: Esta función recibe una matriz cuadrada como entrada y calcula la diferencia absoluta entre las sumas de sus diagonales. Recorre la matriz y suma los elementos en la diagonal de izquierda a derecha y de derecha a izquierda, luego calcula la diferencia absoluta entre estas sumas.

### Uso

1. **Estructura de Archivos**:

   - El código PHP debe estar contenido en un archivo independiente.
   - Los archivos de texto deben tener el formato adecuado, con las filas de la matriz representadas en cada línea y los elementos separados por espacios.

2. **Ejecución**:
   - El código PHP puede ejecutarse desde un servidor web local o desde la línea de comandos.
   - Asegúrate de proporcionar los nombres correctos de los archivos de texto a través de las variables `$archivo1` y `$archivo2`.
   - Los resultados de la diferencia en diagonal se mostrarán en la salida estándar.

---
