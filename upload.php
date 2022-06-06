<?php

$file = $_FILES["file"];


function isFileValid($file) {
    // Pega a altura e largura da imagem
    list($width, $height) = getimagesize($file["tmp_name"]);
    $acceptedExt = "gif";
    // Pega a extensão da imagem
    $fileExt = pathinfo($file["name"], PATHINFO_EXTENSION);

    // Verifica dimensões e extensão do arquivo
    if ($width == 400
        && $height == 400
        && $acceptedExt == $fileExt) {
            return true;
    }

    return false;

}


function uploadFile($file) {

    // Se arquivo for válido, o upload é realizado
    if (isFileValid($file)) {
        
        $location = $file["tmp_name"];
        $destination = "files/".$file["name"];
        
        move_uploaded_file($location, $destination);
        header("Location: index.php");

    }


}

uploadFile($file);

?>
