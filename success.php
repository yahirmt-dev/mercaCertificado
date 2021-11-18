<?php 

echo "<h1>El pago fue exitoso</h1>";
var_dump($_GET);
echo "<br><br><br><br>";
echo "Collection_id ".$_GET['collection_id']."<br><br>";
echo "external_reference: ".$_GET['external_reference']."<br><br>";
echo "preference_id ".$_GET['preference_id']."<br><br>";
echo "<br><br><br><br>";
?>

<a href="http://mercado.konstela.com/"><button>Regresar a la tienda</button></a>