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
                            @if (isset($units))
                                @foreach($units as $unit) 
                                    <tr>
                                        <td class="text-xs align-middle"><input class="leading-tight uom-checkbox" value={{ $unit->id }} type="checkbox"></td>
                                        <td class="text-xs align-middle">
                                            <a href="/admin/manage-units/{{$unit->id}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                <i class="fas fa-pen"></i>
                                            </a>
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