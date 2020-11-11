var cantidad, producto, nombreProducto, precioProducto, totalPorProducto, dato, totalInicial, totalFinal;

function cantidadProductos() {
    if (document.getElementById("cantidad").value >= 10 || document.getElementById("cantidad").value <= 0) {
        alert("La cantidad de productos deber ser mayor a 0 y menor a 10");
        document.getElementById("cantidad").value = 0;
        return false;
    } else {
        return true;
    }
}

function insertarProductos() {
    if (cantidadProductos()) {
        cantidad = document.getElementById("cantidad").value;
        producto = document.getElementById("products");
        nombreProducto = producto.options[producto.selectedIndex].text;
        precioProducto = producto.value;
        totalPorProducto = cantidad * precioProducto;

        dato = "\n"+ cantidad + "----" + nombreProducto + "----" + precioProducto + "----" + totalPorProducto;
        document.getElementById("carritoCompras").value += dato;
        
        TotalPagar = document.getElementById("totalPagar");
        totalInicial = parseInt(TotalPagar.value);
        totalFinal = parseInt(totalInicial) + parseInt(totalPorProducto);
        totalFinal;
        document.getElementById("totalPagar").value = totalFinal;
        document.getElementById("cantidad").value = 0;
        //producto.selectedIndex = 0; 
        document.getElementById("products").value = 0;
       }
}

function limpiarDatos() {
    document.getElementById("totalPagar").value = 0;
    document.getElementById("cantidad").value = 0;
    document.getElementById("totalPago").value = 0;
    producto.selectedIndex = 0;
    totalInicial = 0;
    totalFinal = 0;
    document.getElementById("carritoCompras").value = "";

}
var textarea = document.querySelector('textarea');

textarea.addEventListener('keydown', autosize);
             
function autosize(){
  var el = this;
  setTimeout(function(){
    el.style.cssText = 'height:auto; padding:0';
    el.style.cssText = 'height:' + el.scrollHeight + 'px';
  },0);
}