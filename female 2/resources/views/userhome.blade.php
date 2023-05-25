<!DOCTYPE html>
<html lang="en">
  <head>
    <title>I.SPILL</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <link href="{{ asset('css/welcome.css')}}" rel="stylesheet">

    <style>
      * {box-sizing: border-box;}
      body {font-family: Verdana, sans-serif;}
      .mySlides {display: none;}
      img {vertical-align: middle;}
  
  /* Slideshow container */
      .slideshow-container {
        max-width: 1272px;
        position: relative;
        margin: auto;
      }
  
  /* Caption text */
      .text {
          color: #f2f2f2;
          font-size: 15px;
          padding: 8px 12px;
          position: absolute;
          bottom: 8px;
          width: 100%;
          text-align: center;
      }
  
  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }
  
  /* The dots/bullets/indicators */
  .dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }
  
  .active {
    background-color: #717171;
  }
  
  /* Fading animation */
  .fade {
    animation-name: fade;
    animation-duration: 5.0s;
  }
  
  @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }
  
  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .text {font-size: 11px}
  } 

  /* Dropdown Button */
.dropbtn {
  background-color: #3498DB;
  color: #ff85a2;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #ff85a2;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}


  </style>
  </head>

<body>
  <header class="section-header">
    <nav>
      <div class="menu">
            <div class="logo">
              <img src="img/logo.png"></a>
            </div>
            <ul>
              <li><a href={{url('/')}}>Home</a></li>
              <li><a href="{{ url('/userhome/review') }}">Reviews</a></li>
              <li><div class="dropdown">
                <button onclick="myFunction()" style="background: #ffffff;margin:-13px;border: solid;
                border-radius: 40px;
                margin-top: -16px;width: 150px;
                margin-left: 11px;" class="dropbtn">Halo, {{Auth::user()->name}}</button>
                <div id="myDropdown" class="dropdown-content">
                  <a href={{route('login')}}>Login</a>
                  <a href={{url('register') }}>Register</a>
                  <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button style="background: #fbeb5b;    color: black;
                    border-color: #FF85A2;
                    width: 160px;text-align:left" type="submit" href="#" class="nav-link">Logout</a>
                  </form>
                </div>
              </div>
              
            </ul>
          </div>   
        </nav> 
      </header> <!-- section-header.// -->
          
          <!-- ========================= SECTION MAIN ========================= -->
          <section class="section-main bg padding-y">
          <div class="container1">
          
            <div class="slideshow-container">

              <div class="mySlides fade">
                <img src="img/BANNER DEAR ME.jpg" style="width:100%">
              </div>
              
              <div class="mySlides fade">
                <img src="img/BANNER LUXCRIME.jpg" style="width:100%">
              </div>
              
              <div class="mySlides fade">
                <img src="img/BANNER ROSE.jpg" style="width:100%">
              </div>
              
            </div>
              <br>
              
              <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
              </div>
<br>
          </div> <!-- container //  -->
          </section>
          <!-- ========================= SECTION MAIN END// ========================= -->
          
          <!-- ========================= SECTION  ========================= -->
          <section class="section-name padding-y-sm" style="background: rgb(255, 255, 255)">
          <div class="container" style="margin-top: 20px">
          
          <header class="section-heading">
              <h3 class="section-title">Best Product of the Month</h3>
          </header><!-- sect-heading -->
          
          <div class="row" style="justify-content: space-between">
            <div class="col-md-3">
                <div href="" class="card card-product-grid" background="#FF85A2">
                  <a href="#" class="#"> <img src="img/MAYBELLINE.PNG" style="width: 250px; margin-top:5px; margin-left:5px"> </a>
                    <a href="#" class="img-wrap"> <img src="img/maybelline foundi.png"> </a>
                    <figcaption class="info-wrap" style="background: white">
                      <a href="#" class="#"> <img src="img/teks foundi.PNG" style="width: 250px; margin-top:-5px; margin-left:-12px"> </a>
                    </figcaption>
                </div>
            </div> <!-- col.// -->
            <div class="col-md-3">
                <div href="#" class="card card-product-grid">
                  <a href="#" class="#"> <img src="img/DEAR ME.PNG" style="width: 250px; margin-top:5px; margin-left:5px"> </a>
                    <a href="#" class="img-wrap"> <img src="img/dearmefoundi.png"> </a>
                    <figcaption class="info-wrap">
                      <a href="#" class="#"> <img src="img/mascara11.PNG" style="width: 250px; margin-top:-5px; margin-left:-12px"> </a>
                    </figcaption>
                </div>
            </div> <!-- col.// -->
            <div class="col-md-3">
                <div href="#" class="card card-product-grid">
                  <a href="#" class="#"> <img src="img/BLP.PNG" style="width: 250px; margin-top:5px; margin-left:5px"> </a>
                    <a href="#" class="img-wrap"> <img src="img/blpfoundi.png"> </a>
                    <figcaption class="info-wrap">
                      <a href="#" class="#"> <img src="img/teks powder.PNG" style="width: 250px; margin-top:-5px; margin-left:-12px"> </a>
                    </figcaption>
                </div>
            </div> <!-- col.// -->
        </div> <!-- row.// -->
          
          </body>
          </section>
          <!-- ========================= SECTION  END// ========================= -->
          
          
          <!-- ========================= SECTION  ========================= -->
          
          <!-- ========================= SECTION  END// ======================= -->
          
          
          
          <!-- ========================= FOOTER ========================= -->
        <footer class="section-footer border-top bg">
          <div class="container">
            <section class="footer-top  padding-y">
              <div class="row">
                
                <aside class="col-md col-6">
                  <img src="img/LOGO I.SPILL BLACK.png"></a>
                  <h6 class="title">INFORMARTION</h6>
                  <ul class="list-unstyled">
                    <li> <a href="#">About us</a></li>
                    <li> <a href="#">Contatct Us</a></li>
                    <li> <a href="#">Privacy Policy</a></li>
                    <li> <a href="#">Terms & Condition</a></li>
                  </ul>
                </aside>
                
                
                
              </div> <!-- row.// -->
            </section>	<!-- footer-top.// -->
      
          </div><!-- //container -->
        </footer>
        <!-- ========================= FOOTER END // ========================= -->
      
      
      </body>
<script>
  let slideIndex = 0;
    showSlides();
        
        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 5000); // Change image every 2 seconds
        }

        /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
        </script>
</html>