<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts.js')
    <title>COUTURES PRISCA MODE</title>
</head>
<body>
    <section class="container-fluid">
        <div class="row">
@include('layouts.navbar')

<div class="col-lg-10">
    <h1 class="text-center">Liste des modeles</h1>
    <div class="container mt-3">
        <a href="{{ Route('form_modele') }}" class="btn btn-danger">Nouveau+</a>
           </div>
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/images (1).jpeg') }}" alt="">
               <div class="card-body">
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
     <div class="card" style="width: 18rem">
        <img src="{{ asset('img/images (1).jpeg') }}" alt="">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
     </div>

    </div>
      </div>
</div>
</div>
</section>
    @include('layouts.script')
</body>
</html>
