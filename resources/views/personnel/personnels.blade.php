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
          <tr>
            <th scope="row">1</th>
            <td>Sankara_Louis</td>
            <td>Kouritenga</td>
            <td>70589633</td>
            <td>couturier</td>

          </tr>

          <tr>
            <th scope="row">2</th>
            <td>Umuhoza_Athanasia</td>
            <td>ouaga2000</td>
            <td>65154897</td>
            <td>comptable</td>

          </tr>


          <tr>
            <th scope="row">3</th>
            <td>Hirwa_Noelly</td>
            <td>karpala</td>
            <td>63258010</td>
            <td>Couturiere</td>

          </tr>
      

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
