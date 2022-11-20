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
        
        <div class="w-full flex">
            <div class="mx-auto w-7/12 bg-white p-7 rounded shadow-md">
                <div class="mb-5">
                    <a href="/admin/manage-units" class="bg-gray-600 rounded px-3 py-2 text-white font-bold no-underline hover:bg-gray-500 transition-all"><i class="fas fa-step-backward"></i> Back</a>
                </div>
                <h1 class="text-lg font-bold mb-5">Edit Unit</h1>
                @if (isset($error_message))
                    <div class="text-red-500">{{ $error_message }}</div>
                @endif
                @if ($errors->any())
                    <div class="text-red italic">
                        @foreach ($errors->all() as $error)
                            <div class="text-red-500">* Please put unit of measurement to add.</div>
                        @endforeach
                    </div>
                @endif
                @if (isset($unit))
                    {{ Form::open(array('url' => 'admin/manage-units/update/' . $unit->id, 'method' => 'put')) }}
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
                                mb-5
                            "
                            value="{{ $unit->uom }}"
                            required
                        />
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            <i class="fas fa-save mr-1"></i> Save
                        </button>
                    {{ Form::close() }}
                @endif
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