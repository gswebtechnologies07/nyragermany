@extends('layouts.front_main')
@section('content')
<section class="new_sention_team">
   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
           
            <!--<img src="https://pccleaning.in/global_truck_academy/public/frontend/photo/divi.jpg" class="d-block w-100" alt="...">-->
            <img id="new_images" src="http://demogswebtech.com/omagen/public/images/about/1686385428.jpg" alt="">
            
            <div class="carousel-caption new_line">
               <h1>Product</h1>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="pt-5">
    <div class="container">
        <form action="{{ route('product.search') }}" method="get">
           <div class="row text-center">
               <div class="col-lg-8">
                </div>   
              <div class="col-lg-3 form-group text-center" >
                 <!--<label for="">Search By Category</label>-->
                 <select name="category" class="form-control orderby select2">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->category }}">{{ $category->category }}</option>
                    @endforeach
                 </select>
              </div>
              <div class="col-lg-1 form-group" >
                 <input type="submit" class="btn btn-primary" value="Search">
              </div>
           </div>
        </form>
    </div>    
</section>

<section class="our_what_we_do product_new py-lg-5 py-md-5 py-sm-5 py-3 facts ">
   <div class="container reveal">
      <div class="row mt-lg-5 mt-2 wow fadeInLeft" data-wow-delay="0.1s">
           @php
             $products = get_products();
           @endphp 
         @foreach($products as $key => $product)
         <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4 wow fadeInLeft" data-wow-delay="0.2s">
            <div class="box_new">
               <div class="new_what_whe_do w3-animate-left">
                  <!--<div class="shape-two"></div>-->
                  <img src="{{URL::to('/')}}/public/images/products/{{$product->image}}" class="image d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy">
                  <div class="overlay">
                     <div class="text">
                        <h4 class="new_link"><a href="{{route('product',$product->slug)}}">{{$product->product_name}}</a></h4>
                     </div>
                  </div>
                   <!--<p class="text-center">Injectables</p>-->
                  <div class="bgr"><a href="{{route('product',$product->slug)}}" class="btn btn-secondary">View Details</a></div>
               </div>
            </div>
         </div>
         @endforeach
 </section>    
 <script>
 function filter_data()
 {
     product_filter = $("#product_filter").val();
     $ajax({
         url:"{{ url('product.search')}}?filter_product="+product_filter,
         success:function(data){
             $"
         }
     })
 }
</script>

@endsection