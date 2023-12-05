@extends('layouts.front_main')
@section('content')
<section class="section-1 mt-5 bg-acryliam" style="background-image: url(../public/images/corporate_art_banner.jpg)">
		<div class="container py-5">
			<div class="row">
				<div class="col-12">
					<h2 class="h2-heading underLine fs-1">{{$products->product_name}}</h2>
					<p>{{$products->sub_title}}</p>
				</div>
			</div>
		</div>
	</section>

	<section class="mt-5">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3 class="h2-heading underLine fs-3 py-2">Overview</h3>
					<p class="mt-3">
					    {!!$products->description!!}
					    
					</p>
				</div>
				<div class="col-md-6">


					<div class="bookWrapper">
						<div class="bookBg">
							<div class="pageBg">
								<div class="pageWrapper">

									<div id="page2" class="page">
										<div class="pageFace front last">

											<div
												class="h-100 w-100 d-flex align-items-center flex-column justify-content-center">
												<p class="fs-4"><b>Strength of laminate</b></p>
												<p class="fs-4"><b>Versatile Design Choices</b></p>
												<p class="fs-4"><b>High Gloss Finish</b></p>
											</div>

											<div class="pageFoldRight"></div>
										</div>
										<div class="pageFace back">

											<div class="pageFoldLeft"></div>
										</div>
									</div>
									<div id="page1" class="page">
										<div class="pageFace front">

											<div
												class="h-100 w-100 d-flex align-items-center flex-column justify-content-between">
												<p class="fs-4 text-white mb-0 mt-3"><b>Acryliam Sheet</b></p>
												<p class="fs-2 text-white"><b>Flip To Open</b></p>

											</div>
											<div class="pageFoldRight"></div>
										</div>
										<div class="pageFace back">

											<img src="{{URL::to('/')}}/public/images/BackSide-img.jpg" alt="Avatar"
												class="img-fluid front-book">
											<div class="pageFoldLeft"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col-md-12 mt-4 mb-4">
					<h2 class="h2-heading underLine fs-4 py-2">{{$products->product_name}} is packed with a wide range of features.</h2>
					<div class="fea-warraper d-flex gap-3 flex-wrap mt-4  mb-5">
					    @php
					    $fe = explode(',',$products->feature);
					    @endphp
					    @foreach($fe as $fea)
					    @php
					    $dd = \App\Models\Feature::where('id',$fea)->first();
					    @endphp
						<div class="Fea-Box">
							<img src="{{URL::to('/')}}/public/images/features/{{$dd->image}}" class="img-fluid Icon-ball">
							<span>{{$dd->name}}</span>
						</div>
						@endforeach
					</div>
				</div>
				        @php
					    $col = explode(',',$products->color);
					    @endphp
					    @foreach($col as $cl)
					    @php
					    $co = \App\Models\Colour::where('id',$cl)->first();
					    @endphp
				<div class="col-md-2  mb-4">
					<div class="Color-BOX {{ str_replace(' ', '', $co->colour_code) }}"></div>
					<p>{{$co->colour_code}}</p>
				</div>
				@endforeach
				<!--<div class="col-md-2 mb-4">-->
				<!--	<div class="Color-BOX KA1011"></div>-->
				<!--	<p>KA 1011</p>-->
				<!--</div>-->
				<!--<div class="col-md-2 mb-4">-->
				<!--	<div class="Color-BOX KA1010"></div>-->
				<!--	<p>KA 1010</p>-->
				<!--</div>-->
			</div>
			<!--<div class="row">-->

			<!--	<div class="col-md-2 mb-4">-->
			<!--		<div class="Color-BOX KA1001"></div>-->
			<!--		<p>KA 1001</p>-->
			<!--	</div>-->
			<!--	<div class="col-md-2 mb-4">-->
			<!--		<div class="Color-BOX KA102"></div>-->
			<!--		<p>KA 1002</p>-->
			<!--	</div>-->
			<!--</div>-->
			<!--<div class="row">-->
			<!--	<div class="col-md-2  mb-4">-->
			<!--		<div class="Color-BOX KA1022"></div>-->
			<!--		<p>KA 1022</p>-->
			<!--	</div>-->
			<!--	<div class="col-md-2 mb-4">-->
			<!--		<div class="Color-BOX KA1014"></div>-->
			<!--		<p>KA 1014</p>-->
			<!--	</div>-->
			<!--	<div class="col-md-2 mb-4">-->
			<!--		<div class="Color-BOX KA1019"></div>-->
			<!--		<p>KA 1019</p>-->
			<!--	</div>-->
			<!--</div>-->
			<!--<div class="row">-->
			<!--	<div class="col-md-2  mb-4">-->
			<!--		<div class="Color-BOX KA1012"></div>-->
			<!--		<p>KA 1012</p>-->
			<!--	</div>-->
			<!--	<div class="col-md-2  mb-4">-->
			<!--		<div class="Color-BOX KA1015"></div>-->
			<!--		<p>KA 1015</p>-->
			<!--	</div>-->


			<!--</div>-->
			<!--<div class="row">-->
			<!--	<div class="col-md-2  mb-4">-->
			<!--		<div class="Color-BOX KA1032"></div>-->
			<!--		<p>KA 1032</p>-->
			<!--	</div>-->
			<!--	<div class="col-md-2  mb-4">-->
			<!--		<div class="Color-BOX KA5001"></div>-->
			<!--		<p>KA 5001</p>-->
			<!--	</div>-->
			<!--	<div class="col-md-2  mb-4">-->
			<!--		<div class="Color-BOX KA5004"></div>-->
			<!--		<p>KA 5004</p>-->
			<!--	</div>-->



			<!--</div>-->
			<!--<div class="row">-->
			<!--	<div class="col-md-2  mb-4">-->
			<!--		<div class="Color-BOX KA1009"></div>-->
			<!--		<p>KA 1009</p>-->
			<!--	</div>-->
			<!--	<div class="col-md-2  mb-4">-->
			<!--		<div class="Color-BOX KA1016"></div>-->
			<!--		<p>KA 1016</p>-->
			<!--	</div>-->
			<!--	<div class="col-md-2  mb-4">-->
			<!--		<div class="Color-BOX KA1021"></div>-->
			<!--		<p>KA 1021</p>-->
			<!--	</div>-->



			<!--</div>-->

		</div>
	</section>
@endsection