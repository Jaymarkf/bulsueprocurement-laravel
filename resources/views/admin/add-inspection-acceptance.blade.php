<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
 <body>
    <div id="app">
        @include('layout/header',array('user'=>'/admin'))
        @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/admin','/admin/add-inspection-acceptance'),
            'text'=> array('admin','Add Inspection and Acceptance Report')
        )))

        <div class="container-fluid admin-table-container">
        <p class="text-xl font-bold mb-4">
            Inspection and Acceptance Report
        </p>
        <div class="container-fluid row d-flex items-center mb-3">
            <a class="btn bg-gray-600 text-white mr-4 hover:bg-gray-400" href="/admin/inspection-acceptance" ><i class="far fa-caret-square-left mr-3"></i>Back</a>
        </div>
            <div class="card">
                <div class="card-header bg-default d-flex items-center">
                    <span class="text-base text-white mr-auto"><i class="fas fa-file-alt mr-1"></i>Add New Inspection and Acceptance Report</span>
                </div>
                <div class="card-body">

                    <div>
                        <form class="grid grid-cols-3 gap-4 align-middle">
                            <div class="col-span-1">
                                <span class="text-xs">
                                    I.A.R. No.:
                                </span>
                                <input
                                    type="text"
                                    placeholder="Enter inspection and acceptance report number here."
                                    class="
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
                                    "
                                />
                            </div>
                            <div class="col-span-1"></div>
                            <div class="col-span-1">
                                <span class="text-xs">
                                    I.A.R. Date
                                </span>
                                <input
                                    type="date"
                                    placeholder="Search"
                                    class="
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
                                    "
                                />
                            </div>
    
                            <div class="cols-span-1">
                                <span class="text-xs">P.O.:</span>
                                <select 
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
                                    w-full">
                                    <option>Select P.O. No.</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                </select>
                            </div>
                            <div class="cols-span-1">
                                <span class="text-xs">Requesitioning Office/Dept.:</span>
                                <select 
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
                                    w-full">
                                    <option>Select Office/Dept.</option>
                                    <option value="2">Meneses Campus</option>
                                    <option value="3">Bustos Campus</option>
                                    <option value="4">Sarmiento Campus</option>
                                    <option value="5">Main Office</option>
                                    <option value="8">College of Architecture and Fine Arts</option>
                                    <option value="9">College of Arts and Letters</option>
                                    <option value="10">College of Business Administration</option>
                                    <option value="11">College of Criminal Justice Education</option>
                                    <option value="12">College of Education</option>
                                    <option value="13">College of Engineering</option>
                                    <option value="14">College of Home Economics</option>
                                    <option value="15">College of Industrial Technology</option>
                                    <option value="16">College of Information and Communications Technology</option>
                                    <option value="17">College of Law</option>
                                    <option value="18">College of Nursing</option>
                                    <option value="19">College of Physical Education, Recreation and Sports</option>
                                    <option value="20">College of Science</option>
                                    <option value="21">College of Social Science and Philosophy</option>
                                    <option value="22">Graduate School</option>
                                </select>
                            </div>
                            <div class="col-span-1">
                                <span class="text-xs">
                                    Responsibility Center Code:
                                </span>
                                <input
                                    type="text"
                                    placeholder="Enter responsibility center code here."
                                    class="
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
                                    "
                                />
                            </div>

                            <div class="col-span-3">
                                <button class="btn bg-blue-600 text-white mr-4 hover:bg-blue-400"><i class="fas fa-save mr-1"></i> Save</button>
                                <a href="/admin/inspection-acceptance" class="btn bg-red-600 text-white mr-4 hover:bg-red-400 hover:no-underline"><i class="fas fa-ban mr-1"></i> Cancel</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        @include('layout/footer')    
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>