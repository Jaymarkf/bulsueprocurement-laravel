<!-- Set Year and Cart Section -->
<!-- End of Section -->

<div class="container d-md-flex align-items-stretch w-90 mw-100" >
   <!-- Page Content  -->
   <nav id="sidebar w-25">
      <h2 class="p-1 text-center h1"><i class="fas fa-tags"></i> Price Catalogue </h2>
      <div class="border border-secondary ul-items rounded mx-auto w-10/12">
         <h5 class="text-uppercase py-3 px-5" id="allItem_label"><i class="fas fa-tags mr-2"></i>All Items</h5>
         <ul class="list-unstyled components">
            <?php $counter=0; ?>
            @if(!empty($item_categories))
               @foreach ($item_categories as $category)
                  <div class="custom-control custom-checkbox pl-0">
                     <input type="checkbox" attr-name="{{$category->description}}"  class="custom-control-input category_checkbox" id="{{$category->id}}">
                     <label class="custom-control-label text-white d-block cursor-pointer label-categ border-b py-3 px-5" for="{{$category->id}}"><i class="fas fa-tags mr-2"></i>{{ucfirst($category->description)}}</label>
                  </div>
                  <?php $counter++; ?>
               @endforeach
            @else
               <div class="text-white">No record Found</div>
            @endif

         </ul>

   </nav>
   <div id="content" class="w-75 border border-secondary h-100 shadow-lg sticky top-0">
      <!--  -->
      <div class="d-flex mx-auto justify-content-between align-items-center text-light all-number-item">
         <div class="w-50">
            <h5><em class="fas fa-tags mr-2"></em>Order Items Details</h5>
         </div>
      </div>
      <!-- Grid 3 columns -->
      <div class="mw-100 mx-auto row mt-3">
         <div class="col-md-6 col-sm-6 col-xs-12 ">
               <h1 class="h1">Order Items Details</h1>
               <form action="/action_page.php ">
                  <div class="form-group">
                     <div class="mb-3">
                        <label for="usr">Year:</label>
                        <input type="text" class="form-control" id="usr" name="username" value="2022" disabled>
                     </div>
                     <div class="mb-3">
                        <label for="usr">Description:</label>
                        <input type="text" class="form-control" id="usr" name="username" value="{{ $item_details[0]->description }}" readonly>
                     </div>
                     <div class="mb-3">
                        <label for="usr">Price:</label>
                        <input type="text" class="form-control" id="usr" name="username" value="{{ $item_details[0]->price_catalogue }}" readonly>
                     </div>
                     <div class="mb-3">
                        <label for="usr">Unit of Measurement:</label>
                        <input type="text" class="form-control" id="uom" name="uom" value="{{ $item_details[0]->unit->uom }}" readonly>
                     </div>
                     <div class="mb-3">
                        <label for="usr">Category:</label>
                        <input type="text" class="form-control" id="category" name="category" value="{{ $item_details[0]->category->description }}" readonly>
                     </div>
                     <button type="submit" class="btn btn-success">Add to PPMPT Cart List +</button>
                     <button type="submit" class="btn btn-danger">Cancel</button>

                  </div>
               </form>
         </div>
         <div class="col-md-6 col-sm-6 col-xs-12 row-content">
            <form class="pt-5">
               <div class="form-row">
                  <div class="col-md-4 mb-3">
                     <label for="validationDefault01">Source of Fund:</label>
                     <select class="form-control">
                        <option>GAA</option>
                        <option>Income</option>
                        <option>Fiduciary fund</option>
                     </select>
                  </div>
                  <div class="col-md-8 mb-3">
                     <label for="validationDefault02">Purpose</label>
                     <select class="form-control">
                        <option value="0">Select purpose</option>
                        @if (isset($itemPurposes))
                           @foreach ($itemPurposes as $itemPurpose)
                           <option value="{{ $itemPurpose->id }}">{{ $itemPurpose->purpose }}</option>
                           @endforeach
                        @endif
                     </select>
                  </div>
               </div>
               <label>Schedule/Milestone of Activities:</label>
               <div class="form-row">
                  @foreach ($ppmpFormat as $format)
                     <div class="col-md-4 mb-3 form-inline">
                        <label for="ci{{ $format["id"] }}Qty">{{ $format["name"] }}:
                           <input class="span1 w-100 ml-2" name="ci{{ $format["id"] }}Qty" placeholder="0" type="number" min="0" value="0">
                        </label>
                     </div>
                  @endforeach
                  {{-- <div class="col-md-4 mb-3 form-inline">
                     <label for="">Jan:
                        <input class="span1 w-100 ml-2" name="ciJanQty" placeholder="0" type="number" min="0" value="0">
                     </label>
                  </div>
                  <div class="col-md-4 mb-3 form-inline">
                     <label for="">May:                        
                        <input class="span1 w-100 ml-2" name="ciJanQty" placeholder="0" type="number" min="0" value="0">
                     </label>
                  </div>
                  <div class="col-md-4 mb-3 form-inline">
                        <label for="">Sept:                        
                           <input class="span1 w-100 ml-2" name="ciJanQty" placeholder="0" type="number" min="0" value="0">
                        </label>
                  </div>
                  <div class="col-md-4 mb-3 form-inline">
                     <label for="">Feb:
                        <input class="span1 w-100 ml-2" name="ciJanQty" placeholder="0" type="number" min="0" value="0">
                     </label>
   
                  </div>
                  <div class="col-md-4 mb-3 form-inline">
                     <label for="">Jun:                        
                        <input class="span1 w-100 ml-2" name="ciJanQty" placeholder="0" type="number" min="0" value="0">
                     </label>
                  </div>
                  <div class="col-md-4 mb-3 form-inline">
                        <label for="">Oct:                       
                           <input class="span1 w-100 ml-2" name="ciJanQty" placeholder="0" type="number" min="0" value="0">
                        </label>
                  </div>
                  <div class="col-md-4 mb-3 form-inline">
                     <label for="">Mar:
                        <input class="span1 w-100 ml-2" name="ciJanQty" placeholder="0" type="number" min="0" value="0">
                     </label>
   
                  </div>
                  <div class="col-md-4 mb-3 form-inline">
                     <label for="">July:                        
                        <input class="span1 w-100 ml-2" name="ciJanQty" placeholder="0" type="number" min="0" value="0">
                     </label>
                  </div>
                  <div class="col-md-4 mb-3 form-inline">
                        <label for="">Nov:                       
                           <input class="span1 w-100 ml-2" name="ciJanQty" placeholder="0" type="number" min="0" value="0">
                        </label>
                  </div>
                  <div class="col-md-4 mb-3 form-inline">
                     <label for="">Apr:
                        <input class="span1 w-100 ml-2" name="ciJanQty" placeholder="0" type="number" min="0" value="0">
                     </label>
   
                  </div>
                  <div class="col-md-4 mb-3 form-inline">
                     <label for="">Aug:                        
                        <input class="span1 w-100 ml-2" name="ciJanQty" placeholder="0" type="number" min="0" value="0">
                     </label>
                  </div>
                  <div class="col-md-4 mb-3 form-inline">
                        <label for="">Dec:                       
                           <input class="span1 w-100 ml-2" name="ciJanQty" placeholder="0" type="number" min="0" value="0">
                        </label>
                  </div> --}}
               </div>
               <fieldset>
                  <div class="form-group">
                     <label for="disabledTextInput">Estimated Budget:</label>
                     <input type="text" id="disabledTextInput" class="form-control" placeholder="0">
                  </div>
               </fieldset>
               <div class="form-group d-none">
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                     <label class="form-check-label" for="invalidCheck2">
                     Agree to terms and conditions
                     </label>
                  </div>
               </div>
               <button class="btn btn-primary d-none" type="submit">Submit form</button>
               <div class="form-row">
                  <div class="col-md-3 mb-3">
                     <label for="validationDefault02">Priority</label>
                     <select class="form-control">
                           <option selected >No</option>
                           <option>Yes</option>
                     </select>
                  </div>
                  <div class="col-md-9 mb-3">
                        <label for="disabledTextInput">Remarks</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                  </div>
               </div>
               </form>
         </div>
    </div>
   </div>
</div>

