<?php
require "header.php";
?>

<header class="header">
    <div class="row">
        <div class="col-md-12 text-center">
   <a class="logo"><img src="img/logo1.png" alt="logo"></a>
   </div>
        <div class="col-md-12 text-center">
            <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-light btn-lg"><em>Make a Reservation Now!</em></button>
        </div>
    </div>
</header>



<!--about us section-->

<section id="aboutus">

 <div class="container">
   <h3 class="text-center"><br><br>Subotički restoran</h3>
   <div class="row">
<!--carousel-->
     <div class="col-sm"><br><br>
      	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
        <div class="carousel-inner">
           <div class="carousel-item active">
             <img class="d-block w-100" src="img/cevapi.jpg" alt="First slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/sarma.jpg" alt="Second slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/testo.jpg" alt="Third slide">
           </div>
        </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div><br><br>
     </div>

<!--end of carousel-->

     <div class="col-sm">
    	<div class="arranging"><br><hr>
	<h4 class="text-center">Our story</h4>
	<p><br>U sklopu etno parka Subotičkog restorana nalazi se restoran domaće kuhinje i prenoćište sa 15 komfornih soba, otvorenim bazenom,
        salom za sastanke i recepcijom. On služi za višednevni odmor naših gostiju.
        Stari vojvođanski salaš je opet postao središte života i okupljanja ljudi uz čašicu dobre domaće rakije, izvorne tamburaške muzike i tradicionalnih jela.
        Gurmani mogu da uživaju u dobroj krompirači, telećem perkeltu sa domaćim testom i sirom, pevčijem paprikašu sa knedlama,
        salašarskom pasulju, ovčijem paprikašu sa kupusom, svinjskim papcima, pečenoj patki ili pak možda pravoj ribljoj čorbi.
        Za sladokusce smo obezbedili fanke, domaće štrudle, gomboce, kompote…. To je samo deo bogate ponude „Subotičkog restorana“.
        Uz sve to ne možemo zaboraviti ni kvalitetnu ponudu vina, domaće rakije od dunje, jabuke ili šljive.
        Tu je takođe i naš tamburaški orkestar  a na imanju se nalazi i šaranski ribnjak, bazen,
        sportski tereni i ergeala konja. Sve to je okruženo našim voćnjacima i malim bagremovim šumarkom.
        Organizacija raznih svetkovina je doprinela da se gosti edukuju i podsete na život i običaje naroda koji žive u ovom regionu.
        Tako da danas imamo već dobro poznate i posećene tradicionalne aranžmane koje pomažu i turistička organizacija. <br><br><br></p><hr>
	</div>
     </div>
    </div><br>
  </div>
</section>
<!--end of about us section-->

<div class="header2">
</div>

<!----gallery -->
<div class id="gallery"><br>
    <div class="container">
    <h3 class="text-center"><br>Gallery<br><br></h3>
        <div class="d-flex flex-row flex-wrap justify-content-center">
           <div class="d-flex flex-column">
              <img src="img/food.jpg" class="img-fluid">
              <img src="img/sarma.jpg" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
              <img src="img/testo.jpg" class="img-fluid">
              <img src="img/kulen.jpg" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
               <img src="img/2.jpg" class="img-fluid">
               <img src="img/meso.jpg" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
               <img src="img/fino.jpg" class="img-fluid">
               <img src="img/lily-banse--YHSwy6uqvk-unsplash.jpg" class="img-fluid">
           </div>
        </div>
    </div>
</div><br><br>
<!----end of gallery -->

<div class="container" id="reservation">
    <h3 class="text-center"><br><br>Reservation<br><br></h3>
    <img  src="img/nesto.png" class="img-fluid rounded">
    <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-dark btn-block btn-lg">Make a reservation Now!</button>
        
</div><br><br>

<div class="header2">
</div>

