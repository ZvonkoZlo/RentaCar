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


<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">Kontakt</h3>
  <p class="w3-center w3-large">Ostanimo u kontaktu, Pošaljite nam poruku:</p>





  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Ljubuski,BiH</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Telefon:063-959-972</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: zvonko.zlopasa@gmail.com</p>
    <br>
    <form action="https://formspree.io/f/mbjegjkz "method="POST">
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-black" type="submit">
          <i class="fa fa-paper-plane"></i> Pošalji poruku
        </button>
      </p>
    </form>

  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
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