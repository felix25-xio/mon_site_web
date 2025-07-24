<?php
require_once('connexion.php');
$noms=$_POST['nom'];
$prenomss=$_POST['prenoms'];
$sexes=$_POST['sexe'];
$date_naissances=$_POST['date_naissance'];
$passwords=$_POST['password'];
$requete_select="select * from incrisption where nom='$noms' and prenom='$prenomss' and sexe='$sexes' and password='$passwords'";
$resultats=mysqli_query($connect,$requete_select);
$row_cnt=mysqli_num_rows($resultats);
if($row_cnt==0)
 {
    $requete="INSERT INTO incrisption VALUES('','$noms','$prenomss','$sexes','$date_naissances','$passwords','')";
    mysqli_query($connect, $requete);
    mysqli_close($connect);
    header('location:index.php?page=page_visiteur');
 }

else {
    header('location:index.php?page=index');
}
?>
