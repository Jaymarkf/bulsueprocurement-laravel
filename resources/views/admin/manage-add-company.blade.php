<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
 <body>
    <div id="app">
        @include('layout/header',array('user'=>'/admin'))
        @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/admin','/admin/manage-company'),
            'text'=> array('admin','Manage Company')
        )))

      
        <div class="container-fluid">
            <div class="flex justify-center items-center">
                <div class="w-full md:w-1/2 border rounded-md p-3">
                    <div class="my-3">
                        <a class="mb-3 text-sm bg-gray-500 hover:bg-gray-600 transition-all py-2 px-3 rounded text-white hover:no-underline" href="/admin/manage-company">
                            <i class="fas fa-step-backward"></i> Back
                        </a>
                    </div>
                    <h1 class="text-xl font-bold mb-3">Add Company</h1>
                    @if($errors->any())
                        <div>
                            @foreach ($errors->all() as $error)
                                <div class="text-red-500">* {{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                    
                    {{ Form::open(array('url' => 'admin/manage-company/save', 'method' => 'post')) }}
                        @csrf
                        <input
                            type="text"
                            placeholder="Company Name"
                            name="name"
                            id="name"
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
                            required
                        />
                        <input
                            type="text"
                            placeholder="Address"
                            name="address"
                            id="address"
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
                            required
                        />
                        <input
                            type="text"
                            placeholder="TIN"
                            name="tin"
                            id="tin"
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
                            required
                        />
                        <input
                            type="text"
                            placeholder="Email Address"
                            name="email_address"
                            id="email_address"
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
                            required
                        />
                        <input
                            type="text"
                            placeholder="Contact Number"
                            name="contact"
                            id="contact"
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
                            required
                        />
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-right transition-all">
                            <i class="fas fa-save mr-1"></i> Save
                        </button>
                    {{ Form::close() }}
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
</html>