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
              <a href="{{ route('form_paiement') }}" class="btn btn-danger">Nouveau+</a>
          </div>

          <table class="table mt-3">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">montant_payer</th>
                <th scope="col">avance</th>
                <th scope="col">reste</th>
                <th scope="col">coutures_id</th>

              </tr>
            </thead>

          </table>
@include('layouts.script')
</body>
</html>
