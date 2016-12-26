<?php
  //Set the Content Type
  header('Content-type: image/jpeg');

  // Create Image From Existing File
  $jpg_image = imagecreatefromjpeg($_POST['url_imagen']);

  // Allocate A Color For The Text
  $white = imagecolorallocate($jpg_image, 255, 255, 255);

  // Set Path to Font File
  $font_path = './arial.ttf';

  // Set Text to Be Printed On Image
  $text = 'Descargar Naruto Shippuden 387 Sub Español por MEGA';

  // Print Text On Image
  if(imagettftext($jpg_image, 22, 0, 75, 300, $white, $font_path, $text)){

  // Send Image to Browser
  imagejpeg($jpg_image);

  // Clear Memory
  imagedestroy($jpg_image);
  } else {
	  echo "Error al imagettftext.";
  }
?>
