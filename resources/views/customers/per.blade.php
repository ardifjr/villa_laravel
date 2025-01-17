<div class="section section-4 bg-light">
		<div class="container">
			<div class="row justify-content-center  text-center mb-5">
				<div class="col-lg-5">
					<h2 class="font-weight-bold heading text-primary mb-4" id="peraturan"style="text-align:left">Peraturan Villa Lembang</h2>
					<div class="green-box">
					@foreach($peraturans as $peraturan)
					<p class="left-align">•  {{ $peraturan->isi }}</p>
					@endforeach
					</div>
				</div>

				<div class="col-lg-5">
				<h2 class="font-weight-bold heading text-primary mb-4" id="peraturan" style="text-align:right">Peraturan Villa Dago</h2>
					<div class="grean-box">
					@foreach($peraturandagos as $peraturandago)
					<p class="left-align">•  {{ $peraturandago->isi }}</p>
					@endforeach
					</div>
				</div>
				
			</div>
		</div>
	</div>