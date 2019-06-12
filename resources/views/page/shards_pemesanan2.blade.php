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
      

      <!-- Contact Section -->
      <div class="welcome2 d-flex flex-column ">
        <!-- <h3 class="section-title text-center m-5"></h3> -->
        @include('layout.shards_navbar')
        <div class="container py-4">
          <div class="row justify-content-md-center px-4 pt-5">
            <div class="contact-form col-sm-12 col-md-10 col-lg-7 p-4 mb-4 card">
              <div class="text-center">
                <h1>📞</h1>
                <!-- <i class="fab fa-instagram"></i> -->
                <h2 class="">Hubungi Kami</h2>
                <p class="text-muted col-lg-8 col-md-10 ml-auto mr-auto">Tunggu apa lagi? Untuk pemesanan silahkan hubungi Kami melalui
                  <b>
                    Whatsapp
                  </b> ataupun 
                  <b>
                    Telepon
                  </b> di nomor berikut : 
                </p>
              </div>
              <div class="text-center">
                <!-- <i class="fab fa-instagram"></i> -->
                <h2 class="">+628-1275-30830</h2>
                <p class="text-muted col-lg-8 col-md-10 ml-auto mr-auto">atau langsung klik
                  <b data-toggle="tooltip" data-placement="top" data-original-title="Kirimkan pesan melalui Whatsapp">
                    <a href="https://api.whatsapp.com/send?phone=628127530830&text=&source=&data=">
                      <u> disini.</u>
                    </a>
                  </b> 
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('layout.shards_main_footer')
      <!-- / Contact Section -->


      <!-- JavaScript Dependencies -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="{{url('')}}/shards/js/demo.min.js"></script>
    </body>
</html>
