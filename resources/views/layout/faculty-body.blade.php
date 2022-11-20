<!-- Set Year and Cart Section -->

<div class="mt-2 w-97 mx-auto">
	<div class="w-90">
      Set the procurement year first before making a transactions...	
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
          <a href="#" class="btn btn-default bg-gray-100 border border-gray-400 pull-right text-dark rounded-none py-1"><i class="fa fa-shopping-cart" aria-hidden="true"></i> PPMP Cart<br><span class="badge badge-info  px-2 rounded-full text-sm text-light py-0">0</span></a>
      </div>
   </div>    
</div>
<!-- End of Section -->

<div class="container d-md-flex align-items-stretch w-90 mw-100 pt-5" >
   <!-- Page Content  -->
   <nav id="sidebar w-25">
      <h2 class="p-1 text-center h1"><i class="fas fa-tags"></i> Price Catalogue </h2>
      <div class="p-3 w-90 border border-secondary ul-items">
         <h5 class="text-uppercase"><i class="fas fa-tags mr-2"></i>All Items</h5>
         <ul class="list-unstyled components mb-5 ">
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
                        <label class="custom-control-label text-white d-block cursor-pointer label-categ" for="{{$category->id}}"><i class="fas fa-tags mr-2"></i>{{ucfirst($category->description)}}</label>
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
   <div id="content" class="w-75 border border-secondary h-100 pb-4">
      <!-- COUNT ITEM -->
      <div class="d-flex mx-auto justify-content-between align-items-center text-light all-number-item">
         <div class="w-50">
           <h5 class="text-uppercase"><i class="fas fa-tags mr-2"></i>All Items</h5>
         </div>
         <div class="w-50 text-right">
            <p>Number of Items Found: <span class="badge badge-info" id="item_count">
               @if(!empty($item_details))
                  {{$item_details->count()}}
               @else
                  0
               @endif

            </span> </p>
         </div>
      </div>
      <!-- SEARCH FORM -->
      <div class="col-md-4 mt-4 ml-4">
         <form action="{{route('search-item')}}" method="get">
            <div class="form-group d-flex">
               <input type="search" name="search" class="form-control">
               <span class="form-group-btn ml-3">
                  <button type="submit" class="btn btn-primary"> Search </button>
               </span>
            </div>
         </form>
      </div>

      <div class="grid grid-cols-3 gap-4 grid-content px-4 pt-4" id="all_Items">

      </div>
      <!-- Grid 3 columns -->
      <div class="grid grid-cols-3 gap-4 grid-content px-4 pt-4" id="All_Data">
         @if(isset($posts))
            @foreach ($posts as $post)
               <div>
                  <ul>
                        <h5 class="h4 text-blue-500 m-0">{{$post->category_name}}</h5>
                        <h2 class="h4 text-yellow-500 my-3">{{$post->price_catalogue}} / {{$post->unit_name}}</h2>
                        <p>INK/TONER FOR PRINTERS</p>
                        <a href="/faculty/order-details-item" class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Item Details </a>
                  </ul>
               </div>

            @endforeach
         @else
            @if(!empty($item_categories))
               @foreach ($item_details as $item_detail)
                  <div>
                     <ul>
                           <h5 class="h4 text-blue-500 m-0 text-white">{{$item_detail->category_name}}</h5>
                           <h2 class="h4 text-yellow-500 my-3 white">{{$item_detail->price_catalogue}} / {{$item_detail->unit_name}}</h2>
                           <p>{{$item_detail->category->description}}</p>
                           <a href="/faculty/order-details-item" class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Item Details </a>
                     </ul>
                  </div>
               @endforeach
            @else 
               <div> NO Record Data Found</div>
            @endif
         @endif
      </div>
      <!-- End of 3 Grid Columns -->
   </div>
</div>

