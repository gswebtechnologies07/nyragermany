@extends('layouts.admin')
@section('content')
<div class="right_col banner-admin" role="main">
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
             
            </div>
            <a href="{{route('add-banner')}}"><button type="button" class="btn btn-primary">Add New</button></a>
            <div class="table-responsive">
               <table id="table_id" class="table table-striped jambo_table bulk_action">
                  <thead>
                     <tr class="headings">
                        <th class="column-title">Image</th>
                        <th class="column-title no-link last"><span class="nobr">Action</span>
                        </th>
                        <th class="bulk-actions" colspan="7">
                           <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($banner as $key => $banners)
                     <tr class="even pointer">
                        <td class=" "><img class="new_images_admin" id="output" src="{{URL::to('/')}}/public/images/settings/{{$banners->image}}"></td>
                        <td class=" last"><a href="{{ route('banner-edit',$banners->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                           <a href="{{ route('banner-delete',$banners->id) }}" onclick="return confirm('Are you sure to delete this?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
<!--</div>-->
@endsection  
<script>
   $(document).ready( function () {
       $('#table_id').DataTable();
   } );
</script>