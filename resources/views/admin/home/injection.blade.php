@extends('layouts.admin')
@section('content')
<div class="right_col" role="main" style="min-height: 918.8px;">
   <section class="content-header">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>{{__('Update')}}</h1>
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
                  <form method="POST" action="{{route('injections-update')}}"  enctype="multipart/form-data" class="form-horizontal">
                     @csrf
                     @if(!empty($content->id))
                     <input type="hidden" name="_method" value="POST" />
                     <input type="hidden" name="id" value="{{old('id',$content->id)}}">
                     @else
                     <input type="hidden" name="id" value="">
                     @endif
                     <div class="col-sm-12">
                           <label>{{__('Human Injection')}}:</label>
                           <textarea type="text" id="myeditor" name="human_inject" required="required" class="form-control col-md-7 col-xs-12">{{$content->human_inject}}</textarea>
                           <br>
                           <label>{{__('Veterinary Injection')}}:</label>
                           <textarea type="text" id="editior_two" name="veterinary_inject" required="required" class="form-control col-md-7 col-xs-12">{{$content->veterinary_inject}}</textarea>
                           <br>
                           <label>{{__('Eye Drops')}}:</label>
                           <textarea type="text" id="editior_three" name="eye_drops" required="required" class="form-control col-md-7 col-xs-12">{{$content->eye_drops}}</textarea>
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