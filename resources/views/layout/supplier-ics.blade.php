<h3 class="ics-title ml-3"><img src="https://bulsueprocurement.com/images/buttons/app.png" width="3%" class="mr-2"> ICS - Inventory Custodian Form</h3>
<h2 class="text-center h4 mt-4">Add New ICS</h2>
<form action="/action_page.php">

<div class="row supplier-ics-container">

    <div class="col-md-6 col-sm-6">
        <label for="Access level" class="text-center">ICS NO.</label><br>

        <div class="row mx-auto">
            <input type="text" name="year-input" class="form-control col-md-4 "  placeholder="input year here...">
            <input type="text" name="month-input" class="form-control col-md-4 mx-auto"  placeholder="input month here...">
            <input type="text" name="series-input" class="form-control col-md-4"  placeholder="input No. Series here..."> 
        </div>

        <label for="Access level" class="text-center">Date Acquired</label><br>
        <input type="date" name="date_acquired" class="span12 form-control" value="" required="">
        <label for="cars" class="text-center">Inspection and Acceptance ID</label><br>
        <select name="cars" id="cars"  class="form-control form-control-sm">
        <option disabled selected hidden>Select IAR ID here...</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>

        <label for="item-description" class="text-center">Item Description</label><br>
        <select name="item-description" id="item-description"  class="form-control form-control-sm">
        <option disabled selected hidden>Select Item Description...</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>

        <label for="article" class="text-center">Article</label><br>
        <input type="text" id="article" name="article" placeholder="Article" class="form-control form-control-sm" disabled>
        <label for="serial" class="text-center">Serial Number</label><br>
        <input type="text" id="serial" name="serial" placeholder="Input serial number" class="form-control form-control-sm">
        <label for="quantity" class="text-center">Quantity</label><br>
        <input type="text" id="quantity" name="quantity" placeholder="Input quantity here.." class="form-control form-control-sm" disabled>
        <label for="unit" class="text-center">Unit</label><br>
        <input type="text" id="unit" name="unit" placeholder="Input unit here.." class="form-control form-control-sm" disabled>
        <label for="unit-cost" class="text-center">Unit Cost</label><br>
        <input type="text" id="unit-cost" name="unit-cost" placeholder="Input unit cost here.." class="form-control form-control-sm" disabled>
        <label for="total-cost" class="text-center">Total Cost</label><br>
        <input type="text" id="total-cost" name="total-cost" placeholder="Input total cost here.." class="form-control form-control-sm" disabled>
        <label for="received-from" class="text-center">Received From</label><br>
        <select name="received-from" id="received-from"  class="form-control form-control-sm">
        <option disabled selected hidden>Select Sender</option>
            <option value="first-sender">MATHILDE ENRIQUEZ PAULINO</option>
            <option value="second-sender">JOHN LOPEZ SALAZAR</option>
            <option value="third-sender">GLAIZA REYES SANTOS</option>
        </select><br>
        <input type="text" id="position" name="position" value="" class="form-control form-control-sm" disabled><br>
    </div>
    
    <div class="col-md-6 col-sm-6">
    <label for="Purchase Order No" class="text-center">Purchase Order No.</label><br>
        <div class="row mx-auto">
            <input type="text" name="year-input" class="form-control col-md-4 "  placeholder="input year here...">
            <input type="text" name="series-input" class="form-control col-md-4 mx-auto"  placeholder="input No. Series here..."> 
            <input type="text" name="month-input" class="form-control col-md-4"  placeholder="input month here...">
        </div>
        <label for="Received By" class="text-center">Received By</label><br>
        <select name="received-by" id="received-by"  class="form-control form-control-sm">
        <option disabled selected hidden>Select Received By</option>
            <option value="first-received">Rommel Pabustan</option>
            <option value="second-received">John Doe</option>
            <option value="third-received">Tony Reyes</option>
        </select>
        <label for="college" class="text-center">College</label><br>
        <input type="text" id="position" name="position" value="College of Information and Communication Technology" placeholder="Input College Here..." class="form-control form-control-sm" disabled>
        <label for="position" class="text-center">Position</label><br>
        <input type="text" id="position" name="position" value="Instructor I" placeholder="Input Position Here..." class="form-control form-control-sm" disabled>
        <label for="Date Issued" class="text-center">Date Issued</label><br>
        <input type="date" name="date_acquired" class="span12 form-control" value="" required="">
        <label for="delivered-by" class="text-center">Delivered By</label><br>
        <input type="text" id="supplier" name="supplier" value="" placeholder="Input Supplier Here..." class="form-control form-control-sm" disabled>
        
        <label for="fund-cluster" class="text-center">Fund Cluster</label><br>
        <div class="row mx-auto fund-cluster-row">
            <select name="fund-cluster" id="fund-cluster"  class="form-control col-md-3">
                <option disabled selected hidden>Select Fund Cluster</option>
                <option value="first-received">GAA</option>
                <option value="second-received">Income</option>
                <option value="third-received">Fiduciary Fund</option>
            </select>
            <input type="text" name="year-input" class="form-control col-md-3 mx-auto ml-4"  placeholder="input year here...">
            <input type="text" name="month-input" class="form-control col-md-3 mx-auto mr-4"  placeholder="input month here...">
            <input type="text" name="series-input" class="form-control col-md-3 "  placeholder="input No. Series here..."> 
        </div>
        <div class="pull-right mt-11">
            <button data-placement="right" title="" id="save" name="save" class="btn btn-success" data-original-title="Click to Save"><i class="fas fa-save"></i> Save</button>
            <a class="btn bg-blue-600 text-white hover:bg-gray-400" href="/admin" ><i class="far fa-caret-square-left mr-3"></i>Back</a>
        </div>
    </div>
</div>


</form> 

