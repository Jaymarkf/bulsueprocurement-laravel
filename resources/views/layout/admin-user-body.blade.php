<div class="container w-90 mx-auto" >
  <div class="row">
      <div class="col-md-4 col-sm-4  border border-secondary px-0 bg-white pb-4 h-100">
          <!-- Admin User Create Account  -->
            <div class="d-flex mx-auto align-items-center text-light all-number-item">
                <div class="w-50">
                    <h5><i class="fas fa-plus-circle mr-2"></i>Add User</h5>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4 grid-content-center px-2 mt-4">

                <form action="add-users" method="post">
                  @csrf
                    <label for="position">Position</label><br>
                    <select name="position" id="position"  class="form-control form-control-sm">
                        <option disabled selected hidden>Select Position</option>
                        <option value="procurement offce">Procurement Office</option>
                        <option value="procurement offce staff">Procurement Office Staff</option>
                        <option value="budget office">Budget Office</option>
                        <option value="budget office">Budget Office Staff</option>
                        <option value="end user">End-User</option>
                        <option value="supplier">Supplier</option>
                    </select>
                    <br>
                    <label for="branch">Branch / Department</label>
                    <select name="branch" id="branch"  class="form-control form-control-sm">
                        <option disabled selected hidden>Select Branch / Department</option>
                        <option value="malolos branch">please set this to dynamic data</option>
                    </select>
                    <br>
                    <label for="username">Username</label><br>
                    <input type="text" id="username" name="username" placeholder="Username" class="form-control form-control-sm"><br>

                    <label for="password">Password</label><br>
                    <input type="password" id="password" name="password" placeholder="Password" class="form-control form-control-sm" autocomplete="password"><br>

                    <label for="email">Email Address</label><br>
                    <input type="email" id="email" name="email" placeholder="Email" class="form-control form-control-sm"><br>

                    <label for="firstname">First Name</label><br>
                    <input type="text" id="firstname" name="firstname" placeholder="First Name" class="form-control form-control-sm"><br>

                    <label for="middleinitial">Middle Initial</label><br>
                    <input type="text" id="middleinitial" name="middleinitial" placeholder="Middle Initial" class="form-control form-control-sm"><br>

                    <label for="lastname">Last Name</label><br>
                    <input type="text" id="lastname" name="lastname" placeholder="Last Name" class="form-control form-control-sm"><br>
                    <input type="hidden" name="approved"/>

                    <button data-placement="right" type="submit" class="btn btn-success" data-original-title="Click to Save"><i class="fas fa-save"></i> Save</button>
                </form> 
            </div>
      </div>
    <div class="col-md-8 col-sm-8">
        <div id="content" class="border border-secondary shadow-lg">
         <!-- Admin user Update Table Content -->
            <div class="d-flex mx-auto justify-content-between align-items-center text-light all-number-item ">
                <div class="w-50">
                <h5><i class="fas fa-user mr-2"></i>Users List</h5>
                </div>
                <div class="w-50 text-right">
                    <p>Numbers of Users: <span class="badge badge-info">18</span> </p>
                </div>
            </div>
            <!-- Admin User Actions  -->
            <button type="button" class="btn btn-danger mt-2 ml-1"><i class="fa fa-trash mr-2 " aria-hidden="true"></i>Delete</button>
            <!-- Content User Lists -->
            <div class="grid grid-cols-1 gap-4 grid-content px-1 table-responsive py-0" >
            <table id="manage-user" class="table table-striped table-bordered" cellspacing="0" width="100%" >
                      <thead>
                        <tr>
                          <th class="th-sm">Select</th>
                          <th class="th-sm">Edit</th>
                          <th class="th-sm">College/Department</th>
                          <th class="th-sm">Username</th>
                          <th class="th-sm">Access Level</th>
                          <th class="th-sm">Registered Date</th>
                          <th class="th-sm">Reset Password</th>
                          <th class="th-sm">Active</th>
                        </tr>
                      </thead>
                      <tbody style="height: 150px; overflow-y: auto;" >
                        <tr>
                          <td>
                                <label class="inline-flex items-center">
                                   <input type="checkbox" class="form-checkbox"/>
                                </label>
                          </td>
                          <td>                            
                             <button class="bg-green-800 hover:bg-green-400 text-white-800 font-bold py-2 px-4 rounded inline-flex items-center">
                              <i class="fas fa-edit text-white"></i>
                            </button>
                          </td>
                          <td>Hagonoy Campus</td>
                          <td>John</td>
                          <td>User</td>
                          <td>2012/06/01</td>
                          <td>
                             <button class="bg-green-800 hover:bg-green-400 text-white-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                  <i class="fas fa-repeat text-white"></i>
                            </button>
                          </td>
                          <td>
                              <button class="bg-green-800 hover:bg-green-400 text-white-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                <i class="fas fa-check text-white"></i>  
                              </button>
                          </td>
                         </tr>
                          <tr>
                          <td>
                                <label class="inline-flex items-center">
                                   <input type="checkbox" class="form-checkbox"/>
                                </label>
                          </td>
                          <td>                            
                             <button class="bg-green-800 hover:bg-green-400 text-white-800 font-bold py-2 px-4 rounded inline-flex items-center">
                              <i class="fas fa-edit text-white"></i>
                            </button>
                          </td>
                          <td>Supplier</td>
                          <td>supplier_admin</td>
                          <td>supplier</td>
                          <td>2020/10/20</td>
                          <td>
                             <button class="bg-green-800 hover:bg-green-400 text-white-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                  <i class="fas fa-repeat text-white"></i>
                            </button>
                          </td>
                          <td>
                              <button class="bg-green-800 hover:bg-green-400 text-white-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                <i class="fas fa-check text-white"></i>  
                              </button>
                          </td>
                          
                        </tr>
                        <tr>
                          <td>
                                <label class="inline-flex items-center">
                                   <input type="checkbox" class="form-checkbox"/>
                                </label>
                          </td>
                          <td>                            
                             <button class="bg-green-800 hover:bg-green-400 text-white-800 font-bold py-2 px-4 rounded inline-flex items-center">
                              <i class="fas fa-edit text-white"></i>
                            </button>
                          </td>
                          <td>Supplier</td>
                          <td>Jaymark</td>
                          <td>supplier</td>
                          <td>2020/06/01</td>
                          <td>
                             <button class="bg-green-800 hover:bg-green-400 text-white-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                  <i class="fas fa-repeat text-white"></i>
                            </button>
                          </td>
                          <td>
                              <button class="bg-green-800 hover:bg-green-400 text-white-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                <i class="fas fa-check text-white"></i>  
                              </button>
                          </td>
                          
                        </tr>
                        <tr>
                          <td>
                                <label class="inline-flex items-center">
                                   <input type="checkbox" class="form-checkbox"/>
                                </label>
                          </td>
                          <td>                            
                             <button class="bg-green-800 hover:bg-green-400 text-white-800 font-bold py-2 px-4 rounded inline-flex items-center">
                              <i class="fas fa-edit text-white"></i>
                            </button>
                          </td>
                          <td>College of Engineering</td>
                          <td>coe</td>
                          <td>User</td>
                          <td>2020/09/04</td>
                          <td>
                             <button class="bg-green-800 hover:bg-green-400 text-white-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                  <i class="fas fa-repeat text-white"></i>
                            </button>
                          </td>
                          <td>
                              <button class="bg-green-800 hover:bg-green-400 text-white-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                <i class="fas fa-check text-white"></i>  
                              </button>
                          </td>
                          
                        </tr>
                        <tr>
                          <td>
                                <label class="inline-flex items-center">
                                   <input type="checkbox" class="form-checkbox"/>
                                </label>
                          </td>
                          <td>                            
                             <button class="bg-green-800 hover:bg-green-400 text-white-800 font-bold py-2 px-4 rounded inline-flex items-center">
                              <i class="fas fa-edit text-white"></i>
                            </button>
                          </td>
                          <td>College of Business Administration</td>
                          <td>mrcba</td>
                          <td>user</td>
                          <td>2012/06/01</td>
                          <td>
                             <button class="bg-green-800 hover:bg-green-400 text-white-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                  <i class="fas fa-repeat text-white"></i>
                            </button>
                          </td>
                          <td>
                              <button class="bg-green-800 hover:bg-green-400 text-white-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                <i class="fas fa-check text-white"></i>  
                              </button>
                          </td>
                          
                        </tr>
                        <tr>
                          <td>
                                <label class="inline-flex items-center">
                                   <input type="checkbox" class="form-checkbox"/>
                                </label>
                          </td>
                          <td>                            
                             <button class="bg-green-800 hover:bg-green-400 text-white-800 font-bold py-2 px-4 rounded inline-flex items-center">
                              <i class="fas fa-edit text-white"></i>
                            </button>
                          </td>
                          <td>Hagonoy Campus</td>
                          <td>John</td>
                          <td>User</td>
                          <td>2012/06/01</td>
                          <td>
                             <button class="bg-green-800 hover:bg-green-400 text-white-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                  <i class="fas fa-repeat text-white"></i>
                            </button>
                          </td>
                          <td>
                              <button class="bg-green-800 hover:bg-green-400 text-white-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                <i class="fas fa-check text-white"></i>  
                              </button>
                          </td>
                          
                        </tr>
                      </tbody>
                    </table>
        </div>
        </div>

    </div>
  </div>
</div>
