<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kampung Patin</title>
        <link rel="icon" type="image/png" href="{{url('')}}/images/tab-logo.png">
        <meta name="description" content="A demo landing page for agencies or product oriented businesses built using Shards, a free, modern and lightweight UI toolkit based on Bootstrap 4.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS Dependencies -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="{{url('')}}/shards/css/shards.css">
        <link rel="stylesheet" href="{{url('')}}/shards/css/shards-extras.css">
    </head>
    <body class="shards-landing-page--1" >
      <!-- Welcome Section -->
      <div class="welcome d-flex justify-content-center flex-column">
        <div class="container">
          @include('layout.shards_navbar_light_main')
        </div> <!-- .container -->

        <!-- Inner Wrapper -->
        <div class="inner-wrapper mt-auto mb-auto container">
          <div class="row">
            <div class="col-md-7">
                <img src="{{url('')}}/images/logo_tulisan.PNG" class="mr-2" style="height: 8em;" alt="Shards - Agency Landing Page">
                <p class="text-white">Graha Pratama Fish adalah .... Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non lacinia sapien, quis scelerisque magna. Vestibulum scelerisque id nibh nec fermentum. Vivamus at est mi. Quisque nec euismod erat. Curabitur metus ante, convallis ut neque id, convallis malesuada nunc. Quisque id tempor leo. Fusce ultrices nisl felis, eget porttitor velit tristique ut. Maecenas id suscipit nulla. Nunc faucibus, mi eget pharetra eleifend, nulla ex aliquet metus, eget ultricies eros eros vel libero. Nulla facilisi. Vestibulum eget elementum mi. Sed eget tincidunt nibh. Nulla non odio vel libero tristique varius.</p>
                <a href="#daftar_produk" class="btn btn-lg btn-outline-white btn-pill align-self-center">Lihat Produk</a>
            </div>
          </div>
        </div>
        <!-- / Inner Wrapper -->
      </div>
      <!-- / Welcome Section -->

      <!-- Our Blog Section -->
      <div id="daftar_produk" class="blog section section-invert py-4">
        <h3 class="section-title text-center m-5">Produk</h3>
        <div class="container">
        <h4 class="mb-0">Integrated Fish Farm : </h4>
          <div class="py-4">
            <div class="row">
              <div class="card-deck">
              
              <div class="col-md-12 col-lg-4" id="to_produk_1">
                <div class="card mb-4">
                  <img class="card-img-top" src="{{url('')}}/images/crop/salmon_eggs_crop.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">UPR. Graha Pratama Fish</h4>
                    <p class="card-text">Pembenihan ikan patin. He seems sinking under the evidence could not only grieve and a visit. The father is to bless and placed in his length hid...</p>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-4" id="to_produk_2">
                <div class="card mb-4">
                  <img class="card-img-top" src="{{url('')}}/images/crop/fish_pellets_crop.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Graha Feed Fish</h4>
                    <p class="card-text">Pakan ikan patin. He seems sinking under the evidence could not only grieve and a visit. The father is to bless and placed in his length hid...</p>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-4" id="to_produk_3">
                <div class="card mb-4">
                  <img class="card-img-top" src="{{url('')}}/images/crop/keramba_crop.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Graha Fish Farm</h4>
                    <p class="card-text">Budidaya Ikan. He seems sinking under the evidence could not only grieve and a visit. The father is to bless and placed in his length hid...</p>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-4" id="to_produk_4">
                <div class="card mb-4">
                  <img class="card-img-top" src="{{url('')}}/images/crop/ikan_olahan_crop.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Negeri Patin Food</h4>
                    <p class="card-text">Olahan ikan patin. He seems sinking under the evidence could not only grieve and a visit. The father is to bless and placed in his length hid...</p>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-4" id="to_produk_5">
                <div class="card mb-4">
                  <img class="card-img-top" src="{{url('')}}/images/crop/training_center_crop.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">P2MKP - Graha Mina Mandiri</h4>
                    <p class="card-text">Pusat pelatihan perikanan. He seems sinking under the evidence could not only grieve and a visit. The father is to bless and placed in his length hid...</p>
                  </div>
                </div>
              </div>
              
            </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / Our Blog Section -->

      <!-- Welcome Section -->
      <div class="welcome2 d-flex justify-content-center flex-column">
        <!-- Inner Wrapper -->
        <div class="inner-wrapper mt-auto mb-auto container">
          <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <h1 class="welcome-heading display-4 text-white">Kampung Patin</h1>
                <p class="text-white">Kampung Patin adalah sebutan untuk sebuah desa yang menjadi pusat budidaya ikan patin di Kabupaten Kampar, Provinsi Riau. Kampung ini juga menjadi pusat pelatihan pemberdayaan ikan patin di nnnnnn. Dengan kemampuan menyediakan stok ikan patin sebanyak nn ton setiap tahunnya, kampung ini juga menyediakan berbagai produk olahan ikan patin yang lezat.</p>
    
            </div>
          </div>
        </div>
        <!-- / Inner Wrapper -->
      </div>
      <!-- / Welcome Section -->

      <!-- Partner Section -->
      <div class="testimonials section py-4">
          <h3 class="section-title text-center m-5">Partner</h3>
          <div class="container py-5">
            <div class="row">
                <div class="col-md-4 testimonial text-center">
                    <div class="avatar rounded-circle with-shadows mb-3 ml-auto mr-auto">
                        <img src="{{url('')}}/images/garuda.jpeg" class="w-100" alt="Testimonial Avatar" />
                    </div>
                    <h5 class="mb-1">Garuda Indonesia</h5>
                    <span class="text-muted d-block mb-2">2018 - Sekarang</span>
                    <p>Penyedia Fish Fillet untuk penerbangan dari Kota Pekanbaru</p>
                </div>

                <div class="col-md-4 testimonial text-center">
                    <div class="avatar rounded-circle with-shadows mb-3 ml-auto mr-auto">
                        <img src="{{url('')}}/images/hotel_pangeran.jpg" class="w-100" alt="Testimonial Avatar" />
                    </div>
                    <h5 class="mb-1">Hotel Pangeran</h5>
                    <span class="text-muted d-block mb-2">2018</span>
                    <p>Penyedia Fish Fillet untuk penerbangan dari Kota Pekanbaru</p>
                </div>

                <div class="col-md-4 testimonial text-center">
                    <div class="avatar rounded-circle with-shadows mb-3 ml-auto mr-auto">
                        <img src="{{url('')}}/images/garuda.jpeg" class="w-100" alt="Testimonial Avatar" />
                    </div>
                    <h5 class="mb-1">Garuda Indonesia</h5>
                    <span class="text-muted d-block mb-2">2018</span>
                    <p>Penyedia Fish Fillet untuk penerbangan dari Kota Pekanbaru</p>
                </div>

                <div class="col-md-4 testimonial text-center">
                    <div class="avatar rounded-circle with-shadows mb-3 ml-auto mr-auto">
                        <img src="{{url('')}}/images/garuda.jpeg" class="w-100" alt="Testimonial Avatar" />
                    </div>
                    <h5 class="mb-1">Garuda Indonesia</h5>
                    <span class="text-muted d-block mb-2">2018</span>
                    <p>Penyedia Fish Fillet untuk penerbangan dari Kota Pekanbaru</p>
                </div>

                <div class="col-md-4 testimonial text-center">
                    <div class="avatar rounded-circle with-shadows mb-3 ml-auto mr-auto">
                        <img src="{{url('')}}/images/garuda.jpeg" class="w-100" alt="Testimonial Avatar" />
                    </div>
                    <h5 class="mb-1">Garuda Indonesia</h5>
                    <span class="text-muted d-block mb-2">2018</span>
                    <p>Penyedia Fish Fillet untuk penerbangan dari Kota Pekanbaru</p>
                </div>

                <div class="col-md-4 testimonial text-center">
                    <div class="avatar rounded-circle with-shadows mb-3 ml-auto mr-auto">
                        <img src="{{url('')}}/images/garuda.jpeg" class="w-100" alt="Testimonial Avatar" />
                    </div>
                    <h5 class="mb-1">Garuda Indonesia</h5>
                    <span class="text-muted d-block mb-2">2018</span>
                    <p>Penyedia Fish Fillet untuk penerbangan dari Kota Pekanbaru</p>
                </div>

            </div>
          </div>
      </div>
      <!-- / Partner Section -->

      <!-- Welcome Section -->
      <div class="welcome3 d-flex justify-content-center flex-column">
        <!-- Inner Wrapper -->
        <div class="inner-wrapper mt-auto mb-auto container">
          <div class="row">
            <div class="col-md-7">
                <h1 class="welcome-heading display-4 text-white">Kampung Patin</h1>
            </div>
          </div>
        </div>
        <!-- / Inner Wrapper -->
      </div>
      <!-- / Welcome Section -->

      <!-- Testimonials Section -->
      <div class="testimonials section py-4">
          <h3 class="section-title text-center m-5">Testimoni</h3>
          <div class="container py-5">
            <div class="row">
                <div class="col-md-4 testimonial text-center">
                    <div class="avatar rounded-circle with-shadows mb-3 ml-auto mr-auto">
                        <img src="{{url('')}}/shards/images/common/avatar-1.jpeg" class="w-100" alt="Testimonial Avatar" />
                    </div>
                    <h5 class="mb-1">Osbourne Tranter</h5>
                    <span class="text-muted d-block mb-2">CEO at Megacorp</span>
                    <p>Vivamus quis ex mattis, gravida erat a, iaculis urna. Proin ac eleifend tortor. Nunc in augue eget enim venenatis viverra.</p>
                </div>

                <div class="col-md-4 testimonial text-center">
                    <div class="avatar rounded-circle with-shadows mb-3 ml-auto mr-auto">
                        <img src="{{url('')}}/shards/images/common/avatar-2.jpeg" class="w-100" alt="Testimonial Avatar" />
                    </div>
                    <h5 class="mb-1">Darrin Ollie</h5>
                    <span class="text-muted d-block mb-2">CEO at Megacorp</span>
                    <p>Nullam eu ligula facilisis, commodo velit non, vulputate dolor. Aenean congue euismod vestibulum.</p>
                </div>

                <div class="col-md-4 testimonial text-center">
                    <div class="avatar rounded-circle with-shadows mb-3 ml-auto mr-auto">
                        <img src="{{url('')}}/shards/images/common/avatar-3.jpeg" class="w-100" alt="Testimonial Avatar" />
                    </div>
                    <h5 class="mb-1">Quinton Bruce</h5>
                    <span class="text-muted d-block mb-2">CEO at Megacorp</span>
                    <p> Aenean imperdiet ultrices tortor id convallis. Donec id metus magna. Morbi pretium odio faucibus blandit gravida.</p>
                </div>
            </div>
          </div>
      </div>
      <!-- / Testimonials Section -->

      <!-- Welcome Section -->
      <div class="welcome3 d-flex justify-content-center flex-column">
        <!-- Inner Wrapper -->
        <div class="inner-wrapper mt-auto mb-auto container">
          <div class="row">
            <div class="col-md-7">
                <h1 class="welcome-heading display-4 text-white">Kampung Patin</h1>
            </div>
          </div>
        </div>
        <!-- / Inner Wrapper -->
      </div>
      <!-- / Welcome Section -->

      @include('layout.shards_main_footer')

      <!-- JavaScript Dependencies -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      <script>
        $("#to_produk_1").click(function(){
          window.location.href = "{{url('')}}/produk-1";
        });
        $("#to_produk_2").click(function(){
          window.location.href = "{{url('')}}/produk-2";
        });
        $("#to_produk_3").click(function(){
          window.location.href = "{{url('')}}/produk-3";
        });
        
        $("#to_produk_4").click(function(){
          window.location.href = "{{url('')}}/produk-4";
        });
        
        $("#to_produk_5").click(function(){
          window.location.href = "{{url('')}}/produk-5";
        });
        
      </script>
    </body>
</html>
