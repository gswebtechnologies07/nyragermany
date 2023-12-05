@extends('layouts.admin')
@section('content')
<div class="right_col" role="main" style="min-height: 918.8px;">
   <section class="content-header">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>{{__('Home Content')}}</h1>
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
                  <form method="POST" action="{{route('home-content-update')}}"  enctype="multipart/form-data" class="form-horizontal">
                     @csrf
                     @if(!empty($content->id))
                     <input type="hidden" name="_method" value="POST" />
                     <input type="hidden" name="id" value="{{old('id',$content->id)}}">
                     @else
                     <input type="hidden" name="id" value="">
                     @endif
                     <div class="col-sm-12">
                        <div class="from_add">
                           <label>{{__('Image')}}:</label><br>
                           @if(!empty($content->image))
                           <img id="output" src="{{URL::to('/')}}/public/images/settings/{{$content->image}}" height="100" width="100">
                           @endif
                           <input type="hidden" name="old_image" value="{{$content->image}}" class="">
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
                           <label>{{__('About Us')}}:</label>
                           <textarea type="text" id="myeditor" name="about_us" required="required" class="form-control col-md-7 col-xs-12">{{$content->about_us}}</textarea>
                           <br>
                           <label>{{__('Our Mission')}}:</label>
                           <textarea type="text" id="editior_two" name="mission" required="required" class="form-control col-md-7 col-xs-12">{{$content->mission}}</textarea>
                           <br>
                           <label>{{__('Our Vision')}}:</label>
                           <textarea type="text" id="editior_three" name="vision" required="required" class="form-control col-md-7 col-xs-12">{{$content->vision}}</textarea>
                           <br>
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