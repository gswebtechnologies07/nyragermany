@extends('layouts.admin')
@section('content')
<div class="right_col" role="main" style="min-height: 918.8px;">
<section class="content-header">
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>{{__('Reset Password')}}</h1>
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
               <form method="POST" action="{{ route('password-update') }}" class="model-contact-form new_from_cn">
                  @csrf
                  <input type="hidden" name="_method" value="Patch"/>
                  <input type="hidden" name="id" value="{{old('id',Auth::user()->id)}}">
                  <div class="from_cm_register">
                     <div class="form-group">
                        <label>{{__('New Password')}}:</label>
                        <span class="required">*</span>
                        </label>
                        <input id="password" type="text" name="password" class="form-control col-md-7 col-xs-12"><br>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label>{{__('Confirm Password')}}:</label>
                        <span class="required">*</span>
                        </label>
                        <input id="password" type="text" name="password_confirmation" class="form-control">
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                  </div>
                  <button type="submit" class="btn btn-primary" >Submit</button>
               </form>
            </div>
         </div>
      </div>
</section>
</div>
@endsection