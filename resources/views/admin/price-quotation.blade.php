<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
 <body>
  <div>
    @include('layout/header',array('user'=>'/admin'))
    @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/admin' ,'/admin/price-quotation'),
            'text'=> array('admin','price-quotation')
        )))

     
        <div class="container-fluid admin-table-container">
            <div class="row m-0 p-0 w-max-full mb-3">
                <div class="col-sm-3 p-0 pr-2">
                    <div class="card">
                        <div class="card-header bg-yellow-400">
                            <h2 class="text-base font-bold text-blue-600"><i class="fas fa-address-card mr-1 text-blue-600"></i> Company</h2>
                        </div>
                        <div class="card-body d-flex items-center flex-col justify-center">
                            <span class="text-sm mb-3">Total Companies (<span class="text-sm text-blue-400"> 40 </span>)</span>
                            <a href="#" class="btn bg-yellow-600 text-white hover:bg-yellow-400"><i class="fas fa-edit mr-1"></i>Manage Company</a>
                        </div>
                    </div>
                </div> 
                <div class="col-sm-9 p-0 pl-0 sm:pl-2">
                    <div class="card">
                        <div class="card-header bg-yellow-800">
                            <h2 class="text-base font-bold text-white"><i class="fas fa-file-alt mr-1"></i>Summary Reports of Quotation</h2>
                        </div>
                        <div class="card-body">
                            <div class="row m-0 p-0">
                                <a href="#" class="ml-auto btn bg-green-600 text-white text-base mb-2 hover:bg-green-400"><i class="fas fa-print mr-1"></i>Print form</a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Company Name</th>
                                        <th>Item Description</th>
                                        <th>Unit Bid Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="2" class="align-middle text-center">Google</td>
                                        <td>pen pen</td>
                                        <td>420 php</td>
                                    </tr>
                                    <tr>
                                        <td>Ball pen</td>
                                        <td>400 php</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" class="align-middle text-center">Github</td>
                                        <td>paper</td> 
                                        <td>300.00 php</td>
                                    </tr>
                                    <tr>
                                        <td>clip</td>
                                        <td>320.00 php</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="card">
                <div class="card-header bg-default d-flex items-center">
                    <span class="text-base text-white d-flex items-center"><i class="fas fa-money-bill-wave text-green-700 mr-1"></i> Item Quotation list - <p class="badge bg-yellow-500 text-sm rounded-lg ml-1">Year 0001</p></span>
                    <span class="text-white text-sm ml-auto">Total records 22</span>
                </div>
                <div class="card-body">
                    <a href="#" class="btn bg-green-600 hover:bg-green-400 text-white mb-3"><i class="fas fa-folder-plus mr-1"></i>Add New Quotation</a>
                    <table class="table table-auto w-full table-bordered ">
                        <thead>
                            <tr>
                                <th>Quotation Number</th>
                                <th>Company Name</th>
                                <th>Total Price</th>
                                <th>Quotation Date Created</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>A32dsA</td>
                                <td>Google</td>
                                <td>2829.00 php</td>
                                <td>22/11/1992</td>
                                <td><button class="btn btn-success">View</button></td>
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
        

        
    @include('layout/footer')
  </div>

</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>