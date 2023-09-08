<!DOCTYPE html>
<html lang="en">
<head>
   @include('layouts.js')
    <title>COUTURE PRISCA MODE</title>
</head>
<body>
    <section class="container-fluid">
        <div class="row">
    <section class="container-fluid">
        <div class="row">
      @include('layouts.navbar')

<div class="col-lg-10 mt-3">
    <h1 class="text-center">RENDEZ_VOUS</h1>
    <div class="container p-2 bg-danger m-1">
        <form class="row g-3">
            <div class="col-md-5 text-light">
              <label for="inputLibelle" class="form-label">Libelle</label>
              <input type="text" class="form-control" id="inputLibelle">
            </div>
            <div class="col-md-5 text-light">
              <label for="inputDate_rendez_vous" class="form-label">Date_rendez_vous</label>
              <input type="Date" class="form-control" id="inputDate_rendez_vous">

              <div class="col-md-6 mt-3">
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

