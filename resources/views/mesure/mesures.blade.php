<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.js')
    <title>COUTURE PRISCA MODE</title>
</head>
<body>

    <section class="container-fluid">
        <div class="row">
          @include('layouts.navbar')

          <div class="col-lg-10">
          <div class="container mt-3">
              <a href="{{ route('form_mesure') }}" class="btn btn-danger">Nouveau+</a>
          </div>

          <div table-responsive>


          <table class="table mt-3">
            <thead>
              <tr>
                <th>N° enregistrement</th>
                <th>Nom_client</th>
                <th>Nom_modele</th>
                <th>Details</th>
              </tr>

            </thead>
            @foreach ($mesures as $mes )
            <tr class="">
                <td>{{ $mes->id}}</td>
                <td>{{ $mes->Modele->nom_modele}}</td>
                <td>{{ $mes->Client->nom_prenom}}</td>

                <td>
                <a href="">
                    <i class="fa fa-eye" title="détaille"></i>
                </a>
            </td>
           </tr>
            @endforeach
          </table>
        </div>

     </div>
    </div>
    <div class="mt-6">


    </div>

    </section>


    @include('layouts.script')
</body>
</html>
