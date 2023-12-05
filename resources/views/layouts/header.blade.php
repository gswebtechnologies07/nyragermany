<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="title" content="{{get_setting('meta_title')}}">
      <meta name="keywords" content="{{get_setting('meta_key')}}">
      <meta name="description" content="{{get_setting('meta_description')}}">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="icon" href="{{URL::to('/')}}/public/images/settings/{{get_setting('fav_icon')}}" type="image/x-icon"/>
      <title>{{get_setting('site_title')}}</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
      <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}" />
      <!-- <link rel="stylesheet" id="addison-style-css" href="wp-content/themes/addison/style.css" type="text/css" media="screen"> -->
      
   </head>
   <body>
      <header class="mainHeader btClear  position-fixed w-100">
         <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
               <a class="navbar-brand" href="{{route('/')}}"><img width="150" src="{{URL::to('/')}}/public/images/settings/{{get_setting('logo')}}" alt="" /></a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                  aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse mt-3 navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto gap-3 mb-2 top-headers mb-lg-0">
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('/')}}">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About Nyra</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <!-- end Header -->