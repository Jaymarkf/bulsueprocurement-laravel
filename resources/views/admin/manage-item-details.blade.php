<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
 <body>
    <div id="app">
        @include('layout/header',array('user'=>'/admin'))
        @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/admin','/admin/manage-item-details'),
            'text'=> array('admin','manage-item-details')
        )))
        

        <div class="container-fluid admin-table-container">
        <p class="text-xl font-bold mb-4">
            Manage Item Details
        </p>
        <div class="container-fluid row d-flex items-center mb-3">
            <a class="btn bg-gray-600 text-white mr-4 hover:bg-gray-400" href="/admin" ><i class="far fa-caret-square-left mr-3"></i>Back</a>
        </div>
            <div class="card">
                <div class="card-header bg-default d-flex items-center">
                    <span class="text-base text-white mr-auto"><i class="fas fa-file-alt mr-1"></i>Item Category List</span>
                    <span class="text-base text-white">Number of Category: <i class="badge badge-pill bg-blue-400">10</i></span>
                </div>
                <div class="card-body">
                    <div class="grid grid-cols-4 gap-4 mb-4 align-middle">
                        <div class="col-span-3">

                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="modalHandler(true, 'add')">
                                <i class="fas fa-plus mr-1"></i> Add New Item Detail
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
                        <div class="col-span-3">
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                <i class="fas fa-trash mr-1"></i> Delete Selected
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                    <table class="table table-auto table-bordered">
                        <thead>
                            <tr>
                               <th class="text-xs w-8">Select</th>
                               <th class="text-xs w-8">Edit</th>
                               <th class="text-xs">Category</th>
                               <th class="text-xs">Description</th>
                               <th class="text-xs">Price Catalogue</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-xs align-middle"><input class="leading-tight" type="checkbox"></td>
                                <td class="text-xs align-middle">
                                    <button onclick="modalHandler(true, 'edit')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                </td>
                                <td class="text-xl align-middle">APPLIANCES (LESS THAN P15,000)</td>
                                <td class="text-xl align-middle">Television 25"</td>
                                <td class="text-xl align-middle">P13,000</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
        @include('layout/footer')    
    </div>
    <!--modal content-->
    
    <div class="py-12 bg-gray-700 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0 hidden" id="editModal">
        <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
            <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                
                <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">Edit <em class="text-xs">Television 25"</em></h1>
                <select class="form-select block w-full mt-2">
                    <option>Select Category</option>
                    <option selected>APPLIANCES (LESS THAN P15,000)</option>
                </select>
                <input id="name" class="mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Article" value="Appliance" />    
                <input id="name" class="mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Description" value="Television 25''" />    
                <input id="name" class="mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Unit of Measurement" value="pc" />  
                <input type="number" id="name" class="mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Price Catalogue" value="13000.50" />    

                <div class="flex items-center justify-start w-full mt-5">
                    <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-green-600 bg-green-700 rounded text-white px-8 py-2 text-sm">Save</button>
                    <button class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm" onclick="modalHandler(false, 'edit')">Cancel</button>
                </div>
                <button class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" onclick="modalHandler(false, 'edit')" aria-label="close modal" role="button">
                    <svg  xmlns="http://www.w3.org/2000/svg"  class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                </button>

            </div>
        </div>
    </div>  
    
    <div class="py-12 bg-gray-700 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0 hidden" id="addModal">
        <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
            <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                
                <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">Add New Item Detail</h1>
                <select class="form-select block w-full mt-2">
                    <option>Select Category</option>
                    <option>APPLIANCES (LESS THAN P15,000)</option>
                </select>
                <input id="name" class="mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Article" />    
                <input id="name" class="mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Description" />    
                <input id="name" class="mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Unit of Measurement" />  
                <input type="number" id="name" class="mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Price Catalogue" />      
                <div class="flex items-center justify-start w-full mt-5">
                    <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-green-600 bg-green-700 rounded text-white px-8 py-2 text-sm">Save</button>
                    <button class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm" onclick="modalHandler(false, 'add')">Cancel</button>
                </div>
                <button class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" onclick="modalHandler(false, 'add')" aria-label="close modal" role="button">
                    <svg  xmlns="http://www.w3.org/2000/svg"  class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                </button>

            </div>
        </div>
    </div>  

    <script>
        let editModal = document.getElementById("editModal");
        let addModal = document.getElementById("addModal");

        function modalHandler(val, modal) {
            let selModal;

            if (modal === "edit") {
                selModal = editModal;
            } else if (modal === "add") {
                selModal = addModal;
            }

            if (val) {
                fadeIn(selModal);
            } else {
                fadeOut(selModal);
            }
        }
        function fadeOut(el) {
            el.style.opacity = 1;
            (function fade() {
                if ((el.style.opacity -= 0.1) < 0) {
                    el.style.display = "none";
                } else {
                    requestAnimationFrame(fade);
                }
            })();
        }
        function fadeIn(el, display) {
            el.style.opacity = 0;
            el.style.display = display || "flex";
            (function fade() {
                let val = parseFloat(el.style.opacity);
                if (!((val += 0.2) > 1)) {
                    el.style.opacity = val;
                    requestAnimationFrame(fade);
                }
            })();
        }
    </script>
    <!--end modal content-->
</body>
<script src="{{ asset('js/app.js') }}"></script>
<link
  href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css"
  rel="stylesheet"
/>
</html>