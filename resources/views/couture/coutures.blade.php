<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts.js')
    <title>COUTURE PRISCA MODE</title>
</head>
<body>

<section class="container-fluid">
   <div class="row">
     @include('layouts.navbar')
     <div class="col-lg-10">
        <div class="container mt-3">
     <a href="{{ Route('form_couture') }}" class="btn btn-danger">Nouveau+</a>
        </div>
        <h1 style="text-align: center">Liste couture</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">libelle</th>
                <th scope="col">Date_depot</th>
                <th scope="col">Date_recuperation</th>
                <th scope="col">Nom modele</th>
                <th scope="col">Nom client</th>
              </tr>
            </thead>
            @foreach ($coutures as $cout )
            <tr>
                <td>{{ $cout->id}}</td>
                <td>{{ $cout->libelle}}</td>
                <td>{{ $cout->date_depot}}</td>
                <td>{{ $cout->date_recuperation}}</td>
                <td>{{ $cout->Modele->nom_modele}}</td>
                <td>{{ $cout->Client->nom_prenom}}</td>
            </tr>

            @endforeach
          </table>

     </div>
    </div>
    <div class="mt-6">


    </div>

    </section>


    @include('layouts.script')
</body>
</html>
