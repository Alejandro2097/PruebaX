const circulo = (x) =>{
    document.getElementById("res").innerHTML = (Math.pow(x,2))*Math.PI;
}
const triangulo =  (x, y) =>{
    document.getElementById("resT").innerHTML = (x * y ) / 2;
}
const cuadrado = (x) => {
    document.getElementById("resC").innerHTML = (x * x);
}