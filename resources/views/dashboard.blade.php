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

<div class="col-lg-10 mt-3">
    <div class="container-fluid">
        <h1 class="text-center">STATISTIQUES PRISCA MODE</h1>
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="form-group text-center">
                <h1>Année : 2023</h1>


              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card">
            <div id="ordersChart" style="height: 300px;" class="card-body">

      <div class="btn-group col-lg-2" style="width: 22%">
    <button type="button" class="btn btn-danger">Clients</button>
    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
      <span class="visually-hidden">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">5000 clients de plus</a></li>

    </ul>

  </div>
  <div class="btn-group  m-3 col-lg-2" style="width: 22%">
    <button type="button" class="btn btn-danger">Modeles</button>
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">10000 modeles</a></li>
  </ul>
            </div>
            <div class="btn-group m-3 col-lg-2" style="width: 22%">
                <button type="button" class="btn btn-danger ">Mesures</button>
              <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">500000 mesures</a></li>
              </ul>
          </div>
          <div class="btn-group col-lg-2" style="width: 22%">
            <button type="button" class="btn btn-danger">Paiements</button>
          <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">2 millions de chiffre d'affaire de plus</a></li>
          </ul>
        </div>
        <div class="btn-group col-lg-2" style="width: 22%">
            <button type="button" class="btn btn-danger">Personnels</button>
          <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">recrutement de 8 personnels de plus</a></li>
          </ul>
      </div>
      <div class="btn-group  m-3 col-lg-2" style="width: 22%">
        <button type="button" class="btn btn-danger">rendez_vous</button>
      <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="visually-hidden">Toggle Dropdown</span>
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">notre carnet de rendez vous s'est elargie avec 10000 rv de plus</a></li>
      </ul>
    </div>
    <div class="btn-group  m-3 col-lg-2" style="width: 25%">
        <button type="button" class="btn btn-danger">Coutures</button>
      <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="visually-hidden">Toggle Dropdown</span>
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">20000 coutures de plus</a></li>
      </ul>
</div>
@include('layouts.footer')
</section>
      @include('layouts.script')
</body>
</html>
