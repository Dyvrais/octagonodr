<?php

if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {
    $longitud = $_POST['longitud'];
    $area = 0;
    if(!empty($longitud)) {
        echo "<h2 align='center'>Calculo del area de un octagono regular</h2>";
        $apotema = $longitud / 0.83;
        $area = 4 * $longitud * $apotema;

        echo "Longitud de los lados: $longitud","<br/>";
        echo "Apotema: $apotema","<br/>";
        echo "Area del octagono regular: $area", "<br/>";
        echo "<br><br/>;";
        echo "<a href='index.html'>Regresar</a>";
    }
}
?>
</body>
</html>