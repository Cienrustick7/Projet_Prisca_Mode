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
        @if (session('status'))
        <div class="alert alert-succès">
            {{ session('status') }}
        </div>
    @endif
    <div class="container mt-3">
        <a href="{{ Route('mesures') }}" class="btn btn-danger">Liste</a>
    </div>

        <div class="text-center">
            <h1>formulaire des mesures </h1>
               </div>
               <form method="POST" action="{{ route('store_mesure')}}" class="form-group">
                <section class="contenair p-2 bg-danger mt-3 m-3 text-light">
                    <div class="row mt-3">

                        <div class="col-md-3">
                            <label for="inputTete" class="form-label">Tete</label>
                            <input type="number" class="form-control" id="number">
                          </div>
                          <div class="col-md-3">
                            <label for="inputCou" class="form-label">Cou</label>
                            <input type="number" class="form-control" id="number">
                          </div>

                          <div class="col-md-3">
                            <label for="inputEpaule" class="form-label">Epaule</label>
                            <input type="number" class="form-control" id="number">
                          </div>
                          <div class="col-md-3">
                            <label for="inputLongueur_bras" class="form-label">Longueur_bras</label>
                            <input type="number" class="form-control" id="number">
                          </div>

                          <div class="col-md-3">
                            <label for="inputPoitrine" class="form-label">Poitrine</label>
                            <input type="number" class="form-control" id="number">
                          </div>
                          <div class="col-md-3">
                            <label for="inputTour_taille" class="form-label">Tour_de_taille</label>
                            <input type="number" class="form-control" id="number">
                          </div>

                          <div class="col-md-3">
                            <label for="inputcouture_exterieure" class="form-label">Couture_exterieure</label>
                            <input type="number" class="form-control" id="number">
                          </div>
                          <div class="col-md-3">
                            <label for="inputLongueur_du_corps" class="form-label">Longueur_corps</label>
                            <input type="number" class="form-control" id="number">
                          </div>

                          <div class="col-md-3">
                            <label for="inputHanches" class="form-label">Hanches</label>
                            <input type="number" class="form-control" id="number">
                          </div>
                          <div class="col-md-3">
                            <label for="inputCuisse" class="form-label">Cuisse</label>
                            <input type="number" class="form-control" id="number">
                          </div>

                          <div class="col-md-3">
                            <label for="Genou" class="form-label">Genou</label>
                            <input type="number" class="form-control" id="number">
                          </div>
                          <div class="col-md-3">
                            <label for="inputMollet" class="form-label">Mollet</label>
                            <input type="number" class="form-control" id="number">
                          </div>

                          <div class="col-md-3">
                            <label for="inputCheville" class="form-label">Cheville</label>
                            <input type="number" class="form-control" id="number">
                          </div>
                          <div class="col-md-3">
                            <label for="inputBiceps" class="form-label">Biceps</label>
                            <input type="number" class="form-control" id="number">
                          </div>

                          <div class="col-md-3">
                            <label for="inputCoude" class="form-label">Coude</label>
                            <input type="number" class="form-control" id="number">
                          </div>
                          <div class="col-md-3">
                            <label for="inputAvant_bras" class="form-label">Avant_bras</label>
                            <input type="number" class="form-control" id="number">
                          </div>

                          <div class="col-md-3">
                            <label for="inputPoignet" class="form-label">Poignet</label>
                            <input type="number" class="form-control" id="number">
                          </div>

                          <div class="col-md-3">
                            <label for="inputPoignet" class="form-label">poignet_coude</label>
                            <input type="number" class="form-control" id="number">
                          </div>
                          <div class="col-md-3">
                            <label for="inputEntrejambe" class="form-label">Entrejambe</label>
                            <input type="number" class="form-control" id="number">
                          </div>

                          <div class="col-md-3">
                            <label for="inputEntrejambe" class="form-label">genou_cheville</label>
                            <input type="number" class="form-control" id="number">
                          </div>
                          <div class="row mt-3">
                          <div class="col-md-3">
                            <label for="inputGenou_cheville" class="form-label">couture_exterieure</label>
                            <input type="number" class="form-control" id="number">
                          </div>
                          <div class="col-md-3 ">
                            <label for="inputHauteur_totale" class="form-label">Hauteur_totale</label>
                            <input type="number" class="form-control" id="number">
                          </div>

                                    <div class="col-md-3 mt-2">
                                        <select class="champ col-lg-12" style="height: 60%" name="modeles_id">
                                            <option>Selectionner un modele</option>
                                            @foreach ($modeles as $mod)
                                                <option value="{{$mod->id}}">{{$mod->nom_modele}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3 mt-2">

                                        <select class="champ col-lg-12" style="height: 60%" name="clients_id">

                                            <option>Selectionner un client</option>;
                                            @foreach ($clients as $cli)
                                                <option value="{{$cli->id}}">{{$cli->nom_prenom}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                        </div>
                </section>
                <div class="row m-3">
                    <div class="col-6">
                        <div class="col-auto">
                            <button type="submit" class="btn btn-dark text-light mb-2">Ajouter</button>
                        </div>
                    </div>
                </div>
    </form>
    </div>

</section>

@include('layouts.script')
</body>
</html>
