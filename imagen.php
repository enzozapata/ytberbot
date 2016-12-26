<?php
  //Set the Content Type
  //header('Content-type: image/jpeg');

  // Create Image From Existing File
  $jpg_image = imagecreatefromjpeg($_POST['url_imagen']);
 $c1 = mt_rand(50,200); //r(ed)
     $c2 = mt_rand(50,200); //g(reen)
     $c3 = mt_rand(50,200); //b(lue)
  // Allocate A Color For The Text
  $white = imagecolorallocate($jpg_image, $c1, $c2, $c3);

  // Set Path to Font File
  $font_path = './arial.ttf';

  // Set Text to Be Printed On Image
  $text = $_POST['texto'];

  // Print Text On Image
  imagettftext($jpg_image, 32, 0, 75, 75, $white, $font_path, $text));
  imagettftext($jpg_image, 32, 0, 700, 500, $white, $font_path, 'www.AnimeXMega.net'));

  // Send Image to Browser
  imagejpeg($jpg_image, 'img.jpg');

  // Clear Memory
  imagedestroy($jpg_image);

?>
