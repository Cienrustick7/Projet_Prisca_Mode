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
              <a href="{{ route('form_mesure') }}" class="btn btn-danger">Nouveau+</a>
          </div>

          <div table-responsive>


          <table class="table mt-3">
            <thead>
              <tr>
                <td scope="col">tete</td>
                <td scope="col">cou</td>
                <td scope="col">epaule</td>
                <td scope="col">longueur_bras</td>
                <td scope="col">poitrine</td>
                <td scope="col">tour_taille</td>
                <td scope="col">longueur_du_corps</td>
                <td scope="col">hanches</td>
                <td scope="col">cuisse</td>
                <td scope="col">genou</td>
                <td scope="col">mollet</td>
                <td scope="col">cheville</td>
                <td scope="col">biceps</td>
                <td scope="col">coude</td>
                <td scope="col">avant_bras</td>
                <td scope="col">poignet</td>
                <td scope="col">poignet_coude</td>
                <td scope="col">entrejambe</td>
                <td scope="col">genou_cheville</td>
                <td scope="col">couture_exterieure</td>
                <td scope="col">hauteur_totale</td>
                <td scope="col">nom_modele</td>
                <td scope="col">nom_client</td>
              </tr>

            </thead>
            @foreach ($mesures as $mes )
            <tr>
                <td>{{ $mes->tete}}</td>
                <td>{{ $mes->cou}}</td>
                <td>{{ $mes->epaule}}</td>
                <td>{{ $mes->longueur_bras}}</td>
                <td>{{ $mes->poitrine}}</td>
                <td>{{ $mes->tour_taille}}</td>
                <td>{{ $mes->longueur_du_corps}}</td>
                <td>{{ $mes->hanches}}</td>
                <td>{{ $mes->cuisse}}</td>
                <td>{{ $mes->genou}}</td>
                <td>{{ $mes->mollet}}</td>
                <td>{{ $mes->cheville}}</td>
                <td>{{ $mes->biceps}}</td>
                <td>{{ $mes->coude}}</td>
                <td>{{ $mes->avant_bras}}</td>
                <td>{{ $mes->poignet}}</td>
                <td>{{ $mes->poignet_coude}}</td>
                <td>{{ $mes->entrejambe}}</td>
                <td>{{ $mes->genou_cheville}}</td>
                <td>{{ $mes->couture_exterieure}}</td>
                <td>{{ $mes->hauteur_totale}}</td>
                <td>{{ $mes->Modele->nom_modele}}</td>
                <td>{{ $mes->Client->nom_prenom}}</td>
            </tr>

            @endforeach
          </table>
        </div>

     </div>
    </div>
    <div class="mt-6">


    </div>

    </section>


    @include('layouts.script')
</body>
</html>
