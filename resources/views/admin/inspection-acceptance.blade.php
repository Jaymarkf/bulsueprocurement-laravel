<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
 <body>
    <div id="app">
        @include('layout/header',array('user'=>'/admin'))
        @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/admin','/admin/inspection-acceptance'),
            'text'=> array('admin','inspection-acceptance')
        )))

        <div class="container-fluid admin-table-container">
        <p class="text-xl font-bold mb-4">
            Manage Inspection and Acceptance Report
        </p>
        <div class="container-fluid row d-flex items-center mb-3">
            <a class="btn bg-gray-600 text-white mr-4 hover:bg-gray-400" href="/admin" ><i class="far fa-caret-square-left mr-3"></i>Back</a>
        </div>
            <div class="card">
                <div class="card-header bg-default d-flex items-center">
                    <span class="text-base text-white mr-auto"><i class="fas fa-file-alt mr-1"></i>Inspection and Acceptance Reports Lists</span>
                    <span class="text-base text-white">Number of Inspection and Acceptance Report: <i class="badge badge-pill bg-blue-400">10</i></span>
                </div>
                <div class="card-body">
                    <div class="grid grid-cols-4 gap-4 mb-4 align-middle">
                        <div class="col-span-3">
                            <a href="/admin/add-inspection-acceptance" class="hover:no-underline bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                <i class="fas fa-plus mr-1"></i> Add New
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
                               <th class="text-xs">I.A.R. No.</th>
                               <th class="text-xs">Date</th>
                               <th class="text-xs">Supplier</th>
                               <th class="text-xs">P.O. No.</th>
                               <th class="text-xs">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-lg align-middle">001</td>
                                <td class="text-lg align-middle">2021-01-06 00:00:00</td>
                                <td class="text-lg align-middle">GITHUB</td>
                                <td class="text-lg align-middle">1</td>
                                <td class="text-xs align-middle">
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        <i class="fas fa-print mr-1"></i> Preview
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