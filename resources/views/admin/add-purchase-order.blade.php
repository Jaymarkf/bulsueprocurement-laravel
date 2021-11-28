<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
 <body>
    <div id="app">
        @include('layout/header',array('user'=>'/admin'))
        @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/admin','/admin/add-purchase-order'),
            'text'=> array('admin','Add Purchase Order')
        )))

        <div class="container-fluid admin-table-container">
        <p class="text-xl font-bold mb-4">
            Add Purchase Order
        </p>
        <div class="container-fluid row d-flex items-center mb-3">
            <a class="btn bg-gray-600 text-white mr-4 hover:bg-gray-400" href="/admin/purchase-order" ><i class="far fa-caret-square-left mr-3"></i>Back</a>
        </div>
            <div class="card">
                <div class="card-header bg-default d-flex items-center">
                    <span class="text-base text-white mr-auto"><i class="fas fa-file-alt mr-1"></i>Purchase Order - <i class="badge badge-pill bg-yellow-500 p-2">Year 2021</i></span>
                </div>
                <div class="card-body">
                    <div class="grid grid-cols-4 gap-4 mb-4 align-middle">
                        <div class="col-span-3">
                            <form class="mb-3">
                                <div class="text-xs">Date:</div>
                                <div class="mb-3">
                                    <input
                                        type="date"
                                        class="
                                        px-2
                                        py-2
                                        placeholder-gray-400
                                        text-gray-600
                                        relative
                                        bg-white bg-white
                                        rounded
                                        text-sm
                                        border border-gray-400
                                        outline-none
                                        focus:outline-none focus:ring
                                        w-3/12
                                        "
                                    />
                                </div>

                                <div class="text-xs">BAC Reso Generated #:</div>
                                <div class="mb-3">
                                    <select class="px-2 py-2 placeholder-gray-400 text-gray-600 relative bg-white bg-white rounded text-sm border border-gray-400 outline-none focus:outline-none focus:right w-3/12">
                                        <option>Select #</option>
                                        <option>1</option>
                                    </select>
                                </div>

                                <div class="text-xs">Mode of Payment:</div>
                                <div class="mb-3">
                                    <select class="px-2 py-2 placeholder-gray-400 text-gray-600 relative bg-white bg-white rounded text-sm border border-gray-400 outline-none focus:outline-none focus:right w-3/12">
                                        <option>Select Option</option>
                                        <option>Check and carry</option>
                                        <option>Government terms</option>
                                    </select>
                                </div>
                            </form>
                            <span class="text-lg">Supplier Name: <span class="font-bold">GITHUB</span></span>
                        </div>
                        <div class="col-span-1">
                            <input
                                type="text"
                                placeholder="Search"
                                class="
                                px-2
                                py-2
                                placeholder-gray-400
                                text-gray-600
                                relative
                                bg-white bg-white
                                rounded
                                text-sm
                                border border-gray-400
                                outline-none
                                focus:outline-none focus:ring
                                w-full
                                "
                            />
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-auto table-bordered">
                            <thead>
                                <tr>
                                <th class="text-xs">Item Description</th>
                                <th class="text-xs">Quantity</th>
                                <th class="text-xs">Unit</th>
                                <th class="text-xs">Unit Cost</th>
                                <th class="text-xs">Total Cost</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!-- Test Data -->
                                    {{-- <td class="text-lg align-middle">Software</td>
                                    <td class="text-lg align-middle">1</td>
                                    <td class="text-lg align-middle">Test</td>
                                    <td class="text-lg align-middle">P100,000</td>
                                    <td class="text-lg align-middle">P100,000</td> --}}
                                    <!-- End Test Data -->

                                    <!-- No Data Available -->
                                    <td class="text-xs align-middle italic text-center" colspan="5">NO DATA AVAILABLE</td>
                                    <!-- End No Data Available -->
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a class="btn bg-blue-600 text-white hover:bg-blue-400 float-right" href="/admin" ><i class="far fa-file mr-3"></i>Generate Report</a>
                </div>
            </div>
        </div>
        @include('layout/footer')    
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">End user list (Approved by Budget office and Procurement)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            Data table here <br>
            columns >> End users | Item Detail | Action > approved button (toggle on or  off switch button)
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close mr-1"></i>Close</button>
        <button type="button" class="btn btn-primary"><i class="fa fa-save mr-1"></i>Save</button>
      </div>
    </div>
  </div>
</div>

</body>
<script src="{{ asset('js/app.js') }}"></script>
<link
  href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css"
  rel="stylesheet"
/>
</html>