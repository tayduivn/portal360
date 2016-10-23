@extends('layouts.blank')

@section('title', trans('app.page_title'))

@section('styles')
<!--   1e1413e10f011dfebcc6b900cffce8e8da2906d0 -->
<link href="{{ URL::asset('public/theme/css/bootstrap.min.css') }}" rel="stylesheet">     
<link href="{{ URL::asset('public/theme/css/bootstrap-reset.css') }}" rel="stylesheet">     
<link href="{{ URL::asset('public/theme/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">     
<link href="{{ URL::asset('public/theme/css/style.css') }}" rel="stylesheet">     
<link href="{{ URL::asset('public/theme/css/style-responsive.css') }}" rel="stylesheet">     
<style type="text/css">
    
    #login_content div.row div.title-logo{
        text-align: center;
    }
    #login_content #logo_mobile{

    }
    #login_content .background{
        position: fixed;
    }
  
     #login_content .background_mobile{
    }

    #login_content .title-logo{
        margin-top: 20px;
    }
    #login_content form.form-signin
    {
        margin: 20px;
    }
    #login_content .addition_info{
        background: #41cac0;
        height: 100px; 
        width:100%;
        font-family: cursive;
        position: relative;
        padding: 20px 20px 20px 50px;
    }

    #login_content .addition_info .info{
        padding-top: 15px;
        color: #ffffff;
    }
    #login_content .addition_info .info a{
       color: #ffffff;
    }
    #login_content{
        overflow-x: hidden;
    }
    @media screen and (min-width: 780px) {
       
    }
    @media screen and (max-width: 767px) and (min-width: 500px) {
       #login_content .background{
            position: absolute;
        }
        .title-logo #logo img {
            position: inherit;
        }       
        .title-logo #logo{
            padding-right: 0;
        }
        #login_content form.form-signin{
            position: inherit;
        }
        .sign-in{
            padding: 20px;
        }
        .sign-in .form-signin{
            padding: 0!important;
            margin: 0!important;
            max-width: none!important;
        }
    }
    @media screen and (max-width: 499px){
        .title-logo #logo img {
            position: inherit;
        }       
        .title-logo #logo{
            padding-right: 0;
        }
        #login_content .background{
            position: absolute;
        }
        #login_content form.form-signin{
            position: inherit;
        }
        .sign-in{
            padding: 20px;
        }
        .sign-in .form-signin{
            padding: 0!important;
            margin: 0!important;
            max-width: none!important;
        }
    }

    @media screen and (orientation:landscape) {

    }

    body{
       
    }
    .change_lang{
        text-align: right!important;
    }
    .change_lang a{
        color: #fff!important;
    }
    .addition_info{
        height: 45px!important;
        padding: 0 20px 0 50px!important;
    }
    .addition-info-row{
        padding: 0;
        margin: 0;
        width: 100%;
        bottom:0;
        position: fixed;
    }
    .background .thumbnail{
        padding: 0;
        border: none;
        border-radius: 0;
    }
</style>
@stop

