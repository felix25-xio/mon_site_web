<?php
$connect=mysqli_connect('localhost','root','') or die('erreur connexion');
mysqli_select_db($connect, 'db_mabases') or die('erreur connexion');
?>