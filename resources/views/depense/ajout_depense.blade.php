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

    <h1 class="text-center">FORMULAIRE DEPENSES</h1>
    <hr>
    <div class="container p-2 bg-danger m-1">

        <form action="{{ route('store_depense') }}" method="POST" class="form-group row g-3">

            @csrf

                <section class="contenair p-2 bg-danger mt-3 m-3">
                    <div class="row mt-3">

                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <input type="text" name="libelle" class="form-control"
                                    placeholder="libelle">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="montant" class="form-control" placeholder="montant">
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <input type="date" name="date" class="form-control" placeholder="date">
                            </div>
                            <div class="col-lg-6">

                             <select class="form-control" style="width: 100%" name="personnels_id">
                                <option>Selectionner personnel</option>;

                                @foreach ($personnels as  $pers )
                                <option value="{{  $pers->id }}">{{  $pers->nom_prenom }}</option>;

                                @endforeach



                                </select>
                            </div>
                        </div>


                        <div class="row m-3">
                            <div class="col-6">
                                <div class="col-auto">
                                    <button type="submit"  class="btn btn-dark text-light mb-2">Ajouter</button>
                                </div>
                            </div>
                        </div>
                </section>
          </form>
    </div>

</div>

</div>

</section>
@include('layouts.script')

</body>
</html>