@section('content')
@if ($isMobile == false)
<div id = "login_content">
    <!-- <div class="background">
        <img src="{{ URL::asset('public/img/background-desktop.png') }}" alt="Trung Tâm Anh Ngữ Quốc Tế Apollo" style="width: 100%; height: auto"/>
    </div> -->
    <div class="row background">
      <div class="col-xs-12 col-md-12">
        <a  class="thumbnail">
          <img src="{{ URL::asset('public/img/background-desktop.png') }}" alt="Trung Tâm Anh Ngữ Quốc Tế Apollo">
        </a>
      </div>
    </div>
    <div class="row middle_content">
        <!-- <div class="title-logo col-lg-3 col-md-3 col-sm-12 col-xs-12 visible-xs visible-sm">
                <div id="logo" class="">
                    <img src="{{ URL::asset('/public/img/logo_apollo.png') }}" alt="Trung Tâm Anh Ngữ Quốc Tế Apollo" style="width: 160px; height: auto"/>
                </div>      
        </div> -->
        <div class="sign-in col-lg3 col-md-3 col-sm-12 col-xs-12">
            <form class="form-signin" action="" method="post">
            <h2 class="form-signin-heading">{{ trans('user_login.login') }}</h2>     
                     
                <div class="login-wrap">

                    <p class="change_lang">
                        <span class="btn-group btn-group-xs" role="group" aria-label="Extra-small button group"> 
                            <a type="button" href="{{ URL::to('user/switchLanguage') }}?lang=en" class="btn btn-default @if(App::getLocale() == 'en') btn-info @endif">English</a> 
                            <a type="button" href="{{ URL::to('user/switchLanguage') }}?lang=vi" class="btn btn-default @if(App::getLocale() == 'vi') btn-info @endif" >Tiếng Việt</a>
                        </span>
                    </p>

                    <input type="text" id="username" class="form-control" placeholder="{{ trans('user_login.customer_id') }}" name="username" value="{{ $username }}" autofocus>
                    <input type="password" id="password" class="form-control" name="password" value="{{ $password }}" placeholder="{{ trans('user_login.password') }}">
                    <label class="checkbox">
                        <input type="checkbox" id="remember_me" name="remember_me" value="1"> {{ trans('user_login.remember_me') }}
                    </label>
                    <p >
                    @if($result == 'not_for_portal')
                    {{ trans('user_login.account_is_not_a_customer_error_msg') }}
                    @elseif($result == 'login_failed')
                    {{ trans('user_login.login_failed_error_msg') }}
                    @endif
                </p> 
                    <button class="btn btn-lg btn-login btn-block" type="submit" id="submit" name="submit" value="{{ trans('user_login.login') }}">{{ trans('user_login.login') }}</button>
                </div>
            
                
            </form>            
        </div>
        <!-- <div class="hidden-xs col-lg-5 col-md-6 col-sm-6">
        </div> -->
        <div class="title-logo col-lg-3 col-md-3 col-sm-12 col-xs-12 visible-md visible-lg col-md-offset-6 col-lg-offset-6">
                <div id="logo" class="">
                    <img src="{{ URL::asset('/public/img/logo_apollo.png') }}" alt="Trung Tâm Anh Ngữ Quốc Tế Apollo" style="width: 160px; height: auto"/>
                </div> 
                <!-- <div id="description">

                </div>           -->
        </div>
        
        
    </div>
</div>
@else

<div id = "login_content">
    <!-- <div class="background">
        <img src="{{ URL::asset('public/img/background-mobile.png') }}" alt="Trung Tâm Anh Ngữ Quốc Tế Apollo" style="width: 100%; height: auto"/>
    </div> -->
    <div class="row background">
      <div class="col-xs-12 col-md-12">
        <a  class="thumbnail">
          <img src="{{ URL::asset('public/img/background-mobile.png') }}" alt="Trung Tâm Anh Ngữ Quốc Tế Apollo">
        </a>
      </div>
    </div>
    <div class="row middle_content">
        <div class="title-logo col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div id="logo" class="">
                    <img src="{{ URL::asset('/public/img/logo_apollo.png') }}" alt="Trung Tâm Anh Ngữ Quốc Tế Apollo" style="width: 130px; height: auto"/>
                </div> 
                <!-- <div id="description">

                </div>    -->       
        </div>
        <div class="sign-in col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form class="form-signin" action="" method="post">
            <h2 class="form-signin-heading">{{ trans('user_login.login') }}</h2>     
                     
                <div class="login-wrap">

                    <p class="change_lang">
                        <span class="btn-group btn-group-xs" role="group" aria-label="Extra-small button group"> 
                            <a type="button" href="{{ URL::to('user/switchLanguage') }}?lang=en" class="btn btn-default @if(App::getLocale() == 'en') btn-info @endif">English</a> 
                            <a type="button" href="{{ URL::to('user/switchLanguage') }}?lang=vi" class="btn btn-default @if(App::getLocale() == 'vi') btn-info @endif" >Tiếng Việt</a>
                        </span>
                    </p>

                    <input type="text" id="username" class="form-control" placeholder="{{ trans('user_login.customer_id') }}" name="username" value="{{ $username }}" autofocus>
                    <input type="password" id="password" class="form-control" name="password" value="{{ $password }}" placeholder="{{ trans('user_login.password') }}">
                    <label class="checkbox">
                        <input type="checkbox" id="remember_me" name="remember_me" value="1"> {{ trans('user_login.remember_me') }}
                    </label>
                    <p >
                    @if($result == 'not_for_portal')
                    {{ trans('user_login.account_is_not_a_customer_error_msg') }}
                    @elseif($result == 'login_failed')
                    {{ trans('user_login.login_failed_error_msg') }}
                    @endif
                </p> 
                    <button class="btn btn-lg btn-login btn-block" type="submit" id="submit" name="submit" value="{{ trans('user_login.login') }}">{{ trans('user_login.login') }}</button>
                </div>
            
                
            </form>            
        </div>     
    </div>
</div>

@endif

@stop

@section('scripts')

    {{ ViewUtil::renderJsLanguage('user_login') }}

    <script src="{{ URL::asset('public/js/user_login.js') }}"></script>
     
@stop