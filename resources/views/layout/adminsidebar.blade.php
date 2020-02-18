<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      Noble<span>UI</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item {{ active_class(['/admin']) }}">
        <a href="{{ url('/admin') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Admin Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">web apps</li>
      <li class="nav-item {{ active_class(['email/*']) }}">
        <a class="nav-link" data-toggle="collapse" href="#email" role="button" aria-expanded="{{ is_active_route(['email/*']) }}" aria-controls="email">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Email</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['email/*']) }}" id="email">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/email/inbox') }}" class="nav-link {{ active_class(['email/inbox']) }}">Inbox</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/email/read') }}" class="nav-link {{ active_class(['email/read']) }}">Read</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/email/compose') }}" class="nav-link {{ active_class(['email/compose']) }}">Compose</a>
            </li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item {{ active_class(['apps/calendar']) }}">
        <a href="{{ url('/apps/calendar') }}" class="nav-link">
          <i class="link-icon" data-feather="message-square"></i>
          <span class="link-title">Calendar</span>
        </a>
      </li>

      <li class="nav-item nav-category">Components</li>
      
      <li class="nav-item {{ active_class(['forms/*']) }}">
        <a class="nav-link" data-toggle="collapse" href="#forms" role="button" aria-expanded="{{ is_active_route(['forms/*']) }}" aria-controls="forms">
          <i class="link-icon" data-feather="inbox"></i>
          <span class="link-title">Campaigns</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['forms/*']) }}" id="forms">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/forms/editors') }}" class="nav-link {{ active_class(['forms/editors']) }}">Add New Campaign</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/forms/wizard') }}" class="nav-link {{ active_class(['forms/wizard']) }}">View All</a>
            </li>
          </ul>
        </div>
      </li>
     
      <li class="nav-item {{ active_class(['advanced-ui/*']) }}">
        <a class="nav-link" data-toggle="collapse" href="#advanced-ui" role="button" aria-expanded="{{ is_active_route(['advanced-ui/*']) }}" aria-controls="advanced-ui">
          <i class="link-icon" data-feather="anchor"></i>
          <span class="link-title">Enterprise</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['advanced-ui/*']) }}" id="advanced-ui">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/advanced-ui/cropper') }}" class="nav-link {{ active_class(['advanced-ui/cropper']) }}">Add New Enterprise</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/advanced-ui/sweet-alert') }}" class="nav-link {{ active_class(['advanced-ui/sweet-alert']) }}">View All</a>
            </li>
          </ul>
        </div>
      </li>      

      <li class="nav-item {{ active_class(['ui-components/*']) }}">
        <a class="nav-link" data-toggle="collapse" href="#uiComponents" role="button" aria-expanded="{{ is_active_route(['ui-components/*']) }}" aria-controls="uiComponents">
          <i class="link-icon" data-feather="feather"></i>
          <span class="link-title">Users</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['ui-components/*']) }}" id="uiComponents">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/ui-components/modal') }}" class="nav-link {{ active_class(['ui-components/modal']) }}">All Users</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/ui-components/cards') }}" class="nav-link {{ active_class(['ui-components/cards']) }}">Approved</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/ui-components/collapse') }}" class="nav-link {{ active_class(['ui-components/collapse']) }}">Disapproved</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/ui-components/dropdowns') }}" class="nav-link {{ active_class(['ui-components/dropdowns']) }}">Not Verified</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/ui-components/list-group') }}" class="nav-link {{ active_class(['ui-components/list-group']) }}">Pending</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/ui-components/media-object') }}" class="nav-link {{ active_class(['ui-components/media-object']) }}">Waiting</a>
            </li>
           </ul>
        </div>
      </li>
    </ul>
  </div>
</nav>
<nav class="settings-sidebar">
  <div class="sidebar-body">
    <a href="#" class="settings-sidebar-toggler">
      <i data-feather="settings"></i>
    </a>
    <h6 class="text-muted">Sidebar:</h6>
    <div class="form-group border-bottom">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
          Light
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
          Dark
        </label>
      </div>
    </div>
    <div class="theme-wrapper">
      <h6 class="text-muted mb-2">Light Version:</h6>
      <a class="theme-item active" href="https://www.nobleui.com/laravel/template/light/">
        <img src="{{ url('assets/images/screenshots/light.jpg') }}" alt="light version">
      </a>
      <h6 class="text-muted mb-2">Dark Version:</h6>
      <a class="theme-item" href="https://www.nobleui.com/laravel/template/dark">
        <img src="{{ url('assets/images/screenshots/dark.jpg') }}" alt="light version">
      </a>
    </div>
  </div>
</nav>