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
    <div class="container mt-2" style="width: 20%">
        <a href="{{ Route('form_modele') }}" class="btn btn-danger">Nouveau+</a>
    </div>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card m-3" style="width: 42%; height:15px">
                <img src="{{asset('img/image robe mariage.jpg')}}" alt="...">
                <div class="card-body">

                  <p class="card-text">Robe de mariée 500.000FCFA</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card m-3" style="width: 40%">
                <img src="{{asset('img/image couture 701.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">

                  <p class="card-text">Ensemble veste femme 15.000FCFA</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card m-5" style="width: 42%">
                <img src="{{asset('img/image costume homme trois pieces.webp')}}" class="card-img-top" alt="...">
                <div class="card-body">

                  <p class="card-text">veste trois pieces sur mesure 200000FCFA</p>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card m-3" style="width: 35%">
                  <img src="{{asset('img/image model couture 2.jpeg')}}" class="card-img-top" alt="...">
                  <div class="card-body">

                    <p class="card-text">Tunique homme 20000FCFA</p>
                  </div>
                </div>
              </div>

          </div>
    </div>
</div>

</section>
    @include('layouts.script')
</body>

</html>
