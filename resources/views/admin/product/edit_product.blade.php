@extends('layouts.admin')
@section('content')
<div class="right_col" role="main" style="min-height: 918.8px;">
   <section class="content-header">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>{{__('Update Product')}}</h1>
            </div>
         </div>
      </div>
   </section>
   <!-- Content Header (Page header) -->
   <section class="content">
      <div class="container-fluid">
         <div class="row mb-2">
            @if($error=Session::get('error'))
            <div class="alert bg-red alert-dismissible" role="alert" id="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">×</span>
               </button>
               {{ $error }}
            </div>
            @endif
            @if($message=Session::get('success'))
            <div class="alert bg-green alert-dismissible" role="alert" id="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">×</span>
               </button>
               {{ $message }}
            </div>
            @endif<br>
            <div class="col-sm-12">
               @if(count($errors)>0)
               <div class='alert alert-danger'>
                  <ul>
                     @foreach($errors->all() as $error)
                     <li>{{$error}}</li>
                     @endforeach
                  </ul>
               </div>
               @endif<br>
               <div class="bg-ytr col-8 m-auto">
                  <form method="post" action="{{route('update-product')}}" enctype="multipart/form-data" class="form-horizontal">
                     @csrf
                     @if(!empty($products->id))
                     <input type="hidden" name="_method" value="patch" />
                     <input type="hidden" name="id" value="{{old('id',$products->id)}}">
                     @else
                     <input type="hidden" name="id" value="">
                     @endif
                     <div class="col-sm-12">
                        <div class="from_add">
                           <label>{{__('Product Name')}}:</label>
                           <input type="text" class="block mt-1 w-full" name="product_name" value="@if(!empty($products->product_name)) {{$products->product_name}} @else {{old('product_name')}} @endif" required><br>
                           <label>{{__('Image')}}:</label>
                           @if(!empty($products->image))
                            <img id="output" src="{{URL::to('/')}}/public/images/products/{{$products->image}}" height="100" width="100">
                            @endif
                            <input type="hidden" name="old_image" value="{{$products->image}}" class="form-control">
                            <input type="file" name="new_image" id="image" accept="image/*" class="with-icon" onchange="loadFile(event)">
                            <script>
                               var loadFile = function(event) {
                                   var image = document.getElementById('output');
                                   image.src = URL.createObjectURL(event.target.files[0]);
                                   $('#output').slideDown();
                                   $('#output').height(50);
                                   $('#output').width(50);
                               };
                            </script>
                            @php
                            if($products->color){
                                $aa = explode(',',$products->color); 
                            
                            } else {
                                $aa = array(); 
                            }
                            @endphp
                            <label>Color</label>
                                <select class="js-example-basic-multiple form-control" multiple="multiple" name="color[]">
                                    @foreach($colors as $color)
                                        <option value="{{ $color->id }}" @if(in_array($color->id, $aa)) selected @endif>{{ $color->colour_code }}</option>
                                    @endforeach
                                </select>
                               {{-- {{dd($products->feature)}}--}}
                                 @php
                                 if($products->feature){
                                 
                                 $ab = explode(',',$products->feature);
                                } else {
                                $ab = array(); 
                                }
                                 @endphp
                            <label>Feature</label>
                                <select class="js-example-basic-multiple form-control" multiple="multiple" name="feature[]">
                                    @foreach($feature as $feature)
                                        <option value="{{ $feature->id }}" @if(in_array($feature->id, $ab)) selected @endif>{{ $feature->name }}</option>
                                    @endforeach
                                </select>
                            <!--<label>{{__('Colour Code')}}:</label>-->
                            <!--<input type="text" class="block mt-1 w-full" name="colour_code" value="@if(!empty($products->colour_code)) {{$products->colour_code}} @else {{old('colour_code')}} @endif" required><br>-->
                            <!--<label>{{__('Features')}}:</label>-->
                            <!--<input type="text" class="block mt-1 w-full" name="feature" value="@if(!empty($products->feature)) {{$products->feature}} @else {{old('feature')}} @endif" required><br>-->
       <!--                     <label>{{__('Colour Code')}}:</label>-->
       <!--                    <select name="color" id="color" class="form-control">-->
							<!--  <option value="">Select Colour</option>-->
							<!--  @foreach($colors as $color)-->
							<!--  <option value="{{ $color->colour_code}}" {{ $products->colour_code === $color->colour_code ? 'selected' : '' }}>{{ $color->colour_code }}</option>-->
							<!--  @endforeach-->
							<!--</select>-->
                        
                        </div>
                     </div>
                     <div class="sumiy">
                        <button type="submit" class="btn btn-danger">{{__('Save')}}</button>
                     </div>
               </div>
               </form> 
            </div>
         </div>
      </div>
   </section>
</div>
@endsection