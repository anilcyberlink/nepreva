<aside id="sidebar_left" class="nano nano-primary affix">

    <!-- Start: Sidebar Left Content -->
    <div class="sidebar-left-content nano-content">

        <!-- Start: Sidebar Header -->
        <header class="sidebar-header">
            <!-- Sidebar Widget - Search (hidden) -->
            <div class="sidebar-widget search-widget hidden">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-search"></i>
                    </span>
                    <input type="text" id="sidebar-search" class="form-control" placeholder="Search...">
                </div>
            </div>
        </header>

        <!-- Start: Sidebar Left Menu -->
        <ul class="nav sidebar-menu">
            <li class="sidebar-label pt15"> Navigations </li>
            <li class="active">
                <a href="{{ url('admin/dashboard') }}">
                    <span class="glyphicon glyphicon-home"></span>
                    <span class="sidebar-title">Dashboard</span>
                </a>
            </li>
            @if (checkAuth(1))
                <li>
                    <a href="{{ url('admin/banner') }}">
                        <span class="fa fa-file-image-o text-info" aria-hidden="true"></span>
                        <span class="sidebar-title"> Manage Banners</span>
                    </a>
                </li>
            @endif
            @if (checkAuth(2))
                <li>
                    @if (Request::segment(2) == 'services' ||
                            Request::segment(2) == 'about-us' ||
                            Request::segment(2) == 'blog' ||
                            Request::segment(2) == 'gallery' ||
                            Request::segment(2) == 'contact' ||
                            Request::segment(2) == 'partners' ||
                            Request::segment(2) == 'career' ||
                            Request::segment(3) == 'career' ||
                            Request::segment(2) == 'certification' ||
                            Request::segment(2) == 'posttype')
                        <a class="accordion-toggle menu-open" href="avoid:javascript;">
                        @else
                            <a class="accordion-toggle" href="avoid:javascript;">
                    @endif
                    <span class="fa fa-files-o text-info"></span>
                    <span class="sidebar-title"> Manage Posts </span>
                    <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        @if (Auth::id() == 1 || Auth::id() == 4 || checkAuth(4))
                            <li
                                class="{{ Request::segment(count(Request::segments())) == 'posttype' ? 'active' : '' }}">
                                <a href="{{ url('type/posttype') }}">
                                    <span class="fa fa-arrows"></span>
                                    Post Types
                                </a>
                            </li>
                            @if (Auth::id() == 1)
                                <li>
                                    <a href="{{ url('admin/postcategory') }}">
                                        <span class="fa fa-arrows"></span>
                                        Post Categories
                                    </a>
                                </li>
                            @endif
                        @endif
                        <!-- Post Type List -->
                        @if ($posttype)
                            @foreach ($posttype as $row)
                                <li
                                    class="{{ Request::segment(2) == $row->uri || (Request::segment(3) == $row->id && Request::segment(2) == 'posttype') || Request::segment(3) == $row->uri ? 'active' : '' }}">
                                    @if (has_posts($row->id))
                                        <a href="{{ url('admin/' . $row->uri) }}">
                                        @else
                                            <a href="{{ url('type/posttype/' . $row->id . '/edit') }}">
                                    @endif
                                    <span class="fa fa fa-arrows-h"></span>
                                    {{ $row->post_type }}
                                    </a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </li>
            @endif

            {{-- @if (checkAuth(4))
      <li class="">
        @if (Request::segment(2) == 'imagecategory' || Request::segment(2) == 'imagegallery')
        <a class="accordion-toggle menu-open" href="avoid:javascript;">
          @else
          <a href="avoid:javascript;" class="accordion-toggle">
            @endif
            <span class="fa fa-file-image-o text-info"></span>
            <span class="sidebar-title"> Manage Photo Gallery </span>
            <span class="caret"></span>
          </a>
          <ul class="nav sub-nav">
            <li class="{{ (Request::segment(2) == 'imagecategory') ? 'active' : ''}}">
              <a href="{{ url('admin/imagecategory') }}">
                <span class="fa fa fa-arrows-h"></span>
                Gallery Category
              </a>
            </li>
            <li class="{{ (Request::segment(2) == 'imagegallery') ? 'active' : ''}}">
              <a href="{{ url('admin/imagegallery') }}">
                <span class="fa fa fa-arrows-h"></span>
                Photos
              </a>
            </li>
          </ul>
      </li>
      @endif --}}
            {{-- @if (checkAuth(5))
      <li class="">
        <a href="avoid:javascript;" class="accordion-toggle">
          <span class="fa fa-file-video-o text-info"></span>
          <span class="sidebar-title"> Manage Video Gallery </span>
          <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
          <li>
            <a href="{{ url('admin/videocategory') }}">
              <span class="fa fa fa-arrows-h"></span>
              Video Category
            </a>
          </li>
          <li>
            <a href="{{ url('admin/videogallery') }}">
              <span class="fa fa fa-arrows-h"></span>
              Videos
            </a>
          </li>
        </ul>
      </li>
      @endif --}}


            @if (checkAuth(9))
                <li class="">
                    <a class="accordion-toggle">
                        <span class="glyphicon glyphicon-user text-info"></span>
                        <span class="sidebar-title"> Manage Users </span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="{{ route('user.index') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                Users
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('role.index') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                User Roles
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('adminmenu.index') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                Admin Menus
                            </a>
                        </li>
                    </ul>
                </li>
            @endif

            <li class="">
                @if (Request::segment(2) == 'contact_us' ||
                    Request::segment(2) == 'application')
                    <a class="accordion-toggle menu-open">
                @else
                    <a class="accordion-toggle">
                @endif
                    <span class="glyphicon glyphicon-user text-info"></span>
                    <span class="sidebar-title">Applications & Inquiries</span>
                    <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                    <li class="{{ Request::segment(2) == 'application' ? 'active' : '' }}">
                        <a href="{{ url('inquiry/application') }}">
                            <span class="fa fa fa-arrows-h"></span>
                            Applications
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'contact_us' ? 'active' : '' }}">
                        <a href="{{ url('inquiry/contact_us') }}">
                            <span class="fa fa fa-arrows-h"></span>
                            Contact Us
                        </a>
                    </li>
                </ul>
            </li>

            @if (checkAuth(12))
                <li>
                    <a href="{{ route('settings.index') }}">
                        <span class="fa fa-cogs text-info"></span>
                        <span class="sidebar-title"> Settings </span>
                    </a>
                </li>
            @endif


            <div class="sidebar-toggle-mini">
                <a href="avoid:javascript;">
                    <span class="fa fa-sign-out"></span>
                </a>
            </div>
    </div>
</aside>
