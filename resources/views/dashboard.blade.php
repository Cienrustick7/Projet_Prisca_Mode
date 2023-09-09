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

<div class="col-lg-10 mt-3">
    <div class="col-xxl-4 col-md-6 text-center">
        <h1 class="fw-bold">STATISTIQUES</h1>
    </div>

    <div>
        <div class="col-lg-12 mt-3 m-3">
            <div class="row">


              <div class="col-xxl-3 col-md-3">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">CLIENTS</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6>5642</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xxl-3 col-md-3">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">MODELES</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-scissors"></i>
                      </div>
                      <div class="ps-3">
                        <h6>1500</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- End Sales Card -->

              <!-- Sales Card -->
              <div class="col-xxl-3 col-md-3">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">PERSONNELS</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-person"></i>
                      </div>
                      <div class="ps-3">
                        <h6>12</h6>
                      </div>
                    </div>
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
