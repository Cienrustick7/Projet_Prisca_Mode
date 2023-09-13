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
            <div class="col-lg-10">

        @if (session('status'))
        <div class="alert alert-succès">
            {{ session('status') }}
        </div>
    @endif
         <div class="text-center">
        <h1>Formulaire d'ajout couture</h1>
          </div>
             <hr>
               <form action="{{route('store_couture')}}" method="POST" class="form-group">
                @csrf
                <section class="contenair p-2 bg-danger mt-3 m-3">
                    <div class="row mt-3">

                            <div class="row mt-4">

                                <div class="col-lg-6">
                                    <input type="text" name="libelle" class="form-control" placeholder="libelle">
                                </div>
                            </div>

                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <input type="date" name="date_depot" class="form-control" placeholder="date_depot">
                            </div>
                            <div class="col-lg-6">
                                <input type="date" name="date_recuperation" class="form-control" placeholder="date_recuperation">
                            </div>
                        <div class="row mt-4">
                            <div class="col-lg-6">

                                <select class="champ col-lg-12" style="height: 150%" name="modeles_id">

                                    <option>Selectionner un modele</option>;
                                    @foreach ($modeles as $mod)
                                    <option value="{{$mod->id}}">{{$mod->nom_modele}}</option>
                                @endforeach
                                </select>

                            </div>
                            <div class="col-lg-6">

                                        <select class="champ col-lg-12" style="height: 150%" name="clients_id">

                                            <option>Selectionner un client</option>;
                                            @foreach ($clients as $cli)
                                                <option value="{{$cli->id}}">{{$cli->nom_prenom}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>


                                <div class="row m-3">
                                    <div class="col-6">
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-dark text-light mb-2">Ajouter</button>
                                        </div>
                                    </div>
                                </div>
                    </section>
                </form>
            </div>

    </section>


</body>

</html>
