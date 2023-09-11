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
                    <a href="{{ Route('clients') }}" class="btn btn-danger">Liste</a>
                </div>
                <div class="text-center">
                    <h1>Formulaire d'ajout client</h1>
                </div>
                <hr>


                <form action="ajouter_traitement" method="POST" class="form-group">

                    @csrf
                    <section class="contenair p-2 bg-danger mt-3 m-3">
                        <div class="row mt-3">

                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <input type="text" name="nom_prenom" class="form-control"
                                        placeholder="nom_prenom">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="adresse" class="form-control" placeholder="adresse">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <input type="text" name="telephone" class="form-control" placeholder="telephone">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="sexe" class="form-control" placeholder="sexe">
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

    </section>


</body>

</html>
