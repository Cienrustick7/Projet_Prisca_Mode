<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts.js')
    <title>Document</title>
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
                <th scope="col">Montant</th>
                <th scope="col">Date_depot</th>
                <th scope="col">Date_recuperation</th>
                <th scope="col">Modeles</th>
                <th scope="col">clients</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>10000FCFA</td>
                <td>08/09/2023</td>
                <td>15/09/2023</td>
                <td>Robe_courte</td>
                <td>Ineza_Sonia</td>
              </tr>

              <tr>
                <th scope="row">2</th>
                <td>60000FCFA</td>
                <td>01/09/2023</td>
                <td>15/09/2023</td>
                <td>Ensemble_veste</td>
                <td>Uwimana_Claude</td>
              </tr>


              <tr>
                <th scope="row">3</th>
                <td>45000FCFA</td>
                <td>04/09/2023</td>
                <td>18/09/2023</td>
                <td>Robe bazzin</td>
                <td>Congo_Latifa</td>
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
