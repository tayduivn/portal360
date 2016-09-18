<!--header start-->
<header id="header" class="header white-bg clearfix">
      <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
    <!--logo start-->
    <a href="{{ route('alpha.news.newslist')}}" class="logo">Apollo<span>360</span></a>
    <!--logo end-->
    <div class="top-nav ">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                     
                     <span>
                       {{ $app_title }} - {{ $center_name_title }}

                     </span>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <!-- <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li> -->
                    <!-- <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li> -->
                    <!-- <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li> -->
                    <li><a href="{{ URL::to('user/logout') }}"><i class="fa fa-key"></i> {{ trans('app.logout') }}</a></li>
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!--search & user info end-->
    </div>
</header>
<!--header end-->