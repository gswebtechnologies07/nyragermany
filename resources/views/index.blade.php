@extends('layouts.front_main')
@section('content')
<section class="section-1 pt-5">
         <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-inner">
                @foreach($banner as $key => $banners)
                 <div class="carousel-item @if($key == '1') active @endif">
                    <img src="{{URL::to('/')}}/public/images/settings/{{$banners->image}}" class="d-block w-100" alt="...">
                    <!--<div class="carousel-caption ">-->
                    <!--   <p class="wow fadeInbottom " data-wow-delay="1s">{{$banners->sub_title}}</p>-->
                    <!--   <h2 class="wow bounceInRight " data-wow-delay="0.5s">{{$banners->title}}</h2>-->
                    <!--</div>-->
                 </div>
                @endforeach
            </div>
            <div class="coustonbtn-slider">
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                  data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                  data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
               </button>
            </div>
         </div>
      </section>
      <section class="css-prop-demo el">
         <div class="container py-5 my-5">
            <div class="row justify-content-center ">
                @foreach($about as $key=>$abouts)
               <div class="col-md-8">
                  <h1 class="h2-heading underLine text-center fs-1 py-2 mb-4">About <span style="color:#e31e24">Nyra</span></h1>
                  <p class="text-center">{!!$abouts->description!!}</p>
               </div>
               @endforeach
            </div>
         </div>
      </section>
      <section class="section-3 py-3">
         <div class="container ">
            <div 
               class="row">
               <div class="col-md-12 mb-3">
                  <div class="Our-services">
                     <h2 class="h2-heading underLine text-center fs-1 py-2">Our Product</h2>
                  </div>
               </div>
               @foreach($products as $product)
               <div class="col-md-6 mb-4">
                  <a href="{{route('product',$product->id)}}">
                     <div class="card home2  border-0 shadow-sm rounded-0">
                        <div class="card-img">
                           <div class="home2-hover costum-width home2">
                              <img src="{{URL::to('/')}}/public/images/products/{{$product->image}}"
                                 class="img-fluid product-img" alt="">
                              <div class="img-title">
                                 {{$product->product_name}}
                              </div>
                              <div class="img-titles next">
                                {{$product->product_name}}
                              </div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               @endforeach
            </div>
         </div>
      </section>
      <!-- Section 3 ended -->
      <section class="section-4 home-two pt-5 ">
         <div class="container py-md-5">
            <div class="row">
               <div class="col-md-8 mb-4">
                  <div class="left-FUNCTIONAL-comp">
                     <label for="" class="pry-lable text-white">Balancing Aesthetics and Efficiency</label>
                     <h2 class="h2-heading underLine text-white">
                        Where Design Meets Everyday Living
                     </h2>
                     <p class="comon-p text-white">
                        We're all about embracing change when you move to a new place. Why recreate the past? 
                        </p> 
                     <a href="{{route('contact')}}" class="pry-btn postion-relative">Contact Us</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- section 7 ended -->
      <section class="section-9">
         <div class="container-fluid  mb-5 p-md-0">
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