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
                <h1 class="text-center mt-3">Liste des modeles</h1>
                <div class="container">
                    <a href="{{ Route('form_modele') }}" class="btn btn-danger">Nouveau+</a>
                </div>
                <div class="container-fluid mt-3" style="height: 25%">

                    <div class="card" style="width: 18rem">
                        @foreach ($modeles as $mod)
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('storage') . '/' . $mod->image }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $mod->nom_modele }}</h5>
                                    <h4 class="card-text">{{ $mod->type_modele }}</h4>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

    </section>
    @include('layouts.script')
</body>

</html>
