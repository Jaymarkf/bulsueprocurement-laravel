<div class="d-flex align-items-center justify-between p-4">
    <h2 class="text-xl font-bold text-gray-500">
        @foreach ($breadcrumbs['link'] as $key => $val)
            <a href="{{$val}}" class="text-blue-400 font-bold text-sm">{{$breadcrumbs['text'][$key]}} / </a>
        @endforeach
    </h2>
<<<<<<< HEAD
=======

>>>>>>> 8cfd68b6163762ef70daf4dc399567e3e392f1a2
    <a href="/set-ppmp-year" class="text-sm sm:text-xl md:text-2xl font-bold bg-yellow-600 text-white py-1 px-3 rounded-xl  hover:bg-yellow-800 hover:no-underline"><i class="fas fa-calendar-alt mr-1"></i>Year: 2021</a>
</div>
<div class="d-block px-4 mb-5">
    <span class="text-md font-bold text-purple-600"><i class="fas fa-calendar-alt mr-2"></i><span id="currentdate" class="current-date font-bopld text-purple-700"></span></span>
</div>      
