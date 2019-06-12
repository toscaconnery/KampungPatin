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
        <h3 class="section-title text-center m-5">Negeri Patin Food</h3>

        <div class="container">
          <div class="py-4">
            <div class="row">
              <div class="card-deck">
              
              <div class="col-md-12 col-lg-8">
                <div class="card mb-4">
                  <img class="card-img" src="{{url('')}}/images/npf/kerupuk_kulit_patin_main.jpg" alt="Card image cap">
                </div>
              </div>

              <div class="col-md-12 col-lg-4">
                <div class="card mb-4">
                  <div class="card-body">
                    <h4 class="card-title">Berbagai Produk Olahan Ikan Patin</h4>
                    <p class="card-text">Saat ini patin telah menjadi salah satu primadona produksi perikanan. Berbagai produk olahan berbahan baku patin menjadi pilihan yang sangat menarik sekali. Ini disebabkan oleh rasanya yang enak, bernilai gizi tinggi, serta harga yang terjangkau. Sehingga dapat bersaing dengan produk makanan olahan lainnya.</p> <p class="card-text"> Berbagai varian produk olahan patin kini telah muncul dan diterima oleh pasar. Negeri Patin Food telah memproduksi berbagai produk yang sangat menarik sebagai alternatif terbaik untuk dikonsumsi.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-8">
                    <div class="card mb-4">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Kemasan</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nugget Ikan Stick Original</td>
                                    <td>25 gr</td>
                                    <td>Rp100.000,- / KG</td>
                                </tr>
                                <tr>
                                    <td>Nugget Ikan Coin Rasa Sayur</td>
                                    <td>25 gr</td>
                                    <td>Rp100.000,- / KG</td>
                                </tr>
                                <tr>
                                    <td>Kaki Naga</td>
                                    <td>25 gr</td>
                                    <td>Rp100.000,- / KG</td>
                                </tr>
                                <tr>
                                    <td>Bakso Ikan Original Rebus</td>
                                    <td>25 gr</td>
                                    <td>Rp100.000,- / KG</td>
                                </tr>
                                <tr>
                                    <td>Bakso Goreng</td>
                                    <td>25 gr</td>
                                    <td>Rp100.000,- / KG</td>
                                </tr>
                                <tr>
                                    <td>Batagor Ikan (Bakso Tahu Goreng)</td>
                                    <td>25 gr</td>
                                    <td>Rp100.000,- / KG</td>
                                </tr>
                                <tr>
                                    <td>Fillet Ikan</td>
                                    <td>25 gr</td>
                                    <td>Rp100.000,- / KG</td>
                                </tr>
                                <tr>
                                    <td>Patin Potong Segar Beku</td>
                                    <td>25 gr</td>
                                    <td>Rp100.000,- / KG</td>
                                </tr>
                                <tr>
                                    <td>Ikan Asin (Pudung Patin)</td>
                                    <td>25 gr</td>
                                    <td>Rp100.000,- / KG</td>
                                </tr>
                                <tr>
                                    <td>Patin Asap (Salai Patin)</td>
                                    <td>25 gr</td>
                                    <td>Rp100.000,- / KG</td>
                                </tr>
                                <tr>
                                    <td>Abon Ikan Patin</td>
                                    <td>25 gr</td>
                                    <td>Rp100.000,- / KG</td>
                                </tr>
                                <tr>
                                    <td>Kerupuk Kulit Ikan</td>
                                    <td>25 gr</td>
                                    <td>Rp100.000,- / KG</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
              </div>

              <div class="col-md-12 col-lg-4">
                <div class="card mb-4">
                  <div class="card-body">
                    <h4 class="card-title">Tanpa Bahan Pengawet</h4>
                    <p class="card-text">Diolah secara sanitasi dan higienis, alami tanpa bahan pengawet dan perasa yang berbahaya.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-4">
                <div class="card mb-4">
                  <img class="card-img-top" src="{{url('')}}/images/npf/nugget_stik.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Nugget Ikan Stick Original</h4>
                    <p class="card-text">Nugget ikan stick menjadi pilihan makanan cemilan yang enak dan bergizi, terutama untuk anak kesayangan.</p>
                    <a href="#" class="btn btn-primary">Stok : 40</a>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-4">
                <div class="card mb-4">
                  <img class="card-img-top" src="{{url('')}}/images/npf/nugget_koin.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Nugget Ikan Coin Rasa Sayur</h4>
                    <p class="card-text">Disamping nilai gizinya yang tinggi, campuran sayur menjadi pelengkap makanan kita dan si buah hati.</p>
                    <a href="#" class="btn btn-primary">Stok : 40</a>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-4">
                <div class="card mb-4">
                  <img class="card-img-top" src="{{url('')}}/images/crop/training_center_crop.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Kaki Naga</h4>
                    <p class="card-text">Kaki naga telah hadir, lezat dan mudah memegangnya. Sangat cocok sekali untuk sikecil, putra putri tercinta Anda.</p>
                    <a href="#" class="btn btn-primary">Stok : 40</a>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-4">
                <div class="card mb-4">
                  <img class="card-img-top" src="{{url('')}}/images/npf/bakso_ikan.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Bakso Ikan Original Rebus</h4>
                    <p class="card-text"></p>Dari dulu makanan ini menjadi salah satu makanan favorit, bakso patin hadir dengan rasa lain yang menghidupkan selera makan Anda.</p>
                    <a href="#" class="btn btn-primary">Stok : 40</a>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-4">
                <div class="card mb-4">
                  <img class="card-img-top" src="{{url('')}}/images/bakso_goreng.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Bakso Goreng</h4>
                    <p class="card-text">Tak kalah enaknya dari bakso rebus, bakso goreng tampil dalam bentuk lain. Praktis dan mudah menyajikannya.</p>
                    <a href="#" class="btn btn-primary">Stok : 40</a>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-4">
                <div class="card mb-4">
                  <img class="card-img-top" src="{{url('')}}/images/npf/batagor_ikan.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Batagor Ikan (Bakso Tahu Goreng)</h4>
                    <p class="card-text">Kombinasi bakso dan tahu menjadi santapan yang lezat dipagi hari atau kapanpun disaat Anda berkumpul dengan kerabat atau orang-orang tercinta.</p>
                    <a href="#" class="btn btn-primary">Stok : 40</a>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-4">
                <div class="card mb-4">
                  <img class="card-img-top" src="{{url('')}}/images/npf/fillet_ikan.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Fillet Ikan</h4>
                    <p class="card-text">Kini fillet patin menjadi bahan pilihan yang enak dan mudah mengolahnya. Menjadi bahan terbaik serta menguntungkan bagi keluarga dan bisnis Anda.</p>
                    <a href="#" class="btn btn-primary">Stok : 40</a>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-4">
                <div class="card mb-4">
                  <img class="card-img-top" src="{{url('')}}/images/npf/patin_potong_segar.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Patin Potong Segar Beku</h4>
                    <p class="card-text">Anda bisa mendapatkan kemudahan menemukan patin segar kapan saja untuk menjadi menu yang Anda inginkan.</p>
                    <a href="#" class="btn btn-primary">Stok : 40</a>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-4">
                <div class="card mb-4">
                  <img class="card-img-top" src="{{url('')}}/images/ikan_asin.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Ikan Asin (Pudung Patin)</h4>
                    <p class="card-text">Pudung patin hadir sebagai menu tradisional yang mempunyai sensasi rasa yang luar biasa dan berbeda dengan ikan asin kesukaan Anda lainnya untuk menambah selera makan seluruh anggota keluarga.</p>
                    <a href="#" class="btn btn-primary">Stok : 40</a>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-4">
                <div class="card mb-4">
                  <img class="card-img-top" src="{{url('')}}/images/npf/ikan_salai.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Patin Asap (Salai Patin)</h4>
                    <p class="card-text">Ikan asap sudah tidak asing lagi bagi sebagian masyarakat kita. Dengan rasanya yang gurih dan penuh sensasi melengkapi hidangan di meja makan keluarga, dan menjadi salah satu menu favorit di restoran yang sangat menguntungkan.</p>
                    <a href="#" class="btn btn-primary">Stok : 40</a>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-4">
                <div class="card mb-4">
                  <img class="card-img-top" src="{{url('')}}/images/npf/abon_patin.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Abon Ikan Patin</h4>
                    <p class="card-text">Mempunyai rasa yang enak dan gurih, praktis kapanpun dan dimanapun Anda menginginkannya. Anda akan menikmati daging patin utuh dengan mudah serta sangat cocok untuk anak dan keluarga tercinta.</p>
                    <a href="#" class="btn btn-primary">Stok : 40</a>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-4">
                <div class="card mb-4">
                  <img class="card-img-top" src="{{url('')}}/images/npf/kerupuk_kulit_patin.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Kerupuk Kulit Ikan</h4>
                    <p class="card-text">Kerupuk kulit ikan ini mempunyai sensasi yang lain dari kerupuk-kerupuk yang ada. Baik sekali untuk kesehatan dan melengkapi hebohnya cemilan Anda.</p>
                    <a href="#" class="btn btn-primary">Stok : 40</a>
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
