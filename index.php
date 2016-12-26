<!DOCTYPE html>
<html lang="es">
<head>
<title>Preparar video para Youtube</title>
<meta charset="utf-8">
</head>
<body>
<form action="imagen.php" method="post" enctype="multipart/form-data">
<label for="url_imagen">URL de la imagén:</label><input type="text" name="url_imagen"></br>
<label for="texto">Texto:</label><input type="text" name="texto">
<label for="youtube">Youtube:</label><input type="text" name="youtube">
<?php var_dump(curl_version());?>
<input type="submit" value="Subir">
</form>
</body>
</html>
