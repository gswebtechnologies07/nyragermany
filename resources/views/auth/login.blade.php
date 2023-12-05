@extends('layouts.front_main')
@section('content')
<section class="login" style="padding-top: 100px;">
<div class="container">
   <div class="row">
      <div class="col-md-5 col-md-6 col-12 m-auto py-5">
         <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div>
               <x-label for="email" :value="__('Email')" />
               <x-input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <!-- Password -->
            <div class="mt-4">
               <x-label for="password" :value="__('Password')" />
               <x-input id="password" class="form-control block mt-1 w-full"
                  type="password"
                  name="password"
                  required autocomplete="current-password" />
            </div>
            <div class="text-center new_login">
                <br>
               <x-button class="ml-3 btn btn-primary ">
                  {{ __('Log in') }}
               </x-button>
            </div>
            
         </form>
      </div>
   </div>
</div>
@endsection