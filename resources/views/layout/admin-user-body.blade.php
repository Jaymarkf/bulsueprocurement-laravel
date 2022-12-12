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
              <!-- CREATE FORM -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('userlists.store')}}" method="POST">
                @csrf 
                    <label for="Position">Position</label><br>
                    <select name="level" id="Position"  class="form-control form-control-sm" name="level">
                        <option disabled selected hidden>Select Position</option>
                        <option value="procurement-office">Procurement Office</option>
                        <option value="budget-office">Budget Office</option>
                        <option value="end-user">End User</option>
                        <option value="supplier">Supplier</option>
                        <option value="end-user">To do....</option>
                    </select><br>

                    <label for="cars">College Department</label><br>
                    <select name="cars" id="selectBranch"  class="form-control form-control-sm" disabled>
                       @foreach($branches as $k => $v )
                          @if($k == 0)
                         <option value="{{ $v->branch_name }}" selected>{{ $v->branch_name }}</option>
                          @else
                          <option value="{{ $v->branch_name }}">{{ $v->branch_name }}</option>
                          @endif
                       @endforeach
                        
                    </select><br>
                    <label for="fname">Unique Username:</label><br>
                    <input type="text" id="unique-name" name="username" placeholder="Username" class="form-control form-control-sm"><br>

                    <label for="fname">First name</label><br>
                    <input type="text" id="first-name" name="first_name" placeholder="First Name" class="form-control form-control-sm"><br>

                    <label for="middle-name">First name</label><br>
                    <input type="text" id="middle-name" name="middle_name" placeholder="Middle Initial" class="form-control form-control-sm"><br>

                    <label for="lname">Last name</label><br>
                    <input type="text" id="last-name" name="last_name" placeholder="Last Name" class="form-control form-control-sm"><br>
                  
                    <label for="email_address">Email address</label>
                    <input type="email" id="email address" name="email_address" placeholder="Email address" class="form-control form-control-sm"><br>
  
                 
                    <button type="submit" data-placement="right" title="" id="save" name="save" class="btn btn-success" data-original-title="Click to Save"><i class="fas fa-save"></i> Save</button>
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
                    <p>Numbers of Users: <span class="badge badge-info">1</span> </p>
                </div>
            </div>
            <!-- Admin User Actions  -->

            <!-- Content User Lists -->
            <div class="grid grid-cols-1 gap-4 grid-content px-1 table-responsive py-0" >
            <form action="{{ route('userlists.delete')}}" method="POST" id="index">  
            @csrf   
            <button type="submit" class="btn btn-danger mt-2 ml-1 float-left"><i class="fa fa-trash mr-2 " aria-hidden="true"></i>Delete Selected</button>
            <table id="manage-user" class="table table-striped table-bordered" cellspacing="0" width="100%" >
                      <thead>
                        <tr>
                          <th class="th-sm">Select</th>
                          <th class="th-sm">Edit</th>
                          <th class="th-sm">College/Department</th>
                          <th class="th-sm">Username</th>
                          <th class="th-sm">Access Level</th>
                          <th class="th-sm">Reset Password</th>
                          <th class="th-sm">Active</th>
                        </tr>
                      </thead>
                      <tbody style="height: auto; overflow-y: auto;" >
                      @if(isset($users_lists))           
                          @foreach($users_lists as $users_lists)
                              <td class="id" hidden name="ids[{{$users_lists->id}}]">{{$users_lists->id}}</td>
                                    <td>
                                          <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-checkbox" name="ids[{{$users_lists->id}}]" value="{{$users_lists->id}}"/>
                                          </label>
                                    </td>
                                    <td>
                                      <a class="bg-green-800 hover:bg-green-400 text-white-800 font-bold py-2 px-4 rounded inline-flex items-center edit" onclick="modalHandler(true)">
                                          <i class="fas fa-edit text-white"></i>
                                      </a>
                                    </td>
                                    <td class="branch">{{$users_lists->branch}}</td>
                                    <td class="username">{{$users_lists->username}}</td>
                                    <div class="firstname hidden">{{$users_lists->first_name}}</div>
                                    <div class="lastname hidden">{{$users_lists->last_name}}</div>
                                    <div class="password hidden">{{$users_lists->password}}</div>
                                    <td>{{$users_lists->level}}</td>
                                    <div class="password hidden">{{$users_lists->created_at}}</div>
                                    <td>
                                      <a class="bg-green-800 hover:bg-green-400 text-white-800 font-bold py-2 px-4 rounded inline-flex items-center" href="{{route('reset-password', $users_lists->id)}}">
                                            <i class="fas fa-repeat text-white"></i>
                                      </a>
                                    </td>
                                    <td>
                                        <a class="bg-green-800 hover:bg-green-400 text-white-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                          <i class="fas fa-check text-white"></i>  
                                        </a>
                                </td>
                          @endforeach
                      @else
                      <td colspan="8">No Records Found. </td>
                      @endif
                      </tbody>
                    </table>

                    <!-- <div class="col-span-3 mb-4">
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit"><i class="fas fa-trash mr-1"></i> Delete Selected </button>
                    </div> -->
                    </form>
        </div>
        </div>

    </div>
  </div>
</div>

