
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
           <i class="fas fa-folder-minus mr-1 group-hover:text-green-600"></i><span class="group-hover:text-green-600">Menu</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/faculty/set-ppmp-year"><i class="fas fa-calendar-alt mr-2"></i>Set PPMP Year</a>
          <a class="dropdown-item" href="/faculty/price-catalogue"><i class="fas fa-tags mr-2"></i>Price Catalogue</a>
          <a class="dropdown-item" href="/faculty/ppmp-cart-list"><i class="fas fa-shopping-cart mr-2"></i>PPMP Cart List</a>
          <a class="dropdown-item" href="/faculty/ppmp-requested"><i class="fas fa-tasks mr-2"></i>New PPMP - 2021</a>
          <a class="dropdown-item" href="/faculty/ppmp-log-history"><i class="fas fa-history mr-2"></i>PPMP History</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link uppercase text-white font-bold" href="/admin">BULSU e-PROCUREMENT V1.1</a>
      </li>
    </ul>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar p-0 ml-auto">
          <li class="nav-item">
            <span class="text-white font-bold"><i class="fas fa-hdd mr-2"></i>USER Panel</span>
          </li>
          <li class="nav-item dropdown group">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="group-hover:text-green-600"><i class="fas fa-user mr-2"></i> <b>USER</b></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown1">
              <a class="dropdown-item" href="/faculty/change-password"><i class="fas fa-key mr-2"></i>Change password</a>
              <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
            </div>
          </li>
        </ul>
  </div>
  <div>&nbsp;</div>

  </div>
</nav>