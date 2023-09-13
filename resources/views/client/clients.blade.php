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
         <a href="{{ route('form_client') }}" class="btn btn-danger">Nouveau+</a>
     </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nom_Prenom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Telephone</th>
                <th scope="col">Sexe</th>

              </tr>
            </thead>
            <tbody>

              @foreach ($clients as $cli)
              <tr>
                  <td>{{ $cli->id }}</td>
                  <td>{{ $cli->nom_prenom }}</td>
                  <td>{{ $cli->adresse }}</td>
                  <td>{{ $cli->telephone }}</td>
                  <td>{{ $cli->sexe }}</td>

              </tr>
          @endforeach
        </tbody>
          </table>

     </div>
    </div>

    </section>


    @include('layouts.script')
</body>

</html>
