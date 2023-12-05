@extends('layouts.admin')
@section('content')
<div class="right_col" role="main" style="min-height: 918.8px;">
   <section class="content-header">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>{{__('About Us')}}</h1>
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
                  <form method="post" action="{{route('about-update')}}" enctype="multipart/form-data" class="form-horizontal">
                     @csrf
                     @if(!empty($about->id))
                     <input type="hidden" name="_method" value="POST" />
                     <input type="hidden" name="id" value="{{old('id',$about->id)}}">
                     @else
                     <input type="hidden" name="id" value="">
                     @endif
                     <div class="col-sm-12">
                        <div class="from_add">
                           <label>{{__('Title')}}:</label>
                           <input type="text" class="form-control" name="title" value="@if(!empty($about->title)) {{$about->title}} @else {{old('title')}} @endif" required><br>
                           <label>{{__('Description')}}:</label>
                           <textarea name="description" id="myeditor" class="form-control" placeholder="{{__('Description')}}">@if(!empty($about->description)) {{$about->description}} @else {{old('description')}} @endif</textarea>
                           <!--<label>{{__('Image')}}:</label>-->
                           <!--<div class="col-lg-12 col-md-12 col-12">-->
                           <!--   <div class="new_photo_profile">-->
                           <!--      <img id="output" src="{{URL::to('/')}}/public/images/about/{{$about->image}}" height="100" width="100">-->
                           <!--      <input type="hidden" name="old_image" value="{{$about->image}}">-->
                           <!--      <input type="file" name="new_image" id="image" accept="image/*" class="with-icon" onchange="loadFile(event)">-->
                           <!--      <script>-->
                           <!--         var loadFile = function(event) {-->
                           <!--             var image = document.getElementById('output');-->
                           <!--             image.src = URL.createObjectURL(event.target.files[0]);-->
                           <!--             $('#output').slideDown();-->
                           <!--             $('#output').height(100);-->
                           <!--             $('#output').width(100);-->
                           <!--         };-->
                           <!--      </script>-->
                           <!--   </div>-->
                           <!--</div>-->
                           <!--<br>-->
                           <!--<label>{{__('Banner Image')}}:</label>-->
                           <!--<div class="col-lg-12 col-md-12 col-12">-->
                           <!--   <div class="new_photo_profile">-->
                           <!--      <img id="output" src="{{URL::to('/')}}/public/images/about/{{$about->banner_image}}" height="100" width="100">-->
                           <!--      <input type="hidden" name="banner_old_image" value="{{$about->banner_image}}">-->
                           <!--      <input type="file" name="banner_new_image" id="image" accept="image/*" class="with-icon" onchange="loadFile(event)">-->
                           <!--      <script>-->
                           <!--         var loadFile = function(event) {-->
                           <!--             var image = document.getElementById('output');-->
                           <!--             image.src = URL.createObjectURL(event.target.files[0]);-->
                           <!--             $('#output').slideDown();-->
                           <!--             $('#output').height(100);-->
                           <!--             $('#output').width(100);-->
                           <!--         };-->
                           <!--      </script>-->
                           <!--   </div>-->
                           <!--</div>-->
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