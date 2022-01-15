<h3 class="ics-title ml-3"><i class="fas fa-external-link-alt mr-1"></i>Property Transfer</h3>
<h2 class="text-center h4 mt-4 mb-0">Transaction Type - Inventory Custodian Report </h2>

<div class="item-equipment-description-section shadow-lg py-8 border mt-2 pt-0">
    <div class="d-flex mx-auto align-items-center text-light all-number-item mb-8" style="position:relative;width:100%;background-image:linear-gradient(#e877c6, #763435); ">
        <div class="w-100 text-center"><h5><i class="mr-2 "></i>Transfer ICS Data</h5></div>
    </div>
    <div class="inner-container mx-auto">
        <!-- Table CONTAINER -->
        <div class="overflow-x-auto shadow-xl table-responsive-lg">
          <table id="suppliertable" class="table table-bordered overflow-x-auto shadow-xl px-5 py-8 mb-5" cellspacing="0" width="100%" >
                      <thead class="overflow-x-auto">
                        <tr>
                        <th class="th-sm w-1/2">Select</th>  
                          <th class="th-sm w-1/2">ICS NO.:</th>
                          <th class="th-sm w-1/2">College</th>
                          <th class="th-sm w-1/2">Item Description</th>
                          <th class="th-sm w-1/2">Quantity</th>
                          <th class="th-sm w-1/2">Unit</th>
                          <th class="th-sm w-1/2">Status</th>
                        </tr>
                      </thead>
                      <tbody style="height: 150px; overflow-y: auto;" >
                        <tr>
                          <td><button type="button" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" disabled><i class="fas fa-ban mr-2"></i>Transfered All</button></td>
                          <td>2021-01-001</td>
                          <td>College of Information and Communication Technology</td>
                          <td> Ballpen (Black)</td>
                          <td>0</td>
                          <td>Pieces</td>
                          <td class="text-red-600">ITEM IS TRANSFFERED</td>
                        </tr>
                        <tr>
                        <td><button type="button" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" disabled><i class="fas fa-ban mr-2"></i>Transfered All</button></td>
                          <td>2021-01-002</td>
                          <td>College of Information and Communication Technology</td>
                          <td> Clearbook Legal Size</td>
                          <td>0</td>
                          <td>Pieces</td>
                          <td class="text-red-600">ITEM IS TRANSFFERED</td>
                        </tr>
                        <tr>
                        <td><button type="button" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" disabled><i class="fas fa-ban mr-2"></i>Transfered All</button></td>
                          <td>2021-01-001</td>
                          <td>Meneses Campus</td>
                          <td> Calculator, Compact, Electronic, 12 digits cap, 1 unit in individual box</td>
                          <td>0</td>
                          <td>Pieces</td>
                          <td class="text-red-600">ITEM IS TRANSFFERED</td>
                        </tr>

                      </tbody>
                      <tfooter>
                        <tr class="bg-white">
                            <td class="px-10"><input type="text" id="transaction" value="" placeholder="Search SELECT.:"></td>
                            <td class="px-10"><input type="text" id="transaction" value="" placeholder="Search ICS No.:"></td>
                            <td class="px-10"><input type="text" id="transaction" value="" placeholder="Search College" ></td>
                            <td class="px-10"><input type="text" id="item-desc" value="" placeholder="Search Item Description"></td>
                            <td class="px-10"><input type="text" id="quantity" value="" placeholder="Search Quantity"></td>
                            <td class="px-10"><input type="text" id="date-acquired" value="" placeholder="Search Unit"></td>
                            <td class="px-10"><input type="text" id="quantity" value="" placeholder="Search Status"></td>
                        </tr>
                    </tfooter>
                    </table>
        </div>
    </div>
</div>

<div class="item-equipment-description-section shadow-lg py-8 border mt-20 pt-0">
    <div class="d-flex mx-auto align-items-center text-light all-number-item mb-8" style="position:relative;width:100%;height:40px;background-image:linear-gradient(#87c6a8, #6c94ae); ">
        <div class="w-100 text-center"><h5><i class="mr-2 "></i>Property Transfer Record of ICS</h5></div>
    </div>
    <div class="inner-container mx-auto">
        <!-- Table CONTAINER -->
        <div class="overflow-x-auto shadow-xl table-responsive-lg">
          <table id="supplierpartable" class="table table-bordered overflow-x-auto shadow-xl px-5 py-8 mb-5" cellspacing="0" width="100%" >
                      <thead class="overflow-x-auto">
                        <tr>
                          <th class="th-sm ">Transfer ID </th>
                          <th class="th-sm ">PTR NO.:</th>
                          <th class="th-sm ">RELEASED/ISSUED BY</th>
                          <th class="th-sm ">Received BY</th>
                          <th class="th-sm ">Reason For Transfer</th>
                          <th class="th-sm">PTR DATE</th>
                          <th class="th-sm">ITEM DESCRIPTION</th>
                          <th class="th-sm">QTY</th>
                          <th class="th-sm ">Action</th>
                        </tr>
                      </thead>
                      <tbody style="height: 150px; overflow-y: auto;" >
                        <tr>
                          <td>1</td>
                          <td>2021-01-001</td>
                          <td>Rommel S. Pabustan</td>
                          <td>John V. Doe</td>
                          <td>Test</td>
                          <td> 2021-01-07</td>
                          <td>Ballpen (black)</td>
                          <td>40</td>
                          <td class="text-blue-600 text-center"><button data-placement="right" title="" id="save" name="save" class="btn btn-success d-block mx-auto" data-original-title="Click to Save"><i class="far fa-eye"></i> View</button></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>2021-01-001</td>
                          <td>Rommel S. Pabustan</td>
                          <td>John V. Doe</td>
                          <td>N/A<</td>
                          <td> 2021-01-07</td>
                          <td>Clearbook Legal Size </td>
                          <td>70</td>
                          <td class="text-blue-600 text-center"><button data-placement="right" title="" id="save" name="save" class="btn btn-success d-block mx-auto" data-original-title="Click to Save"><i class="far fa-eye"></i> View</button></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>2021-01-003</td>
                          <td>Tony L. Reyes</td>
                          <td>Rommel S. Pabustan</td>
                          <td>N/A</td>
                          <td> 2021-01-07</td>
                          <td>Calculator, Compact, Electronic, 12 digits cap, 1 unit in individual box</td>
                          <td>100</td>
                          <td class="text-blue-600 text-center"><button data-placement="right" title="" id="save" name="save" class="btn btn-success d-block mx-auto" data-original-title="Click to Save"><i class="far fa-eye"></i> View</button></td>
                        </tr>

                      </tbody>
                    </table>
        </div>
    </div>
</div>

