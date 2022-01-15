<div class="d-flex align-items-center justify-between p-4 pb-0">
    <h2 class="text-xl font-bold text-gray-500">
        @foreach ($breadcrumbs['link'] as $key => $val)
            <a href="{{$val}}" class="text-blue-400 font-bold text-sm">{{$breadcrumbs['text'][$key]}} / </a>
        @endforeach
    </h2>
</div>