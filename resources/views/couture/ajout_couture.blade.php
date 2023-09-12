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

      <div class="text-center">
        <h1 style="text-align: center">Formulaire de couture</h1>

      </div>

        @if (session('status'))
        <div class="alert alert-succès">
            {{ session('status') }}
        </div>
    @endif
             <hr>
               <form action="enregistrement_couture" method="POST" class="form-group">
                @csrf
                <section class="contenair p-2 bg-danger mt-3 m-3">
                    <div class="row mt-3">

                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <input type="text" id="id" class="form-control" placeholder="id">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="Montant" class="form-control" placeholder="Montant">
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <input type="date" name="Date_depot" class="form-control" placeholder="date_depot">
                            </div>
                            <div class="col-lg-6">
                                <input type="date" name="date_recuperation" class="form-control" placeholder="date_recuperation">
                            </div>
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <input type="text" name="nom_model" class="form-control" placeholder="nom_modele">

                                <select class="champ" name="Idmodeles">

                                    <option>Selectionner un modele</option>;

                                </select>

                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="nom_client" class="form-control" placeholder="nom_client">

                                <select class="champ" name="Idclients">

                                    <option>Selectionner un client</option>;

                                </select>

                            </div>
                        </div>

                        </div>
                </section>
                <div class="col-lg-10">

                    <div class="container mt-3">
                        <a href="{{ Route('coutures') }}" class="btn btn-danger">ajouter la couture</a>
                           </div>
    </form>
    </div>

</section>


</body>
</html>
