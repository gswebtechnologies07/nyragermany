@extends('layouts.front_main')
@section('content')
<section class="new_terms_condition">'
    <div class="container">
        <div class="row">
            <div class="terms_condition new_line text-center wow fadeInUp" data-wow-delay="0.1s">
                  <h2 class="fw-bold">{{$privacy->privacy_title}}</h2>
            </div> 
            <div class="terms_condition_dev mt-5">
                <p>{!!$privacy->privacy_description!!}</p>
            </div>    
        </div>    
    </div>    
</section>
@endsection
