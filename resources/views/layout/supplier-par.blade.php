<h3 class="ics-title ml-3"><img src="https://bulsueprocurement.com/images/buttons/app.png" width="3%" class="mr-2"> PAR - Property Acknowledgement Report</h3>
<h2 class="text-center h4 mt-4">Add New PAR</h2>
<form action="/action_page.php">

<div class="row supplier-ics-container">

    <div class="col-md-6 col-sm-6">
        <label for="Access level" class="text-center">PAR NO.</label><br>

        <div class="row mx-auto">
            <input type="text" name="year-input" class="form-control col-md-4 "  placeholder="input year here...">
            <input type="text" name="month-input" class="form-control col-md-4 mx-auto"  placeholder="input month here...">
            <input type="text" name="series-input" class="form-control col-md-4"  placeholder="input No. Series here..."> 
        </div>
        <label for="cars" class="text-center">Code</label><br>
        <select name="cars" id="cars"  class="form-control form-control-sm">
        <option disabled selected hidden>Select Equipment Code</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <label for="Access level" class="text-center">Date Acquired</label><br>
        <input type="date" name="date_acquired" class="span12 form-control" value="" required="">
        <label for="issued-by" class="text-center">Issued By</label><br>
        <select name="issued-by" id="issued-by"  class="form-control form-control-sm">
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
          <label for="Date Issued" class="text-center">Date Issued</label><br>
        <input type="date" name="date_acquired" class="span12 form-control" value="" required="">
        <label for="delivered-by" class="text-center">Delivered By</label><br>
        <input type="text" id="supplier" name="supplier" value="" placeholder="Input Supplier Here" class="form-control form-control-sm" >
        
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
        <div class="row mx-auto mt-5">
            <input type="text" name="year-input" class="form-control col-md-4 "  value="2021" disabled> 
            <input type="text" name="month-input" class="form-control col-md-4 mx-auto" value="10" disabled>
            <input type="text" name="series-input" class="form-control col-md-4"  value="006" disabled>          
        </div>
    </div>
</div>
</form> 

<div class="item-equipment-description-section shadow-lg py-8 border mt-20 ">
    <div class="inner-container mx-auto">
        <h2 class="text-center h4">Item / Equipment & Description </h2>
        <label for="cars" class="text-center">Select Inspection and Acceptance ID</label><br>
        <select name="cars" id="cars"  class="form-control form-control-sm col-sm-3">
        <option disabled selected hidden>Select IAR ID ...</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select><br>
        <select name="field_blank" id="field_blank"  class="form-control form-control-sm col-sm-3">
        <option disabled selected hidden>Select Item Description </option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <!-- Table CONTAINER -->
        <div class="d-flex items-center overflow-x-auto shadow-xl px-5 py-8 mb-5">
            <label for="serial" class="d-block mr-5">Serial</label>
            <input type="text" id="serial"  value=""  class="form-control form-control-sm col-sm-3" >
            <label for="article" class="d-block mx-5">Article</label>
            <input type="text" id="article"  value="" class="form-control form-control-sm col-sm-3" >
            <label for="quantity" class="d-block mx-5">Quantity</label>
            <input type="text" id="quantity"  value="" class="form-control form-control-sm col-sm-3" >
            <label for="quantity" class="d-block mx-5">Unit</label>
            <input type="text" id="unit"  value="" class="form-control form-control-sm col-sm-3" >
            <label for="quantity" class="d-block w-100 mx-5">Unit Cost</label>
            <input type="text" id="unit-cost"  value="" class="form-control form-control-sm col-sm-3" >
            <label for="quantity" class="d-block w-100 mx-5">Total Cost</label>
            <input type="text" id="unit-cost"  value="" class="form-control form-control-sm col-sm-3" >
        </div>

        <button data-placement="right" title="" id="save" name="save" class="btn btn-success" data-original-title="Click to Save"><i class="fas fa-plus mr-2"></i> Add to Row</button>
        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"><i class="fas fa-trash mr-1"></i> Delete Selected Row</button>


        <div class="d-flex items-center overflow-x-auto shadow-xl px-5 py-8 mt-5">
           <div class="col px-0">
                <label for="serial" class="d-block mr-5">Select</label>
                <input type="checkbox" id="checkbox"  value=""  class="form-control form-control-sm col-sm-9" >
            </div>
            <div class="col-sm-3 px-0">
                <label for="serial" class="d-block text-center mr-5">Serial</label>
                <input type="text" id="serial"  value=""  class="form-control form-control-sm col-sm-11" >
            </div>
            <div class="col-sm-3 px-0">
                <label for="article" class="d-block text-center mx-5">Article</label>
                <input type="text" id="article"  value="" class="form-control form-control-sm col-sm-11" >
            </div>
            <div class="col-sm-3 px-0">
                <label for="quantity" class="d-block text-center mx-5">Quantity</label>
                <input type="text" id="quantity"  value="" class="form-control form-control-sm col-sm-11" >
            </div>
            <div class="col-sm-3 px-0">
                <label for="quantity" class="d-block text-center mx-5">Unit</label>
                <input type="text" id="unit"  value="" class="form-control form-control-sm col-sm-11" >
            </div>
            <div class="col-sm-3 px-0">
                <label for="quantity" class="d-block text-center w-100 mx-5">Unit Cost</label>
                <input type="text" id="unit-cost"  value="" class="form-control form-control-sm col-sm-11" >
            </div>
            <div class="col-sm-3 px-0">
                <label for="quantity" class="d-block text-center w-100 mx-5">Total Cost</label>
                <input type="text" id="unit-cost"  value="" class="form-control form-control-sm col-sm-11" >
            </div>
        </div>


    </div>
</div>


<div class="item-equipment-description-section shadow-lg pt-8 border mt-8 ">
    <div class="inner-container mx-auto col-sm-3">
        <h2 class="text-center h4">Receiver</h2>
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
    </div>
    <div class="d-flex justify-center mt-4">
        <button data-placement="right" title="" id="save" name="save" class="btn btn-success mr-2" data-original-title="Click to Save"><i class="fas fa-plus mr-2"></i> Add to Row</button>
        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"><i class="fas fa-trash "></i> Delete Selected Row</button>
    </div>

    <div class="d-flex items-center overflow-x-auto shadow-xl px-5 py-8 mt-5">
           <div class="col-sm-2 px-0">
                <label for="serial" class="d-block text-center">Select</label>
                <input type="checkbox" id="checkbox"  value=""  class="form-control form-control-sm" >
            </div>
            <div class="col-sm-3 px-0">
                <label for="serial" class="d-block mr-5">Received By</label>
                <input type="text" id="serial"  value="John Doe"  class="form-control form-control-sm col-sm-11" disabled>
            </div>
            <div class="col-sm-3 px-0">
                <label for="article" class="d-block mx-5">College </label>
                <input type="text" id="article"  value="" class="form-control form-control-sm col-sm-11" disabled>
            </div>
            <div class="col-sm-3 px-0">
                <label for="quantity" class="d-block mx-5">Position</label>
                <input type="text" id="quantity"  value="" class="form-control form-control-sm col-sm-11" disabled>
            </div>
        </div>
</div>
<div class="relative">
    <div class="d-flex justify-end mr-12 mt-4">
        <button data-placement="right" title="" id="save" name="save" class="btn btn-success mr-2" data-original-title="Click to Save"><i class="fas fa-save"></i> Save</button>
        <a class="btn bg-blue-600 text-white hover:bg-gray-400" href="/admin" ><i class="far fa-caret-square-left mr-3"></i>Back</a>
    </div>
</div>

