## Comparación de Arrays desde Archivos TXT

Este código PHP lee dos arrays desde archivos de texto, los compara elemento por elemento y calcula los puntos de comparación para cada par de arrays.

### Funciones

1. `leerArraysDesdeArchivo($nombreArchivo)`: Esta función lee los arrays desde un archivo de texto y los almacena en un array multidimensional. Cada línea del archivo representa un array, donde los elementos están separados por comas y encerrados entre corchetes. La función elimina los corchetes y convierte los elementos en enteros.

2. `compararArrays($a, $b)`: Esta función compara los elementos de dos arrays y calcula los puntos de comparación para cada par de elementos. Por cada índice, si el elemento de `$a` es mayor que el de `$b`, se suma un punto a `$puntosA`. Si es menor, se suma un punto a `$puntosB`.

### Uso

1. **Estructura de Archivos**:

   - El código PHP debe estar contenido en un archivo independiente.
   - Los archivos de texto deben tener el formato adecuado, con los arrays representados en cada línea, separando los elementos por comas y encerrándolos entre corchetes.

2. **Ejecución**:
   - El código PHP puede ejecutarse desde un servidor web local o desde la línea de comandos.
   - Asegúrate de proporcionar los nombres correctos de los archivos de texto a través de las variables `$archivo1` y `$archivo2`.
   - Los resultados de la comparación se mostrarán en la salida estándar.

---
