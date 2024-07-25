
<?php 

require_once "aprendices810contructor.php";

$maikel = new Aprendices(edadAprendiz:22, nombreAprendiz:"Maikel", promedioAprendiz:5, emailAprendiz:"maikel@gmail.com");
echo $maikel-> Aprender()."\n"."\n";

$tatiana = new Aprendices("Tatiana", 20, "maikel@gmail.com", 4);
echo $tatiana-> Aprender("Del grupos A ")."\n";