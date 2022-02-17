<h3 class="ics-title ml-3">Suppply Office - Dashboard</h3>

<div class="item-equipment-description-section shadow-lg py-8 border mt-20 pt-0">
    <div class="d-flex mx-auto align-items-center text-light all-number-item mb-8">
        <div class="w-50"><h5><i class="mr-2 "></i>Inventory Custodian Report</h5></div>
    </div>
    <div class="inner-container mx-auto">
        <!-- Table CONTAINER -->
        <div class="overflow-x-auto shadow-xl table-responsive-lg">
          <table id="suppliertable" class="table table-bordered overflow-x-auto shadow-xl px-5 py-8 mb-5" cellspacing="0" width="100%" >
                      <thead class="overflow-x-auto">
                        <tr>
                          <th class="th-sm w-1/2">ICS NO.:</th>
                          <th class="th-sm w-1/2">Item Description</th>
                          <th class="th-sm w-1/2">Quantity</th>
                          <th class="th-sm w-1/2">Unit Cost</th>
                          <th class="th-sm w-1/2">Total Cost</th>
                          <th class="th-sm w-1/2">Fund Cluster Code</th>
                          <th class="th-sm w-1/2">Action</th>
                        </tr>
                      </thead>
                      <tbody style="height: 150px; overflow-y: auto;" >
                        <tr>
                          <td>2021-01-001</td>
                          <td> Ballpen (Black)</td>
                          <td>0</td>
                          <td>30</td>
                          <td>1200</td>
                          <td>1-2021-01-001</td>
                          <td class="text-red-600">ITEM IS TRANSFFERED</td>
                        </tr>
                        <tr>
                          <td>2021-01-001</td>
                          <td> Calculator, Compact, Electronic, 12 digits cap, 1 unit in individual box</td>
                          <td>0</td>
                          <td>200</td>
                          <td>40000</td>
                          <td>1-2021-01-001</td>
                          <td class="text-red-600">ITEM IS TRANSFFERED</td>
                        </tr>
                        <tr>
                          <td>2021-01-002</td>
                          <td> Clearbook Legal Size</td>
                          <td>0</td>
                          <td>60</td>
                          <td>4200</td>
                          <td>1-2021-01-002</td>
                          <td class="text-red-600">ITEM IS TRANSFFERED</td>
                        </tr>

                      </tbody>
                      <tfooter>
                        <tr class="bg-white">
                            <td class="px-10"><input type="text" id="transaction" value="" placeholder="Search ICS No.:"></td>
                            <td class="px-10"><input type="text" id="transaction" value="" placeholder="Search Item Description" ></td>
                            <td class="px-10"><input type="text" id="item-desc" value="" placeholder="Search Quantity"></td>
                            <td class="px-10"><input type="text" id="quantity" value="" placeholder="Search Unit Cost"></td>
                            <td class="px-10"><input type="text" id="date-acquired" value="" placeholder="Search Total Cost"></td>
                            <td class="px-10"><input type="text" id="quantity" value="" placeholder="Search Fund Cluster"></td>
                        </tr>
                    </tfooter>
                    </table>
        </div>
    </div>
</div>

<div class="item-equipment-description-section shadow-lg py-8 border mt-20 pt-0">
    <div class="d-flex mx-auto align-items-center text-light all-number-item mb-8">
        <div class="w-50"><h5><i class="mr-2 "></i>Property Acknowledgement Report</h5></div>
    </div>
    <div class="inner-container mx-auto">
        <!-- Table CONTAINER -->
        <div class="overflow-x-auto shadow-xl table-responsive-lg">
          <table id="supplierpartable" class="table table-bordered overflow-x-auto shadow-xl px-5 py-8 mb-5" cellspacing="0" width="100%" >
                      <thead class="overflow-x-auto">
                        <tr>
                          <th class="th-sm ">PAR NO.:</th>
                          <th class="th-sm ">Date Acquired</th>
                          <th class="th-sm ">Received From</th>
                          <th class="th-sm ">Purchase Order No.</th>
                          <th class="th-sm">Total Cost</th>
                          <th class="th-sm">Fund Cluster Code</th>
                          <th class="th-sm ">Action</th>
                        </tr>
                      </thead>
                      <tbody style="height: 150px; overflow-y: auto;" >
                        <tr>
                          <td>2021-01-001</td>
                          <td> 2021-01-07</td>
                          <td>GLAIZA SANTOS</td>
                          <td>01-001-2001</td>
                          <td>Php. 0</td>
                          <td>1-2021-01-001</td>
                          <td class="text-blue-600 text-center">ALL ITEM IS ALREADY TRANSFFERED<br><button data-placement="right" title="" id="save" name="save" class="btn btn-success d-block mx-auto" data-original-title="Click to Save"><i class="fas fa-print"></i> Print</button></td>
                        </tr>
                        <tr>
                          <td>2021-01-001</td>
                          <td> 2021-01-07</td>
                          <td>GLAIZA SANTOS</td>
                          <td>01-001-2001</td>
                          <td>Php. 0</td>
                          <td>1-2021-01-001</td>
                          <td class="text-blue-600 text-center">ALL ITEM IS ALREADY TRANSFFERED<br><button data-placement="right" title="" id="save" name="save" class="btn btn-success d-block mx-auto" data-original-title="Click to Save"><i class="fas fa-print"></i> Print</button></td>
                        </tr>
                        <tr>
                          <td>2021-01-002</td>
                          <td> 2021-01-07</td>
                          <td>GLAIZA SANTOS</td>
                          <td>01-002-2001</td>
                          <td>Php. 0</td>
                          <td>1-2021-01-002</td>
                          <td class="text-blue-600 text-center">ALL ITEM IS ALREADY TRANSFFERED<br><button data-placement="right" title="" id="save" name="save" class="btn btn-success d-block mx-auto" data-original-title="Click to Save"><i class="fas fa-print"></i> Print</button></td>
                        </tr>

                      </tbody>
                    </table>
        </div>
    </div>
</div>

