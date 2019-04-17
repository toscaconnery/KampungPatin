<!DOCTYPE html>
<html lang="en">
@include('layout.headscript')
<body class="animsition">
	
	<!-- Header -->
	@include('layout.header')

	<!-- Sidebar -->
	@include('layout.sidebar')

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{url('')}}/coza/images/bg-02.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Hubungi Kami
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form method="post" action="{{url('')}}/kritik-saran">
						{{ csrf_field() }}
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Kritik dan Saran
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="nama" placeholder="Nama Anda" required>
							<img class="how-pos4 pointer-none" src="{{url('')}}/coza/images/icons/icon-name.png" alt="ICON">
						</div>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Alamat email Anda" required="">
							<img class="how-pos4 pointer-none" src="{{url('')}}/coza/images/icons/icon-email.png" alt="ICON">
						</div>

						<div class="bor8 m-b-30">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="pesan" placeholder="Apa yang perlu kami benahi?" required></textarea>
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Kirim
						</button>
					</form>
				</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Alamat
							</span>

							<p class="stext-115 cl6 size-250 p-t-18">
								Jl. Syech Jafar Nomor 7 <br>
								Kampung Patin, Desa Koto Masjid <br>
								Kec. XIII Koto Kampar <br>
								Kabupaten Kampar <br>
								Provinsi Riau <br>
								Indonesia
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Telp.
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								0812 7530 830
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Whatsapp
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								<a href="https://wa.me/628127530830?text=Saya%20ingin%20tanya%20lebih%20lanjut%20tentang%20kampung%20patin">0812 7530 830</a>
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Email
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								contact@example.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
	
	<!-- Map -->
	<div class="map">
		<div class="size-303" id="google_map" data-map-x="40.691446" data-map-y="-73.886787" data-pin="{{url('')}}/coza/images/icons/pin.png" data-scrollwhell="0" data-draggable="1" data-zoom="11"></div>
	</div>



	<!-- Footer -->
	@include('layout.footer')

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

@include('layout.tailscript')

</body>
</html>