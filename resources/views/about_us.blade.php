@extends('layouts.front_main')
@section('content')
<section class="section-1 bg-about mt-5" style="background-image: url(public/images/bg-heading-01.jpg)">
   <div class="container py-5">
      <div class="row">
          @foreach($about as $key => $abouts)
         <div class="col-12">
            <h2 class="h2-heading underLine fs-1">{{$abouts->title}}</h2>
            <p>{!!$abouts->description!!}</p>
         </div>
         @endforeach
      </div>
   </div>
</section>
<section class="section-7 py-5">
   <div class="container">
      <div class="row justify-content-center align-items-center">
          @foreach($section_one as $key => $sectionOne)
         <div class="col-md-6 example__translation__square example1__square">
            <!--<label for="" class="underLine mb-4">WHAT WE DO?</label>-->
            <h3 class="h2-heading underLine mb-4">{{$sectionOne->title}}</h3>
            <p class="comon-p p-text-6 ">{!!$sectionOne->description!!}</p>
         </div>
         <div class="col-md-6 mb-5">
            <div class="hide-show">
               <img src="{{URL::to('/')}}/public/images/about/{{$sectionOne->image}}" class="img-fluid w-100 product-img" alt="">
               <img src="{{URL::to('/')}}/public/images/about/{{$sectionOne->image_two}}" class="img-fluid w-100 color-img" alt="">
            </div>
         </div>
      </div>
      @endforeach
      <div class="row flex-row-reverse justify-content-center align-items-center">
          @foreach($section_two as $key => $sectionTwo)
         <div class="col-md-6 mb-5">
            <h3 class="h2-heading underLine mb-4">{{$sectionTwo->title}}</h3>
            <p class="comon-p p-text-6 ">{!!$sectionTwo->description!!}
            </p>
         </div>
         <div class="col-md-6 mb-5">
            <div class="hide-show">
               <img src="{{URL::to('/')}}/public/images/about/{{$sectionTwo->image}}" class="img-fluid w-100 product-img" alt="">
               <img src="{{URL::to('/')}}/public/images/about/{{$sectionTwo->image_two}}" class="img-fluid w-100 color-img" alt="">
            </div>
         </div>
         @endforeach
      </div>
      <div class="row justify-content-center align-items-center">
         <div class="col-md-6 mb-5">
             @foreach($section_three as $key => $sectionThree)
            <h3 class="h2-heading underLine mb-4">{{$sectionThree->title}}</h3>
            <p class="comon-p p-text-6 ">{!!$sectionThree->description!!}
            </p>
         </div>
         <div class="col-md-6 mb-5">
            <div class="hide-show">
               <img src="{{URL::to('/')}}/public/images/about/{{$sectionThree->image}}" class="img-fluid product-img" alt="">
               <img src="{{URL::to('/')}}/public/images/about/{{$sectionThree->image_two}}" class="img-fluid color-img" alt="">
            </div>
         </div>
         @endforeach
      </div>
   </div>
</section>
<section class="section-9">
   <div class="container-fluid  mb-5">
      <div class="row g-0">
         <div class="col-md-6">
            <img src="https://images.pexels.com/photos/1080721/pexels-photo-1080721.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="img-fluid w-100 new-img-map">
         </div>
         <div class="col-md-6 bg-conatact">
            <div class="px-3 py-3">
               <h4 class="h2-heading underLine fs-1 mb-3 pb-3 text-white">Contact us</h4>
               <p class="text-white">Feel free to contact us with a project proposal, quote or estimation, or simply to say
                  hello. Here’s our contact info.
               </p>
               <div class="list-panels mb-3 gap-2 d-flex justify-content-start align-items-start">
                  <div class="img-wrapper">
                     <img class="img-fluid" src="{{URL::to('/')}}/public/images/location.svg" alt="">
                  </div>
                  <div class="normal-body">
                     <h4 class="fw-bold mb-0  text-white">Address 1</h4>
                     <p class="text-white">
                        {{get_setting('address')}}
                     </p>
                  </div>
               </div>
               <div class="list-panels mb-3 gap-2 d-flex justify-content-start align-items-start">
                  <div class="img-wrapper">
                     <img class="img-fluid" src="{{URL::to('/')}}/public/images/location.svg" alt="">
                  </div>
                  <div class="normal-body">
                     <h4 class="fw-bold mb-0  text-white">Address 2</h4>
                     <p class="text-white">
                        {{get_setting('add_2')}}
                     </p>
                  </div>
               </div>
               <div class="list-panels mb-3 gap-2 d-flex justify-content-start align-items-start">
                  <div class="img-wrapper">
                     <img class="img-fluid" src="{{URL::to('/')}}/public/images/location.svg" alt="">
                  </div>
                  <div class="normal-body">
                     <h4 class="fw-bold mb-0  text-white">Address 3</h4>
                     <p class="text-white">
                        {{get_setting('add_3')}}
                     </p>
                  </div>
               </div>
               <div class="list-panels mb-3 gap-2 d-flex justify-content-start align-items-start">
                  <div class="img-wrapper">
                     <img class="img-fluid" src="{{URL::to('/')}}/public/images/location.svg" alt="">
                  </div>
                  <div class="normal-body">
                     <h4 class="fw-bold mb-0  text-white">Address 4</h4>
                     <p class="text-white">
                        {{get_setting('add_4')}}
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection