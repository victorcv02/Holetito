<?php
require_once '../CONFIG/PHP/conexion_be.php';

$cadSQL = "SELECT ID, Nombre, Certificado, Fecha FROM habitaciones WHERE Certificado IS NOT NULL";
$registros = mysqli_query($conexion, $cadSQL);

$resultados = []; 

if (mysqli_num_rows($registros) > 0) {
    $firma = "Familia Rojas"; 
    $jpegFilePath = '../IMAGES/certificado.jpeg';
    $font = "../fonts/Roboto-Bold.ttf";

    while ($fila = mysqli_fetch_assoc($registros)) {
        $image = imagecreatefromjpeg($jpegFilePath);
        $fontColor = imagecolorallocate($image, 51, 89, 255);

        $text = $fila["Certificado"];
        $fontSize = 25;

        $textWidth = imagettfbbox($fontSize, 0, $font, $text);
        $textWidth = $textWidth[2] - $textWidth[0];
        $imageWidth = imagesx($image);

        $positionX = ($imageWidth - $textWidth) / 2;
        imagettftext($image, $fontSize, 0, $positionX, 800, $fontColor, $font, $text);

        imagettftext($image, $fontSize, 0, $positionX, 850, $fontColor, $font, $fila["Nombre"]);
        imagettftext($image, 18, 0, 320, 1200, $fontColor, $font, $fila["Fecha"]);
        imagettftext($image, 18, 0, 1210, 1210, $fontColor, $font, $firma);

        $certificadoFilePath = '../certificados/' . $fila['ID'] . '_certificado.jpeg';
        imagejpeg($image, $certificadoFilePath);
        imagedestroy($image);

        
        $resultados[] = $certificadoFilePath;
    }

    
    echo json_encode(['certificados' => $resultados]);
} else {
    echo json_encode(['certificados' => []]); 
}

mysqli_close($conexion);
?>
