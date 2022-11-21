<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
 <body>
    <div id="app">
        @include('layout/header',array('user'=>'/admin'))
        @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/admin','/admin/manage-item-purpose'),
            'text'=> array('Admin','Manage Item Purpose')
        )))
        

        <div class="container-fluid admin-table-container">
        <p class="text-xl font-bold mb-4">
            Manage Item Purpose
        </p>
        <div class="container-fluid row d-flex items-center mb-3">
            <a class="btn bg-gray-600 text-white mr-4 hover:bg-gray-400" href="/admin" ><i class="far fa-caret-square-left mr-3"></i>Back</a>
        </div>
        @if(isset($error_message))
            {{ $error_message }}
        @endif
            <div class="card">
                <div class="card-header bg-default d-flex items-center">
                    <span class="text-base text-white mr-auto"><i class="fas fa-file-alt mr-1"></i>Item Purpose List</span>
                    <span class="text-base text-white">Number of Item Purpose: <i class="badge badge-pill bg-blue-400">
                        @if (isset($purposes))
                            {{ count($purposes) }}
                        @else
                            0
                        @endif
                    </i></span>
                </div>
                <div class="card-body">
                    <div class="grid grid-cols-4 gap-4 mb-4 align-middle">
                        <div class="col-span-3">
                            <p class="text-xs">Add item purpose</p>
                            @if($errors->any())
                                <div class="bg-red-500">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif

                            {{ Form::open(array('url' => 'admin/manage-item-purpose/add', 'method' => 'post')) }}
                                <input
                                    type="text"
                                    placeholder="Item purpose"
                                    name="purpose"
                                    id="purpose"
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
            
                        <div class="col-span-3">
                            <button onclick="deleteUnits()" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                <i class="fas fa-trash mr-1"></i> Delete Selected
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                    <table class="table table-auto table-bordered" id="dataTable">
                        <thead>
                            <tr>
                               <th class="text-xs w-8">Select</th>
                               <th class="text-xs w-8">Edit</th>
                               <th class="text-xs">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($purposes) && count($purposes) > 0)
                                @foreach($purposes as $purpose)
                                    <tr>
                                        <td class="text-xs align-middle"><input class="leading-tight item-purpose-cb" value={{ $purpose->id }} type="checkbox"></td>
                                        <td class="text-xs align-middle">
                                            <a href="/admin/manage-item-purpose/{{ $purpose->id }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                        </td>
                                        <td>{{ $purpose->purpose }}</td>
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
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js" defer></script>
<script defer>
    $(document).ready(function () {
        $('#dataTable').DataTable();

    });
</script>
<script defer>
    async function deleteUnits() {
        let checkboxes = document.getElementsByClassName('item-purpose-cb');
        let selIds = [];
        for (let i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                selIds.push(checkboxes[i].value);
            }
        }
        if (selIds.length === 0) {
            alert("Select which item purpose to delete first.");
        } else {
            let a = confirm(`Are you sure to delete ${selIds.length > 1 ? 'these purposes' : 'this purpose'}? Records under the selected purposes will be deleted as well.`);
            if (a) {
                const url = "{{ url('/admin/manage-item-purpose/delete-selected') }}";
                const res = await axios.delete(url,{ data: {id: selIds} }).then(res => {
                    alert("Purpose deleted!");
                    window.location.reload(true);
                }).catch(err => {
                    alert("Something went wrong! Purpose not deleted. Please send this to website administrator.\n" + err);
                });
            }
        }
    }
</script>
</html>