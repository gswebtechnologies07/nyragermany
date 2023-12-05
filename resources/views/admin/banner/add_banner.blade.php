@extends('layouts.admin')
@section('content')
<div class="right_col" role="main" style="min-height: 918.8px;">
<section class="content-header">
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>{{__('Add Banner')}}</h1>
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
               <form action="{{route('store-banner')}}"  method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype='multipart/form-data'>
                  @csrf
                  <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Select Image<span class="required">*</span>
                     </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="last-name" name="image" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="ln_solid"></div>
                  <div class="form-group">
                     <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
</section>
</div>
@endsection