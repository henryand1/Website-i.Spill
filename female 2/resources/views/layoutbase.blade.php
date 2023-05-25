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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alatsi&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alatsi&family=Lexend&family=PT+Sans&display=swap" rel="stylesheet">

    <style>
      * {box-sizing: border-box;}
      body {font-family: Verdana, sans-serif;}
      .mySlides {display: none;}
      img {vertical-align: middle;}
  
  /* Slideshow container */
      .slideshow-container {
        max-width: 100%;
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
              <img src="{{url('img/logo.png')}}"></a>
            </div>
            <ul>
              <li><a href={{url('/')}} style="font-family: 'Alatsi', sans-serif;">Home</a></li>
              <li><a href="{{ url('review') }}" style="font-family: 'Alatsi', sans-serif;">Reviews</a></li>
              <li><div class="dropdown">
                <button onclick="myFunction()" style="background: #ffffff;margin:-13px;border: solid;
                border-radius: 40px;
                margin-top: -16px;width: 150px;
                margin-left: 11px;" class="dropbtn">PROFILE</button>
                <div id="myDropdown" class="dropdown-content">
                  <a style="font-family: 'Alatsi', sans-serif;" href={{route('login')}}>Login</a>
                  <a style="font-family:'Alatsi', sans-serif;" href={{url('register') }}>Register</a>
                  <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button style="background: #fbeb5b;    color: black;
                    border-color: #FF85A2;
                    width: 160px;text-align:left" type="submit" href="#" class="nav-link">Logout</a>
                  </form>
                </div>
              </div>

              </li>
          </div>   
        </nav> 
      </header> <!-- section-header.// -->
          
          <!-- ========================= SECTION MAIN ========================= -->
          <section class="section-main bg padding-y">
          <div class="container1">
          
            <div class="slideshow-container">

              <div class="mySlides fade">
                <img src="{{url('img/BANNER DEAR ME.jpg')}}" style="width:100%">
              </div>
              
              <div class="mySlides fade">
                <img src="{{url('img/BANNER LUXCRIME.jpg')}}" style="width:100%">
              </div>
              
              <div class="mySlides fade">
                <img src="{{url('img/BANNER ROSE.jpg')}}" style="width:100%">
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
          <div class="container">
          
          @yield('content1')
          </body>
          </section>

          <footer class="section-footer border-top bg" style="margin-bottom: 80px;">
            <div class="container">
              <section class="footer-top  padding-y">
                <div class="row">
                  
                  <aside class="col-md col-6">
                    <img src="{{url('img/LOGO I.SPILL BLACK.png')}}"></a>
                    <p style="
                    font-family: 'PT Sans', sans-serif;">I SPILL Indonesia
                      St. Moritz Office Building, Unit #1502,
                      Jl. Puri Indah Raya,
                      Kec. Kembangan, Kota Jakarta Barat, Jakarta, 11610</p>
                  </aside>
                  <aside class="col-md col-6" style="margin-left: 120px;">
                    <h6 style="text-align: left;font-size: x-large;">ABOUT</h6>
                    <ul style="margin-left: -32px;">
                      <span style="
                      font-family: 'PT Sans', sans-serif;
                  ">About Us</span><br>
                      <span style="
                      font-family: 'PT Sans', sans-serif;
                  ">FAQ</span><br>
                      <span style="
                      font-family: 'PT Sans', sans-serif;
                  ">Privacy Policy</span><br>
                      <span style="
                      font-family: 'PT Sans', sans-serif;
                  ">Service Policy</span><br>
                      <span style="
                      font-family: 'PT Sans', sans-serif;
                  ">Terms & Conditions</span>
                    </ul>
                  </aside>
                  <aside class="col-md col-6" style="">
                    <h6 style="text-align: left;font-size: x-large;">About Us</h6>
                    <ul style="margin-left: -32px;">
                      <span>Email</span><br>
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                      <span style="font-family: 'PT Sans', sans-serif;"> help@ispill.com</span><br>
                      <br><span>Whatsapp</span><br>
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <span style="font-family: 'PT Sans', sans-serif;">082189067543</span><br>
                    </ul>
                  </aside>
                  <aside class="col-md col-6" style="">
                    <h6 style="text-align: left;font-size: x-large;">FOLLOW US ON</h6>
                    <ul style="margin-left: -32px;">
                      <span style="
                      font-family: 'PT Sans', sans-serif;
                  ">Instagram</span><br>
                      <span style="
                      font-family: 'PT Sans', sans-serif;
                  ">Twitter</span><br>
                      <span style="
                      font-family: 'PT Sans', sans-serif;
                  ">Facebook</span><br>
                    </aside>
                  
                  
                  
                </div> <!-- row.// -->
              </section>	<!-- footer-top.// -->
        
            </div><!-- //container -->
          </footer>
          <!-- ========================= FOOTER END // ========================= -->
        
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