@extends('layouts.admin')
@section('content')
<div class="right_col" role="main" style="min-height: 918.8px;">
   <section class="content-header">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>{{__('Update Banner')}}</h1>
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
                  <form action="{{route('banner-update')}}"  method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                     @csrf
                     <input type="hidden" name="_method" value="Patch" />
                     <input type="hidden" name="id" value="{{old('id',$banner->id)}}">
                     <!----update video---->
                     <div class="form-group">
                        <label>{{__('Image')}}:</label><br>
                        @if(!empty($banner->image))
                        <img id="output" src="{{URL::to('/')}}/public/images/settings/{{$banner->image}}" height="100" width="100">
                        @endif
                        <input type="hidden" name="old_image" value="{{$banner->image}}" class="form-control">
                        <input type="file" name="new_image" id="image" accept="image/*" class="form-control with-icon" onchange="loadFile(event)">
                        <script>
                           var loadFile = function(event) {
                               var image = document.getElementById('output');
                               image.src = URL.createObjectURL(event.target.files[0]);
                               $('#output').slideDown();
                               $('#output').height(50);
                               $('#output').width(50);
                           };
                        </script>
                        <div class="mt-2">   
                           <button type="submit" class="btn btn-primary">Submit</button>	
                        </div>
                     </div>
               </div>
            </div>
            </form>
         </div>
      </div>
</div>
</section>
</div>
@endsection