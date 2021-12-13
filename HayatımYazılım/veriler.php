<?php
$id=$_GET["id"]; 

$yorum=$_POST["yorum"];
$sql = "insert into haber_yorum(yorum,haber_id) values('$yorum','$id')";
include("baglanti.php");

$sonuc = $baglanti->query($sql);
echo ("yorumunuz için çok teşekkür ederiz");

?>
<html>
  <head>
    <meta http-equiv="refresh" content="3; URL=http://localhost/Hayat%C4%B1mYaz%C4%B1l%C4%B1m/haber_detay.php?id=<?php echo $id;?>">
  </head>

<head>
</html>
