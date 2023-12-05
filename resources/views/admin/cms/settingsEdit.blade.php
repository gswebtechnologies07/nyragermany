@extends('layouts.admin')
@section('content')
<div class="right_col" role="main" style="min-height: 918.8px;">
    <section class="content-header">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{__('Settings')}}</h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- Content Header (Page header) -->
        <section class="content">
            <div class="container-fluid">
                <div class="row mb-2">

                    @if($error=Session::get('error'))
                    <div class="alert bg-red alert-dismissible" role="alert" id="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        {{ $error }}
                    </div>

                    @endif
                    @if($message=Session::get('success'))
                    <div class="alert bg-green alert-dismissible" role="alert" id="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        {{ $message }}
                    </div>

                    @endif<br>
                    <div class="col-sm-12">

                        @if(count($errors)>0)
                        <div class='alert alert-danger'>
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif<br>
                        <div class="bg-ytr col-8 m-auto">
                            <form method="POST" action="{{route('settings-update')}}"  enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                @if(!empty($settings->id))
                                 <input type="hidden" name="_method" value="Patch" />
                                <input type="hidden" name="id" value="{{old('id',$settings->id)}}">
                                @else
                                <input type="hidden" name="id" value="">
                                @endif
                                <div class="col-sm-12">
                                    <div class="from_add">
                                        <label>{{__('Site Title')}}:</label>
                                        <input type="text" id="first-name" name="site_title" required="required" class="form-control col-md-7 col-xs-12" value="{{old('site_title',$settings->site_title)}}"><br>
                                        <label>{{__('Meta Description')}}:</label>
                                         <textarea type="text" id="meta_description" name="meta_description" required="required" class="form-control col-md-7 col-xs-12">{{$settings->meta_description}}</textarea><br>
                                        <label>{{__('Meta Keywords')}}:</label>
                                         <input type="text" id="meta_key" name="meta_key" required="required" class="form-control col-md-7 col-xs-12" value="{{old('meta_key',$settings->meta_key)}}"><br>
                                        
                                        <label>{{__('Meta Title')}}:</label>
                                         <input type="text" id="meta_title" name="meta_title" required="required" class="form-control col-md-7 col-xs-12" value="{{old('meta_title',$settings->meta_title)}}"><br>
                                        
                                         <label>{{__('Email')}}:</label>
                                         <input type="text" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" value="{{old('email',$settings->email)}}"><br>
                                         
                                         
                                         <label>{{__('Phone')}}:</label>
                                         <input type="text" id="phone" name="phone" required="required" class="form-control col-md-7 col-xs-12" value="{{old('phone',$settings->phone)}}"><br>
                                         
                                         
                                        <label>{{__('Address One')}}:</label>
                                       <input type="text" id="address" name="address" required="required" class="form-control col-md-7 col-xs-12" value="{{old('address',$settings->address)}}"><br>
                                       
                                       <label>{{__('Address Two')}}:</label>
                                       <input type="text" id="add_2" name="add_2" required="required" class="form-control col-md-7 col-xs-12" value="{{old('add_2',$settings->add_2)}}"><br>
                                        
                                        <label>{{__('Address Three')}}:</label>
                                       <input type="text" id="add_3" name="add_3" required="required" class="form-control col-md-7 col-xs-12" value="{{old('add_3',$settings->add_3)}}"><br>
                                        
                                        <label>{{__('Address Four')}}:</label>
                                       <input type="text" id="add_4" name="add_4" required="required" class="form-control col-md-7 col-xs-12" value="{{old('add_4',$settings->add_4)}}"><br>
                                        
                                        <label>{{__('Instagram')}}:</label>
                                         <input type="text" id="address" name="instagram" required="required" class="form-control col-md-7 col-xs-12" value="{{old('instagram',$settings->instagram)}}"><br>
                                        
                                        <label>{{__('Twitter')}}:</label>
                                         <input type="text" id="address" name="twitter" required="required" class="form-control col-md-7 col-xs-12" value="{{old('twitter',$settings->twitter)}}"><br>
                                        
                                        <label>{{__('Facebook')}}:</label>
                                         <input type="text" id="address" name="facebook" required="required" class="form-control col-md-7 col-xs-12" value="{{old('facebook',$settings->facebook)}}"><br>
                                        
                                        
                                        <label>{{__('Logo')}}:</label>
                                        @if(!empty($settings->logo))
                                         <img id="output" src="{{URL::to('/')}}/public/images/settings/{{$settings->logo}}" height="50" width="50">
                                        @endif
                                        <input type="hidden" name="old_logo" value="{{$settings->logo}}">
		                                 <input type="file" name="new_logo" id="logo" accept="image/*" class="with-icon" onchange="loadFile(event)">
                                        <script>
                                            var loadFile = function(event) {
                                                var image = document.getElementById('output');
                                                image.src = URL.createObjectURL(event.target.files[0]);
                                                $('#output').slideDown();
                                                $('#output').height(50);
                                                $('#output').width(50);
                                            };
                                        </script>

                                        <label>{{__('Favicon')}}:</label>
                                        @if(!empty($settings->fav_icon))
                                         <img id="fav_output" src="{{URL::to('/')}}/public/images/settings/{{$settings->fav_icon}}" height="50" width="50">
                                        @endif
                                       <input type="hidden" name="old_fav_icon" value="{{$settings->fav_icon}}" class="">
		                                <input type="file" name="new_fav_icon" id="fav_icon" accept="image/*" class="with-icon" onchange="loadFile1(event)">
                                         <script>
                                            var loadFile1 = function(event) {
                                                var image = document.getElementById('fav_output');
                                                image.src = URL.createObjectURL(event.target.files[0]);
                                                $('#output').slideDown();
                                                $('#output').height(50);
                                                $('#output').width(50);
                                            };
                                         </script>
                                        
                                    </div>
                                </div>
                                <div class="sumiy">
                                    <button type="submit" class="btn btn-danger">{{__('Save')}}</button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
</div>

@endsection