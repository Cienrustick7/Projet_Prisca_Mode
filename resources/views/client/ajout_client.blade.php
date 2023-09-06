@extends('layouts.mainlayout')

@section('content')
    <div class="col-lg-10">

        <div class="container mt-3">
            <a href="{{ Route('form_client') }}" class="btn btn-danger">Liste</a>
               </div>
               <form method="post" action="insertion_clients.php">
                <section class="contenair p-2 bg-danger mt-3 m-3">
                    <div class="row mt-3">

                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <input type="text" name="nom" class="form-control" placeholder="nom">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="prenom" class="form-control" placeholder="prenom">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <input type="text" name="adresse" class="form-control" placeholder="adresse">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="telephone" class="form-control" placeholder="telephone">
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-lg-6">
                                <label class="text-danger" for="" required>utilisateur</label>
                                <select class="form-control" name="user">
                                    <option value="">choisissez un user...</option>
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

@endsection
