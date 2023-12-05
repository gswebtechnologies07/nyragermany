<!-- footer content -->
<footer>
   <div class="pull-right">
      Designed and Development by <a href="https://gswebtech.com/" target="blank">GS Web Technologies</a>
   </div>
   <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>
<!-- jQuery -->
<script src="{{asset('assets/admin/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('assets/admin/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('assets/admin/vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{asset('assets/admin/vendors/Chart.js/dist/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{asset('assets/admin/vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('assets/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('assets/admin/vendors/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{asset('assets/admin/vendors/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{asset('assets/admin/vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/admin/vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('assets/admin/vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('assets/admin/vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('assets/admin/vendors/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{asset('assets/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('assets/admin/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{asset('assets/admin/vendors/DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('assets/admin/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{asset('assets/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('assets/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('assets/admin/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- Custom Theme Scripts -->
<script src="{{asset('assets/admin/build/js/custom.min.js')}}"></script>
<!--//table-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
<!--Alertify JavaScript -->
<!--<script src="{{URL::to('/')}}/assets/js/alertify.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js" integrity="sha512-JnjG+Wt53GspUQXQhc+c4j8SBERsgJAoHeehagKHlxQN+MtCCmFDghX9/AcbkkNRZptyZU4zC8utK59M5L45Iw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--ckeditor-->
<script>
   window.onload = function() {
     CKEDITOR.replace('myeditor');
     CKEDITOR.replace('editior_two');
     CKEDITOR.replace('editior_three');
     
   };
</script>
<!--Data Table-->
<script>
   $(document).ready( function () {
       $('#table_id').DataTable({
       aaSorting: [[0, 'desc']]
   });
   } );
</script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
   $('.show_confirm').click(function(event) {
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: `Are you sure you want to delete this record?`,
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            form.submit();
          }
        });
    });
   
</script>
<script>
   setTimeout(function() {
   $('#alert').fadeOut('fast');
   }, 2000); 
</script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      <script>
          $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
      </script>
</html>