@extends('layouts.admin')
@section('content')
<div class="right_col" role="main" style="min-height: 918.8px;">
<section class="content-header">
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>{{__('Update Details')}}</h1>
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
               <form action="{{route('update-contact-details')}}"  method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                  @csrf
                  <input type="hidden" name="_method" value="Patch" />
                  <input type="hidden" name="id" value="{{old('id',$contact_details->id)}}">
                  <div class="form-group">
                     <label>{{__('Address')}}:</label>
                     <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="text" id="first-name" name="address"  class="form-control col-md-7 col-xs-12"  value="{{old('address',$contact_details->address)}}">
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                  </div>
                  <div class="form-group">
                     <label>{{__('Phone')}}:</label>
                     <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="text" id="first-name" name="phone" class="form-control col-md-7 col-xs-12"  value="{{old('phone',$contact_details->phone)}}">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                  </div>
                  <div class="form-group">
                     <label>{{__('Operating Hours')}}:</label>
                     <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="tel" id="first-name" name="operating_hours"  class="form-control col-md-7 col-xs-12"  value="{{old('operating_hours',$contact_details->operating_hours)}}">
                        @error('operating_hours')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                  </div>
                  <div class="mt-2">   
                     <button type="submit" class="btn btn-primary">Submit</button>	
                  </div>
               </form>
            </div>
         </div>
      </div>
</section>
</div>
@endsection