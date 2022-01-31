<h3 class="ics-title ml-3"><i class="fas fa-trash mr-2"></i> Unserviceable Property</h3>
<h2 class="text-center h4 mt-4">Unserviceable Property</h2>

<div class="shadow-lg pt-8 border w-98 mx-auto">
    <h2 class="text-center h4">Data Table </h2>

    <div class="form-inline px-8 mb-4">
        <label for="cars" class="text-center form-inline ">End User</label>
        <select name="cars" id="cars"  class="form-control form-control-sm col-sm-3 ml-2">
            <option disabled selected hidden>Please select user</option>
            <option value="first-enduser">Rommel Pabustan</option>
            <option value="second-enduser">John Doe</option>
            <option value="third-enduser">Tony Reyes</option>
        </select><br>
    </div>

    <div class="w-100 table-responsive px-8">
        <table id="up-datatable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="th-sm">Select</th>
                    <th class="th-sm">Transaction Type</th>
                    <th class="th-sm">Item Description</th>
                    <th class="th-sm">Quantity</th>
                    <th class="th-sm">Date Acquired</th>
                </tr>
            </thead>
            <tbody class="overflow-x-auto">
                <tr>
                    <td><input type="radio" id="checkbox"  value=""   ></td>
                    <td>ICS</td>
                    <td>Ballpen (Black)</td>
                    <td>40</td>
                    <td>2012-01-07</td>
                </tr>
                <tr>
                    <td><input type="radio" id="checkbox" value=""></td>
                    <td>ICS</td>
                    <td>Ballpen (Black)</td>
                    <td>40</td>
                    <td>2012-01-07</td>
                </tr>
                <tr>
                    <td><input type="radio" id="checkbox"  value=""   ></td>
                    <td>PAR</td>
                    <td>LCD</td>
                    <td>-3</td>
                    <td>2012-01-07</td>
                </tr>
                <tr>
                    <td><input type="radio" id="checkbox" value=""></td>
                    <td>PAR</td>
                    <td>LCD</td>
                    <td>-2</td>
                    <td>2012-01-07</td>
                </tr>
            </tbody>
            <tfooter>
                <tr class="bg-white">
                    <td></td>
                    <td><input type="text" id="transaction" value="" placeholder="Search Transaction Type" ></td>
                    <td><input type="text" id="item-desc" value="" placeholder="Search Item Description"></td>
                    <td><input type="text" id="quantity" value="" placeholder="Search Quantity"></td>
                    <td><input type="text" id="date-acquired" value="" placeholder="Search Date Acquired"></td>
                </tr>
            </tfooter>
        </table>
        <div class="d-flex justify-end mt-8">
            <button data-placement="right" title="" id="show" name="show" class="btn btn-success mr-2" data-original-title="Click to Save"><i class="fas fa-certificate"></i>Show Form</button>
        </div>
    </div>

    <div class="table-responsive w-97 mt-8 shadow-lg border mx-auto p-4">
       <h2 class="text-center h4 py-8">Request Form Data </h2>
        <table id="up-datatable" class="table table-bordered w-97 mx-auto pb-4">
            <thead>
                <tr>
                    <th class="th-sm">Date Acquired</th>
                    <th class="th-sm">Description</th>
                    <th class="th-sm">Name of Employee</th>
                    <th class="th-sm">Action</th>
                </tr>
            </thead>
            <tbody class="overflow-x-auto">
                <tr>
                    <td>2012-01-07</td>
                    <td>LCD</td>
                    <td>John Doe</td>
                    <td>    
                        <button  id="print" name="print" class="btn btn-success mr-2" ><i class="fas fa-print"></i>Print Preview</button>
                    </td>
                </tr>
                <tr>
                    <td>2012-01-07</td>
                    <td>LCD</td>
                    <td>John Doe</td>
                    <td>    
                        <button  id="print" name="print" class="btn btn-success mr-2" ><i class="fas fa-print"></i>Print Preview</button>
                    </td>
                </tr>
                <tr>
                    <td>2012-01-07</td>
                    <td>Calculator, Compact, Electronic, 12 digits cap, 1 unit in individual box</td>
                    <td>Tony L. Reyes</td>
                    <td>    
                        <button  id="print" name="print" class="btn btn-success mr-2" ><i class="fas fa-print"></i>Print Preview</button>
                    </td>
                </tr>
                <tr>
                    <td>2012-01-07</td>
                    <td>Calculator, Compact, Electronic, 12 digits cap, 1 unit in individual box</td>
                    <td>Tony L. Reyes</td>
                    <td>    
                        <button  id="print" name="print" class="btn btn-success mr-2" ><i class="fas fa-print"></i>Print Preview</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="table-responsive w-97 mt-8 shadow-lg border mx-auto p-4">
       <h2 class="text-center h4 py-8">Summary of Unserviceable Property </h2>
        <table id="up-datatable" class="table table-bordered w-97 mx-auto pb-4">
            <thead>
                <tr>
                    <th class="th-sm">Date Acquired</th>
                    <th class="th-sm">Description</th>
                    <th class="th-sm">Name of Employee</th>
                    <th class="th-sm">Action</th>
                </tr>
            </thead>
            <tbody class="overflow-x-auto">
                <tr>
                    <td>2012-01-07</td>
                    <td>LCD</td>
                    <td>John Doe</td>
                    <td>    
                        <button  id="print" name="print" class="btn btn-success mr-2" ><i class="fas fa-print"></i>Print Preview</button>
                    </td>
                </tr>
                <tr>
                    <td>2012-01-07</td>
                    <td>LCD</td>
                    <td>John Doe</td>
                    <td>    
                        <button  id="print" name="print" class="btn btn-success mr-2" ><i class="fas fa-print"></i>Print Preview</button>
                    </td>
                </tr>
                <tr>
                    <td>2012-01-07</td>
                    <td>Calculator, Compact, Electronic, 12 digits cap, 1 unit in individual box</td>
                    <td>Tony L. Reyes</td>
                    <td>    
                        <button  id="print" name="print" class="btn btn-success mr-2" ><i class="fas fa-print"></i>Print Preview</button>
                    </td>
                </tr>
                <tr>
                    <td>2012-01-07</td>
                    <td>Calculator, Compact, Electronic, 12 digits cap, 1 unit in individual box</td>
                    <td>Tony L. Reyes</td>
                    <td>    
                        <button  id="print" name="print" class="btn btn-success mr-2" ><i class="fas fa-print"></i>Print Preview</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="table-responsive w-97 mt-8 shadow-lg border mx-auto p-4">
       <h2 class="text-center h4 py-8">Summary of Maintenance Data </h2>
        <table id="up-datatable" class="table table-bordered w-97 mx-auto pb-4">
            <thead>
                <tr>
                    <th class="th-sm">Date Acquired</th>
                    <th class="th-sm">Item Description</th>
                    <th class="th-sm">Name of Employee</th>
                    <th class="th-sm">Date for Return Maintenance</th>
                    <th class="th-sm">Action</th>
                </tr>
            </thead>
            <tbody class="overflow-x-auto">
                <tr>
                    <td>2012-01-07</td>
                    <td>Calculator, Compact, Electronic, 12 digits cap, 1 unit in individual box</td>
                    <td>Tony L. Reyes</td>
                    <td>2012-01-12 22:22:55</td>
                    <td>    
                        <button  id="print" name="print" class="btn btn-success mr-2" ><i class="fas fa-print"></i>Print Preview</button>
                    </td>
                </tr>
                <tr>
                    <td>2012-01-07</td>
                    <td>Calculator, Compact, Electronic, 12 digits cap, 1 unit in individual box</td>
                    <td>Tony L. Reyes</td>
                    <td>2012-01-13 22:22:55</td>
                    <td>    
                        <button  id="print" name="print" class="btn btn-success mr-2" ><i class="fas fa-print"></i>Print Preview</button>
                    </td>
                </tr>
                <tr>
                    <td>2012-01-13</td>
                    <td>executive chair</td>
                    <td>Rommel S. Pabustan</td>
                    <td>2012-01-13 11:20:10</td>
                    <td>    
                        <button  id="print" name="print" class="btn btn-success mr-2" ><i class="fas fa-print"></i>Print Preview</button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

</div>
