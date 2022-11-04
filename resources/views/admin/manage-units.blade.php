<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
 <body>
    <div id="app">
        @include('layout/header',array('user'=>'/admin'))
        @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/admin','/admin/manage-units'),
            'text'=> array('Admin','Manage Units')
        )))
        

        <div class="container-fluid admin-table-container">
        <p class="text-xl font-bold mb-4">
            Manage Unit of Measurements
        </p>
        <div class="container-fluid row d-flex items-center mb-3">
            <a class="btn bg-gray-600 text-white mr-4 hover:bg-gray-400" href="/admin" ><i class="far fa-caret-square-left mr-3"></i>Back</a>
        </div>
        @if(isset($error_message))
            {{ $error_message }}
        @endif
            <div class="card">
                <div class="card-header bg-default d-flex items-center">
                    <span class="text-base text-white mr-auto"><i class="fas fa-file-alt mr-2"></i>Unit of Measurements List</span>
                    <span class="text-base text-white">Number of unit of measurements: <i class="badge badge-pill bg-blue-400">
                        @if(isset($units))
                            {{ count($units) }}
                        @else
                            0
                        @endif
                    </i></span>
                </div>
                <div class="card-body">
                    <div class="grid grid-cols-4 gap-4 mb-4 align-middle">
                        <div class="col-span-3">
                            <p class="text-xs">Add unit of measurement</p>
                            @if($errors->any())
                                <div>
                                    @foreach ($errors->all() as $error)
                                        <div class="text-red-500">* Please put unit of measurement to add.</div>
                                    @endforeach
                                </div>
                            @endif
                            
                            {{ Form::open(array('url' => 'admin/manage-units/add', 'method' => 'post')) }}
                                <input
                                    type="text"
                                    placeholder="Unit of measurement"
                                    name="uom"
                                    id="uom"
                                    class="
                                        px-2
                                        py-2
                                        placeholder-gray-400
                                        text-gray-600
                                        relative
                                        bg-white
                                        rounded
                                        text-sm
                                        border border-gray-400
                                        outline-none
                                        focus:outline-none focus:ring
                                        w-1/2
                                    "
                                />
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    <i class="fas fa-save mr-1"></i> Add
                                </button>
                            {{ Form::close() }}
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
                                bg-white
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
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="deleteUnits()">
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
                               <th class="text-xs">Unit of Measurement</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- <tr>
                                <td class="text-xs align-middle"><input class="leading-tight" type="checkbox"></td>
                                <td class="text-xs align-middle">
                                    <button onclick="modalHandler(true)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                </td>
                                <td class="text-xl align-middle">ADVERTISING EXPENSES</td>
                            </tr> --}}
                            @if (isset($units))
                                @foreach($units as $unit) 
                                    <tr>
                                        <td class="text-xs align-middle"><input class="leading-tight uom-checkbox" value={{ $unit->id }} type="checkbox"></td>
                                        <td class="text-xs align-middle">
                                            <button onclick="openModal()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                <i class="fas fa-pen"></i>
                                            </button>
                                        </td>
                                        <td>{{ $unit->uom }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3">No records found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
        @include('layout/footer')    
    </div>
    <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="edit-modal">
        <div class="relative top-60 mx-auto p-5 border w-1/2 shadow-lg rounded-md bg-white">
            {{ Form::open(array('url' => 'admin/manage-units/edit', 'method' => 'put')) }}
                <div>
                    <input
                        type="text"
                        placeholder="Unit of measurement"
                        name="uom"
                        id="uom"
                        class="
                            px-2
                            py-2
                            placeholder-gray-400
                            text-gray-600
                            relative
                            bg-white
                            rounded
                            text-sm
                            border border-gray-400
                            outline-none
                            focus:outline-none focus:ring
                            w-full
                            mb-3
                        "
                    />
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <i class="fas fa-save mr-1"></i> Save Changes
                    </button>
                </div>
            {{ Form::close() }}
        </div>
    </div>
    {{-- <!--modal content-->
    
    <div class="py-12 bg-gray-700 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0 hidden" id="modal">
        <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
            <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                
                <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">Edit <em class="text-xs">ADVERTISING EXPENSES</em></h1>
                <input id="name" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Description" value="ADVERTISING EXPENSES" />
                <div class="flex items-center justify-start w-full">
                    <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-green-600 bg-green-700 rounded text-white px-8 py-2 text-sm">Save</button>
                    <button class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm" onclick="modalHandler()">Cancel</button>
                </div>
                <button class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" onclick="modalHandler()" aria-label="close modal" role="button">
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
        let modal = document.getElementById("modal");
        
        function modalHandler(val) {
            if (val) {
                fadeIn(modal);
            } else {
                fadeOut(modal);
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
    <!--end modal content--> --}}
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script defer>
    let selId = 0;
    let modal = document.getElementById('edit-modal');

    function openModal() {
        modal.classList.remove("hidden");
    }

    function closeModal() {
        modal.classList.add("hidden");;
    }

    async function deleteUnits() {
        let checkboxes = document.getElementsByClassName('uom-checkbox');
        let selIds = [];
        for (let i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                selIds.push(checkboxes[i].value);
            }
        }
        if (selIds.length === 0) {
            alert("Select which unit/s to delete first.");
        } else {
            let a = confirm(`Are you sure to delete ${selIds.length > 1 ? 'these units' : 'this unit'}?`);
            if (a) {
                const url = "{{ url('admin/manage-units/delete') }}";
                const res = await axios.delete(url,{ data: {id: selIds} }).then(res => {
                    alert("Unit deleted!");
                    window.location.reload(true);
                }).catch(err => {
                    alert("Something went wrong! Unit not deleted. Please send this to website administrator.\n" + err);
                });
            }
        }
    }

    window.onclick = function(ev) {
        if (ev.target === modal) {
            modal.classList.add("hidden");
        }
    }
</script>
</html>