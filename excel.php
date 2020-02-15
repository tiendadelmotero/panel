<?php
header('Content-type:application/xls');
header('Content-Disposition: attachment; filename=usuarios.xls');
require_once('conexion.php');
?>
<table border="1">
<tr>
<th>MARCA</th>
<th>REFERENCIA</th>
<th>MODELO</th>
<th>VIGENCIA DE PAPELES</th>
<th>PRECIO</th>
<th>PAGO EN 30 DIAS</th>
<th>EMAIL</th>
<th>TELEFONO</th>
</tr>
<?php
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
</table>