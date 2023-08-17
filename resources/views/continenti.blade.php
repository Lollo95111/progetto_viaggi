<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="welcome.css">

</head>
<body>

<nav>
    <h2>Tour Paradise</h2>
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
         
    
</nav>


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





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="/welcome.js"></script>
</body>
</html>