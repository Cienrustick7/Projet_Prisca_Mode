<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.js')
    <title>COUTURE PRISCA MODE</title>
</head>
<body>

    <section class="container-fluid">
        <div class="row">
          @include('layouts.navbar')

          <div class="col-lg-10">
          <div class="container mt-3">
              <a href="{{ route('form_depense') }}" class="btn btn-danger">Nouveau+</a>
          </div>

          <table class="table mt-3">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">libelle</th>
                <th scope="col">montant</th>
                <th scope="col">date</th>
                <th scope="col">nom_personnel</th>

              </tr>
            </thead>

            @foreach ($depenses as $dep )
            <tr>
                <td>{{ $dep->id}}</td>
                <td>{{ $dep->libelle}}</td>
                <td>{{ $dep->montant}}</td>
                <td>{{ $dep->date}}</td>
                <td>{{ $dep->Personnel->nom_prenom}}</td>
            </tr>
         @endforeach
          </table>
        </section>
@include('layouts.script')
</body>
</html>
