@extends('layouts.admin')
@section('content')
<div class="right_col" role="main"  style="min-height: 918.8px;">
   <section class="content-header">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>{{__('Add New Product')}}</h1>
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
                  <form action="{{route('store-product')}}"  method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype='multipart/form-data'>
                     @csrf
                     <div class="col-sm-12">
                        <div class="from_add">
                           <label>{{__('Product Name')}}:</label>
                           <input type="text" class="form-control" name="product_name" required>
                           <label>{{__('Sub Title')}}:</label>
                           <input type="text" class="form-control" name="sub_title" required>
                            <label>{{__('Product Image')}}:</label><br>
                            <input type="file" id="" name="image" required="required" class="col-md-7 col-xs-12">
                            <!--<label>{{__('Colour Code')}}:</label><br>-->
                            <!--<input type="text" class="form-control" name="Colour_code" required><br>-->
                            <!--<label>{{__('Features')}}:</label><br>-->
                            <!--<input type="text" class="form-control" name="features" required><br>-->
                            <label>Color</label>
                                <select class="js-example-basic-multiple form-control" multiple="multiple" name="color[]">
                                    @foreach($colors as $color)
                                    <option value="{{ $color->id}}">{{ $color->colour_code }}</option>
                                    @endforeach
                                </select>
                                 <label>Feature</label>
                                <select class="js-example-basic-multiple form-control" multiple="multiple" name="feature[]">
                                    @foreach($feature as $fea)
                                    <option value="{{ $fea->id}}">{{ $fea->name }}</option>
                                    @endforeach
                                </select>
                            <label for="" >Description</label>
                            <textarea id="myeditor" name="description" rows="10" cols="50" class="form-control"></textarea>
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