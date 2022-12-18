<!-- Set Year and Cart Section -->

<div class="mt-2 w-97 mx-auto">
	<div class="w-90">
      <span class="font-italic">Please double check the PPMP year!</span>
   </div>
   <div class="d-flex w-100 mx-auto justify-content-between align-items-center p-3">
      <div class="w-50">
            <a href="/set-ppmp-year" class="pull-left" data-placement="right" title="" id="yearbtn" data-original-title="Click to Change the year">
               <div class="pull-left">
                  <h1 class="h1 m-0" style="color:#ffa500;background-color:rgba(295,235,215,0.8);padding:3px 20px;border-radius:50px;"> Year: 2021</h1>
               </div>
            </a>

      </div>
      <div class="w-50">
         <a href="#" class="btn btn-default bg-gray-100 border border-gray-300 pull-right text-dark rounded-none py-1 shadow-lg md:shadow-lg"><i class="fa fa-shopping-cart" aria-hidden="true"></i> PPMP Cart<br><span class="badge badge-info  px-2 rounded-full text-sm text-light py-0 bg-blue-500 shadow-lg shadow-blue-500/50">0</span></a>
      </div>
   </div>
</div>
<!-- End of Section -->
<div class="container d-md-flex align-items-stretch w-90 mw-100 pt-5">
   <!-- Page Content  -->
   <nav id="sidebar" class="w-3/12 sticky top-0" >
      <h2 class="p-1 text-center h2"><em class="fas fa-tags"></em> Price Catalogue </h2>
      <div class="border border-secondary ul-items rounded mx-auto w-10/12">
         <h5 class="text-uppercase py-3 px-5" id="allItem_label"><i class="fas fa-tags mr-2"></i>All Items</h5>
         <ul class="list-unstyled components">
      {{--
         
            @foreach($item_categories as $item_category)
               <li class="custom-control custom-checkbox">
                  <input type="checkbox"attr-name="{{$item_category->description}}"  id="checkBox-Id" value="{{$item_category->description}}" style="opacity: 0"/>
                  <label><i class="fas fa-tags"></i> {{$item_category->description}}</label>

               </li>
            @endforeach

            --}}

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
                                
            <!-- SubMenu Child -->
            <!-- <li>
               <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Clothes</a>
               <ul class="collapse list-unstyled" id="pageSubmenu4">
                  <li><a href="#">Jeans</a></li>
               </ul>
            </li> -->
         </ul>

   </nav>
   <div id="content" class="w-9/12 h-100 pb-4 ml-auto border border-neutral-800 shadow-lg md:shadow-lg ">
      <!-- COUNT ITEM -->
      <div class="d-flex mx-auto justify-content-between align-items-center text-light all-number-item">
         <div class="w-50">
            <h5 class="text-uppercase"><em class="fas fa-tags mr-2"></em> All Items <a href="{{ route('faculty-add-item.show') }}" class="inline bg-white p-1 rounded text-red-600 hover:no-underline font-bold border border-white hover:border-white hover:bg-transparent hover:text-white transition-all ease-in-out">Add new item</a></h5>
         </div>
         <div class="w-50 text-right">
            <p>Number of Items Found:
               <span class="badge badge-info" id="item_count">
                  @if(!empty($item_details))
                     {{$item_details->count()}}
                  @else
                     {{$item_details->count()}}
                  @endif
               </span>
            </p>
         </div>
      </div>
      <!-- SEARCH FORM -->
      <div class="col-md-4 mt-5 ml-4">
         <form action="{{route('search-item')}}" method="post">
            @csrf
            <div class="form-group d-flex">
               <input type="search" name="search" class="form-control"  placeholder="Item Name" id="input__search">
               <span class="form-group-btn">
                  <button type="submit" class="btn btn-primary"> <span class="fa fa-search"></span></button>
               </span>
            </div>
         </form>
      </div>

      <div class="grid grid-cols-3 gap-4 grid-content px-4 pt-3" id="all_Items">
         
      </div>
      <!-- Grid 3 columns -->
      
      <div class="grid grid-cols-3 gap-4 grid-content px-4 pt-3" id="All_Data">
         
         @if(isset($posts))
            @foreach ($posts as $post)
               <div>
                  <ul>
                        <h5 class="h4 text-blue-500 m-0">{{$post->description}}</h5>
                        <h2 class="h4 text-yellow-500 my-3">{{$post->price_catalogue}} / {{$post->unit_name}}</h2>
                        
                        {{-- {{$query = $posts->where('category_id',$post->category_id)}}  
                        <p>{{$query}}</p> --}}
                        
                        <p class="hidden" hidden> {{$query = $item_categories->where('id', $post->category_id)}} </p>
                        <p >{{$query->first()->description}}</p>
                     
                        {{-- <p>INK/TONER FOR PRINTERS</p> --}}
                        <a href="#" class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Item Details </a>
                  </ul>
               </div>

            @endforeach
         @else
            @if(!empty($item_categories))
 
               @foreach ($item_details as $item_detail)
                  <div>
                     <form action="{{ route('show-item')}}" method="post">
                        @csrf
                        <ul>
                              <input type="text" name="id" hidden value="{{$item_detail->id}}">
                              <h5 class="h4 text-blue-500 m-0 text-white">{{$item_detail->description}}</h5>
                              <h2 class="h4 text-yellow-500 my-3 white">{{$item_detail->price_catalogue}} / {{$item_detail->unit_name}}</h2>
                              <p>{{$item_detail->category->description}}</p>
                              
                              <button type="submit" class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Item Details </button>
                        </ul>
                     </form>
                  </div>
               @endforeach

            @else 
               <div> NO Record Data Found</div>
            @endif
         @endif
      </div>
     {{-- End of 3 Grid Columns  --}}
   </div>
   {{-- END OF ALL ITEMS TABLE --}}

   {{-- ORDER ITEM DETAILS TABLE --}}
         <div id="content" class="w-75 border border-secondary h-100 shadow-lg sticky top-0 orderDetailsTable d-none">
            <!--  -->
            <div class="d-flex mx-auto justify-content-between align-items-center text-light all-number-item">
               <div class="w-50">
                 <h5><i class="fas fa-tags mr-2"></i>Order Items Details</h5>
               </div>
            </div>
            {{-- Grid 3 columns  --}}
            <div class="mw-100 mx-auto row mt-3">
                  <div class="col-md-6 col-sm-6 col-xs-12 ">
                      <h1 class="h1">Order Items Details</h1>
                      <form action="/action_page.php ">
                          <div class="form-group ">
                              <label for="usr">Year:</label>
                              @foreach ($item_details as $item_detail)
                                 <input type="text" class="form-control" id="usr" name="username" value="Year" disabled>
                                 <label for="usr">Description:</label>
                                 <input type="text" class="form-control" id="usr" name="username" value="{{$item_detail->category->description}}" disabled>
                                 <label for="usr">Price:</label>
                                 <input type="text" class="form-control" id="usr" name="username" value="{{$item_detail->category->price_catalogue}}" disabled>
                                 <label for="usr">Unit of Measurement:</label>
                                 <input type="text" class="form-control" id="usr" name="username" value="{{$item_detail->category->unit_name}}" disabled>
                                 <label for="usr">Category:</label>
                                 <p class="hidden" hidden> {{$query = $item_categories->where('id', $item_detail->category_id)}} </p>
                                 <input type="text" class="form-control" id="usr" name="username" value="{{$query->first()->description}}" disabled><br>
                              @endforeach
                              
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
                                   <option selected>Income</option>
                                   <option>Fiduciary fund</option>
                              </select>
                           </div>
                           <div class="col-md-8 mb-3">
                              <label for="validationDefault02">Purpose</label>
                              <select class="form-control">
                                   <option>GAA</option>
                                   <option>Income</option>
                                   <option>Fiduciary fund</option>
                              </select>
                           </div>
                        </div>
                        <label>Schedule/Milestone of Activities:</label>
                        <div class="form-row">
                           <div class="col-md-4 mb-3 form-inline">
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
                           </div>
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
         {{-- END OF ORDER ITEM DETAILS --}}
</div>

