<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
 <body>
    <div id="app">
        @include('layout/header',array('user'=>'/admin'))
        @include('layout/breadcrumbs-and-year', array('breadcrumbs'=>array(
            'link'=> array('/admin','/admin/manage-company'),
            'text'=> array('Admin','Manage Company')
        )))

      
        <div class="container-fluid">
            <h1 class="text-xl font-bold mb-3">Manage Company</h1>
            @if (session('status'))
                <div class="border p-3 border-green-500 bg-green-200 text-green-800 mb-5">{{ session('status') }}</div>
            @endif
            <div class="mb-5">
                <a class="bg-green-600 hover:bg-green-500 transition-all text-white font-bold rounded p-2 mb-5 hover:no-underline cursor-pointer" href="/admin/manage-company/add"><i class="fas fa-plus-circle"></i> Add New</a>
                <a class="bg-red-600 hover:bg-red-500 transition-all text-white font-bold rounded p-2 mb-5 hover:no-underline cursor-pointer" onclick="deleteUnits()"><i class="fas fa-trash-alt"></i> Deleted Selected</a>
            </div>
            <div class="company-list-table">
                <table class="w-full border" id="dataTable">
                    <caption>Company Masterlist</caption>
                    <thead>
                        <tr class="border-b text-lg">
                            <th colspan="2" class="p-2 border-r">Company Name</th>
                            <th class="p-2 border-r">Address</th>
                            <th class="p-2">Options</th>
                        </tr>
                    </thead>
                    <tbody id="company-table-content">
                        @if (isset($companies))
                            @if (count($companies) === 0)
                            <tr>
                                <td colspan="4" class="border-b p-4 text-center">
                                    <em>No records saved.</em>
                                </td>
                            </tr>
                            @else
                                @foreach ($companies as $company)
                                    <tr class="border-b">
                                        <td class="w-10 p-3 border-r"><input class="leading-tight company-checkbox" value={{ $company->id }} type="checkbox"></td>
                                        <td class="p-3 border-r">{{ $company->name }}</td>
                                        <td class="p-3 border-r">{{ $company->address }}</td>
                                        <td class="p-3"><a class="py-2 px-3 bg-blue-600 text-white rounded font-bold hover:bg-blue-500 transition-all hover:no-underline cursor-pointer" href="/admin/manage-company/edit/{{$company->id}}"><i class="fas fa-edit"></i> Edit</a></td>
                                    </tr>
                                @endforeach
                            @endif
                        @else
                            @if (isset($errors))
                                <tr>
                                    <td colspan="4" class="border-b">
                                        SEND THIS MESSAGE TO WEBSITE ADMINISTRATOR.
                                        <pre>
                                            {{ $errors }}
                                        </pre>
                                    </td>
                                </tr>
                            @else
                                Something went wrong! Contact website administrator.
                            @endif
                        @endif
                    </tbody>
                </table>
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

    async function deleteUnits() {
        let checkboxes = document.getElementsByClassName('company-checkbox');
        let selIds = [];
        for (let i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                selIds.push(checkboxes[i].value);
            }
        }
        if (selIds.length === 0) {
            alert("Select which company to delete first.");
        } else {
            let a = confirm(`Are you sure to delete ${selIds.length > 1 ? 'these companies' : 'this company'}? Records under the selected company will be deleted as well.`);
            if (a) {
                const url = "{{ url('admin/manage-company/delete-selected') }}";
                const res = await axios.delete(url,{ data: {id: selIds} }).then(res => {
                    alert("Company deleted!");
                    window.location.reload(true);
                }).catch(err => {
                    alert("Something went wrong! Company not deleted. Please send this to website administrator.\n" + err);
                });
            }
        }
    }
</script>
</html>