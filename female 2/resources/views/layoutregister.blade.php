<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Register I.SPILL</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
      <script src="{{ asset('js/bootstrap.min.js')}}"></script>
      <link href="{{ asset('css/welcome.css')}}" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('css/register.css') }}"> 
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Alatsi&display=swap" rel="stylesheet">
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
                        <li><a href="{{ url('review') }}">Reviews</a></li>
                        <li><a href={{url('register') }}>Register</a></li>
                        <li><a href={{route('login')}}>Login</a></li>
                      </ul>
                    </div>   
                  </nav> 
          
                  </div> <!-- widgets-wrap.// -->
              </div> <!-- col.// -->
          </div> <!-- row.// -->
              </div> <!-- container.// -->
          </section> <!-- header-main .// -->
          
          
          
          
          
          </header> <!-- section-header.// -->

          
          @yield('contentregister')

</html>