<?php
 $compras = $_POST ['carritoCompras'];
 $total = $_POST ['totalPagar'];
 $totalpago = $_POST['totalPago'];
 $cambio =  $totalpago - $total;
?>
<!DOCTYPE html>
<html lang="es">
<html>
<head>
    <title>Ticket de compra</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="/Semana_8/carrito.js"></script>
    <link rel="stylesheet" type="text/css" href="/Semana_8/estilos.css" />
</head>
<body>
<div>
<h1 class="h1css">Ticket de compra</h1>
<h2 class="h2css">GAME OVER </h2>
<p>_______________________________________</p>
<p class="pstilo"> <?php echo "Fecha: ". date("d"). " del ". date("m"). " del ". date("Y") ;?> <?php date_default_timezone_set('America/Mexico_City'); echo date("g:i a"); ?> </p>
<p class="pstilo">---------------Productos---------------</p>
<p class="estilo"> <?php echo "\n",  $compras,  "\n"; ?></p>

<p > Pago total: <?php echo "$", $total; ?> </p>
<p> Recibi: <?php echo "$", $totalpago; ?> </p>
<p class="pstilo"> Cambio: <?php echo "$", $cambio; ?> </p>
<p class="pstilo"> Gracias por su compra vuelva pronto </p>
<p>_______________________________________</p>
</div>
</body>
</html>