<!DOCTYPE html>
<html lang="en">
  <head>
  @yield('head')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-graduation-cap"></i></i> <span>Job Entry Admin</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            @include('admin.includes.menu_profile_quick_info')
           <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include('admin.includes.sidebar_menu')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            @include('admin.includes.menu_footer_buttons')
            <!-- /menu footer buttons -->
          </div>
        </div>

         <!-- top navigation -->
         @include('admin.includes.top_nav')
         <!-- /top navigation -->

        @yield('content')

         <!-- footer content -->
         @include('admin.includes.footer')
        <!-- /footer content -->
      </div>
    </div>
    @yield('javaLib')

  </body>
</html>