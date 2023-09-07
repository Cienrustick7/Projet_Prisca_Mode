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
    <div class="container p-2 bg-danger m-1">
        <form class="row g-3">
            <div class="col-md-5 text-light">
              <label for="inputNom_Prenom" class="form-label">Nom_Prenom</label>
              <input type="text" class="form-control" id="inputNom_Prenom">
            </div>
            <div class="col-md-5 text-light">
              <label for="inputAdresse" class="form-label">Adresse</label>
              <input type="text" class="form-control" id="inputAdresse">
            </div>
            <div class="col-md-5 text-light">
              <label for="inputTelephone" class="form-label">Telephone</label>
              <input type="text" class="form-control" id="inputTelephone">
            </div>
            <div class="col-md-5 text-light">
              <label for="inputType_personnel" class="form-label">Type_personnel</label>
              <input type="texte" class="form-control" id="inputType_personnel">
            </div>
            <div

            <div class="col-12">
              <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
          </form>
    </div>
    </div>
</div>

</section>
@include('layouts.script')

</body>
</html>
