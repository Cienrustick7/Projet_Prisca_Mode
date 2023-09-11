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
    <h1 class="text-center mt-3">Liste des modeles</h1>
    <div class="container">
        <a href="{{ Route('form_modele') }}" class="btn btn-danger">Nouveau+</a>
    </div>
    <div class="container-fluid mt-3" style="height: 25%">

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col-lg-3 " style="width: 350px ">
              <div class="card">
                <img src="{{asset('img/image robe mariage.jpg')}}" alt="...">
                <div class="card-body">

                  <p class="card-text">Robe de mariée 500.000FCFA</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3" style="width: 350px">
              <div class="card">
                <img src="{{asset('img/image couture 701.jpg')}}"  alt="...">
                <div class="card-body">

                  <p class="card-text">Ensemble veste femme 15.000FCFA</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3" style="width: 350px">
              <div class="card">
                <img src="{{asset('img/image costume homme trois pieces.webp')}}" alt="...">
                <div class="card-body">

                  <p class="card-text">veste trois pieces sur mesure 200000FCFA</p>
                </div>
              </div>
            </div>


          </div>

</div>

</section>
    @include('layouts.script')
</body>

</html>
