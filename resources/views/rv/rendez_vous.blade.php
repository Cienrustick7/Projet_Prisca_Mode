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
     </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">libelle</th>
                <th scope="col">date_rendez_vous</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>recuperation_veste</td>
                <td>15/08/2023</td>
              </tr>

              <th scope="row">1</th>
                <td>essaie_robe_marie</td>
                <td>15/08/2023</td>
              </tr>


            </tbody>
          </table>

     </div>
    </div>

    </section>


    @include('layouts.script')
</body>

</html>
