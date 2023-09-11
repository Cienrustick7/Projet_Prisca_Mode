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
              <tr>
                <th scope="row">1</th>
                <td>Somtore_Jean</td>
                <td>cissin</td>
                <td>55441122</td>
                <td>masculin</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Sankara_Anaelle</td>
                <td>patte-d'oie</td>
                <td>67673707</td>
                <td>feminin</td>
              </tr>

              <tr>
                <th scope="row">3</th>
                <td>Ineza_Sonia</td>
                <td>kalgonde</td>
                <td>70241055</td>
                <td>feminin</td>
              </tr>

              <tr>
                <th scope="row">4</th>
                <td>Kongo_Latifa</td>
                <td>wemtenga</td>
                <td>55660200</td>
                <td>feminin</td>
              </tr>

              <tr>
                <th scope="row">5</th>
                <td>Soanga_Reine</td>
                <td>pissy</td>
                <td>76243632</td>
                <td>feminin</td>
              </tr>

              <tr>
                <th scope="row">6</th>
                <td>Uwimana_Claude</td>
                <td>1200logement</td>
                <td>60235698</td>
                <td>masculin</td>
              </tr>
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
