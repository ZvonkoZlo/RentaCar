<!DOCTYPE html>
<html>
<title>Car Rental Service</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("https://img-ik.cars.co.za/news-site-za/images/2022/06/a45-dyn.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
  position: center;
}

.w3-container{
  margin-left: auto;
  margin-right: auto;

}

</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card" id="myNavbar">
    <a href="{{ route('load') }}" class="w3-bar-item w3-button w3-wide">Car Rental services</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="{{ route('load') }}" class="w3-bar-item w3-button">HOME</a>
      <a href="{{  route('products.index')  }}" class="w3-bar-item w3-button">Ponuda Vozila</a>

      @if(auth()->check())
      @if (Route::has('login'))

      <a class="w3-bar-item w3-button" href="{{ route('reservation') }}">Rezervacije</a>
      @if(auth()->check())
      @if (Auth::user()->isSuperAdmin())
                <a class="w3-bar-item w3-button" href="{{ route('korisnici') }}">Korisnici</a>
                 @endif
                 @endif
                 <a href="{{ route('logoutt') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="w3-bar-item w3-button">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @endif
      @else

      <a href="{{ route('login') }}" class="w3-bar-item w3-button">Log in</a>
      <a href="{{ route('register') }}" class="w3-bar-item w3-button">Registriraj se</a>
                            @endif
                        
                                       
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>
<a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
  <i class="fa fa-bars"></i>
</a>   
<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="{{ route('load') }}" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
  <a href="{{  route('products.index')  }}" onclick="w3_close()" class="w3-bar-item w3-button">Ponuda automobila</a>
 
  @if(auth()->check())
  @if (Route::has('login'))

  <a class="w3-bar-item w3-button" href="{{ route('reservation') }}">Rezervacije</a>
  @if(auth()->check())
  @if (Auth::user()->isSuperAdmin())
            <a class="w3-bar-item w3-button" href="{{ route('korisnici') }}">Korisnici</a>
             @endif
             @endif
             <a href="{{ route('logoutt') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="w3-bar-item w3-button">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endif
  @else

  <a href="{{ route('login') }}" class="w3-bar-item w3-button">Log in</a>
  <a href="{{ route('register') }}" class="w3-bar-item w3-button">Registriraj se</a>
                        @endif
                    

</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Car Rental Serivces</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Car Rental Serivces</span><br>
    <span class="w3-large">Veliki izbor vozila.</span>
    <p><a href="{{ route('login') }}" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Rezerviraj vozilo jos danas</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">Neke naše pogodnosti.</h3>
  
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-car w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Automobili</p>
      <p>Veliki izbor automobila za sve potrebe vječanja,putovanja,gradsku voznju.
        
      .</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-plane w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Mogucnosti Preuzimanja vozila</p>
      <p>Vozilo mozete preuzeti u zračnim lukama  širom BiH i Hrvatske.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-check-square-o w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Potvrda Rezervacije</p>
      <p>U roku 1H nakon vase rezervacije dobiti ce te nasu potvrdu rezervacije za zeljeno vozilo.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-volume-control-phone w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Korisnička Podrška</p>
      <p>Naša korisnička Podrška je za vas dostupna 24H svaki dan.Možete nas kontaktirati na broj 0800 88 888.</p>
    </div>
  </div>
</div>
<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">Nas Tim </h3>
  <p class="w3-center w3-large">Oni koji su pokrenuli ovu kompaniju</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px" >
    <div class="w3-col l3 m6 ">
      <div class="w3-card" w3-algin-center>
     
        <div class="w3-container">
        <h3></h3>
          <p class="w3-opacity">
          <p> 
          <p></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://img.freepik.com/free-vector/professional-car-rental-logo_23-2149509962.jpg?w=740&t=st=1675759604~exp=1675760204~hmac=82c0b279cc29b21338de130f7dac37e71a016f93f55c3c092f3e8fa55ab884c0" alt="Zvone" style="width:100%">
        <div class="w3-container">
        <h3>Veselko Coric</h3>
          <p class="w3-opacity">Clan Tima
          <p>Student trece godine studija Racunarstva na Fakultetu Strojarstva,Racunarstva,Elektrotehnike u Mostaru.
            Dolazim iz Mostar.Broj indeksa:1728/RR
          </p>
          <a href="{{ route('kontakt') }}" ><p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Kontakt</button></p></a>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://img.freepik.com/free-vector/professional-car-rental-logo_23-2149509962.jpg?w=740&t=st=1675759604~exp=1675760204~hmac=82c0b279cc29b21338de130f7dac37e71a016f93f55c3c092f3e8fa55ab884c0" alt="Zvone" style="width:100%">
        <div class="w3-container">
        <h3>Zvonko Zlopasa</h3>
          <p class="w3-opacity">Clan Tima
          <p>Student trece godine studija Racunarstva na Fakultetu Strojarstva,Racunarstva,Elektrotehnike u Mostaru.
            Dolazim iz Ljubuskog.Broj indeksa:1709/RR
          </p>
          <a href="{{ route('kontakt1') }}" ><p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Kontakt</button></p></a>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
  
        <div class="w3-container">
        <h3></h3>
          <p class="w3-opacity">
          <p>
          </p>
          <p></p>
        </div>
      </div>
    </div>

  
      </div>
    </div>
  </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">15+</span>
    <br>Godina Poslovanja
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">50+</span>
    <br>Vozila
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">1000+</span>
    <br>Sretnih Korisnika
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">10+</span>
    <br>Djelatnika
  </div>
</div>



<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<

    <!-- Image of location/map -->
    <img src="/w3images/map.jpg" class="w3-image w3-greyscale" style="width:100%;margin-top:48px">
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Vrati na vrh</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by Veselko i Zvonko</p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
