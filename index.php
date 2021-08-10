<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MANEJANDO CLASES</h1>
    <?php
        define ('INC','/includes/');
        require_once(__DIR__.INC.'Curso.inc.php');
        $curso = new Curso('PHP', 'Alvaro', '4 Horas', ' 0 Sus', true);
        var_dump($curso);
    ?>
</body>
</html>