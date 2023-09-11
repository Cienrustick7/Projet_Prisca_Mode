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

@if (session('status'))
<div class="alert alert-succès">
    {{ session('status') }}
</div>
@endif


<div class="col-lg-10 mt-3">
   <div>
    <h1 class="text-center">FORMULAIRE D'AJOUT</h1>
   </div>
    <hr>
    <div class="container p-2 bg-danger m-1">
        <form action="enregistrement_personnel" method="POST" class="row g-3 form-group">
         @csrf

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
              <input type="text" class="form-control" id="inputType_personnel">
            </div>


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
