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
                <th scope="col">modeles_id</th>
                <th scope="col">clients_id</th>
              </tr>
            </thead>
            @foreach ($coutures as $cout )
            <tr>
                <td>{{ $cout->id}}</td>
                <td>{{ $cout->libelle}}</td>
                <td>{{ $cout->Date_depot}}</td>
                <td>{{ $cout->Date_recuperation}}</td>
                <td>{{ $cout->modeles_id}}</td>
                <td>{{ $cout->clients_id}}</td>
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
