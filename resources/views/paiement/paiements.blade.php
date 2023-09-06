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
        <div class="container mt-3 text-center">
      <h1>Formulaire de paiement</h1>

     <form class="row">
        <div class="mb-3 col-md-6">
          <label for="examplemontant_payer" class="form-label">montant_payer</label>
          <input type="text" class="form-control" id="exampleInputmontant_payer">
        </div>
        <div class="mb-3 col-md-6">
          <label for="exampleInputavance" class="form-label">avance</label>
          <input type="text" class="form-control" id="exampleInputavance">
        </div>
        <div class="mb-3 col-md-6">
            <label for="exampleInputreste" class="form-label">reste</label>
            <input type="text" class="form-control" id="exampleInputreste">
          </div>
          <div class="mb-3 col-md-6">
            <label for="exampleInputdate_paiement" class="form-label">date_paimenet</label>
            <input type="date" class="form-control" id="exampleInputdate_paiement">
          </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary col-md-2">Submit</button>
      </form>


    </div>


    </section>


 @include('layouts.script')
</body>
</html>
