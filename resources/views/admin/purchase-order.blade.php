<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
 <body>
  <div>
    @include('layout/header',array('user'=>'/admin'))
    @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/admin' ,'/admin/purchase-order'),
            'text'=> array('admin','purchase order')
        )))
    <button class="btn bg-green-600 hover:bg-green-400 text-white ml-3 mb-3" data-toggle="modal" data-target="#modalcompany_items"><i class="fas fa-plus mr-1"></i> Add New</button>
    <div class="card admin-table-container">
                <div class="card-header bg-default d-flex items-center">
                    <span class="text-base text-white d-flex items-center"><i class="fas fa-receipt mr-1 text-gray-400"></i> BAC Resolution List - <p class="badge bg-yellow-500 text-sm rounded-lg ml-1">Year 0001</p></span>
                    <span class="text-white text-sm ml-auto">Total records 22</span>
                </div>  
                <div class="card-body">
                    <div class="d-flex w-full items-center mb-0 sm:mb-3 flex-col sm:flex-row">
                    <a href="#" class="btn bg-green-600 hover:bg-green-400 text-white mr-3 mb-3 sm:mb-0 order-2 sm:order-1"><i class="fas fa-file-alt mr-1"></i>Generate BAC Report</a>
                    <input type="text" placeholder="input approved budget contract.." class="form-control w-100 sm:w-2/4 order-1 sm:order-2 mb-3 sm:mb-0">
                    </div>
                   <div class="table-responsive">
                    <table class="table table-auto w-full table-bordered">
                    <thead>
                        <tr>
                            <th>Date Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>11-11-2020</td>
                            <td>print preview | DELETE</td>
                        </tr>
                    </tbody>
                    </table>
                   </div>
                </div>
            </div>
    @include('layout/footer')
  </div>
    <!-- Modal -->
    <div class="modal fade" id="modalcompany_items" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">End user list (Approved by Budget office and Procurement)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Go to purchase order in existing website for referrence
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