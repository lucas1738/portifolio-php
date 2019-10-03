<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body onload="carrega()">
    

    <script>
    function carrega(){
        if (confirm("Você é maior de idade?")) {
            window.location.href = "http://localhost/programacao_web/exercicio_1/principal.php";

} else {
    window.location.href = "https://criancas.uol.com.br/";
}
    } 
    </script>
</body>
</html>