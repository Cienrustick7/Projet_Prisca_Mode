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

      <div class="container mt-3">
        <a href="{{ Route('paiements') }}" class="btn btn-danger">Liste</a>
    </div>
    <div>
        <h1 class="text-center">FORMULAIRE PAIEMENTS</h1>
    </div>

    <hr>
    <div class="container p-2 bg-danger m-1">

        <form action="{{ route('store_paiement') }}" method="POST" class="form-group row g-3">

            @csrf

                <section class="contenair p-2 bg-danger mt-3 m-3">
                    <div class="row mt-3">

                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <input type="text" name="montant_payer" class="form-control"
                                    placeholder="montant_payer">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="avance" class="form-control" placeholder="avance">
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <input type="text" name="reste" class="form-control" placeholder="reste">
                            </div>
                            <div class="col-lg-6">

                                <div class="col-lg-6" style="width: 100%">
                                    <input type="date" name="date_paiement" class="form-control" placeholder="date_paiement">
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6 mt-3">

                            <select class="form-control" style="width: 100%" name="coutures_id">
                               <option>Selectionner couture</option>;

                               @foreach ($coutures as  $cout )
                               <option value="{{  $cout->id }}">{{  $cout->libelle }}</option>;

                               @endforeach



                               </select>
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
