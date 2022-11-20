<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
 <body>
    <div id="app">
        @include('layout/header',array('user'=>'/admin'))
        @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/admin','/admin/manage-units'),
            'text'=> array('Admin','Manage Units')
        )))
        
        <div class="w-full flex">
            <div class="mx-auto w-7/12 bg-white p-7 rounded shadow-md">
                <div class="mb-5">
                    <a href="/admin/manage-item-purpose" class="bg-gray-600 rounded px-3 py-2 text-white font-bold no-underline hover:bg-gray-500 transition-all"><i class="fas fa-step-backward"></i> Back</a>
                </div>
                <h1 class="text-lg font-bold mb-5">Edit Item Purpose</h1>
                @if (isset($error_message))
                    <div class="text-red-500">{{ $error_message }}</div>
                @endif
                @if ($errors->any())
                    <div class="text-red italic">
                        @foreach ($errors->all() as $error)
                            <div class="text-red-500">* Please put item purpose to add.</div>
                        @endforeach
                    </div>
                @endif
                @if (isset($itempurpose))
                    {{ Form::open(array('url' => 'admin/manage-item-purpose/' . $itempurpose->id, 'method' => 'put')) }}
                        <input
                            type="text"
                            placeholder="Item Purpose"
                            name="purpose"
                            id="purpose"
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
                                mb-5
                            "
                            value="{{ $itempurpose->purpose }}"
                            required
                        />
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            <i class="fas fa-save mr-1"></i> Save
                        </button>
                    {{ Form::close() }}
                @endif
            </div>
        </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>