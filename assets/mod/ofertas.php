<html lang="es">
<head>
  <title>OFERTAS</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>

<style>


 .ofertas{
  padding-top: 125px;
  padding-bottom: 40px;
}



.of1{
  font-family: cursive;
  font-weight: bold;
  text-align: center;
  font-size:xx-large;
}

hr {
  height: 10px;
  width: 50%;
  background-color: black;
}



blockquote{
  font-style: italic;
}
.column{
  float: left;
  width: 25%;
}

.mimodal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  display: none;
  width: 100%;
  height: 100%;
  overflow-y: scroll;
  outline: 0;
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */

}

.contenido-modal {
  position: relative;
  margin: auto;
  margin-top: 100px;
  padding: 0;
  width: 50%;
}

#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 75px;
}

.contenido-modal{  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

.cerrar {
  color: white;
  position: absolute;
  top: 15px;
  right: 55px;
  font-size: 45px;
  font-weight: bold;
}

.cerrar:hover,
.cerrar:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

.imagenes{
    width: 345px;
    height: 200px;
    background-color: #fff;
    background: linear-gradient(#f8f8f8, #fff);
    box-shadow: 7px 18px 16px 3px rgba(0,0,0,0.4);
    border-radius: 6px;
    overflow: hidden;
    position: relative;
    margin: 1.5rem;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  opacity: 0.7;
}

.equipos{
  padding-top: 130px;
  padding-bottom: 60px;
}


</style>


</header>

<section class="ofertas" >
    <div class="of1">OFERTAS</div>
          <hr>
          <blockquote><p>Dicho apartado de <strong>ofertas</strong> esta creado para comunicar los nuevos 
          productos de las diferentes cafeterias o food truck de la <strong>Universidad Francisco de Vitoria.</strong> 
          La Universidad cuenta con diferentes cafeterias repartidas por todo el campus la principal es <strong>The Market</strong>, 
          luego aparecen otras como <strong>The Home</strong> que es la del colegio mayor, o <strong>The Club</strong> 
          la cual esta ubicada en el Centro Deportivo sin olvidarnos <strong>The Garden</strong> ubicada en el Edificio M
          con una terraza muy agradable. Tambien contamos con food truck como <strong>The Square</strong>.
          </blockquote>
 
      

<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-xs-4">
            <img src="OfertaCombo.JPG" onclick="openModal();currentSlide(1)" class="hover-shadow cursor imagenes">
        </div>

        <div class="col-xs-4">
        <img src="OfertaHotDogs.JPG" onclick="openModal();currentSlide(2)" class="hover-shadow cursor imagenes">
        </div>

        <div class="col-xs-4">
            <img src="ofertaCroissants2.JPG" onclick="openModal();currentSlide(3)" class="hover-shadow cursor imagenes">
        </div>
    </div>
</div>      



<div class="row justify-content-center">
  <div class="col-xs-4">
    <img src="Tapas.JPG" onclick="openModal();currentSlide(5)" class="hover-shadow cursor imagenes">
  </div>
  <div class="col-xs-4">
    <img src="Mexican.JPG" onclick="openModal();currentSlide(6)" class="hover-shadow cursor imagenes">
  </div>
</div>

<div id="myModal" class="mimodal">
    <span class="cerrar cursor" onclick="closeModal()">&times;</span>
    <div class="contenido-modal">
            <div class="mySlides">
                <div class="numbertext">1 / 5</div>
                <img src="OfertaCombo.JPG" style="width:100%">
            </div>
        
            <div class="mySlides">
                <div class="numbertext">2 / 5/</div>
                <img src="OfertaHotDogs.JPG" style="width:100%">
            </div>
        
            <div class="mySlides">
                <div class="numbertext">3 / 5</div>
                <img src="ofertaCroissants2.JPG" style="width:100%; height: 80%;">
            </div>
            <div class="mySlides">
              <div class="numbertext">4 / 5</div>
              <img src="Tapas.JPG" style="width:100%;">
          </div>
          <div class="mySlides">
            <div class="numbertext">5 / 5</div>
            <img src="Mexican.JPG" style="width:100%;">
        </div>

        <a style="color:white" class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a style="color:white" class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="caption-container">
        <p id="caption"></p>
        </div>

        <div class="column">
        <img class="demo cursor" src="OfertaCombo.JPG" style="width:100%" onclick="currentSlide(1)" alt="COMBO">
        </div>

        <div class="column">
        <img class="demo cursor" src="OfertaHotDogs.JPG" style="width:100%" onclick="currentSlide(2)" alt="HOT DOGS">
        </div>

        <div class="column">
        <img class="demo cursor" src="ofertaCroissants2.JPG" style="width:100%" onclick="currentSlide(3)" alt="CROISSANTS">
        </div>  
        <div class="column">
          <img class="demo cursor" src="Tapas.JPG" style="width:100%" onclick="currentSlide(4)" alt="TAPAS">
        </div>
        <div class="column">
          <img class="demo cursor" src="Mexican.JPG" style="width:100%" onclick="currentSlide(5)" alt="MEXICAN BURGER">
        </div>
    </div>
</div>
</section>





<script>
  function myFunction(x) {
    x.classList.toggle("change");
  }
</script>

<script>

function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<script src="../assets/js/tether.min.js"></script>
  <script src="../assets/js/jarallax.min.js"></script>
  <script src="../assets/js/parallax.js"></script>
  <script src="../assets/js/smooth-scroll.js"></script>
  <script src="../assets/js/theme.js"></script>
</body>