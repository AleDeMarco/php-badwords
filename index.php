<?php
$string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
echo $string .'<br>La Frase è lunga ' .strlen($string) .' caratteri.<br><br>';
$badword = $_GET['badword'];
echo 'La badword è: ' .$badword .'<br><br>';
echo str_replace($badword, '***',
$string);
 ?>
