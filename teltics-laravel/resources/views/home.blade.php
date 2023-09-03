<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bali United</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@500&family=Secular+One&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- Styles -->
        <style> 
          hr {
        margin-left: auto;
        margin-right: auto;
      }
       .carousel-item {
        height: 100vh;
        min-height: 350px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }  
    .text-small {
  font-size: 0.9rem;
}

a {
  color: inherit;
  text-decoration: none;
  transition: all 0.3s;
}

a:hover, a:focus {
  text-decoration: none;
}

.form-control {
  background: #212529;
  border-color: #545454;
}

.form-control:focus {
  background: #212529;
}

footer {
  background: black;
}



        </style>
    </head>
    
    <body>
        {{-- <img class="first-pic" src="{{asset('images/v502_724.png')}}"> --}}
        <header>

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: url('images/v502_724.png')">
                  <div class="carousel-caption">
                    <h1 style="font-family: 'Hanken Grotesk', sans-serif; font-style: italic; font-size:80px; margin-right:400px; font-weight: bold;">28 MILLION COMMUNITY</h1>
                  </div>
                </div>
              </div>
            </div>
          </header>

          <div style="font-family: 'Hanken Grotesk', sans-serif; margin-top: 10px; text-align:center"> 
            <p> 
                Bali United Football Club is an indonesian professional club based in Gianyar, Bali. Bali United began operations in 2014 and continues to be of the highest tierin the indonesian football competition, League 1. The club has a vision to grow the football industry in Indonesia Through creating an ecosystem consisting of 4Cs namely the Club, Community, Coroporation and Country. <span style="color: red; font-weight: bold"> Staying true to this vision </span>, the footbal club lauched a sports agency under  the name United Creative, to always trying the <span style="color: red; font-weight: bold"> GAME ON </span> beyond its own club.
            </p>
          </div>
          <div> 
            <p style="font-family: 'Hanken Grotesk', sans-serif; margin-left:100px "> 
                Warm Regards
            </p>
            <img src="images/v502_1719.png" style="width:20rem"  alt="">
          </div>
          <hr />
            {{-- @foreach ($product as $key => $value)
        {{ $value->name}} --}}
        {{-- <img src="{{asset('images/'.$value->image)}}" alt="logo"> --}}
        {{-- @endforeach --}}
        @include('products')
        <hr />
        @include('difference')
        <hr />
        @include('services')
        <hr />
        <hr />  
        @include('ourworks')
        <hr />  

        @include('clients')



    </body>
    <footer class="w-100 py-4 flex-shrink-0">
        <div class="container py-4" style="color:white">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <img src="images/v502_768.png" style="width:10%" alt="">
                    <h4 style="color:white">UNITED CREATIVE HEAD OFFICE</h4>
                    <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                </div>
                <div class="col-lg-2 col-md-6">
                    <ul class="list-unstyled">
                        <li><a href="#">Product</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Works</a></li>
                        <li><a href="#">Client</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Career</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <i class="fa-brands fa-instagram fa-2xl" style="color: #ffffff; margin-left: 150px"></i>
                    <h5 class="text-white mb-3">COPYRIGHT @ 2021</h5>
                </div>
            </div>
        </div>
    </footer>
   </html>
