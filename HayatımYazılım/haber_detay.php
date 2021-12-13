<?php 

include("baglanti.php");
$id=$_GET["id"];
$haber_kategori=$id;


$html = "";
$sorgu ="SELECT * From haberler where id=$id";
$yorumlarım="SELECT * From haber_yorum where haber_id=$id";
$sonuc = $baglanti->query($sorgu);
 
while($cikti = $sonuc->fetch_assoc()){
$resim = "images/" . $cikti["resim"];
$id=$cikti["id"];
$yorumlar=$cikti["yorumlar"];
  $html .=" 

  <div class='col-md-8'>
  <div class='card' >
  <img class='card-img-top' src='$resim' alt='image' style='width:100%'>
    <div class='card-body'>
    <h5 class='card-title'> $cikti[HaberAd]</h5>
      <h4 class='card-title'> </h4> 
      <p class='card-text'>$cikti[bilgi]</p> <a href='veriler.php?id=$id' ></a>
      <form action='veriler.php?id=$id' method='post'>
       <textarea name='yorum'> </textarea><br><input type='submit' value='yorum yap'>
       </form>
        
      

       </div></div></div>
       
       
       
       
       
       ";
        
      
}


?>
  

       





<html>
  <head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  body{
  background-color:antiquewhite;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Zeytinburnu Haber</h1>
  <p>Doğru Haberin Merkezi</p> 
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <a class="navbar-brand" href="#" data-abc="true">Anasayfa</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"> <a class="nav-link" href="#" data-abc="true">Kategori <span class="sr-only">(current)</span></a> </li>
            <li class="nav-item"> <a class="nav-link" href="http://localhost/Hayat%C4%B1mYaz%C4%B1l%C4%B1m/haber_detay.php?id=1" data-abc="true">Spor</a> </li>
            <li class="nav-item"> <a class="nav-link" href="http://localhost/Hayat%C4%B1mYaz%C4%B1l%C4%B1m/haber_detay.php?id=2" data-abc="true">Ekonomi</a> </li>
            <li class="nav-item"> <a class="nav-link" href="http://localhost/Hayat%C4%B1mYaz%C4%B1l%C4%B1m/haber_detay.php?id=3" data-abc="true">Gezi</a> </li>
            <li class="nav-item"> <a class="nav-link" href="http://localhost/Hayat%C4%B1mYaz%C4%B1l%C4%B1m/haber_detay.php?id=3" data-abc="true">Kültür ve Sanat</a> </li>
            <li class="nav-item"> <a class="nav-link" href="http://localhost/Hayat%C4%B1mYaz%C4%B1l%C4%B1m/haber_detay.php?id=3" data-abc="true">Teknoloji</a> </li>
        </ul>
    </div>
</nav>

<div class="container">

  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
  
    <!-- The slideshow -->
    <div class="carousel-inner" style="background-color:red;">
      <div class="carousel-item active" >
        <img  style="width:200;"src="images/11.jpg" >
      </div>
      <div class="carousel-item">
        <img  style="width:200;"src="images/22.jpg" >
      </div>
      <div class="carousel-item">
        <img style="width:200;" src="images/33.jpg" >
      </div>
    </div>
  
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  
  </div>


</div>






<div class="container mt-3" >
  <div class="row"> 
      <?php echo $html; ?>
  </div>

<?php
$result = $baglanti->query($yorumlarım);
while($r = mysqli_fetch_array($result)){
  echo $r["yorum"]."<div style='background-color:green;' class='card'>

  <div class='card-body'>.<input type='submit' value='yorumu şikayet et'/></div>

</div>"."<br>";
  

}


?>
  <div class="row">
    <div class="col-sm-4">
      
    <br><br><br>
      
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Şikayetler</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Yorum yap</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">İletişim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Whatsapp haber hattı</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      
    </div>
  </div>
</div>

        






</body>
 