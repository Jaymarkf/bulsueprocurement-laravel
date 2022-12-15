<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
<body>
    @include('layout/faculty-header',array('faculty'=>'faculty'))
    @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/faculty','/faculty/item-detail/add'),
            'text'=> array('faculty','Add Item Detail')
        )))

    <div class="w-11/12 m-auto flex flex-col">
        <div class="mb-3">
            <a href="/faculty" class="bg-gray-600 rounded px-3 py-2 text-white font-bold no-underline hover:bg-gray-500 transition-all"><em class="fas fa-step-backward"></em> Back</a>
        </div>
        <div class="mb-3">
            @if ($errors->any())
                <ul>
                @foreach($errors->all() as $error)
                    <li class="text-red-500">{{ $error }}</li>
                @endforeach
                </ul>
            @endif
        </div>
        <div class="flex m-auto">
            {{ Form::open(array('url' => 'faculty/item-detail/add', 'method' => 'POST')) }}
                @csrf
                <select
                    name="category_id"
                    id="category_id"
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
                        w-full
                        mb-3
                    "
                    required
                >
                <option value="0">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{ $category->description }}</option>
                @endforeach
                </select>
                <input
                    type="text"
                    placeholder="Item Name"
                    name="description"
                    id="description"
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
                        w-full
                        mb-3
                    "
                    required
                />
                <input
                    type="text"
                    placeholder="Article"
                    name="article"
                    id="article"
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
                        w-full
                        mb-3
                    "
                    required
                />
                <input
                    type="text"
                    placeholder="Price Catalogue"
                    name="price_catalogue"
                    id="price_catalogue"
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
                        w-full
                        mb-3
                    "
                    required
                />
                <select
                    name="unit_id"
                    id="unit_id"
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
                        w-full
                        mb-3
                    "
                    required
                >
                <option value="0">Select Unit</option>
                @foreach ($units as $unit)
                    <option value="{{$unit->id}}">{{ $unit->uom }}</option>
                @endforeach
                </select>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-right transition-all">
                    <i class="fas fa-save mr-1"></i> Save
                </button>
            {{ Form::close() }}
        </div>
    </div>
    @include('layout/footer')
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
