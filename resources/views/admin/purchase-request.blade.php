<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
 <body>
    <div id="app">
        @include('layout/header',array('user'=>'/admin'))
        @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/admin','/admin/purchase-request'),
            'text'=> array('admin','purchase-request')
        )))


        <div class="container-fluid admin-table-container">
        <div class="container-fluid row d-flex items-center mb-3">
            <a class="btn bg-gray-600 text-white mr-4 hover:bg-gray-400" href="/admin" ><i class="far fa-caret-square-left mr-1"></i>back</a>
            <button class="btn bg-green-600 text-white mr-4 hover:bg-green-400" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-book mr-1"></i>request list to be approved</button>
        </div>
            <div class="card">
                <div class="card-header bg-default d-flex items-center">
                    <span class="text-base text-white mr-auto"><i class="fas fa-cash-register mr-1 text-pink-400"></i>Purchase Request - <p class="badge bg-yellow-500 text-sm badge-pill">Year 0001</p></span>
                    <span class="text-base text-white">Total Record(s): <i class="badge badge-pill bg-blue-400">10</i></span>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-auto table-bordered">
                        <thead>
                            <tr>
                               <th class="text-xs">Entity Name</th>
                               <th class="text-xs">Item Description</th>
                               <th class="text-xs">Estimated Budget</th>
                               <th class="text-xs">Total Cost</th>
                               <th class="text-xs">Fund Cluster</th>
                               <th class="text-xs">Quantity</th>
                               <th class="text-xs">PR#</th>
                               <th class="text-xs">Responsibility Center</th>
                               <th class="text-xs">Date</th>
                               <th class="text-xs">Requested by</th>
                               <th class="text-xs">Approved by</th>
                               <th class="text-xs">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5" class="text-right font-bold text-xl">
                                    TOTAL AMOUNT
                                </td>
                            </tr>
                        </tfoot>
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