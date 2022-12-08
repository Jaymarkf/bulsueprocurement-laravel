<!DOCTYPE html>
<html lang="en">

    @include('layout/head-script') 
    <body>
  <div id="main">
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

                <form action="{{route('item_categories.store')}}" method="POST"> 
                  @csrf <div class="grid grid-cols-4 gap-4 mb-4 align-middle">
                    <div class="col-span-3">
                      <h4 class="text-xl">
                        <span class="fas fa-plus-circle mr-1"></span>Add item category
                      </h4>

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

                    </div>

                  </div>
                </form>
              </div>

            </div>
            <div class="table-responsive">
            <form action="{{ route('item_categories.delete')}}" method="POST" id="index"> 
            @csrf 
              <table class="table table-auto table-bordered" id="manage-category">
                <thead>
                  <tr>
                    <th hidden></th>
                    <th class="text-xs w-8">Select</th>
                    <th class="text-xs w-8">Edit</th>
                    <th class="text-xs">Description</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($item_categories as $item_description) 
                    <tr id="{{$item_description->id}}">
                        <td class="id" hidden name="ids[{{$item_description->id}}]"> {{$item_description->id}}</td>
                        <td class="text-xs align-middle text-center"><input type="checkbox" name="ids[{{$item_description->id}}]" class="sub_chk text-center" value="{{$item_description->id}}"></td>
                        <td class="text-xs align-middle">
                            <a  onclick="modalHandler(true)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded edit" data-id="{{$item_description->id}}" name="ids[{{$item_description->id}}]">
                                <i class="fas fa-pen"></i>
                            </a></td>
                         <td class="text-xl align-middle description">{{ $item_description -> description }}</td>
                    </tr> 
                    @endforeach 
                    <div class="col-span-3 mb-4">
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="button" id="upDelete" disabled="disabled"><i class="fas fa-trash mr-1"></i> Delete Selected </button>
                    </div>

                  
                </tbody>
            </table>

            {{--MODAL POPUP--}}
                    <div id="delete--modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 md:inset-0 h-modal md:h-full">
                      <div class="relative w-full max-w-md h-full md:h-auto absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                              <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal" id="close-upDelete">
                                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                  <span class="sr-only">Close modal</span>
                              </button>
                              <div class="p-6 text-center">
                                  <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                  <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this category?</h3>
                                  <button data-modal-toggle="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                      Yes, I'm sure
                                  </button>
                                  <button data-modal-toggle="popup-modal" id="close-upDelete" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                              </div>
                          </div>
                      </div>
                  </div>
            {{--End of MODAL POPUP--}}
          </form>
          </div>
        </div>
        <!-- End of Card Section -->
      </div>


    </div> @include('layout/footer') </div>
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto ItemCateg__editModal" id="modal" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog" style="display: block;">
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
    </div>
  </div>
  <!-- End of Main Section -->
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

      <script src="{{ asset('js/app.js') }}"></script>

      <script>
        $(document).on('click', '.edit', function() {
          var currentValue = $(this).parents('tr');
          console.log(currentValue);
          $('#idTest').val(currentValue.find('.id').text());
          $('#description').val(currentValue.find('.description').text());
        });

        $(document).on('click', '#upDelete', function() {
            $("#delete--modal").removeClass("hidden");
        });

        $(document).on('click', '#close-upDelete', function() {
            $("#delete--modal").addClass("hidden");
        });
        
      </script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"> </script>

      <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> -->

      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      @if(session('success_deleted'))
        <script>
          Swal.fire(
            'Deleted!',
            'Item category has been deleted.',
            'success'
          );
        </script>
        @endif

        @if(session('success_add'))
        <script>
          Swal.fire(
            'Added!',
            'Item category has been created.',
            'success'
          );

        </script>
        @endif

        @if(session('success_update'))
        <script>
          Swal.fire(
            'Updated!',
            'Item category has been updated.',
            'success'
          );

        </script>
        @endif
        
        <script async>
            $(document).ready( function () {
                $("#manage-category input.sub_chk").click(function(){
                    $('#upDelete').prop('disabled',$('#manage-category input[type="checkbox"]:checked').length == 0);
                });
            });
                      
        </script>
          
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" defer> </script>

        <script>
                $(document).ready( function () {
                    $('#manage-category').DataTable();
                });
            
        </script>
  </body>

  
</html>