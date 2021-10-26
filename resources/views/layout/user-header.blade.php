
<nav class="navbar navbar-expand-md navbar-dark bg-default">
  <a class="navbar-brand m-0 p-0 w-10 d-flex align-items-center" href="/superadmin">
    <img src="{{asset('images/logo.png')}}" alt="">
    <span class="text-white font-bold text-xs ml-3 md:hidden sm:text-xl">BULSU e-PROCUREMENT v1.1</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon text-light"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active ">
        <a class="nav-link font-bold text-white text-light" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown group">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-cogs group-hover:text-green-600 mr-1"></i><span class="group-hover:text-green-600 font-bold">Settings</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Set PPMP Year</a>
          <a class="dropdown-item" href="#">Manage User</a>
          <a class="dropdown-item" href="#">Manage Item Category</a>
          <a class="dropdown-item" href="#">Manage Item Detail</a>
          <a class="dropdown-item" href="#">Manage Purpose</a>
        </div>
      </li>
      <li class="nav-item dropdown group">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fas fa-folder-minus mr-1 group-hover:text-green-600"></i><span class="group-hover:text-green-600">Menu</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Project Project Management Plan</a>
          <a class="dropdown-item" href="#">CONSOLIDATED Annual Procurement Plan</a>
          <a class="dropdown-item" href="#">Purchase Request</a>
          <a class="dropdown-item" href="#">Price Quotation</a>
          <a class="dropdown-item" href="#">Bac Resolution</a>
          <a class="dropdown-item" href="#">Purchase Order</a>
          <a class="dropdown-item" href="#">Inspection and Acceptance Report</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link uppercase text-white font-bold" href="/superadmin">BULSU e-PROCUREMENT V1.1</a>
      </li>
    </ul>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown group">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle mr-1 group-hover:text-green-600 text-white fa-2x "></i><span class="group-hover:text-green-600 font-bold">Account</span>
        </a>
        <div class="dropdown-menu right mr-auto ml-0" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Change Password</a>
          <a class="dropdown-item" href="#">Logout</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
  </div>
  <div>&nbsp;</div>

  </div>
</nav>