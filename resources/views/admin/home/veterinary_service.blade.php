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
                  <form method="POST" action="{{route('veterinary-update')}}"  enctype="multipart/form-data" class="form-horizontal">
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
                           @if(!empty($content->vet_image))
                           <img id="output" src="{{URL::to('/')}}/public/images/settings/{{$content->vet_image}}" height="100" width="100">
                           @endif
                           <input type="hidden" name="old_image" value="{{$content->vet_image}}" class="">
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
                           <label>{{__('Title')}}:</label>
                           <input type="text" name="vet_title" required="required" class="form-control col-md-7 col-xs-12" value="{{$content->vet_title}}"></input>
                           <br>
                           <label>{{__('Description')}}:</label>
                           <textarea type="text" id="myeditor" name="vet_description" required="required" class="form-control col-md-7 col-xs-12">{{$content->vet_description}}</textarea>
                           <br>
                        </div>
                     </div>
                     
                     
                     <!--Second Content-->
                     
                      <div class="col-sm-12">
                        <div class="from_add">
                           <label>{{__('Veterinary Image')}}:</label><br>
                           @if(!empty($content->vet_ind_image))
                           <img id="output" src="{{URL::to('/')}}/public/images/settings/{{$content->vet_ind_image}}" height="100" width="100">
                           @endif
                           <input type="hidden" name="veterinary_old_image" value="{{$content->vet_ind_image}}" class="">
                           <input type="file" name="veterinary_new_image" id="image" accept="image/*" class="with-icon" onchange="loadFile(event)">
                           <script>
                              var loadFile = function(event) {
                                  var image = document.getElementById('output');
                                  image.src = URL.createObjectURL(event.target.files[0]);
                                  $('#output').slideDown();
                                  $('#output').height(50);
                                  $('#output').width(50);
                              };
                           </script>
                           <label>{{__('Veterinary Title')}}:</label>
                           <input type="text" name="vet_ind_title" required="required" class="form-control col-md-7 col-xs-12" value="{{$content->vet_ind_title}}"></input>
                           <br>
                           <label>{{__('Veterinary Description')}}:</label>
                           <textarea type="text" id="editior_two" name="vet_ind_desc" required="required" class="form-control col-md-7 col-xs-12">{{$content->vet_ind_desc}}</textarea>
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