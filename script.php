<?php

$testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, qui inventore.';
$badword = $_GET["cambio"];
$mod = str_replace($badword,'***',$testo);


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
 </head>
 <body>
   <p><?php echo $testo; ?></p>
   <p>Lunghezza paragrafo: <?php echo strlen($testo); ?></p>


   <p><?php echo $mod ?></p>
   <p>Lunghezza paragrafo: <?php echo strlen($mod); ?></p>
 </body>
 </html>
