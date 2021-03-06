<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kampung Patin - Penghargaan</title>
        <link rel="icon" type="image/png" href="{{url('')}}/images/tab-logo.png">
        <meta name="description" content="A demo landing page for agencies or product oriented businesses built using Shards, a free, modern and lightweight UI toolkit based on Bootstrap 4.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS Dependencies -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="{{url('')}}/shards/css/shards.css">
        <link rel="stylesheet" href="{{url('')}}/shards/css/shards-extras.css">
    </head>
    <body class="shards-app-promo-page--1" >

      @include('layout.shards_navbar')
      
      <!-- Features Section -->
      <div id="app-features" class="app-features section">
        <div class="container-fluid">
          <div class="row">
            <div class="app-screenshot col-lg-4 col-md-12 col-sm-12 px-0 py-5">
              <!-- <img class="mt-auto mb-auto" src="{{url('')}}/images/suhaimi.jpeg" alt="App Screenshot - Shards App Promo Demo Page"> -->
              
              <img class="mt-auto mb-auto" src="{{url('')}}/images/suhaimi.jpeg" alt="App Screenshot - Shards App Promo Demo Page">
              <!-- <img class="mt-auto mb-auto" src="{{url('')}}/shards/images/app-promo/iphone-app-screenshot.png" alt="App Screenshot - Shards App Promo Demo Page"> -->
            </div>

            <!-- App Features Wrapper -->
            <div class="app-features-wrapper col-lg-4 col-md-6 col-sm-12 py-5 mx-auto">
              <div class="container">
                <h3 class="section-title underline--left my-5">Penghargaan</h3>
                <div class="feature py-4 d-flex">
                  <div class="icon text-white bg-success mr-5"><i class="fa fa-trophy"></i></div>
                  <div>
                      <h5 class="mb-0">Adi Bakti Mina Bahari Award 2010 dari Menteri KKP RI</h5>
                      <p>Kategori Pembudidaya Ikan Terbaik Se-Indonesia.</p>
                  </div>
                </div>

                <div class="feature py-4 d-flex">
                  <div class="icon text-white bg-success mr-5"><i class="fa fa-trophy"></i></div>
                  <div>
                      <h5 class="mb-0">Indonesia CSR Award 2011 dari Menteri Sosial RI</h5>
                      <p>Terbaik-1 Kategori TIngkat Pelaku Mitra Usaha.</p>
                  </div>
                </div>

                <div class="feature py-4 d-flex">
                  <div class="icon text-white bg-success mr-5"><i class="fa fa-trophy"></i></div>
                  <div>
                      <h5 class="mb-0">Telkom CSR Award 2011 dari PT Telkom Indonesia</h5>
                      <p>Terbaik-1 Kategori External Khusus.</p>
                  </div>
                </div>

                <div class="feature py-4 d-flex">
                  <div class="icon text-white bg-success mr-5"><i class="fa fa-trophy"></i></div>
                  <div>
                      <h5 class="mb-0">Adi Kriya Award 2013 dari Gubernur Riau</h5>
                      <p>Terbaik-1 Kategori Pangan.</p>
                  </div>
                </div>

                <div class="feature py-4 d-flex">
                  <div class="icon text-white bg-success mr-5"><i class="fa fa-trophy"></i></div>
                  <div>
                      <h5 class="mb-0">Indonesia Small & Medium Business Entrepreneur Award (ISMBEA) 2014</h5>
                      <p>Terbaik-1 Penggerak Ekonomi Kawasan.</p>
                  </div>
                </div>

                <div class="feature py-4 d-flex">
                  <div class="icon text-white bg-success mr-5"><i class="fa fa-trophy"></i></div>
                  <div>
                      <h5 class="mb-0">Adi Bakti Mina Bahari Award 2015 dari Menteri KKP RI</h5>
                      <p>Kategori P2MKP Terbaik-1 Se-Indonesia.</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / Features Section -->


      <!-- Welcome Section -->
      <div class="welcome d-flex justify-content-center flex-column">
        <!-- Inner Wrapper -->
        <div class="inner-wrapper mt-auto mb-auto container">
          <div class="row">
            <div class="col-md-7">
                <h1 class="welcome-heading display-4 text-white">Kampung Patin</h1>
                <p class="text-white">Kampung Patin adalah sebutan untuk sebuah desa yang menjadi pusat budidaya ikan patin di Kabupaten Kampar, Provinsi Riau. Kampung ini juga menjadi pusat pelatihan pemberdayaan ikan patin di nnnnnn. Dengan kemampuan menyediakan stok ikan patin sebanyak nn ton setiap tahunnya, kampung ini juga menyediakan berbagai produk olahan ikan patin yang lezat.</p>
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
    </body>
</html>
