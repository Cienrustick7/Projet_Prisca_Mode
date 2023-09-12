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
     <a href="{{ Route('form_mesure') }}" class="btn btn-danger">Nouveau+</a>
        </div>
        <h1 style="text-align: center">Liste de mesures</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">tete</th>
                <th scope="col">cou</th>
                <th scope="col">epaule</th>
                <th scope="col">longueur_bras</th>
                <th scope="col">poitrine</th>
                <th scope="col">tour_taille</th>
                <th scope="col">longueur_du_corps</th>
                <th scope="col">hanches</th>
                <th scope="col">cuisse</th>
                <th scope="col">genou</th>
                <th scope="col">mollet</th>
                <th scope="col">cheville</th>
                <th scope="col">biceps</th>
                <th scope="col">coude</th>
                <th scope="col">avant_bras</th>
                <th scope="col">poignet</th>
                <th scope="col">poignet_coude</th>
                <th scope="col">entrejambe</th>
                <th scope="col">genou_cheville</th>
                <th scope="col">couture_exterieure</th>
                <th scope="col">hauteur_totale</th>
                <th scope="col">modeles_id</th>
                <th scope="col">clients_id</th>
              </tr>
              
            </thead>

          </table>

     </div>
    </div>
    <div class="mt-6">


    </div>

    </section>


    @include('layouts.script')
</body>
</html>
