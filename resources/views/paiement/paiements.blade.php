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
              <a href="{{ route('paiements') }}" class="btn btn-danger">Nouveau+</a>
          </div>


@include('layouts.script')
</body>
</html>
