/* 1. Tienes un arreglo (llamado myArray) con 5 elementos (enteros en el rango de 1 a 100).
Escribe un programa en JavaScript que imprima el número más alto del arreglo (Si se repite,
solo imprimir una vez).
El código que llena el arreglo ya está escrito, pero puedes editarlo para probar con otros
valores. Con el botón de refrescar puedes recuperar el valor original que será utilizado para
evaluar la pregunta como correcta o incorrecta durante la ejecución.
var myArray = [13,2,4,35,1]; */

var myArray = [13, 2, 4, 35, 1];

function numeroMayor(myArray) {
  return Math.max(...myArray);
}

console.log(numeroMayor(myArray))


