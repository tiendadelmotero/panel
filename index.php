<?php
include('conexion.php');
?>
<head>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>

<script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
<script type="text/javascript" src="https://cdn.navdmp.com/req?v=9&amp;id=a88fec8955ca4c3e451ed986e09%7C0&amp;acc=58464&amp;tit=Compramos%2520tu%2520carro%2520f%25E1cil%252C%2520r%25E1pido%2520y%2520seguro%2520%257C%2520Carro123.com&amp;upd=1&amp;h1=COMPRAMOS%2520TU%2520CARRO&amp;url=https%253A%2F%2Fwww.carro123.com%2F" async=""></script>

<style>
a:link, a:visited {
  background-color: #5DACCD;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: blue;
}
</style>
<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
       <!-- <th style="width:30px; background-color: #5DACCD; color:#fff">Id</th>-->
            <th style="width:120px; background-color: #5DACCD; color:#fff">marca</th>
            <th style="width:140px; background-color: #5DACCD; color:#fff">referencia</th>
            <th style="width:140px; background-color: #5DACCD; color:#fff">modelo</th>
            <th style="width:200px; background-color: #5DACCD; color:#fff">vigencia de papeles</th>                     
            <th style="width:120px; background-color: #5DACCD; color:#fff">precio</th>                     
            <th style="width:120px; background-color: #5DACCD; color:#fff">pago en 30 dias</th>                     
            <th style="width:250px; background-color: #5DACCD; color:#fff">email</th>                     
            <th style="width:150px; background-color: #5DACCD; color:#fff">telefono</th>                     
         
        </tr>
    </thead>
    <tbody>
    <?php 

include('conexion.php');

$query = $db->query("SELECT marca_c,referencia_c,modelo_c,papeles,soat_c,precio_porcentaje,email_c,telefono_c FROM clientes ");
$rowCount = $query->num_rows;
if($rowCount > 0)
{
    while($row = $query->fetch_assoc())
    {
           
    echo "<tr>
    <td>".$marca=$row['marca_c']."</td>
    <td>".$referencia=$row['referencia_c']."</td>
    <td>".$modelo=$row['modelo_c']."</td>
    <td>".$papeles=$row['papeles']."</td>
    <td>".$soat=$row['soat_c']."</td>
    <td>".$precioporcentaje=$row['precio_porcentaje']."</td>
    <td>".$email=$row['email_c']."</td>
    <td>".$telefono=$row['telefono_c']."</td>
    </tr>
    ";
    }
}
?>

    </tbody>
</table> 
<a href="excel.php">generar archivo excel</a>
