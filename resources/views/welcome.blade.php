<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Orbitron:wght@400;500;600&display=swap" rel="stylesheet">
  
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    
    <link rel="stylesheet" href="welcome.css">

</head>
<body>

<nav>
    <h2>Tour Paradise</h2>
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
          @foreach($mostraC as $cat)
            <li><a class="dropdown-item" href="{{route('Continenti',['continente'=>$cat])}}">{{$cat}}</a></li>
            @endforeach
          </ul>
        </li>
    
</nav>



<video class="video-bg" src="/viaggi.mp4" autoplay muted loop></video>




<section class="section watch"><i class="fa-solid fa-vest fa-xl icon-section "></i></section>

<section class="section watch"><i class="fa-solid fa-glasses fa-xl icon-section"></i></section>

<section class="section watch"> <i class="fa-solid fa-shirt fa-xl icon-section"></i></section>






    <section class="container mt-5 pannello" >
<div class="row" >
@foreach($cardmostrare as $card)
<div class="col-12 col-md-3 my-3 bordi">
<div class="card" >
<img class="px-2 py-2" style="height:250px;" src="{{ $card['foto'] }}" alt="">
<div class="card-body text-center">
<h5 class="card-title watch intro fade-in">{{ $card['nome'] }}</h5>
<p class="card-text watch intro fade-in">{{ $card['prezzo'] }}</p>
<p class="card-text watch intro fade-in">{{ $card['continente'] }}</p>
<a href="" class="btn watch intro fade-in">Dettagli</a>
</div>
</div>
</div>
@endforeach
</div>
</section>




<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://kit.fontawesome.com/b68f9ee230.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="/welcome.js"></script>
</body>
</html>
