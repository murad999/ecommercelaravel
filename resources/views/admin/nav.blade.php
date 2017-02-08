@php 
    $current_location=class_basename(Route::currentRouteAction()); 
    //dump($current_location);
@endphp

<div class="col-sm-3 col-md-2 sidebar  left-bar">
	<div class="panel-group" id="accordion-menu">
		<!-- ======================Admin Management start========================== -->		

	<!-- Map start -->
    <div class="panel panel-default">
        <div class="panel-heading">
        @php $overview=''; @endphp
        @if($current_location=='HomeController@index') 
            @php $overview='color:red'; @endphp
        @endif
            <h4 class="panel-title">
            {{link_to_route('dashboard','Dashboard',null,array('style'=>$overview))}}
            </h4>
        </div>    			
	</div>
   <!-- Map end -->

    @if(checkMenuActive(['SiteSettingsController@edit'],$menu_list))
           <!-- Site Settings Management start -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    {{link_to('#site_settings_management',mystudy_case('site_settings_management'),array('data-toggle'=>'collapse','data-parent'=>'#accordion-menu'))}}
                    </h4>
                </div>
                <div id="site_settings_management" class="panel-collapse collapse {{ check_menu_active($current_location,array('SiteSettingsController','StaticLangsController@index')) }}">
                    <div class="panel-body panel-body-custom">
                        <ul class="left-bar-menu-ul"> 

                        @if(checkMenuActive('SiteSettingsController@edit',$menu_list))
                            <li id="SiteSettingsController_edit">{{ link_to_route('site_settings.edit','Edit Site Settings','1') }}</li>
                        @endif
                       
                        </ul>
                    </div>
                </div>
            </div>
           <!-- Site Settings Management end -->
    @endif

    
 @if(checkMenuActive(['RolesController@create','RolesController@index','RegisterController@showRegistrationForm','RegisterController@showUserLists'],$menu_list))
           <!-- User Management start -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    {{link_to('#user_management',mystudy_case('user_management'),array('data-toggle'=>'collapse','data-parent'=>'#accordion-menu'))}}
                    </h4>
                </div>
                <div id="user_management" class="panel-collapse collapse {{ check_menu_active($current_location,array('RolesController@create','RolesController@index','UsersController','RegisterController')) }}">
                    <div class="panel-body panel-body-custom">
                        <ul class="left-bar-menu-ul">

                        @if(checkMenuActive('RolesController@create',$menu_list))
                            <li id="RolesController_create">{{ link_to_route('roles.create','Role Create') }}</li>
                        @endif

                        @if(checkMenuActive('RolesController@index',$menu_list))
                            <li id="RolesController_index">{{ link_to_route('roles.index','Role lists') }}</li>
                        @endif

                        @if(checkMenuActive('RegisterController@showRegistrationForm',$menu_list))
                            <li id="RegisterController_showRegistrationForm">{{ link_to('/register','User Create') }}</li>
                        @endif

                        @if(checkMenuActive('RegisterController@showUserLists',$menu_list))
                            <li id="RegisterController_showUserLists">{{ link_to_route('users.index','User lists') }}</li>
                        @endif

                        </ul>
                    </div>
                </div>
            </div>
           <!-- User Management end -->
    @endif

 




         <!-- =============Admin Management end================ -->
     </div>
 </div>

