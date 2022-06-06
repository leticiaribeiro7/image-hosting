<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Upload de Gifs</title>
</head>
<body>

    <div class="card text-center">

        <div class="card-header">
            Painel de Administrador
        </div>

        <div class="card-body">
            <h5 class="card-title">Selecione um gif: </h5>
            <form method="POST" enctype="multipart/form-data" action="upload.php">
                <input type="file" name="file"/>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>

    </div>

</body>
</html>


<?php


$allFiles = scandir("files");

// Header gifs salvos
echo "<div class= 'd-flex justify-content-center'>
        <h4>Gifs salvos<h4>
    </div>";

// Mostra hiperlinks de todos os gifs salvos
foreach ($allFiles as $file) {

    if ($file != "." && $file != "..") {
        echo "<div class='d-flex justify-content-center'>
                <a href='files/$file'>$file</a>
            </div>";
    }

};

?>
