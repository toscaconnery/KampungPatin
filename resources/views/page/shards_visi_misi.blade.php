<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shards - Agency Landing Page built with Shards - A Modern UI Toolkit</title>
        <meta name="description" content="A demo landing page for agencies or product oriented businesses built using Shards, a free, modern and lightweight UI toolkit based on Bootstrap 4.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS Dependencies -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="{{url('')}}/shards/css/shards.min.css?version=2.1.0">
        <link rel="stylesheet" href="{{url('')}}/shards/css/shards-extras.css">
    </head>
    <body class="shards-landing-page--1" >

      @include('layout.shards_navbar')

      <div class="container mb-7">
        <div class=" col-lg-12 col-md-12 ml-auto mr-auto">
          <h3 class="section-title text-center my-5"> Visi</h3>
          <p class="lead double-justify">Desa Koto Mesjid memiliki julukan sebagai Kampung Patin, yang desebabkan karena potensi yang luar biasa yang dimiliki Koto Mesjid dalam bidang perikanan. Di Koto Mesjid, terdapat <b>776 kolam ikan</b>, di mana luas semua kolam mencapai <b>42 hektare</b>, dengan jumlah produksi per hari <b>3—4 ton</b> ikan patin.</p>
        </div>
      </div>

      <!-- Our Services Section -->
      <div id="our-services" class="our-services section py-4">
        <h3 class="section-title text-center my-5"> Misi</h3>
        <!-- Features -->
        <div class="features py-4 mb-4">
          <div class="container">
            <div class="row">
              <div class="feature py-4 col-md-6 d-flex">
                <div class="icon text-primary mr-3"><i class="fa fa-paint-brush"></i></div>
                <div class="px-4">
                    <h5>Misi 1</h5>
                    <p>Quisque mollis mi ac aliquet accumsan. Sed sed dapibus libero. Nullam luctus purus duis sensibus signiferumque.</p>
                </div>
              </div>
              <div class="feature py-4 col-md-6 d-flex">
                <div class="icon text-primary mr-3"><i class="fa fa-code"></i></div>
                <div class="px-4">
                    <h5>Misi 2</h5>
                    <p>Quisque mollis mi ac aliquet accumsan. Sed sed dapibus libero. Nullam luctus purus duis sensibus signiferumque.</p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="feature py-4 col-md-6 d-flex">
                <div class="icon text-primary mr-3"><i class="fa fa-font"></i></div>
                <div class="px-4">
                    <h5>Misi 3</h5>
                    <p>Quisque mollis mi ac aliquet accumsan. Sed sed dapibus libero. Nullam luctus purus duis sensibus signiferumque.</p>
                </div>
              </div>
              <div class="feature py-4 col-md-6 d-flex">
                <div class="icon text-primary mr-3"><i class="fa fa-support"></i></div>
                <div class="px-4">
                    <h5>Misi 4</h5>
                    <p>Quisque mollis mi ac aliquet accumsan. Sed sed dapibus libero. Nullam luctus purus duis sensibus signiferumque.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- / Features -->
      </div>
      <!-- / Our Services Section -->  

      <!-- Welcome Section -->
      <div class="welcome d-flex justify-content-center flex-column">

        <!-- Inner Wrapper -->
        <div class="inner-wrapper mt-auto mb-auto container">
          <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <h1 class="welcome-heading display-4 text-white">Graha Pratama Fish</h1>
                <p class="text-white">We can help you take your idea from concept to shipping using the latest technologies and best practices available.</p>
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
