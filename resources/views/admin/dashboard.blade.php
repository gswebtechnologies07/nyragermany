@extends('layouts.admin')
@section('content')
<div class="right_col" role="main">
   <div class="row tile_count">
      <div class="new_dashboard">
         <a href="#">
            <div class="col-md-4 col-sm-4 col-xs-6 ">
               <div class="small-box bg-info">
                  <div class="sde">
                     <div class="inner">
                        <h3>{{$total_enquiry}}</h3>
                        <p>Total Enquiries</p>
                     </div>
                     <div class="icon">
                        <i class="ion ion-bag"></i>
                     </div>
                  </div>
                  <div class="ivrd">
                     <i class="fa fa-user"></i>
                  </div>
               </div>
            </div>
         </a>
         <a href="#">
            <div class="col-md-4 col-sm-4 col-xs-6 ">
               <div class="small-box bg-info">
                  <div class="sde">
                     <div class="inner">
                        <h3>234</h3>
                        <p>Total Enquiries</p>
                     </div>
                     <div class="icon">
                        <i class="ion ion-bag"></i>
                     </div>
                  </div>
                  <div class="ivrd">
                     <i class="fa fa-users" aria-hidden="true"></i>
                  </div>
               </div>
            </div>
         </a>
         <a href="#">
            <div class="col-md-4 col-sm-4 col-xs-6 ">
               <div class="small-box bg-info">
                  <div class="sde">
                     <div class="inner">
                        <h3>56</h3>
                        <p>Total Enquiries</p>
                     </div>
                     <div class="icon">
                        <i class="ion ion-bag"></i>
                     </div>
                  </div>
                  <div class="ivrd">
                     <i class="fa fa-user"></i>
                  </div>
               </div>
            </div>
         </a>
      </div>
      <br />
   </div>
</div>
@endsection