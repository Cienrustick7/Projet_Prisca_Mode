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
                </div>
                <div class="container">
                    <div class="card" style="width: 14rem;">
                        <img src="{{ asset('img/images (7).jpeg') }}" alt="">
                        <div class="card-body">
                            <p class="card-text">des complets tuniques aux differents prix</p>
                        </div>
                    </div>
                </div>

    </section>
    @include('layouts.script')
</body>

</html>
