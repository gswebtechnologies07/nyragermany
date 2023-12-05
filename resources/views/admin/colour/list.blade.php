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
            <a href="{{route('add-colour')}}"><button type="button" class="btn btn-primary">Add New</button></a>
            <div class="table-responsive">
               <table id="table_id" class="table table-striped jambo_table bulk_action">
                  <thead>
                     <tr class="headings">
                        <th class="column-title">Colour Code </th>
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
                     @foreach($colours as $key => $colour)
                     <tr class="even pointer">
                        <td class=" ">{{$colour->colour_code}}</td>
                        <td class="last">
                           <a  href="{{ route('edit-colour',$colour->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                           <a  href="{{ route('colour-delete',$colour->id) }}" onclick="return confirm('Are you sure to delete this?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
<!--change status through ajax-->
<script>
   function updateStatus(id, selectedId) {
       var _token = "{{csrf_token()}}";
       var status = document.getElementById('status').options[selectedId].value;
       var qs = {
           id: id,
           status: status,
           _token: _token
       };
       
       $.ajax({
           url: "{{route('product-status')}}",
           method: "POST",
           data: qs,
           success: function(result) {
               alertify.set('notifier', 'position', 'top-right');
               alertify.success(result.message);
           },
           error: function(request, status, error) {
               console.log('Error is' + request.responseText);
           }
       });
   }
</script>