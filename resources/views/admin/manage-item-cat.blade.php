<!DOCTYPE html>
<html lang="en"> 
    @include('layout/head-script') 
    <body>
    <div id="app">
        @include('layout/header',array('user'=>'/admin'))
        @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/admin','/admin/manage-item-cat'),
            'text'=> array('admin','manage-item-category')
        )))
        
     <div class="container-fluid admin-table-container">
        <p class="text-xl font-bold mb-4"> Manage Item Category </p>
        <div class="container-fluid row d-flex items-center mb-3">
          <a class="btn bg-gray-600 text-white mr-4 hover:bg-gray-400" href="/admin">
            <i class="far fa-caret-square-left mr-3"></i>Back </a>
        </div>
        <!-- Card Section -->
        <div class="card">
          <div class="card-header bg-default d-flex items-center">
            <span class="text-base text-white mr-auto">
              <i class="fas fa-file-alt mr-1"></i>Item Category List </span>
            <span class="text-base text-white">Number of Category: <i class="badge badge-pill bg-blue-400">{{$item_categories->count()}}</i>
            </span>
          </div>
          <div class="card-body">
            <div class="grid grid-cols-4 gap-4 mb-4 align-middle">
              <div class="col-span-3">

                <form action="{{route('item_categories.store')}}" method="POST"> @csrf <div class="grid grid-cols-4 gap-4 mb-4 align-middle">
                    <div class="col-span-3">
                      <h4 class="text-xl">
                        <span class="fas fa-plus-circle mr-1"></span>Add item category
                      </h4>
                      <form action="#">
                        <label for="description" class="d-block text-sm mb-2 my-4">Description</label>
                        <input type="text" placeholder="Description" class="
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
                                    w-1/2
                                    " name="description"  required />
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                          <i class="fas fa-save mr-1"></i> Save </button>
                      </form>
                    </div>

                  </div>
                </form>
              </div>
              <div class="col-span-1">
                <input type="text" placeholder="Search" class="
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
                                " />
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-auto table-bordered">
                <thead>
                  <tr>
                    <th class="text-xs w-8">Select</th>
                    <th class="text-xs w-8">Edit</th>
                    <th class="text-xs">Description</th>
                  </tr>
                </thead>
                <tbody>
                  <form action="{{ route('item_categories.delete')}}" method="POST" id="index"> 
                    @csrf 
                    @foreach ($item_categories as $item_description) 
                    <tr id="{{$item_description->id}}">
                        <td class="id" hidden name="ids[{{$item_description->id}}]"> {{$item_description->id}}</td>
                        <td class="text-xs align-middle"><input type="checkbox" name="ids[{{$item_description->id}}]" class="sub_chk" value="{{$item_description->id}}"></td>
                        <td class="text-xs align-middle">
                            <a onclick="modalHandler(true)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded edit" data-id="{{$item_description->id}}" name="ids[{{$item_description->id}}]">
                                <i class="fas fa-pen"></i>
                            </a></td>
                         <td class="text-xl align-middle description">{{ $item_description -> description }}</td>
                    </tr> 
                    @endforeach 
                    <div class="col-span-3 mb-4">
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit"><i class="fas fa-trash mr-1"></i> Delete Selected </button>
                    </div>
                  </form>
                </tbody>
            </table>
          </div>
        </div>
        <!-- End of Card Section -->
      </div>
    </div> @include('layout/footer') </div>
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="modal" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog" style="display: block;">
    <div class="modal-dialog modal-dialog-centered relative w-full pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
        <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
            <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel"> Edit this item category </h5>
        </div>
        <!-- UPDATE FORM -->
        <form action="{{ route('item_categories.update')}}" method="POST">
            {{csrf_field()}}
            <!-- MODAL BODY -->
            <div class="modal-body relative px-4 py-0">
            <input type="text" hidden class="col-sm-9 form-control id" id="idTest" name="id">
            <label for="description" class="d-block text-sm mb-2 mt-0">Description</label>
            <input type="text" placeholder="Description" id="description" class="px-2
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
                                        w-full" name="description" />
            </div>
            <!-- END OF MODAL BODY -->
            <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
            <div class="flex items-center justify-start w-full">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                <i class="fas fa-save mr-1"></i> Save </button>
                <button class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm" onclick="modalHandler()" aria-label="close modal">Cancel</button>
            </div>
            </div>
        </form>
        <!-- END OF UPDATE FORM -->
        <!-- CLOSE BUTTON -->
        <button class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" onclick="modalHandler()" aria-label="close modal" role="button">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" />
            <line x1="18" y1="6" x2="6" y2="18" />
            <line x1="6" y1="6" x2="18" y2="18" />
            </svg>
        </button>
        </div>
    </div>
      <script>
        let modal = document.getElementById("modal");

        function modalHandler(val) {
          modal.classList.remove("hidden");
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
      <!--end modal content-->
  </body>
  <script src="{{ asset('js/app.js') }}"></script>
  <script>
    $(document).on('click', '.edit', function() {
      var currentValue = $(this).parents('tr');
      console.log(currentValue);
      $('#idTest').val(currentValue.find('.id').text());
      $('#description').val(currentValue.find('.description').text());
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"> </script>
  <script src="https://cdnjs.cloudflare.com/ajax/1ibs/toastr.js/latest/toastr.min.js"> </script>
</html>