/* 2) Escribir un programa en JavaScript que recorra un arreglo y genere un histograma en
base a los números de este.
El arreglo se llama myArray y contiene 10 elementos que corresponden a números enteros
del 1 al 5. Un histograma representa que tanto un elemento aparece en un conjunto de
datos. Por ejemplo, para el arreglo: myArray:=(1,2,1,3,3,1,2,1,5,1) el histograma se vería así:
1: *****
2: **
3: **
4:
5: *
 */

var myArray = [1, 2, 1, 3, 3, 1, 2, 1, 5, 1];

function conteoNumeros(myArray) {
  let conteo = { 1: "", 2: "", 3: "", 4: "", 5: "" };
  for (let i = 0; i < myArray.length; ++i) {
    if (conteo[myArray[i]]) {
      conteo[myArray[i]] = conteo[myArray[i]] + "*";
    } else {
      conteo[myArray[i]] = "*";
    }
  }
  return conteo;
}

let objetoHist = conteoNumeros(myArray);

function imprimirHist(objHist) {
  for (const key in objHist) {
    console.log(`${key}: ${objetoHist[key]}`);
  }
}

imprimirHist(objetoHist);
