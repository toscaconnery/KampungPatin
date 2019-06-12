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

      @include('layout.shards_navbar')


      <!-- Our Blog Section -->
      <div id="daftar_produk" class="blog section section-invert py-4">
        <h3 class="section-title text-center m-5">Graha Feed Fish</h3>

        <div class="container">
          <div class="py-4">
            <div class="row">
              <div class="card-deck">
              
              <div class="col-md-12 col-lg-8">
                <div class="card mb-4">
                  <img class="card-img" src="{{url('')}}/images/pakan_ikan.jpg" alt="Card image cap">
                </div>
              </div>

              <div class="col-md-12 col-lg-4">
                <div class="card mb-4">
                  <div class="card-body">
                    <h4 class="card-title">Produksi Pakan Ikan Patin</h4>
                    <p class="card-text">Graha Feed Fish memberikan solusi terhadap tingginya harga pakan komersial yang beredar di pasaran. Pakan yang diproduksi ini terjangkau oleh petani, yang menyebabkan efisien dalam usaha budidaya patin.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-8">
                    <div class="card mb-4">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th>Diameter</th>
                                    <th>Bentuk</th>
                                    <th>Jenis</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>4 MM</td>
                                    <td>Silinder</td>
                                    <td><i class="fa fa-life-ring"></i> Mengapung</td>
                                    <td>Rp100.000,- / KG</td>
                                </tr>
                                <tr>
                                    <td>6 MM</td>
                                    <td>Silinder</td>
                                    <td><i class="fa fa-life-ring"></i> Mengapung</td>
                                    <td>Rp100.000,- / KG</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
              </div>

              <div class="col-md-12 col-lg-4">
                <div class="card mb-4">
                  <div class="card-body">
                    <h4 class="card-title">Pengemasan</h4>
                    <p class="card-text">Pengemasan dilakukan dengan ..... He seems sinking under the evidence could not only grieve and a visit. The father is to bless and placed in his length hid...</p>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-4">
                <div class="card mb-4">
                  <img class="card-img-top" src="{{url('')}}/images/pakan_ikan_tangan.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Pelet Diameter 4 MM</h4>
                    <p class="card-text">Cocok untuk ikan berumur ..... dengan ukuran ....  He seems sinking under the evidence could not only grieve and a visit. The father is to bless and placed in his length hid...</p>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-4">
                <div class="card mb-4">
                  <img class="card-img-top" src="{{url('')}}/images/pakan_ikan_tangan.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Pelet Ukuran 6 MM</h4>
                    <p class="card-text">Cocok untuk ikan berumur ....... He seems sinking under the evidence could not only grieve and a visit. The father is to bless and placed in his length hid...</p>
                  </div>
                </div>
              </div>
              
            </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / Our Blog Section -->

      

      @include('page.shards_paralax_1')

      @include('page.shards_paralax_2')

      @include('layout.shards_main_footer')

      <!-- JavaScript Dependencies -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
