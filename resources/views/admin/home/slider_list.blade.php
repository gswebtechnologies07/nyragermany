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
            <a href="{{route('add-slider')}}"><button type="button" class="btn btn-primary">Add New</button></a>
            <div class="table-responsive">
               <table id="table_id" class="table table-striped jambo_table bulk_action">
                  <thead>
                     <tr class="headings">
                        <th class="column-title">Title</th>
                        <th class="column-title">Description </th>
                        <th class="column-title no-link last">
                           <span class="nobr">Action</span>
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($sliders as $key => $slider)
                     <tr class="even pointer">
                        <td class=" ">{{$slider->title}}</td>
                        <td class=" ">{!!substr($slider->description, 0, 100)!!}</td>
                        <td class="last">
                           <a  href="{{ route('edit-slider',$slider->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                           <a  href="{{ route('slider-delete',$slider->id) }}" onclick="return confirm('Are you sure to delete this?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
@include('layouts.admin.footer')
<script>
   $(document).ready( function () {
       $('#table_id').DataTable();
   } );
</script>
