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
            <a href="{{ route('form_personnel') }}" class="btn btn-danger">Nouveau+</a>
        </div>
    <h1 style="text-align: center">Liste des personnels</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nom_Prenom</th>
            <th scope="col">adresse</th>
            <th scope="col">Telephone</th>
            <th scope="col">type_personnel</th>

          </tr>
        </thead>
        <tbody>

            @foreach ($personnels as $per)
            <tr>
                <td>{{ $per->id }}</td>
                <td>{{ $per->nom_prenom }}</td>
                <td>{{ $per->adresse }}</td>
                <td>{{ $per->telephone }}</td>
                <td>{{ $per->type_personnel }}</td>

            </tr>
        @endforeach

        </tbody>
      </table>

 </div>
</div>
<div class="mt-6">

</div>

</section>
@include('layouts.script')

</body>
</html>
