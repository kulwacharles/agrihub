
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
            class="logo-name">Otika</span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown ">
          <a href="{{url('/home')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="briefcase"></i><span>Farmer</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{url('farmer/')}}">Manage Farmer</a></li>
            <li><a class="nav-link" href="{{url('manage-group')}}">Manage Goup</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Farmer Asset</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{url('land')}}">Manage land asset</a></li>
            <li><a class="nav-link" href="portfolio.html">Manage other assets</a></li>
      
      </ul>
            </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Shop</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{url('manage/supplier')}}">Manage Supplier</a></li>
            <li><a class="nav-link" href="{{url('manage/product')}}">Manage Product</a></li>

            <li><a class="nav-link" href="{{url('purchase')}}">Purchase</a></li>
            <li><a class="nav-link" href="{{('sales')}}">Sell Input</a></li>
           
          </ul>
        </li>
        <li class="menu-header">UI Elements</li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Basic
              Components</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="alert.html">Alert</a></li>
            <li><a class="nav-link" href="badge.html">Badge</a></li>
            <li><a class="nav-link" href="breadcrumb.html">Breadcrumb</a></li>
            <li><a class="nav-link" href="buttons.html">Buttons</a></li>
            <li><a class="nav-link" href="collapse.html">Collapse</a></li>
            <li><a class="nav-link" href="dropdown.html">Dropdown</a></li>
            <li><a class="nav-link" href="checkbox-and-radio.html">Checkbox &amp; Radios</a></li>
            <li><a class="nav-link" href="list-group.html">List Group</a></li>
            <li><a class="nav-link" href="media-object.html">Media Object</a></li>
            <li><a class="nav-link" href="navbar.html">Navbar</a></li>
            <li><a class="nav-link" href="pagination.html">Pagination</a></li>
            <li><a class="nav-link" href="popover.html">Popover</a></li>
            <li><a class="nav-link" href="progress.html">Progress</a></li>
            <li><a class="nav-link" href="tooltip.html">Tooltip</a></li>
            <li><a class="nav-link" href="flags.html">Flag</a></li>
            <li><a class="nav-link" href="typography.html">Typography</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="shopping-bag"></i><span>Advanced</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="avatar.html">Avatar</a></li>
            <li><a class="nav-link" href="card.html">Card</a></li>
            <li><a class="nav-link" href="modal.html">Modal</a></li>
            <li><a class="nav-link" href="sweet-alert.html">Sweet Alert</a></li>
            <li><a class="nav-link" href="toastr.html">Toastr</a></li>
            <li><a class="nav-link" href="empty-state.html">Empty State</a></li>
            <li><a class="nav-link" href="multiple-upload.html">Multiple Upload</a></li>
            <li><a class="nav-link" href="pricing.html">Pricing</a></li>
            <li><a class="nav-link" href="tabs.html">Tab</a></li>
          </ul>
        </li>
        <li><a class="nav-link" href="blank.html"><i data-feather="file"></i><span>Blank Page</span></a></li>
        
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="pie-chart"></i><span>Charts</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="chart-amchart.html">amChart</a></li>
            <li><a class="nav-link" href="chart-apexchart.html">apexchart</a></li>
            <li><a class="nav-link" href="chart-echart.html">eChart</a></li>
            <li><a class="nav-link" href="chart-chartjs.html">Chartjs</a></li>
            <li><a class="nav-link" href="chart-sparkline.html">Sparkline</a></li>
            <li><a class="nav-link" href="chart-morris.html">Morris</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="feather"></i><span>Icons</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="icon-font-awesome.html">Font Awesome</a></li>
            <li><a class="nav-link" href="icon-material.html">Material Design</a></li>
            <li><a class="nav-link" href="icon-ionicons.html">Ion Icons</a></li>
            <li><a class="nav-link" href="icon-feather.html">Feather Icons</a></li>
            <li><a class="nav-link" href="icon-weather-icon.html">Weather Icon</a></li>
          </ul>
        </li>
       
      
     
        
        
        <li><a class="nav-link" href="vector-map.html"><i data-feather="map-pin"></i><span>Vector
              Map</span></a></li>
        <li class="menu-header">Pages</li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="user-check"></i><span>Auth</span></a>
          <ul class="dropdown-menu">
            <li><a href="auth-login.html">Login</a></li>
            <li><a href="auth-register.html">Register</a></li>
            <li><a href="auth-forgot-password.html">Forgot Password</a></li>
            <li><a href="auth-reset-password.html">Reset Password</a></li>
            <li><a href="subscribe.html">Subscribe</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="alert-triangle"></i><span>Errors</span></a>
          
        </li>
      
       
      </ul>
    </aside>
  