<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts.js')
    <title>COUTURES PRISCA MODE</title>
</head>

<body>
    <section class="container-fluid">
        <div class="row">
            @include('layouts.navbar')

            <div class="col-lg-10">
              <div>
                <h1 class="text-center">Nouveau modeles</h1>
                </div>

                @if (session('status'))
                <div class="alert alert-succès">
                    {{ session('status') }}
                </div>
            @endif
            <hr>

                <div class="container p-2 bg-danger m-1">

                    <form action="enregistrement_modele" method="POST" class="row g-3 form-group">
                        @csrf
                        <section class="contenair p-2 bg-danger mt-3 m-3">
                            <div class="row mt-3">

                                <div class="row mt-3">
                                    <div class="col-lg-6">
                                        <input type="text" name="type_modele" class="form-control"
                                            placeholder="type_modele">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="nom_modele" class="form-control" placeholder="nom_modele">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-6">
                                        <input type="file" name="image" class="form-control" placeholder="image">
                                    </div>

                                </div>


                                <div class="row m-3">
                                    <div class="col-6">
                                        <div class="col-auto">
                                            <button type="submit"  class="btn btn-dark text-light mb-2">ajouter</button>
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
