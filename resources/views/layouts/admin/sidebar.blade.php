<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
   <div class="menu_section">
      <ul class="nav side-menu">
         <li><a href="{{ route('banner-list') }}"><i class="fa fa-picture-o"></i>Banner</a>
         </li>
         <li><a ><i class="fa fa-cogs"></i>Product <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
               <li><a href="{{route('product-list')}}">{{ __('Product') }}</a></li>
               <li><a href="{{route('feature-list')}}">{{ __('Features') }}</a></li>
               <li><a href="{{route('colour-list')}}">{{ __('Colors') }}</a></li>
            </ul>
         </li>
         <li><a href="{{ route('enquiry-list') }}"><i class="fa fa-info"></i>Enquiries</a>
         </li>
         <li>
            <a><i class="fa fa-user-circle" aria-hidden="true"></i> {{ __('About Us') }} <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
               <li><a href="{{ route('about-us-edit') }}">{{ __('Update About') }}</a></li>
               <li><a href="{{ route('section_one_edit') }}">{{ __('Section One') }}</a></li>
               <li><a href="{{ route('section_two_edit') }}">{{ __('Section Two') }}</a></li>
               <li><a href="{{ route('section_three_edit') }}">{{ __('Section Three') }}</a></li>
            </ul>
         </li>
         
         <li>
            <a><i class="fa fa-user-circle" aria-hidden="true"></i> {{ __('CMS') }} <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
               <li><a href="{{ route('terms') }}">{{ __('Terms And Condition') }}</a></li>
               <li><a href="{{ route('privacy') }}">{{ __('Privacy Policy') }}</a></li>
            </ul>
         </li>
         
         <li><a href="{{ route('settings') }}"><i class="fa fa-gear"></i> Settings</a></li>
         
         <li><a href="{{ route('/') }}" target="__blank"><i class="fa fa-globe"></i>Visit Website</a>
      </ul>
   </div>
</div>
<!-- /sidebar menu -->