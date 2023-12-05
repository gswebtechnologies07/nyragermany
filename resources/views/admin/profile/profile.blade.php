@extends('layouts.admin')
@section('content')
<div class="right_col" role="main" style="min-height: 918.8px;">
<section class="content-header">
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>{{__('My Profile')}}</h1>
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
               <form action="{{route('admin-profile-update')}}" method="POST" enctype="multipart/form-data" class="model-contact-form new_from_cn">
                  @csrf
                  <input type="hidden" name="_method" value="Patch" />
                  <input type="hidden" name="id" value="{{old('id',Auth::user()->id)}}">
                  <div class="row">
                     <label>{{__('Profile Picture')}}:</label>
                     <div class="col-lg-12 col-md-12 col-12">
                        <div class="new_photo_profile">
                           @if(!empty($user->image))
                           <img src="{{URL::to('/')}}/public/images/users/{{$user->image}}" height="100" width="100" id="output">
                           @else
                           <img src="{{URL::to('/')}}/public/images/default.png" height="100" width="100"  id="output">
                           @endif
                           <input type="hidden" name="old_image" value="{{$user->image}}" class="form-control">
                           <input type="file" name="new_image" id="image" accept="image/*" class="form-control with-icon" onchange="loadFile(event)">
                           <script>
                              var loadFile = function(event) {
                                  var image = document.getElementById('output');
                                  image.src = URL.createObjectURL(event.target.files[0]);
                                  $('#output').slideDown();
                                  $('#output').height(100);
                                  $('#output').width(100);
                              };
                           </script>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">
                           <label>{{__('Full Name')}}:</label>
                           <span class="required">*</span>
                           </label>
                           <input type="text" name="name" class="form-control with-icon" value="{{old('name',$user->name)}}">
                        </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">
                           <label>{{__('Email')}}:</label>
                           <span class="required">*</span>
                           </label>
                           <input type="text" name="email" class="form-control with-icon" value="{{old('email',$user->email)}}">
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group">
                           <label>{{__('Phone')}}:</label>
                           <span class="required">*</span>
                           </label>
                           <input type="text" name="phone" class="form-control with-icon" value="{{old('phone',$user->phone)}}">
                        </div>
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                  </div>
                  <!--   	<div class="row">-->
                  <!--    <div class="col-lg-12 col-md-12 col-12">-->
                  <!--       <div class="form-group">-->
                  <!--			<label class="sr-only">Photos-->
                  <!--				<span class="required">*</span>-->
                  <!--			</label>-->
                  <!--			<input type="file" accept="image/*" name="portfolio_photos[]" multiple>-->
                  <!--	    </div> -->
                  <!--    </div>  -->
                  <!--</div>    -->
                  <div class="row ">
                     <div class="col-12 text-center new_button_submit">
                        <button type="submit" id="model_contact_form_submit" name="model_contact_submit" class="theme_button color1 bottommargin_0 btn btn-primary">Save</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
</section>
</div>
@endsection