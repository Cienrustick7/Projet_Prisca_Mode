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
        <a href="{{ Route('mesures') }}"></a>
        <div class="container mt-3" style="text-align: center">
            <h1>LISTE DES MESURES </h1>
               </div>
               <form method="post" action="insertion_clients.php">
                <section class="contenair p-2 bg-danger mt-3 m-3">
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
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
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

                          <div class="col-md-3">
                            <label for="inputGenou_cheville" class="form-label">couture_exterieure</label>
                            <input type="number" class="form-control" id="number">
                          </div>
                          <div class="col-md-3">
                            <label for="inputHauteur_totale" class="form-label">Hauteur_totale</label>
                            <input type="number" class="form-control" id="number">
                          </div>
                          <div class="col-md-3">
                            <label for="clients_id" class="form-label">clients_id</label>
                            <input type="number" class="form-control" id="number">
                          </div>
                          <div class="col-md-3">
                            <label for="modeles_id" class="form-label">modeles_id</label>
                            <input type="number" class="form-control" id="number">
                          </div>
                        </div>
                </section>
                <div>
                    <button type="button" class="btn btn-danger">ENREGISTRE</button>
                </div>
    </form>
    </div>

</section>

@include('layouts.script')
</body>
</html>
