<!DOCTYPE html>
<html lang="en">
 
  @include('layouts.header')

  <body>
    <!-- <div class="loader"></div>
    -->
    <div id="app">
      <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        @include('layouts.top')

        <div class="main-sidebar sidebar-style-2">
      @include('layouts.aside')
        </div>
       <!-- Main Content -->
      <div class="main-content">

        @yield('content')
        <div class="settingSidebar">
            @include('layouts.setting')
        </div>
      </div>
      @include('layouts.footer')
    </div>

  
</div>
@include('layouts.script')

  </body>
</head>