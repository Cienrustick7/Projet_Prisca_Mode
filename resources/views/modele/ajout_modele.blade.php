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

                    <form class="row g-3">
                        @csrf
                        <div class="col-md-5 text-light">
                          <label for="inputType_modele" class="form-label">type_modele</label>
                          <input type="text" class="form-control" id="inputType_modele">
                        </div>
                        <div class="col-md-5 text-light">
                          <label for="inputNom_modele" class="form-label">nom_modele</label>
                          <input type="text" class="form-control" id="inputAdresse">
                        </div>
                        <div class="col-md-5 text-light">
                          <label for="inputImage" class="form-label">image</label>
                          <input type="file" class="form-control" id="inputImage">
                        </div>

                        <div

                        <div class="col-12">
                          <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                      </form>
                </div>
                </div>
            </div>
    </section>
    @include('layouts.script')
</body>

</html>
