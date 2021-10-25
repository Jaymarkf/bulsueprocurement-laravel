<div class="container mt-5 pt-5 w-90 mx-auto" >
  <div class="row">
      <div class="col-md-4 col-sm-4  border border-secondary px-0">
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
                    <input type="submit" value="Save" class="btn btn-success">
                </form> 

            </div>
      </div>
    <div class="col-md-8 col-sm-8">
        <div id="content" class="border border-secondary">

         <!-- Admin user Update Table Content -->
            <div class="d-flex mx-auto justify-content-between align-items-center text-light all-number-item">
                <div class="w-50">
                <h5><i class="fas fa-user mr-2"></i>Users List</h5>
                </div>
                <div class="w-50 text-right">
                    <p>Numbers of Users: <span class="badge badge-info">18</span> </p>
                </div>
            </div>
            <!-- Admin User Actions  -->
            <button type="button" class="btn btn-danger"><i class="fa fa-trash mr-2" aria-hidden="true"></i>Delete</button>
            <select name="cars" id="cars" >
                       <option disabled selected hidden>10</option>
                        <option value="volvo">1</option>
                        <option value="saab">2</option>
                        <option value="volvo">1</option>
                        <option value="saab">2</option>
            </select> Records Per Group
            <!-- Content User Lists -->
            <div class="grid grid-cols-1 gap-4 grid-content px-5 mt-4 border border-secondary">
            <table class="table table-sm">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>

    </div>
  </div>
</div>
