<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
 <body>
    <div id="app">
        @include('layout/header',array('user'=>'/admin'))
        @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/admin','/admin/manage-item-details/unapproved'),
            'text'=> array('Admin','Manage Unapproved Items')
        )))
        <div class="w-full flex">
            <div class="mx-auto w11/12 md:w-10/12 bg-white p-7 rounded shadow-md">
                <div class="mb-5">
                    <a href="/admin/manage-units" class="bg-gray-600 rounded px-3 py-2 text-white font-bold no-underline hover:bg-gray-500 transition-all"><i class="fas fa-step-backward"></i> Back</a>
                </div>
                <h1 class="text-lg font-bold mb-5">Unapproved Items</h1>
                <table class="table table-auto table-bordered" id="items-table">
                    <thead>
                        <tr>
                            <th>Item Name</th>
                            <th>Price Catalogue</th>
                            <th>Submitted by</th>
                            <th>College</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($items) === 0)
                            <tr>
                                <td colspan="4" class="text-center italic text-gray-500">
                                    No unapproved items
                                </td>
                            </tr>
                        @else
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->price_catalogue }}</td>
                                    <td>{{ $item->first_name }} {{ $item->middle_initial }} {{ $item->last_name }}</td>
                                    <td>{{ $item->branch_name }}</td>
                                    <td><button class="bg-green-800 text-white hover:bg-green-600 transition-all ease-in-out px-2 py-1 rounded w-full" onclick="viewDetails({{ $item->id }})"><i class="fa fa-eye" aria-hidden="true"></i> Review</button></td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
            <div id="open-modal" class="modal-window">
                <div class="rounded-3xl shadow">
                    <a href="#" title="Close" class="modal-close"><i class="fa fa-window-close" aria-hidden="true"></i></a>
                    <div class="text-xl mb-3">View <span id="edit-title"></span></div>
                    <div class="form-group">
                        <label for="description" class="text-xs">Item Name</label>
                        <input type="text" name="description" id="description" value="" class="w-full" />
                    </div>
                    <div class="form-group">
                        <label for="category_id" class="text-xs">Item Name</label>
                        <select name="category_id" id="category_id" class="p-1 w-full border border-gray-300 rounded">
                            @if (isset($categories))
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->description }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="article" class="text-xs">Item Article</label>
                        <input type="text" name="article" id="article" value="" class="w-full" />
                    </div>
                    <div class="form-group">
                        <label for="unit_id" class="text-xs">Unit of Measurement</label>
                        <select name="unit_id" id="unit_id" class="p-1 w-full border border-gray-300 rounded">
                            @if (isset($units))
                                @foreach ($units as $unit)
                                    <option value="{{ $unit->id }}">{{ $unit->uom }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price_catalogue" class="text-xs">Price Catalogue</label>
                        <input type="text" name="price_catalogue" id="price_catalogue" value="" class="w-full" />
                    </div>
                    <div class="text-xs italic mb-3">
                        <span class="font-bold">Added by:</span> <span id="added_by_span"></span>
                    </div>
                    <a href="#" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600 transition-all ease-in-out no-underline">Cancel</a>
                    <button class="bg-green-700 text-white px-2 py-1 rounded hover:bg-green-600 transition-all ease-in-out no-underline float-right">Save & Approve</button>
                    <button class="bg-blue-700 text-white px-2 py-1 rounded hover:bg-blue-600 transition-all ease-in-out no-underline float-right mr-3">Save Only</button>
                </div>
            </div>
        </div>
</body>
<style>
.modal-window {
  position: fixed;
  background-color: rgba(46, 46, 46, 0.5);
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 999;
  visibility: hidden;
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s;
}
.modal-window:target {
  visibility: visible;
  opacity: 1;
  pointer-events: auto;
}
.modal-window > div {
  width: 50%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 2em;
  background: white;
}
.modal-window header {
  font-weight: bold;
}
.modal-window h1 {
  font-size: 150%;
  margin: 0 0 15px;
}

.modal-close {
  color: #aaa;
  line-height: 50px;
  font-size: 80%;
  position: absolute;
  right: 0;
  text-align: center;
  top: 0;
  width: 70px;
  text-decoration: none;
}
.modal-close:hover {
  color: black;
}
</style>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" defer> </script>

<script>
    $(document).ready( function () {
        $('#items-table').DataTable();
    });
</script>

<script defer>
    async function viewDetails(e) {
        await axios.get('/api/v1/item_details/' + e)
            .then(res => {
                let resData = res.data.data[0];
                let titleName = document.querySelector("#edit-title");
                titleName.innerHTML = resData.description;
                document.querySelector('#description').value = resData.description;

                let selectCat = document.getElementById('category_id');
                for (let i = 0; i < selectCat.options.length; i ++) {
                    if (parseInt(selectCat.options[i].value) === resData.category_id) {
                        selectCat.options[i].selected = true;
                        break;
                    }
                }

                document.querySelector('#article').value = resData.article;

                let selUnit = document.getElementById('unit_id');
                for (let i = 0; i < selUnit.options.length; i ++) {
                    if (parseInt(selUnit.options[i].value) === resData.unit_id) {
                        selUnit.options[i].selected = true;
                        break;
                    }
                }

                document.querySelector('#price_catalogue').value = resData.price_catalogue;

                document.querySelector('#added_by_span').innerHTML = resData.first_name + ' ' + resData.middle_initial + ' ' + resData.last_name + ' (' + resData.branch_name + ')';

                window.location.href = "#open-modal";
            })
            .catch(err => {
                alert('Something went wrong! Cannot fetch data. Please refresh the page! If the error persists, please contact website administrator.');
            });
    }
</script>

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