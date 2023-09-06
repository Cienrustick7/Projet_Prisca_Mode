@extends('layouts.mainlayout')

@section('content')


    <div class="container mt-3">
        <a href="{{ Route('clients') }}" class="btn btn-danger">liste</a>

        <form class="row g-3">
            <div class="col-md-6">
              <label for="inputNom_Prenom" class="form-label">Nom_Prenom</label>
              <input type="nom_Prenom" class="form-control" id="inputNom_Prenom">
            </div>

            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="inputAddress">
            </div>
            <div class="col-12">
              <label for="inputTelephone" class="form-label">Telephone</label>
              <input type="text" class="form-control" id="inputTelephone">
            </div>
            <div class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Sexe</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                    <label class="form-check-label" for="gridRadios1">
                     Femme
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                      Homme
                    </label>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>

    </div>
@endsection
