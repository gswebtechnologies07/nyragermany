@extends('layouts.front_main')
@section('content')
<!-- template sections -->
<section class="ds mb-12">
   <div class="container">
      <div class="row">
         @if($message=Session::get('success'))
         <div class="alert bg-green alert-dismissible" role="alert" id="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            {{ $message }}
         </div>
         @endif
         <div class="text-center new_extras_form_tre">
            <h2>Login</h2>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-12 new_from_book">
            <form method="POST" action="{{ route('adminLoginStore') }}" class="model-contact-form new_from_cn">
               @csrf
               <div class="from_cm_register">
                  <div class="form-group">
                     <label for="model-email" class="sr-only">Email address
                     <span class="required">*</span>
                     </label>
                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
                     @error('email')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                     <label for="model-email" class="sr-only">Password
                     <span class="required">*</span>
                     </label>
                     <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">
                     @error('password')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <button type="submit" id="model_contact_form_submit" name="model_contact_submit" class="theme_button color1 bottommargin_0">Submit</button>
            </form>
         </div>
      </div>
   </div>
</section>
<script>
   setTimeout(function() {
   $('#alert').fadeOut('fast');
   }, 2000); 
</script>
@endsection