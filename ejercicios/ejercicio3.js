/* 3) Tienes un arreglo (llamado myArray) con 10 elementos (enteros en el rango de 1 a 5).
Escribe un programa que imprima el número que tiene más ocurrencias seguidas en arreglo
y también imprimir la cantidad de veces que aparece en la secuencia.
El código que llena el arreglo ya está escrito, pero puedes editarlo para probar con otros
valores. Con el botón de refrescar puedes recuperar el valor original que será utilizado para
evaluar la pregunta como correcta o incorrecta durante la ejecución.
Su programa escrito en JavaScript debe analizar el arreglo de izquierda a derecha para que
en caso de que dos números cumplan la condición, el que aparece por primera vez de
izquierda a derecha será el que se imprimirá. La salida de los datos para el arreglo en el
ejemplo (1,2,2,5,4,6,7,8,8,8) sería la siguiente:
Longest: 3
Number: 8 */

var myArray = [1,2,2,4,5,6,7,8,8,8];

function numeroMasOcurrencias(myArray) {
  let numMasOcurrencia = 0;
  let conteoTotal = 0;
  let conteo = 0;
  for (let i = 0; i < myArray.length; i++) {
    for (let j = 0; j < myArray.length; j++) {
      if (myArray[i] == myArray[j]) {
        conteo++;
      }
    }
    if (conteo > conteoTotal) {
      conteoTotal = conteo;
      numMasOcurrencia = myArray[i];
    }
  }
  conteoOcurrencias(numMasOcurrencia)
  return numMasOcurrencia;
}

function conteoOcurrencias(num) {
  let conteo = myArray.filter(x => x == num).length;
  console.log(`Longest: ${conteo}`)
}

console.log(`Number: ${numeroMasOcurrencias(myArray)}`);
