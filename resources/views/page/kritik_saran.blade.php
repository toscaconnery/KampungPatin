<!DOCTYPE html>
<html lang="en">
@include('layout.headscript')
<body class="animsition">
	
	<!-- Header -->
	@include('layout.header')

	<!-- Sidebar -->
	@include('layout.sidebar')

	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="{{url('')}}/" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Kritik Saran
			</span>
		</div>
	</div>
		

	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				<div class="col-lg-17 col-xl-12 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart" style="table-layout: fixed;">
								<tr class="table_head">
									<th class="column-1" style="width: 15%">Nama</th>
									<th class="column-2" style="width: 15%">Email</th>
									<th class="column-3" style="width: 55%">Kritik dan Saran</th>
									<th class="column-4" style="width: 15%; text-align: left;">Waktu</th>
								</tr>

								@foreach($kritik_saran as $k)
									<tr class="table_row">
										<td class="column-1" style="word-wrap: break-word; padding: 10px; padding-left: 20px;">{{$k->nama}}</td>
										<td class="column-2" style="word-wrap: break-word; padding: 10px">{{$k->email}}</td>
										<td class="column-3" style="word-wrap: break-word; padding: 10px">{{$k->pesan}}</td>
										<td class="column-4" style="word-wrap: break-word; padding: 10px; text-align: left;">{{$k->created_at}}</td>
									</tr>
								@endforeach

							</table>
						</div>

					</div>
				</div>

			</div>
		</div>
	</form>
		
	
		

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