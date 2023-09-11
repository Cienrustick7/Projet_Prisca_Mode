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

<div class="col-lg-10 mt-3">
    <h1 class="text-center">LISTE DES PERSONNELS</h1>
    <div class="container">
        <a href="{{ Route('form_personnel') }}" class="btn btn-danger">Nouveau+</a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">nom_prenom</th>
            <th scope="col">adresse</th>
            <th scope="col">telephone</th>
            <th scope="col">type_personnel</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Joyeuse sarah</td>
            <td>Goughin</td>
            <td>54287624</td>
            <td>comptable</td>
          </tr>

          <tr>
            <th scope="row">2</th>
            <td>Stevie</td>
            <td>zone1</td>
            <td>5245852</td>
            <td>chef d'achat</td>
          </tr>


          <tr>
            <th scope="row">3</th>
            <td>Marayo</td>
            <td>Wemtenga</td>
            <td>54006250</td>
            <td>Couturier</td>
          </tr>

        </tbody>
      </table>

</div>

</section>
@include('layouts.script')

</body>
</html>
