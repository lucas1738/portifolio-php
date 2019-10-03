<?php

// $somador = 0;
// $soma = array(1,2,3,4,5,6,7,8,10);
// for ($i = 0; $i<count($soma); $i++) {
//     $somador += $soma[$i];
// }
// echo $somador;

$i = 0;
$somador = 0;
$soma = array(1,2,3,4,5,6,7,8,10);
foreach($soma as $s) {
    $somador += $s;
}
echo $somador;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body onload="confirmacao()">
            <script>
                    function confirmacao() 
                    {
                    confirm("Página carregada com sucesso!");
                    }
            </script>
</body>
</html>



