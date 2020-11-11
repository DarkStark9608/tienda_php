<!DOCTYPE html>
<html lang="es">
<html>
<head>
    <title>Carrito de compras</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('select').formSelect();
        });</script>
    <script src="/Tienda/carrito.js"></script>
    <link rel="stylesheet" type="text/css" href="/Tienda/estilos.css" />
</head>

<body>
  <h1> Carrito de compras </h1>
    <div class="row">
      <form method="POST" action="ticket.php" target="_blank">
        <div class="input-field col l6">
            <input id="cantidad" type="number" value="0" onchange="cantidadProductos()">
            <label for="nombre">Cantidad</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col l6">
            <select id="products" name="products">
                <option value="11999">Xbox One X $11999</option>           
                <option value="11999">Play 5 $11999</option>
                <option value="6999">Xbox One S $6999</option>
                <option value="4999">Nitendo $4999</option>
                <option value="999">Xbox 360 $999</option>
                <option value="1499">Control Xbox One $1499</option>
                <option value="2999">Disco Duro 1TB $2999</option>
                <option value="3999">Xbox One $3999</option>
            </select>
            <label>Elige tu producto</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col l6">
            <a class="waves-effect waves-light btn-small" onclick="insertarProductos()">Insertar</a>
        </div>
    </div>
    <div class="row">
        <div class="input-field col l6">
        <a class="waves-effect waves-light btn-small" onclick="limpiarDatos()">Nueva Compra</a>
        </div>
    </div>
    <label>Carrito de Compras:</label>
    <div class="row">
        <div class="input-field col l2">
            <textarea id="carritoCompras" name ="carritoCompras" class="large-textarea" ref="Large"  readonly></textarea>
        </div>
    </div>
    <div class="row">
        <div class="input-field col l6">
            <label>Total a pagar:</label>
            <input type="number" name="totalPagar" id="totalPagar"  value="0" class="campodeshabilitado">
        </div>
        </div>
        <div class="row">
        <div class="input-field col l6">
            <label>Pago:</label>
            <input type="number" name="totalPago" id="totalPago" value="0">
        </div>
        </div>
        <div class="row">
        <div class= "input-field col 16">
            <button class="btn waves-effect waves-light" type="submit" name="action">Pagar
            <i class="material-icons right">send</i>
            </button>
        </div>
        </div>
    </form>
</body>

</html>