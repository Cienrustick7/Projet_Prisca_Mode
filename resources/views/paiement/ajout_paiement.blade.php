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

@if (session('status'))
     <div class="alert-succès">
        {{session('status') }}

     </div>
      @endif

    <h1 class="text-center">FORMULAIRE PAIEMENTS</h1>
    <div class="container p-2 bg-danger m-1">
        <form action="enregistrement_paiement" method="POST" class="form-group row g-3">

            @csrf

            <div class="col-md-2 text-light">
              <label for="inputMontant_payer" class="form-label">Montant_payer</label>
              <input type="text" class="form-control" id="inputMontant_payer">
            </div>
            <div class="col-md-2 text-light">
              <label for="inputAvance" class="form-label">Avance</label>
              <input type="text" class="form-control" id="inputAvance">
            </div>
            <div class="col-md-2 text-light">
              <label for="inputReste" class="form-label">Reste</label>
              <input type="text" class="form-control" id="inputReste">
            </div>
            <div class="col-md-2 text-light">
              <label for="inputDate_paiement" class="form-label">Date_paiement</label>
              <input type="Date" class="form-control" id="inputDate_paiement">
            </div>
            

            <div class="col-3">
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
