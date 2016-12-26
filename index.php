<!DOCTYPE html>
<html lang="es">
<head>
<title>Preparar video para Youtube</title>
<meta charset="utf-8">
</head>
<body>
<form action="imagen.php" method="post" enctype="multipart/form-data">
<label for="url_imagen">URL de la imagén:</label><input type="text" name="url_imagen">
<label for="texto">Texto:</label><input type="text" name="texto">
<input type="submit" value="Subir">
</form>
<?php
if (extension_loaded('gd') && function_exists('gd_info')) {
    echo "PHP GD library is installed on your web server";
}
else {
    echo "PHP GD library is NOT installed on your web server";
}
?>
</body>
</html>
