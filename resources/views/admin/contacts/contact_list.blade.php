@extends('layouts.admin')
@section('content')
<div class="right_col" role="main">
   <div class="clearfix"></div>
   <div class="row">
      @if($message=Session::get('success'))
      <div class="alert bg-green alert-dismissible" role="alert" id="alert">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">×</span>
         </button>
         {{ $message }}
      </div>
      @endif
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_content">
               <div class="table-responsive">
                  <table id="table_id" class="table table-striped jambo_table bulk_action">
                     <thead>
                        <tr class="headings">
                           <th class="column-title">Address</th>
                           <th class="column-title">Phone</th>
                           <th class="column-title">Operating Hours</th>
                           <th class="column-title no-link last"><span class="nobr">Action</span>
                           </th>
                           <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                           </th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($contact_details as $key => $contact_details)
                        <tr class="even pointer">
                           <td class=" ">{{$contact_details->address}}</td>
                           <td class=" ">{{$contact_details->phone}}</td>
                           <td class=" ">{{$contact_details->operating_hours}}</td>
                           <td class=" last"><a href="{{ route('edit-contact-details',$contact_details->id) }}">Edit</a>
                              <a href="{{ route('delete-contact-details',$contact_details->id) }}" onclick="return confirm('Are you sure to delete this?')">Delete</a>
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
</div>
@include('layouts.admin.footer')
<script>
   $(document).ready( function () {
       $('#table_id').DataTable();
   } );
</script>
@endsection