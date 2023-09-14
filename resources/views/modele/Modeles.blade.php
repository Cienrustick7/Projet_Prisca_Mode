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


          @foreach ($modeles as $mod)
          <div class="card rounded float-start mt-2  " style="width:20%">
            <img src="{{asset('storage') . '/' . $mod->image}}" class="" alt="...">
            <div class="card-body">
              <p class="card-text">{{ $mod->nom_modele }}</p>
              <p class="card-text">{{ $mod->type_modele }}</p>
            </div>
          </div>

      @endforeach

</div>


    </section>
    @include('layouts.script')
</body>

</html>
