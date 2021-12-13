<?php 

$baglanti =  mysqli_connect("localhost", "root", "", "zbhaberanasayfa",3306);
if(!$baglanti){
    echo "baglantı başarılı değil.";
}else{
    echo "baglantı başarılı";

}





$veri="SELECT * from haberler";
$sonuc = $baglanti->query($veri);

echo  $veri;




?>

