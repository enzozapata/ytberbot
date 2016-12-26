<?php
  //Set the Content Type
 // header('Content-type: image/jpeg');

  // Create Image From Existing File
 // $jpg_image = imagecreatefromjpeg($_POST['url_imagen']);
 //$c1 = mt_rand(50,200); //r(ed)
  //   $c2 = mt_rand(50,200); //g(reen)
  //   $c3 = mt_rand(50,200); //b(lue)
  // Allocate A Color For The Text
  //$white = imagecolorallocate($jpg_image, $c1, $c2, $c3);

  // Set Path to Font File
  //$font_path = './arial.ttf';

  // Set Text to Be Printed On Image
  //$text = $_POST['texto'];

  // Print Text On Image
  //imagettftext($jpg_image, 32, 0, 75, 75, $white, $font_path, $text);
  //imagettftext($jpg_image, 32, 0, 700, 500, $white, $font_path, 'www.AnimeXMega.net');

  // Send Image to Browser
  //imagejpeg($jpg_image, 'imagen.jpg');

  // Clear Memory
  //imagedestroy($jpg_image);
$source = 'https://www.youtubeinmp3.com/fetch/?video='.$_POST['youtube'];
$ch = curl_init($source);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_NOBODY, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1);
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
$output = curl_exec($ch);
$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
if ($status == 200) {
    file_put_contents(dirname(__FILE__) . '/mp3/audi4.mp3', $output);
}
?>
