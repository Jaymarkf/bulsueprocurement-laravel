<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
<body>
    @include('layout/header',array('user'=>'admin'))
    @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/admin','/admin/manage-user'),
            'text'=> array('admin','manage-user')
        )))

    @include('layout/admin-user-body')
    @include('layout/footer')

    <!-- MODAL UPDATE FORM -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="modal" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog" style="display: block;">
    <div class="modal-dialog modal-dialog-centered relative w-full pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
        <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
            <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">Edit account</h5>
        </div>
        <!-- UPDATE FORM -->
        <form action="{{ route('userlists.update')}}" method="POST">
            {{csrf_field()}}
            <!-- MODAL BODY -->
            <div class="modal-body relative px-4 py-0">
              <input type="text" hidden class="col-sm-9 form-control id" id="idTest" name="id">

              <label for="username" class="d-block text-sm mb-2 mt-0">Username</label>
              <input type="text" placeholder="Username" id="username" class="px-2
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
                                          w-full" name="username" />
              <label for="first_name" class="d-block text-sm mb-2 mt-0">First name</label>
              <input type="text" placeholder="First name" id="first_name" class="px-2
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
                                          w-full" name="first_name" />
              <label for="last_name" class="d-block text-sm mb-2 mt-0">Last name</label>
              <input type="text" placeholder="Last name" id="last_name" class="px-2
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
                                          w-full" name="last_name" />      
              <label for="position" class="d-block text-sm mb-2 mt-0">Position</label>
              <input type="text" placeholder="Position" id="position" class="px-2
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
                                          w-full" name="position" /> 
              <label for="password" class="d-block text-sm mb-2 mt-0">Position</label>
              <input type="text" placeholder="Password" id="password" class="px-2
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
                                          w-full" name="password" />                                               
            </div>
            <!-- END OF MODAL BODY -->
            <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
            <div class="flex items-center justify-start w-full">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                <i class="fas fa-save mr-1"></i> Save </button>
                <span class="cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm" onclick="modalHandler()" aria-label="close modal">Cancel</span>
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

</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" defer> </script>

<script>
        $(document).ready( function () {
            $('#manage-user').DataTable();
        });
</script>
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

    <script>
        $(document).on('click', '.edit', function() {
        var currentValue = $(this).parents('tr');
        console.log(currentValue);
        $('.modal-body #idTest').val(currentValue.find('.id').text());
        $('.modal-body #username').val(currentValue.find('.username').text());
        $('.modal-body #first_name').val(currentValue.find('.firstname').text());
        $('.modal-body #last_name').val(currentValue.find('.lastname').text());
        });

        $(document).ready(function(){
          $('#Position').change(function(){
            if($(this).val() == 'end-user'){
              $('#selectBranch').removeAttr('disabled');
            }else{
              $('#selectBranch').attr('disabled','disabled');
              $('#selectBranch').val('none').change();
            }
          });
        });
  </script>
</html>