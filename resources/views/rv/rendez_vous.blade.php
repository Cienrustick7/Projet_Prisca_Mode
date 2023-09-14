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
         <a href="{{ route('form_rendez_vous') }}" class="btn btn-danger">Nouveau+</a>
         <h1 style="text-align: center">liste rendez_vous</h1>
         <hr>
     </div>
        <table class="table">
            <thead>
              <tr>

                <th scope="col">libelle</th>
                <th scope="col">date_rdv</th>
                <th scope="col">nom_client</th>
              </tr>
            </thead>


            @foreach ($rendez_vous as $rv )
            <tr>
                <td>{{ $rv->id}}</td>
                <td>{{ $rv->libelle}}</td>
                <td>{{ $rv->date}}</td>
                <td>{{ $rv->Client->nom_prenom}}</td>
            </tr>
         @endforeach
          </table>

     </div>
    </div>

    </section>


    @include('layouts.script')
</body>

</html>
