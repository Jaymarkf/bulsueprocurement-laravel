<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
 <body>
    <div id="app">
        @include('layout/header',array('user'=>'/admin'))
        @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/admin','/admin/purchase-order'),
            'text'=> array('admin','purchase-order')
        )))

        <div class="container-fluid admin-table-container">
        <p class="text-xl font-bold mb-4">
            Purchase Order
        </p>
        <div class="container-fluid row d-flex items-center mb-3">
            <a class="btn bg-gray-600 text-white mr-4 hover:bg-gray-400" href="/admin" ><i class="far fa-caret-square-left mr-3"></i>Back</a>
        </div>
            <div class="card">
                <div class="card-header bg-default d-flex items-center">
                    <span class="text-base text-white mr-auto"><i class="fas fa-file-alt mr-1"></i>Purchase Order - <i class="badge badge-pill bg-yellow-500 p-2">Year 2021</i></span>
                    <span class="text-base text-white">Total Record(s): <i class="badge badge-pill bg-blue-400">1</i></span>
                </div>
                <div class="card-body">
                    <div class="grid grid-cols-4 gap-4 mb-4 align-middle">
                        <div class="col-span-3">
                            <a href="/admin/add-purchase-order" class="bg-blue-500 hover:no-underline hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                <i class="fas fa-plus mr-1"></i> New Purchase Order
                            </a>
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
                               <th class="text-xs">PO No.</th>
                               <th class="text-xs">Supplier</th>
                               <th class="text-xs">Address</th>
                               <th class="text-xs">E-mail</th>
                               <th class="text-xs">Contact No.</th>
                               <th class="text-xs">TIN</th>
                               <th class="text-xs">PO Date</th>
                               <th class="text-xs">MOP</th>
                               <th class="text-xs">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-lg align-middle">1</td>
                                <td class="text-lg align-middle">GITHUB</td>
                                <td class="text-lg align-middle">AUSTRALIA</td>
                                <td class="text-lg align-middle">admin@github.com</td>
                                <td class="text-lg align-middle">044 442 44</td>
                                <td class="text-lg align-middle">555 555 555 555</td>
                                <td class="text-lg align-middle">2021-01-06 19:30:26</td>
                                <td class="text-lg align-middle">Check and carry</td>
                                <td class="text-xs align-middle">
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full mb-2">
                                        <i class="fas fa-print mr-1"></i>
                                    </button>

                                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded w-full">
                                        <i class="fas fa-trash-alt mr-1"></i> Delete
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
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
</html>