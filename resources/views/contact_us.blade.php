@extends('layouts.front_main')
@section('content')
<section class="section-1 bg-about contact mt-5" style="background-image: url(public/images/bg-heading-01.jpg)">
   <div class="container py-5 ">
      <div class="row">
         <div class="col-12">
            <h2 class="h2-heading underLine fs-1">Contact Us</h2>
            <!--<p>Nyra, the name in acrylic laminates and home design. Elevate your surroundings, <br> fall in love with our products, and turn your home into a celebrity-worthy masterpiece with your personal touch.</p>-->
         </div>
      </div>
   </div>
</section>
<section class="content-contact mt-5">
   <div class="container py-5">
      <div class="row">
         <div class="col-md-6">
            <!--<label class="fs-2 mb-3"><strong>For More Inquiry Click Below </strong></label>-->
            <!--<a class="pry-btn" href="mailto:nyraimpex.official@gmail.com">-->
            <!--nyraimpex.official@gmail.com -->
            <!--</a>-->
            @if($message=Session::get('success'))
              <div class="alert alert-dismissible new_alert_uy bg-conatact text-white" role="alert" id="alert">
                 <button type="button" class="close" data-dismiss="alert"   >
                 <span aria-hidden="true">×</span>
                 </button>
                 {{ $message }}
              </div>
              @endif
            <div class="py-3">
               <label for="">EMAIL US WITH EASE</label>
               <h2 class="h2-heading underLine">Submit form</h2>
               <p>Thank you for your interest in our interior design services! If you have any questions, or inquiries, or need further information, our team is here to assist you. Don't hesitate to get in touch.</p>
               <form method="POST" action="{{route('add-contact')}}">
                     @csrf
               <div class="mb-3 input-common">
                  <label for="">Your Name *</label>
                  <input type="text" name="name" placeholder="Enter Your Name">
               </div>
               <div class="mb-3 input-common">
                  <label for="">Your Email*</label>
                  <input type="email" name="email" placeholder="Enter Your Email">
               </div>
               <div class="mb-3 input-common">
                  <label for="">Subject  *</label>
                  <input type="text" name="subject" placeholder="Enter Your Subject">
               </div>
               <div class="mb-3 input-common">
                  <label for="">Your Message *</label>
                  <textarea type="textarea" name="message" placeholder="Enter Your Message">
                  </textarea>
               </div>
               <!--<a href="#" class="pry-btn py-2"> Send</a>-->
               <button type="submit" class="pry-btn py-2">Send</button>
               </form>
            </div>
         </div>
         <div class="col-md-6 bg-conatact">
            <div class="px-3 py-3">
               <h4 class="h2-heading underLine fs-1 mb-3 pb-3 text-white">Contact us</h4>
               <p class="text-white">Feel free to contact us with a project proposal, quote or estimation, or simply to say
                  hello. Here’s our contact info.
               </p>
               <div class="list-panels mb-3 gap-2 d-flex justify-content-start align-items-start">
                  <div class="img-wrapper">
                     <img class="img-fluid" src="{{URL::to('/')}}/public/images/location.svg" alt="">
                  </div>
                  <div class="normal-body">
                     <h4 class="fw-bold mb-0  text-white">Address 1</h4>
                     <p class="text-white">
                        {{get_setting('address')}}
                     </p>
                  </div>
               </div>
               <div class="list-panels mb-3 gap-2 d-flex justify-content-start align-items-start">
                  <div class="img-wrapper">
                     <img class="img-fluid" src="{{URL::to('/')}}/public/images/location.svg" alt="">
                  </div>
                  <div class="normal-body">
                     <h4 class="fw-bold mb-0  text-white">Address 2</h4>
                     <p class="text-white">
                        {{get_setting('add_2')}}
                     </p>
                  </div>
               </div>
               <div class="list-panels mb-3 gap-2 d-flex justify-content-start align-items-start">
                  <div class="img-wrapper">
                     <img class="img-fluid" src="{{URL::to('/')}}/public/images/location.svg" alt="">
                  </div>
                  <div class="normal-body">
                     <h4 class="fw-bold mb-0  text-white">Address 3</h4>
                     <p class="text-white">
                        {{get_setting('add_3')}}
                     </p>
                  </div>
               </div>
               <div class="list-panels mb-3 gap-2 d-flex justify-content-start align-items-start">
                  <div class="img-wrapper">
                     <img class="img-fluid" src="{{URL::to('/')}}/public/images/location.svg" alt="">
                  </div>
                  <div class="normal-body">
                     <h4 class="fw-bold mb-0  text-white">Address 4</h4>
                     <p class="text-white">
                        {{get_setting('add_4')}}
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="container-fluid mb-4">
   <div class="row">
      <div class="col-12 p-0">
         <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3432.0647482854383!2d76.81982507405667!3d30.660305189132096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390feb44dcadeca1%3A0x7b7f65a69081f6e8!2sGS%20Web%20Technologies%3A%20Website%2C%20Mobile%20App%20Development%2C%20Graphic%20Designing%20%26%20Digital%20Marketing%20Company%20in%20Zirakpur%2C%20India!5e0!3m2!1sen!2sin!4v1695040188901!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
         <div class="d-flex justify-content-center align-items-center mb-1">
            <img src="https://images.pexels.com/photos/1080721/pexels-photo-1080721.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="img-fluid w-100 new-img-map">
         </div>
      </div>
   </div>
</div>
@endsection