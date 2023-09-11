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

                <div class="container mt-3">
                    <a href="{{ Route('coutures') }}" class="btn btn-danger">Liste</a>
                </div>
                <div class="text-center">
                    <h1>Formulaire d'ajout couture</h1>
                </div>
                <hr>
                @if (session('status'))
                    <div class="alert alert-success">
                        {(session('status'))}
                    </div>
                @endif

                <form action="enregistrement_couture" method="POST" class="form-group">

                    @csrf
                    <section class="contenair p-2 bg-danger mt-3 m-3">
                        <div class="row mt-3">

                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <input type="text" name="id" class="form-control"
                                        placeholder="id">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="montant" class="form-control" placeholder="montant">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <input type="date" name="date_depot" class="form-control" placeholder="date_depot">
                                </div>
                                <div class="col-lg-6">
                                    <input type="date" name="date_recuperation" class="form-control" placeholder="date_recuperation">
                                </div>
                            </div>

                             <div class="row mt-3">
                                <div class="col-lg-6">
                                    <input type="liste" name="modeles_id" class="form-control"
                                        placeholder="modeles_id">
                                </div>
                                <div class="col-lg-6">
                                    <input type="liste" name="clients_id" class="form-control" placeholder="clients_id">
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
