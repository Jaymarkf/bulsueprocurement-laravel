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
                <form action="/action_page.php">

                    <label for="Access level">Access Level</label><br>
                    <select name="cars" id="cars"  class="form-control form-control-sm">
                        <option disabled selected hidden>Select Access Level</option>
                        <option value="volvo">Administrator</option>
                        <option value="saab">User</option>
                    </select><br>

                    <label for="cars">College Department</label><br>
                    <select name="cars" id="cars"  class="form-control form-control-sm">
                       <option disabled selected hidden>Select Branch</option>
                        <option value="volvo">Budget Office</option>
                        <option value="saab">Procurement Unit</option>
                    </select><br>

                    <label for="fname">Unique Username:</label><br>
                    <input type="text" id="unique-name" name="uniquename" placeholder="Username" class="form-control form-control-sm"><br>

                    <label for="fname">First name</label><br>
                    <input type="text" id="first-name" name="firstname" placeholder="First Name" class="form-control form-control-sm"><br>

                    <label for="lname">Last name</label><br>
                    <input type="text" id="last-name" name="lastname" placeholder="Last Name" class="form-control form-control-sm"><br>
                    <label for="lname">Position</label><br>
                    <input type="text" id="position" name="position" value="Doe" class="form-control form-control-sm"><br>
                    <button data-placement="right" title="" id="save" name="save" class="btn btn-success" data-original-title="Click to Save"><i class="fas fa-save"></i> Save</button>
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
