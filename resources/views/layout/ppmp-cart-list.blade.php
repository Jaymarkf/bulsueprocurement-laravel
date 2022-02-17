
<div class="container d-md-flex align-items-stretch w-98 mw-100" >
   <!-- Page Content  -->
   <div id="content" class="w-100 border border-secondary h-100 pb-3 admin-table-container">
      <!--  -->
      <div class="d-flex mx-auto justify-content-between align-items-center text-light all-number-item">
         <div class="form-inline">
           <h5><i class="fas fa-shopping-cart mr-2"></i>PPMPT CART Lists - <a href="/set-ppmp-year" class="text-uppercase text-sm text-blue-600 bg-yellow-600 text-white py-1 px-1 rounded-full py-1 px-6  hover:bg-yellow-800 hover:no-underline">Year: 2021</a></h5>
           <button data-placement="right" title="" id="save" name="save" class="btn text-white hover:text-yellow-600 ml-4 bg-gray-800" data-original-title="Click to Save"><i class="fas fa-history"></i> Changes History of Budget Office</button>
           <button data-placement="right" title="" id="save" name="save" class="btn bg-blue-700 text-white hover:bg-blue-700 ml-4" data-original-title="Click to Save"><i class="fas fa-history"></i> Changes History of Procurement</button>
        </div>
         
         <div class="text-right">
            <p>Total Item(s):<span class="badge badge-info ml-2">0</span> </p>
         </div>
      </div>
    <!-- PPMP CART LIST CONTENT -->
      <div class="mw-100 mx-auto mt-3 table-responsive">
        <div class="span12 w-90 mx-auto" id="studentTableDiv">
            <div class="span9 float-left" id="studentTableDiv">
                <a href="/user/price-catalogue/" data-placement="right" title="" id="newPPMP" name="NewPPMP" class="bg-yellow-500 text-white py-1 hover:bg-yellow-800 hover:no-underline px-2 py-2" data-original-title="Click to Add New Item Request"><i class="fas fa-plus-circle text-light"></i> Add New Item</a>
                <a data-placement="bottom" title="" id="submit" href="ppmp_table.php?update_id=5" class="btn btn-success" data-original-title="Click to submit PPMP Lists"><i class="fas fa-save"></i> SUBMIT </a>
            </div>
            <form name="vtable" class="float-right" method="post">
                <div class="span3 pull-right form-inline">
                   <label for="" class="mr-3">View By</label>
                    <select class="form-control">
                        <option></option>
                        <option value="GAA">GAA</option>
                        <option value="Income">Income</option>
                        <option value="Fiduciary Fund">Fiduciary Fund</option>
                        <option value="All">All</option>
                    </select>
                </div>
            </form>	
        	<br><br>
    <form name="ftable" class="table border m-0" method="POST">
        <div id="displaydata" class="span12">
            <!-- <table cellpadding="0" cellspacing="0" border="0" id="example1" class="display" > -->
            <tfooter>

                    </tfooter><table cellpadding="0" cellspacing="0" border="1" id="" class="display" width="100%">
                <thead>
                    <tr>
                        <th rowspan="2" class="pb-2">Item Description</th>
                        <th rowspan="2" class="pb-2">Unit of Measurement</th>
                        <th rowspan="2" class="pb-2">Estimated Budget</th>
                        <th colspan="12" class="text-center">Schedule/Milestones of Activities:</th>
                        <th rowspan="2" class="pb-2">Total Qty</th>
                        <th rowspan="2" class="pb-2">Price Catalogue</th>
                        <th rowspan="2" class="pb-2">Total Amount</th>
                        <th rowspan="2" class="pb-2">Remarks</th>
                        <th rowspan="2" class="pb-2">Action</th>
                    </tr>
                    <tr>
                        <th>Jan</th>
                        <th>Feb</th>
                        <th>Mar</th>
                        <th>Apr</th>
                        <th>May</th>
                        <th>Jun</th>
                        <th>Jul</th>
                        <th>Aug</th>
                        <th>Sep</th>
                        <th>Oct</th>
                        <th>Nov</th>
                        <th>Dec</th>
                    </tr>
                </thead>

                <tbody>
                </tbody>
                <tbody><tr>
                        <th></th>
                        <th colspan="16" align="right"><h4 class="text-right">TOTAL AMOUNT: </h4></th>

                        <th align="center" colspan="8"><h4>₱0.00</h4></th>
                    </tr>
                
            </tbody></table>

        </div>
     </form>
    <br>
	<div class="span12 pull-left" id="content">
    <a href="/user/price-catalogue/" data-placement="right" title="" id="newPPMP" name="NewPPMP" class="bg-yellow-500 text-white py-1 hover:bg-yellow-800 hover:no-underline px-2 py-2" data-original-title="Click to Add New Item Request"><i class="fas fa-plus-circle text-light"></i> Add New Item</a>
    <a data-placement="bottom" title="" id="submit" href="ppmp_table.php?update_id=5" class="btn btn-success" data-original-title="Click to submit PPMP Lists"><i class="fas fa-save"></i> SUBMIT </a>
	</div>
</div>
<div class="mb-40"></div>
<script type="text/javascript">
	function getData(viewby, divid){
		$.ajax({
			url: 'ppmp_table_load.php?viewby='+viewby, //call storeemdata.php to store form data
			success: function(html) {
				var ajaxDisplay = document.getElementById(divid);
				ajaxDisplay.innerHTML = html;
			}
		});
	}
</script></div>
    </div>
   </div>
</div>

