@extends('layouts.admin')
@section('content')
<div class="right_col" role="main" style="min-height: 918.8px;">
<section class="content-header">
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>{{__('Enquiries')}}</h1>
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
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="x_panel">
                  <div class="table-responsive">
                     <table id="table_id" class="table table-striped jambo_table bulk_action">
                        <thead>
                           <tr class="headings">
                              <th class="column-title">Id</th>
                              <th class="column-title">Name </th>
                              <th class="column-title">Email</th>
                              <th class="column-title">Phone</th>
                              <th class="column-title">Question</th>
                              <th class="column-title no-link last"><span class="nobr">Action</span>
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($enquiry as $key => $enquiry)
                           <tr class="even pointer">
                              <td class=" ">{{$enquiry->id}}</td>
                              <td class=" ">{{$enquiry->name}}</td>
                              <td class=" ">{{$enquiry->email}}</td>
                              <td class=" ">{{$enquiry->phone}}</td>
                              <td class=" ">{{substr($enquiry->question, 0, 50)}}</td>
                              <td class=" last">
                                 <a href="javascript:;" class="openmodal" onclick="openDetails({{$enquiry->id}})">View</a>
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
</section>
</div>
<div id="modalnew" class="modal fade bd-example-modal-lg post-details" style="z-index: 99999999999;">
   Modal content 
   <div class="modal-content"><span class="close">&times;</span>
   </div>
</div>
<script>
   function openDetails(id) {
   // alert(id);
       $.ajax({
         url: '{{ route('modal-data')}}' + '?id=' + id,
         method: 'get',
         success: function(response) {
           //  alert(JSON.stringify(response));
             
           $(".modal-content").html(JSON.parse(response));
           $('#modalnew').modal('show');
         },
         error: function(err) {
           console.log(JSON.stringify(err));
         }
       });
   }
</script>
@endsection