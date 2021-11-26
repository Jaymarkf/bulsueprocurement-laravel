<div class="container mt-5 pt-5 w-90 mx-auto" >
  <div class="row">
      <div class="col-md-4 col-sm-4  border border-secondary px-0 h-100">
          <!-- Admin User Create Account  -->
            <div class="d-flex mx-auto align-items-center text-light all-number-item">
                <div class="w-50">
                    <h5><i class="fas fa-plus-circle mr-2"></i>Add Item Category</h5>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4 grid-content-center px-2 mt-4 mb-4" >
                <form action="/action_page.php">

                    <label for="fname">Description:</label><br>
                    <input type="text" id="unique-name" name="uniquename" placeholder="DESCRIPTION" class="form-control form-control-sm"><br>
                    <input type="submit" value="Save" class="btn btn-success">
                </form> 

            </div>
      </div>
    <div class="col-md-8 col-sm-8">
        <div id="content" class="border border-secondary">

         <!-- Admin user Update Table Content -->
            <div class="d-flex mx-auto justify-content-between align-items-center text-light all-number-item ">
                <div class="w-50">
                <h5><i class="fas fa-user mr-2"></i>Item Quotation List</h5>
                </div>
                <div class="w-50 text-right">
                    <p>Numbers of Category: <span class="badge badge-info">18</span> </p>
                </div>
            </div>
            <!-- Admin User Actions  -->
            <button type="button" class="btn btn-danger mt-2 ml-1"><i class="fa fa-trash mr-2 " aria-hidden="true"></i>Delete</button>
            <select name="cars" id="cars" class="mt-2">
                       <option disabled selected hidden>10</option>
                        <option value="volvo">1</option>
                        <option value="saab">2</option>
                        <option value="volvo">1</option>
                        <option value="saab">2</option>
            </select> Records Per Group
            <div class="grid grid-cols-1 gap-4 grid-content mt-4 table-reponsive">
                    <table id="category-table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th></th>
                          <th class="th-sm">Quotation Number
                          </th>
                          <th class="th-sm">Company Name
                          </th>
                          <th class="th-sm">Total Price
                          </th>
                          <th class="th-sm">Quotation Date Created
                          </th>
                          <th class="th-sm">Salary
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Edit</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>56</td>
                          <td>2012/06/01</td>
                          <td>$115,000</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Junior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>43</td>
                          <td>2013/02/01</td>
                          <td>$75,650</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Sales Assistant</td>
                          <td>New York</td>
                          <td>46</td>
                          <td>2011/12/06</td>
                          <td>$145,600</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2011/03/21</td>
                          <td>$356,250</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Systems Administrator</td>
                          <td>London</td>
                          <td>21</td>
                          <td>2009/02/27</td>
                          <td>$103,500</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Developer</td>
                          <td>San Francisco</td>
                          <td>30</td>
                          <td>2010/07/14</td>
                          <td>$86,500</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Regional Director</td>
                          <td>Edinburgh</td>
                          <td>51</td>
                          <td>2008/11/13</td>
                          <td>$183,000</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Javascript Developer</td>
                          <td>Singapore</td>
                          <td>29</td>
                          <td>2011/06/27</td>
                          <td>$183,000</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          <td>27</td>
                          <td>2011/01/25</td>
                          <td>$112,000</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>56</td>
                          <td>2012/06/01</td>
                          <td>$115,000</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Junior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>43</td>
                          <td>2013/02/01</td>
                          <td>$75,650</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Sales Assistant</td>
                          <td>New York</td>
                          <td>46</td>
                          <td>2011/12/06</td>
                          <td>$145,600</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2011/03/21</td>
                          <td>$356,250</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Systems Administrator</td>
                          <td>London</td>
                          <td>21</td>
                          <td>2009/02/27</td>
                          <td>$103,500</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Developer</td>
                          <td>San Francisco</td>
                          <td>30</td>
                          <td>2010/07/14</td>
                          <td>$86,500</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Regional Director</td>
                          <td>Edinburgh</td>
                          <td>51</td>
                          <td>2008/11/13</td>
                          <td>$183,000</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Javascript Developer</td>
                          <td>Singapore</td>
                          <td>29</td>
                          <td>2011/06/27</td>
                          <td>$183,000</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          <td>27</td>
                          <td>2011/01/25</td>
                          <td>$112,000</td>
                        </tr>
                      </tbody>
                    </table>
             </div>
        </div>

    </div>
  </div>
</div>

{{-- Add Modal --}}
<div class="modal fade" id="AddStudentModal" tabindex="-1" aria-labelledby="AddStudentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AddStudentModalLabel">Add Student Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <ul id="save_msgList"></ul>

                <div class="form-group mb-3">
                    <label for="">Full Name</label>
                    <input type="text" required class="name form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Course</label>
                    <input type="text" required class="course form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input type="text" required class="email form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Phone No</label>
                    <input type="text" required class="phone form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary add_student">Save</button>
            </div>

        </div>
    </div>
</div>