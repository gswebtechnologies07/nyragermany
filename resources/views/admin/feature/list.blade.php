@include('layouts.admin.header')
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
            </div>
            <a href="{{route('add-feature')}}"><button type="button" class="btn btn-primary">Add New</button></a>
            <div class="table-responsive">
               <table id="table_id" class="table table-striped jambo_table bulk_action">
                  <thead>
                     <tr class="headings">
                        <th class="column-title">Feature Name </th>
                        <th class="column-title">Feature Image </th>
                        <th class="column-title no-link last">
                           <span class="nobr">Action</span>
                           <!--<th class="column-title">Status </th>-->
                        </th>
                        <th class="bulk-actions" colspan="7">
                           <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($features as $key => $feature)
                     <tr class="even pointer">
                        <td class=" ">{{$feature->name}}</td>
                        <td class=" "><img class="new_images_admin" id="output" src="{{URL::to('/')}}/public/images/features/{{$feature->image}}"></td>
                        <td class="last">
                           <a  href="{{ route('edit-feature',$feature->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                           <a  href="{{ route('feature-delete',$feature->id) }}" onclick="return confirm('Are you sure to delete this?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
@include('layouts.admin.footer')
