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
                    <a href="{{ Route('rendez_vous') }}" class="btn btn-danger">Liste</a>
                </div>
                <div class="text-center">
                    <h1>Formulaire d'ajout rendez_vous</h1>
                </div>
                <hr>

                <form action="{{ route('store_rendez_vous') }}" method="POST" class="form-group">

                    @csrf
                    <section class="container p-2 bg-danger mt-3 m-3">
                        <div class="row mt-3">

                            <div class="row mt-3">
                                <div class="col-lg-4">
                                    <input type="text" name="libelle" class="form-control"
                                        placeholder="libelle">
                                </div>
                                <div class="col-lg-4">
                                    <input type="date" name="date_rdv" class="form-control" placeholder="date_rdv">
                                </div>
                                <div class="col-lg-4">
                                    <select class="form-control" style="width: 100%" name="clients_id">
                                        <option>Selectionner client</option>;

                                        @foreach ($clients as  $cli )
                                        <option value="{{  $cli->id }}">{{  $cli->nom_prenom }}</option>;

                                        @endforeach
                                </div>
                            </div>


                                <div class="col-6">
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-dark text-light mb-2">Ajouter</button>
                                    </div>
                                </div>

                    </section>
                </form>
            </div>

    </section>


</body>

</html>
