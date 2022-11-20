<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
 <body>
    <div id="app">
        @include('layout/header',array('user'=>'/admin'))
        @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/admin','/admin/manage-bac-resolution'),
            'text'=> array('admin','manage-bac-resolution')
        )))

        <div class="container-fluid admin-table-container">
        <p class="text-xl font-bold mb-4">
            Manage BAC Resolution
        </p>
        <div class="container-fluid row d-flex items-center mb-3">
            <a class="btn bg-gray-600 text-white mr-4 hover:bg-gray-400" href="/admin" ><i class="far fa-caret-square-left mr-3"></i>Back</a>
        </div>
            <div class="card">
                <div class="card-header bg-default d-flex items-center">
                    <span class="text-base text-white mr-auto"><i class="fas fa-file-alt mr-1"></i>BAC Resolution List</span>
                    <span class="text-base text-white">Number of BAC Resolution: <i class="badge badge-pill bg-blue-400">10</i></span>
                </div>
                <div class="card-body">
                    <div class="grid grid-cols-4 gap-4 mb-4 align-middle">
                        <div class="col-span-3">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                <i class="fas fa-plus mr-1"></i> Add New
                            </button>

                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                <i class="fas fa-print mr-1"></i> Generate BAC Report
                            </button>
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
                               <th class="text-xs">Date Created</th>
                               <th class="text-xs">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-lg align-middle">2021-01-06 19:30:26</td>
                                <td class="text-xs align-middle">
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        <i class="fas fa-folder-open mr-1"></i> View
                                    </button>

                                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
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
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>