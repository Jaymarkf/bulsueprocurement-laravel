<nav class="navbar navbar-expand-md navbar-dark bg-default">
  <a class="navbar-brand m-0 p-0 w-10 d-flex align-items-center" href="/admin">
    <img src="{{asset('images/logo.png')}}" alt="">
    <span class="text-white font-bold text-xs ml-3 md:hidden sm:text-xl">BULSU e-PROCUREMENT v1.1</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon text-light w-4 sm:w-6"></span>
  </button>

  <div class="collapse navbar-collapse flex-wrap" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active ">
        <a class="nav-link font-bold text-white text-light" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown group">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-cogs group-hover:text-green-600 mr-1"></i><span class="group-hover:text-green-600 font-bold">Settings</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/set-ppmp-year"><i class="fas fa-calendar-alt mr-2"></i>Set PPMP Year</a>
          <a class="dropdown-item" href="/admin/manage-user"><i class="fas fa-user-alt mr-2"></i>Manage User <span class="py-1 badge badge-pill bg-default text-white">14 new users</span></a>
          <a class="dropdown-item" href="/admin/manage-item-category"><i class="fas fa-list-alt mr-2"></i>Manage Item Category</a>
          <a class="dropdown-item" href="/admin/manage-item-details"><i class="fas fa-tags mr-2"></i>Manage Item Detail</a>
          <a class="dropdown-item" href="/admin/manage-purpose"><i class="fas fa-envelope mr-2"></i>Manage Purpose</a>
        </div>
      </li>
      <li class="nav-item dropdown group">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fas fa-folder-minus mr-1 group-hover:text-green-600"></i><span class="group-hover:text-green-600">Menu</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
          <a class="dropdown-item" href="#">Project Project Management Plan</a>
          <a class="dropdown-item" href="{{$user}}/consolidated">CONSOLIDATED Annual Procurement Plan</a>
          <a class="dropdown-item" href="#">Purchase Request</a>
          <a class="dropdown-item" href="#">Price Quotation</a>
          <a class="dropdown-item" href="#">Bac Resolution</a>
          <a class="dropdown-item" href="#">Purchase Order</a>
          <a class="dropdown-item" href="#">Inspection and Acceptance Report</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link uppercase text-white font-bold" href="/admin">BULSU e-PROCUREMENT V1.1</a>
      </li>
    </ul>
      <ul class="navbar p-0 ml-2">
        <li class="nav-item">
          <span class="text-white font-bold">Administrator</span>
        </li>
        <li class="nav-item dropdown group">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="group-hover:text-green-600"><i class="fas fa-user-cog mr-2"></i> JHONLOYD</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown1">
            <a class="dropdown-item" href="{{$user}}/change-password"><i class="fas fa-key mr-2"></i>Change password</a>
            <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
          </div>
        </li>
      </ul>

  </div>
</nav>