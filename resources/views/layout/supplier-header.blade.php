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
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fas fa-folder-minus mr-1 group-hover:text-green-600"></i><span class="group-hover:text-green-600">Menu</span>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
          <li><a class="dropdown-item" href="/supplier"><i class="fa fa-hdd mr-1"></i>Dashboard</a></li>
          <li><a class="dropdown-item" href="/supplier/inventory-custodian-form"><i class="fab fa-battle-net mr-1 text-yellow-400"></i>Inventory Custodian Form</a></li>
          <li><a class="dropdown-item" href="/supplier/property-acknowledgement-report"><i class="fas mr-1 text-pink-400"></i>Property Acknowledgement Receipt</a></li>
          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="/supplier/#"><i class="fas fa-external-link-alt mr-1 text-green-700"></i>Property Transfer</a></li>
             <!-- <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Submenu</a></li>
                            <li><a class="dropdown-item" href="#">Submenu0</a></li>
            </ul> -->
        </li>
          <li><a class="dropdown-item" href="/supplier/unserviceable-property"><i class="fas fa-trash-alt mr-1 text-gray-400"></i>unserviceable Property</a></li>
          <li><a class="dropdown-item" href="/supplier/purchase-order"><i class="far mr-1 text-blue-400"></i>General Inventory Reports</a></li>
          <li><a class="dropdown-item" href="/supplier/view-inventory-reports"><i class="fas mr-1 text-gray-600"></i>View Inventory Reports </a></li>
</ul>

      </li>
      <li class="nav-item dropdown group">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-cogs group-hover:text-green-600 mr-1"></i><span class="group-hover:text-green-600 font-bold">Settings</span>
        </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/supplier/manage-end-user"><i class="fas fa-user-alt mr-2"></i>Manage End User</a>
          <a class="dropdown-item" href="/supplier/manage-end-user-position"><i class="fas fa-users-cog  mr-2"></i>Manage End User Position <span class="py-1 badge badge-pill bg-default text-white">14 new users</span></a>
          <a class="dropdown-item" href="/supplier/manage-equipment-code"><i class="fas fa-cogs mr-2"></i>Manage Equipment Code</a>
          <a class="dropdown-item" href="/supplier/manage-supply-employee"><i class="fas fa-user mr-2"></i>Manage Supply Employee</a>
          <a class="dropdown-item" href="/supplier/manage-supply-position"><i class="fas fa-users-cog mr-2"></i>Manage Supply Position</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link uppercase text-white font-bold" href="/admin">BULSU e-PROCUREMENT V1.1</a>
      </li>
    </ul>
      <ul class="navbar p-0 ml-2">
        <li class="nav-item">
          <span class="text-white font-bold">Supplier</span>
        </li>
        <li class="nav-item dropdown group">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="group-hover:text-green-600"><i class="fas fa-user-cog mr-2"></i> Supplier_admin</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown1">
            <a class="dropdown-item" href="/change-password"><i class="fas fa-key mr-2"></i>Change password</a>
            <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
          </div>
        </li>
      </ul>

  </div>
</nav>