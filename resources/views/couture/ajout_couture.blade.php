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

        <h1 style="text-align: center">Formulaire</h1>
               <form>
                @csrf
                <section class="contenair p-2 bg-danger mt-3 m-3">
                    <div class="row mt-3">

                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <input type="number" id="id" class="form-control" placeholder="id">
                            </div>
                            <div class="col-lg-6">
                                <input type="number" name="Montant" class="form-control" placeholder="Montant">
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <input type="date" name="Date_depot" class="form-control" placeholder="date_depot">
                            </div>
                            <div class="col-lg-6">
                                <input type="date" name="date_retrait" class="form-control" placeholder="date_retrait">
                            </div>
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <input type="text" name="nom_model" class="form-control" placeholder="nom_modele">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="nom_client" class="form-control" placeholder="nom_client">
                            </div>
                        </div>

                        </div>
                </section>
                <div class="col-lg-10">

                    <div class="container mt-3">
                        <a href="{{ Route('coutures') }}" class="btn btn-danger">Enregistre</a>
                           </div>
    </form>
    </div>

</section>


</body>
</html>
