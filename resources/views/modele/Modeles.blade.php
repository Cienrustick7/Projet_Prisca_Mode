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

<<<<<<< HEAD
<div class="col-lg-10">
=======
    <div class="col-lg-10">
>>>>>>> 6931f6bd286dc0686c71d2d3a687ad05799fb326
    <h1 class="text-center">Liste des modeles</h1>
    <div class="container mt-2" style="width: 20%">
        <a href="{{ Route('form_modele') }}" class="btn btn-danger">Nouveau+</a>
    </div>
<<<<<<< HEAD
    <div class="container mt-3">
        <div class="card" style="width: 25%">
            <img src="{{asset('img/images (1).jpeg')}}" class="card rounded float-start" alt="...">
            <div>
                <p class="card-body">ensemble tunique à 35000</p>
            </div>
        </div>

    <img src="{{asset('img/images (2).jpeg')}}" class="card rounded float-end m-4" alt="...">
    <div>
        <p class="card-body">ensemble tunique à 35000</p>
    </div>

    <img src="{{asset('img/images (2).jpeg')}}" class="card rounded float-end " alt="...">


    </div>
</div>

</section>
            <div class="col-lg-10">
                <h1 class="text-center">Liste des modeles</h1>
                <div class="container mt-2" style="width: 20%">
                    <a href="{{ Route('form_modele') }}" class="btn btn-danger">Nouveau+</a>
=======

    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card m-3" style="width: 42%; height:15px">
                <img src="{{asset('img/image robe mariage.jpg')}}" alt="...">
                <div class="card-body">

                  <p class="card-text">Robe de mariée 500.000FCFA</p>
>>>>>>> 6931f6bd286dc0686c71d2d3a687ad05799fb326
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card m-3" style="width: 40%">
                <img src="{{asset('img/image couture 701.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">

                  <p class="card-text">Ensemble veste femme 15.000FCFA</p>
                </div>
<<<<<<< HEAD

    </section>
=======
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
>>>>>>> 6931f6bd286dc0686c71d2d3a687ad05799fb326
    @include('layouts.script')
</body>

</html>
