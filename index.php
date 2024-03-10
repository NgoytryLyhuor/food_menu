<?php
  include('./header.php')
?>
<body>

  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" data-navbar-on-scroll="data-navbar-on-scroll">
      <div class="container"><a class="navbar-brand d-inline-flex" href="index.html"><img class="d-inline-block" src="assets/img/gallery/logo.svg" alt="logo" /><span class="text-1000 fs-3 fw-bold ms-2 text-gradient">foodwaGon</span></a>
    </nav>
    <section class="py-5 overflow-hidden bg-primary" id="home">
      <div class="container">
        <div class="row flex-center">
          <div class="col-md-5 col-lg-6 order-0 order-md-1 mt-8 mt-md-0"><a class="img-landing-banner" href="#!"><img class="img-fluid" src="assets/img/gallery/hero-header.png" alt="hero-header" /></a></div>
          <div class="col-md-7 col-lg-6 py-8 text-md-start text-center">
            <h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-8 text-light">Are you starving?</h1>
            <h1 class="text-800 mb-5 fs-4">Within a few clicks, find meals that<br class="d-none d-xxl-block" />are
              accessible near you</h1>
            <div class="card w-xxl-75">
              <div class="card-body">
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active mb-3" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-motorcycle me-2"></i>Delivery</button>
                    <button class="nav-link mb-3" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fas fa-shopping-bag me-2"></i>Pickup</button>
                  </div>
                </nav>
                <div class="tab-content mt-3" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <form class="row gx-2 gy-2 align-items-center">
                      <div class="col">
                        <div class="input-group-icon"><i class="fas fa-map-marker-alt text-danger input-box-icon"></i>
                          <label class="visually-hidden" for="inputDelivery">Address</label>
                          <input class="form-control input-box form-foodwagon-control" id="inputDelivery" type="text" placeholder="Enter Your Address" />
                        </div>
                      </div>
                      <div class="d-grid gap-3 col-sm-auto">
                        <button class="btn btn-danger" type="submit">Find Food</button>
                      </div>
                    </form>
                  </div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <form class="row gx-4 gy-2 align-items-center">
                      <div class="col">
                        <div class="input-group-icon"><i class="fas fa-map-marker-alt text-danger input-box-icon"></i>
                          <label class="visually-hidden" for="inputPickup">Address</label>
                          <input class="form-control input-box form-foodwagon-control" id="inputPickup" type="text" placeholder="Enter Your Address" />
                        </div>
                      </div>
                      <div class="d-grid gap-3 col-sm-auto">
                        <button class="btn btn-danger" type="submit">Find Food</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section id="testimonial">
      <div class="container">
        <div class="row h-100">
          <div class="col-lg-7 mx-auto text-center mb-6">
            <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Featured Restaurants</h5>
          </div>
        </div>
        <div class="row gx-2">
          <div class="col-4 col-md-4 col-lg-3 h-100 mb-5">
            <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/food-world.png" alt="..." />
              <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-2 me-1 p-2"></div>
              <div class="card-body ps-0">
                <div class="d-flex align-items-center mb-3">
                  <div class="flex-1 ms-3">
                    <h5 class="mb-0 fw-bold text-1000">Food world</h5><span class="text-primary fs--1 me-1"><i class="fas fa-star"></i></span><span class="mb-0 text-primary">46</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-lg-3 h-100 mb-5">
            <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/pizza-hub.png" alt="..." />
              <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-2 me-1 p-2"></div>
              <div class="card-body ps-0">
                <div class="d-flex align-items-center mb-3">
                  <div class="flex-1 ms-3">
                    <h5 class="mb-0 fw-bold text-1000">Pizza hub</h5><span class="text-primary fs--1 me-1"><i class="fas fa-star"></i></span><span class="mb-0 text-primary">40</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-lg-3 h-100 mb-5">
            <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/donuts-hut.png" alt="..." />

              <div class="card-body ps-0">
                <div class="d-flex align-items-center mb-3">
                  <div class="flex-1 ms-3">
                    <h5 class="mb-0 fw-bold text-1000">Donuts hut</h5><span class="text-primary fs--1 me-1"><i class="fas fa-star"></i></span><span class="mb-0 text-primary">20</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-lg-3 h-100 mb-5">
            <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/donuthut.png" alt="..." />

              <div class="card-body ps-0">
                <div class="d-flex align-items-center mb-3">
                  <div class="flex-1 ms-3">
                    <h5 class="mb-0 fw-bold text-1000">Donuts hut</h5><span class="text-primary fs--1 me-1"><i class="fas fa-star"></i></span><span class="mb-0 text-primary">50</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-lg-3 h-100 mb-5">
            <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/ruby-tuesday.png" alt="..." />

              <div class="card-body ps-0">
                <div class="d-flex align-items-center mb-3">
                  <div class="flex-1 ms-3">
                    <h5 class="mb-0 fw-bold text-1000">Ruby tuesday</h5><span class="text-primary fs--1 me-1"><i class="fas fa-star"></i></span><span class="mb-0 text-primary">50</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-4 col-lg-3 h-100 mb-5">
            <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/kuakata.png" alt="..." />

              <div class="card-body ps-0">
                <div class="d-flex align-items-center mb-3">
                  <div class="flex-1 ms-3">
                    <h5 class="mb-0 fw-bold text-1000">Kuakata Fried Chicken</h5><span class="text-primary fs--1 me-1"><i class="fas fa-star"></i></span><span class="mb-0 text-primary">50</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-4 col-md-4 col-lg-3 h-100 mb-5">
            <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/red-square.png" alt="..." />

              <div class="card-body ps-0">
                <div class="d-flex align-items-center mb-3">
                  <div class="flex-1 ms-3">
                    <h5 class="mb-0 fw-bold text-1000">Kuakata Fried Chicken</h5><span class="text-primary fs--1 me-1"><i class="fas fa-star"></i></span><span class="mb-0 text-primary">50</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-4 col-md-4 col-lg-3 h-100 mb-5">
            <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/taco-bell.png" alt="..." />

              <div class="card-body ps-0">
                <div class="d-flex align-items-center mb-3">
                  <div class="flex-1 ms-3">
                    <h5 class="mb-0 fw-bold text-1000">Taco bell</h5><span class="text-primary fs--1 me-1"><i class="fas fa-star"></i></span><span class="mb-0 text-primary">50</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="py-0">
      <div class="bg-holder" style="background-image:url(assets/img/gallery/cta-two-bg.png);background-position:center;background-size:cover;"></div>
      <!--/.bg-holder-->

      <div class="container">
        <div class="row flex-center">
          <div class="col-xxl-9 py-7 text-center">
            <h1 class="fw-bold mb-4 text-white fs-6">Are you ready to order <br />with the best deals? </h1><a class="btn btn-danger" href="#"> PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a>
          </div>
        </div>
      </div>
    </section>

<?php
  include('./footer.php')
?>