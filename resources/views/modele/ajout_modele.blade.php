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
                <h1 class="text-center">Nouveau modeles</h1>
                <div class="container mt-2" style="width: 20%">
                    <a href="{{ Route('form_modele') }}" class="btn btn-danger">Ajouter</a>
                </div>
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                          <div class="card m-3" style="width: 36%; height:15px">
                            <img src="{{asset('img/images (3).jpeg')}}" alt="...">
                            <div class="card-body">

                              <p class="card-text">Ensemble femme chic 20000FCFA</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card m-3" style="width: 40%">
                            <img src="{{asset('img/image de mode couture 3.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">

                              <p class="card-text">ensemble pagne complet femme 10000FCFA</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card m-5" style="width: 40%">
                            <img src="{{asset('img/image model couture veste enfant.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">

                              <p class="card-text">ensemble veste enfant 15000FCFA</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                            <div class="card m-3" style="width: 40%">
                              <img src="{{asset('img/tailleur_pantalon_femme_ceremonie 5.jpg')}}" class="card-img-top" alt="...">
                              <div class="card-body">

                                <p class="card-text">complet veste femme 40000FCFA</p>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card m-3" style="width: 30%">
                              <img src="{{asset('img/images (9).jpeg')}}" class="card-img-top" alt="...">
                              <div class="card-body">

                                <p class="card-text">ensemble bazin 30000FCFA</p>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card m-3" style="width: 30%">
                              <img src="{{asset('img/ensemble-costume-3-pieces-pour-homme-veste-blazer.webp')}}" class="card-img-top" alt="...">
                              <div class="card-body">

                                <p class="card-text">ensemble costume trois pieces 150000FCFA</p>
                              </div>
                            </div>
                          </div>

                          <div class="col">
                            <div class="card m-3" style="width: 30%">
                              <img src="{{asset('img/image couture 5.jpeg 4.jpg')}}" class="card-img-top" alt="...">
                              <div class="card-body">

                                <p class="card-text">ensemble dentelle femme 30000FCFA</p>
                              </div>
                            </div>
                          </div>

                          <div class="col">
                            <div class="card m-3" style="width: 40%">
                              <img src="{{asset('img/costume homme.jpg')}}" class="card-img-top" alt="...">
                              <div class="card-body">

                                <p class="card-text"> ensemble veste homme 200000FCFA</p>
                              </div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
    </section>
    @include('layouts.script')
</body>

</html>
