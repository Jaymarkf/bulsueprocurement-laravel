<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
 <body>
    <div id="app">
        @include('layout/header',array('user'=>'/admin'))
        @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/admin','/admin/consolidated'),
            'text'=> array('admin','consolidated')
        )))

        
        <div class="container-fluid admin-table-container">
            <div class="card">
                <div class="card-header bg-default">
                    <span class="text-base text-white"><i class="fab fa-battle-net mr-1 text-yellow-400"></i>Consolidated Annual Procurement Plan - <p class="badge bg-yellow-500 text-sm badge-pill">Year 0001</p></span>
                    <span class="text-white font-bold ml-10">Notification <i class="text-lg fas fa-bell cursor-pointer dropdown-pointer hover:text-yellow-600"></i></span>
                </div>
                <div class="card-body">
                    <table class="table table-auto w-full table-bordered ">
                        <thead>
                            <tr>
                                <th>Item Description</th>
                                <th>Unit of Measurement</th>
                                <th>Total Qty</th>
                                <th>Price Catalogue</th>
                                <th>Total Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>tv</td>
                                <td>pcs</td>
                                <td>1</td>
                                <td>PHP:2500.00</td>
                                <td>2500.00</td>
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
                <div class="card-footer d-flex">
                    <a href="/admin" class="btn btn-dark btn-sm mr-auto hover:bg-gray-400 underline-none"><i class="fas fa-arrow-alt-circle-left mr-2"></i>back</a>
                    <button class="btn bg-green-700 text-white btn-sm ml-auto mr-2 hover:bg-green-500"><i class="fas fa-object-group mr-1"></i>consolidate</button>
                    <button class="btn bg-yellow-700 btn-sm text-white hover:bg-yellow-500"><i class="fas fa-sync-alt mr-2"></i>reset</button>
                </div>
            </div>
        </div>
        @include('layout/footer')    
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>